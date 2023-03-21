<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Pays;
use ClientBundle\Entity\Echange;

use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{




  /**
     * @Route("/" , name="dashbordadmin")
     */
    public function dashbordAction()
    {


 $em = $this->getDoctrine()->getManager(); //on appelle Doctrine


 $user=$this->getUser();


$iduser=$user->getId();

$result = $em->getRepository('ClientBundle:Echange');



setlocale(LC_TIME, 'fr_FR', 'french', 'fre', 'fra');
$auj = date('Y-m-d');

$t_auj = strtotime($auj);
$p_auj = date('N', $t_auj);
if($p_auj == 1){
  $deb = $t_auj;
  $fin = strtotime($auj.' + 6 day');
}
else if($p_auj == 7){
  $deb = strtotime($auj.' - 6 day');
  $fin = $t_auj;
}
else{
  $deb = strtotime($auj.' - '.(6-(7-$p_auj)).' day');
  $fin = strtotime($auj.' + '.(7-$p_auj).' day');
}

$data="";
while($deb <= $fin){


              $echnages = $result->getstatadminfile(strftime('%Y-%m-%d', $deb));



  $deb += 86400;


  $data.=''.$echnages['som'].',';
}














        return $this->render('AdminBundle:Default:dashbord.html.twig',array(


'data'=>$data

        ));
    }



    /**
     * @Route("/clients", name="adminclients")
     */
    public function indexAction()
    {


  $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

      $clients = $em->getRepository(User::class)->findAll();




 $user=$this->getUser();
        return $this->render('AdminBundle:Default:clients.html.twig',array(

'clients'=>$clients

        ));
    }


    /**
     * @Route("/files", name="adminfiles")
     */
    public function filesAction()
    {


  $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

 $em = $this->getDoctrine()->getManager(); //on appelle Doctrine




$result = $em->getRepository('ClientBundle:Echange');

              $echnages = $result->getallfiles();



 $user=$this->getUser();
        return $this->render('AdminBundle:Default:files.html.twig',array(


'echnages'=>$echnages,


        ));
    }



 /**
     * @Route("/delete-files" , name="deletefilesadmin")
     */
    public function deletesAction(Request $request)
    {




 $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine()->getEntityManager();

        $file = $em->getRepository(Echange::class)->find($request->request->get('id'));

        // Update the 'brochure' property to store the PDF file name
        // instead of its contents




        $em->remove($file);
        $em->flush();



           $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/'.$file->getFile().'';



unlink($brochuresDir);

$ftp_host   = '192.168.83.128';
$ftp_username = 'myftpserver';
$ftp_password = 'Soumayaakil123';
 // open an FTP connection
$conn_id = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host");
 // try to login
if(@ftp_login($conn_id, $ftp_username, $ftp_password)){
    echo "Connected as $ftp_username@$ftp_host";
}else{
    echo "Couldn't connect as $ftp_username";
}


ftp_delete($conn_id, $file->getFile());



        // ... persist the $product variable or any other work
        $this->get('session')->getFlashBag()->add('delete', ' Delete with succ');
  return $this->redirect($this->generateUrl('adminfiles'));




}





/**
     * @Route("/delete-user" , name="deleteuseradmin")
     */
    public function deletesuserAction(Request $request)
    {




 $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine()->getEntityManager();

        $userdelete = $em->getRepository(User::class)->find($request->request->get('id'));

        // Update the 'brochure' property to store the PDF file name
        // instead of its contents




        $userdelete = $em->getRepository(User::class)->find($request->request->get('id'));
        $em->remove($userdelete);
        $em->flush();






        // ... persist the $product variable or any other work
        $this->get('session')->getFlashBag()->add('delete', ' Delete with succ');
  return $this->redirect($this->generateUrl('adminclients'));




}




/**
     * @Route("/desactiver-user/{id}" , name="desactiveruser")
     */
    public function desactiversuserAction(Request $request,$id)
    {





        $em = $this->getDoctrine()->getEntityManager();


        // Update the 'brochure' property to store the PDF file name
        // instead of its contents




        $users = $em->getRepository(User::class)->find($id);

                $users->setEnabled(0);

        $em->persist($users);
        $em->flush();






        // ... persist the $product variable or any other work
        $this->get('session')->getFlashBag()->add('delete', ' Enebled user with succ');
  return $this->redirect($this->generateUrl('adminclients'));




}



/**
     * @Route("/activer-user/{id}" , name="activeruser")
     */
    public function activersuserAction(Request $request,$id)
    {





        $em = $this->getDoctrine()->getEntityManager();


        // Update the 'brochure' property to store the PDF file name
        // instead of its contents




        $users = $em->getRepository(User::class)->find($id);

                $users->setEnabled(1);

        $em->persist($users);
        $em->flush();






        // ... persist the $product variable or any other work
        $this->get('session')->getFlashBag()->add('delete', ' Activate user with succ');
  return $this->redirect($this->generateUrl('adminclients'));




}


    /**
     * @Route("/upload-file" , name="uploadsfilesadmin")
     */
    public function uploadsAction(Request $request)
    {

         $user=$this->getUser();

    if ($request->isMethod('POST')) {


    $pic = $request->files->get("fichier");

        // $file stores the uploaded PDF file
        /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
        $file = $pic;
              $fileName = md5(uniqid()) . '.' . $pic->guessExtension();



$ftp_host   = '192.168.83.128';
$ftp_username = 'myftpserver';
$ftp_password = 'Soumayaakil123';
 // open an FTP connection
$conn_id = ftp_connect($ftp_host) or die("Couldn't connect to $ftp_host");
 // try to login
if(@ftp_login($conn_id, $ftp_username, $ftp_password)){
    echo "Connected as $ftp_username@$ftp_host";
}else{
    echo "Couldn't connect as $ftp_username";
}

$file_source=$_FILES['fichier']['tmp_name'];
$file_name=$_FILES['fichier']['name'];
$fichier_extension=strrchr($file_name,'.');
$extension_autorises=array('.txt','.TXT');
if(in_array($fichier_extension,$extension_autorises))
{   
        if(ftp_put($conn_id,'/'.$fileName,$file_source , FTP_ASCII)){
           
            
            //header("location:lister.php");
         }
         else{
            echo "There was an error while uploading $file_source";

            die();
        }
}else
{



$this->get('session')->getFlashBag()->add('erreurfiles', 'seuls les fichier txt sont autorisées');
        return $this->redirect($this->generateUrl('uploadsfilesadmin'));



  }   

      $em = $this->getDoctrine()->getManager();

     $echange= new Echange();

    $echange->setTitre($request->request->get('title'));




















                    $echange->setCreatedat(new \DateTime('now'));




    $echange->setDescription($request->request->get('description'));
     $echange->setIdSender($user->getId());




        $pic = $request->files->get("fichier");

        // $file stores the uploaded PDF file
        /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
        $file = $pic;

        // Generate a unique name for the file before saving it

        // Move the file to the directory where brochures are stored
        $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads';
        copy($pic->getPathname(), $brochuresDir . "/" . $fileName);



        $echange->setFile($fileName);


            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($echange);
            $em->flush();










           $this->get('session')->getFlashBag()->add('addfile', 'File add with succ');
        return $this->redirect($this->generateUrl('adminfiles'));
        }

  $em = $this->getDoctrine()->getManager(); //on appelle Doctrine




 $user=$this->getUser();

        return $this->render('AdminBundle:Default:uploads.html.twig',array(


'user'=>$user,



        ));
    }





}