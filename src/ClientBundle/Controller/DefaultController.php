<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Pays;
use AppBundle\Entity\User;

use ClientBundle\Entity\Echange;
use Symfony\Component\HttpFoundation\Request;
use phpseclib\Net\SFTP;

class DefaultController extends Controller
{
    /**
     * @Route("/sftp" , name="sftp")
     */
    public function sftpAction()
    {
        $ftp_host = '192.168.83.128';
        $ftp_username = 'myftpserver';
        $ftp_password = 'Soumayaakil123';
        // open an FTP connection
        ($conn_id = ftp_connect($ftp_host)) or
            die("Couldn't connect to $ftp_host");
        // try to login
        if (@ftp_login($conn_id, $ftp_username, $ftp_password)) {
            echo "Connected as $ftp_username@$ftp_host";
        } else {
            echo "Couldn't connect as $ftp_username";
        }

        $tab = ftp_rawlist($conn_id, '/');
        var_dump($tab);
        echo '<h1>tout les fichier:</h1>';
        echo '<ul>';
        $tab = ftp_rawlist($conn_id, '/');
        for ($i = 0; $i < count($tab); $i++) {
            echo '<li>' . $tab[$i] . '</li>';
        }

        die();

        $sftp = new SFTP('192.168.11.139');
        $sftp_login = $sftp->login('myftpserver', 'Soumayaakil123');

        var_dump($sftp_login);

        die();
        if ($sftp_login) {
            echo 'string';

            die();
        } else {
            throw new \Exception('Cannot login into your server !');
        }
    }

    /**
     * @Route("/profil" , name="espaceclient")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

        $pays = $em->getRepository(Pays::class)->findAll();

        $user = $this->getUser();

        return $this->render('ClientBundle:Default:index.html.twig', array(
            'user' => $user,
            'pays' => $pays
        ));
    }

    /**
     * @Route("/compte" , name="compteclient")
     */
    public function compteAction(Request $request)
    {
        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

        $formFactory = $this->get('fos_user.change_password.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        $form->handleRequest($request);

        return $this->render('ClientBundle:Default:compte.html.twig', array(
            'user' => $user,
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/upload-file" , name="uploadsfiles")
     */
    public function uploadsAction(Request $request)
    {
        $user = $this->getUser();

        if ($request->isMethod('POST')) {
            $pic = $request->files->get('fichier');

            // $file stores the uploaded PDF file
            /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $pic;

            $fileName = md5(uniqid()) . '.' . $pic->guessExtension();

            $ftp_host = '192.168.83.128';
            $ftp_username = 'myftpserver';
            $ftp_password = 'Soumayaakil123';
            // open an FTP connection
            ($conn_id = ftp_connect($ftp_host)) or
                die("Couldn't connect to $ftp_host");
            // try to login
            if (@ftp_login($conn_id, $ftp_username, $ftp_password)) {
                echo "Connected as $ftp_username@$ftp_host";
            } else {
                echo "Couldn't connect as $ftp_username";
            }

            $file_source = $_FILES['fichier']['tmp_name'];
            $file_name = $_FILES['fichier']['name'];
            $fichier_extension = strrchr($file_name, '.');
            $extension_autorises = array('.txt', '.TXT');
            if (in_array($fichier_extension, $extension_autorises)) {
                if (
                    ftp_put($conn_id, '/' . $fileName, $file_source, FTP_ASCII)
                ) {
                    //header("location:lister.php");
                } else {
                    echo "There was an error while uploading $file_source";

                    die();
                }
            } else {
                $this->get('session')
                    ->getFlashBag()
                    ->add(
                        'erreurfiles',
                        'Extension invalide '
                    );
                return $this->redirect($this->generateUrl('uploadsfiles'));
            }

            $em = $this->getDoctrine()->getManager();

            $echange = new Echange();

            $echange->setTitre($request->request->get('title'));

            $echange->setCreatedat(new \DateTime('now'));

            $echange->setDescription($request->request->get('description'));
            $echange->setIdSender($user->getId());

            // Generate a unique name for the file before saving it

            // Move the file to the directory where brochures are stored
            $brochuresDir =
                $this->container->getParameter('kernel.root_dir') .
                '/../web/uploads';
            copy($pic->getPathname(), $brochuresDir . '/' . $fileName);

            $echange->setFile($fileName);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($echange);
            $em->flush();

            $this->get('session')
                ->getFlashBag()
                ->add('addfile', 'File add with succ');
            return $this->redirect($this->generateUrl('myfiles'));
        }

        $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

        $user = $this->getUser();

        return $this->render('ClientBundle:Default:uploads.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * @Route("/my-files" , name="myfiles")
     */
    public function sendAction()
    {
        $em = $this->getDoctrine()->getManager(); //on appelle Doctrine
        $user = $this->getUser();

        $echnages = $em
            ->getRepository(Echange::class)
            ->findBy(array('idSender' => $user->getId()));

        return $this->render('ClientBundle:Default:myfiles.html.twig', array(
            'echnages' => $echnages
        ));
    }

    /**
     * @Route("/" , name="dashbord")
     */
    public function dashbordAction()
    {
        $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

        $user = $this->getUser();

        $iduser = $user->getId();

        $result = $em->getRepository('ClientBundle:Echange');

        setlocale(LC_TIME, 'fr_FR', 'french', 'fre', 'fra');
        $auj = date('Y-m-d');

        $t_auj = strtotime($auj);
        $p_auj = date('N', $t_auj);
        if ($p_auj == 1) {
            $deb = $t_auj;
            $fin = strtotime($auj . ' + 6 day');
        } elseif ($p_auj == 7) {
            $deb = strtotime($auj . ' - 6 day');
            $fin = $t_auj;
        } else {
            $deb = strtotime($auj . ' - ' . (6 - (7 - $p_auj)) . ' day');
            $fin = strtotime($auj . ' + ' . (7 - $p_auj) . ' day');
        }

        $data = '';
        while ($deb <= $fin) {
            $echnages = $result->getstat($iduser, strftime('%Y-%m-%d', $deb));

            $deb += 86400;

            $data .= '' . $echnages['som'] . ',';
        }

        return $this->render('ClientBundle:Default:dashbord.html.twig', array(
            'data' => $data
        ));
    }

    /**
     * @Route("/delete-files" , name="deletefiles")
     */
    public function deletesAction(Request $request)
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine()->getEntityManager();

        $file = $em
            ->getRepository(Echange::class)
            ->find($request->request->get('id'));

        // Update the 'brochure' property to store the PDF file name
        // instead of its contents

        $em->remove($file);
        $em->flush();

        $brochuresDir =
            $this->container->getParameter('kernel.root_dir') .
            '/../web/uploads/' .
            $file->getFile() .
            '';

        unlink($brochuresDir);

        $ftp_host = '192.168.83.128';
        $ftp_username = 'myftpserver';
        $ftp_password = 'Soumayaakil123';
        // open an FTP connection
        ($conn_id = ftp_connect($ftp_host)) or
            die("Couldn't connect to $ftp_host");
        // try to login
        if (@ftp_login($conn_id, $ftp_username, $ftp_password)) {
            echo "Connected as $ftp_username@$ftp_host";
        } else {
            echo "Couldn't connect as $ftp_username";
        }

        ftp_delete($conn_id, $file->getFile());

        // ... persist the $product variable or any other work
        $this->get('session')
            ->getFlashBag()
            ->add('delete', ' Delete with succ');
        return $this->redirect($this->generateUrl('myfiles'));
    }
}
