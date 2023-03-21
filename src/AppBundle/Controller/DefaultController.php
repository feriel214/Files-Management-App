<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use AppBundle\Entity\User;
use AppBundle\Entity\Pays;

use \Datetime;
class DefaultController extends Controller
{

    
    private $tokenManager;

        public function __construct(CsrfTokenManagerInterface $tokenManager = null)
        {
            $this->tokenManager = $tokenManager;

        }


    /**
     * @Route("/redirectlogin", name="redirectlogin")
     */
    public function indexAction(Request $request)
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
    {
        return $this->redirect($this->generateUrl('adminclients'));
    }else{

        return $this->redirect($this->generateUrl('espaceclient'));

      
    }
    }


 /**
     * @Route("/insciption" , name="insciption")
     */
    public function insciptionAction()
    {

  $em = $this->getDoctrine()->getManager(); //on appelle Doctrine

      $pays = $em->getRepository(Pays::class)->findAll();

        return $this->render('AppBundle:Login:insciption.html.twig',array(


'pays'=>$pays

        ));
    }




 /**
     * @Route("/getname" , name="getname")
     */
    public function getnameAction()
    {
 $user=$this->getUser();



        return $this->render('AppBundle:Login:getname.html.twig',array(


'user'=>$user


        ));
    }
 

 /**
     * @Route("/adddoctor", name="adddoctor")
     */
    public function registeraddAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();

    $doctor = new User();

        // 2) handle the submit (will only happen on POST)
    if ($request->isMethod('POST')) {

      $em = $this->getDoctrine()->getManager();

      $verif = $em->getRepository(User::class)->findOneBy(array('email'=>$request->request->get('email')));

     $verif2 = $em->getRepository(User::class)->findOneBy(array('username'=>$request->request->get('username')));


if($verif!=null){


  $this->get('session')->getFlashBag()->add('erraddarchi', 'Email '.$request->request->get('email').'   existe déjà ');
return $this->redirect($this->generateUrl('insciption'));
}

if($verif2!=null){


  $this->get('session')->getFlashBag()->add('erraddarchi', 'Login '.$request->request->get('username').'   existe déjà ');
return $this->redirect($this->generateUrl('insciption'));
}






            // 3) Encode the password (you could also do this via Doctrine listener)
            $encoder = $this->get('security.encoder_factory')
                ->getEncoder($doctor);

            $password = $encoder->encodePassword($doctor->getPlainPassword(), $doctor->getSalt());


                       $rolesArr = array('ROLE_USER');


            $doctor->setPassword($password);
$doctor->setUsername($request->request->get('username'));
    $doctor->setEmail($request->request->get('email'));
    $doctor->setName($request->request->get('name'));

    $doctor->setPhone($request->request->get('phone'));
$doctor->setPays($request->request->get('pays'));
    $doctor->setBirthdate(new \DateTime($request->request->get('birthdate')));
    $doctor->setAddress($request->request->get('address'));

$doctor->setCountry($request->request->get('country'));




    $doctor->setPlainPassword($request->request->get('password'));
    $doctor->setEnabled(true);
            $doctor->setRoles($rolesArr);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($doctor);
            $em->flush();










           $this->get('session')->getFlashBag()->add('adddoctor', 'registration successfully completed');
        return $this->redirect($this->generateUrl('insciption'));
        }


    }








 /**
     * @Route("/modifclient", name="modifclient")
     */
    public function modifdoctorAction(Request $request)
    {
      $em = $this->getDoctrine()->getManager();
 $user=$this->getUser();

  

        // 2) handle the submit (will only happen on POST)
    if ($request->isMethod('POST')) {

      $em = $this->getDoctrine()->getManager();



    $pic = $request->files->get("photo");



   if($pic!=null){
             $file = $pic;

        // Generate a unique name for the file before saving it
        $fileName = md5(uniqid()) . '.' . $pic->guessExtension();

        // Move the file to the directory where brochures are stored
        $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/clients';
        copy($pic->getPathname(), $brochuresDir . "/" . $fileName);

                    $user->setPhoto($fileName);

        }


         
    $user->setEmail($request->request->get('email'));
    $user->setName($request->request->get('name'));
    $user->setDescription($request->request->get('description'));

    $user->setPhone($request->request->get('phone'));
    $user->setPays($request->request->get('pays'));
    $user->setBirthdate(new \DateTime($request->request->get('birthdate')));
    $user->setAddress($request->request->get('address'));

    $user->setCountry($request->request->get('country'));





            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();










           $this->get('session')->getFlashBag()->add('modifiercompte', 'Compte est modifier avec succès !');
        return $this->redirect($this->generateUrl('espaceclient'));
        }


    }






















            /**
         * @Route("/", name="logindocteur")
         *
         */
     public function loginarchitectAction(Request $request)
        {


            /** @var $session Session */
            $session = $request->getSession();

            $authErrorKey = Security::AUTHENTICATION_ERROR;
            $lastUsernameKey = Security::LAST_USERNAME;

            // get the error if any (works with forward and redirect -- see below)
            if ($request->attributes->has($authErrorKey)) {



                $error = $request->attributes->get($authErrorKey);
            } elseif (null !== $session && $session->has($authErrorKey)) {
                $error = $session->get($authErrorKey);
                $session->remove($authErrorKey);
            } else {
                $error = null;
            }

            if (!$error instanceof AuthenticationException) {

                $error = null; // The value does not come from the security component.
            }

            // last username entered by the user
            $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);

            $csrfToken = $this->tokenManager
                ? $this->tokenManager->getToken('authenticate')->getValue()
                : null;


            return $this->renderdocteurLogin(array(
                'last_username' => $lastUsername,
                'error' => $error,
                'csrf_token' => $csrfToken,
            ));
        }


        /**
         * Renders the login template with the given parameters. Overwrite this function in
         * an extended controller to provide additional data for the login template.
         *
         * @param array $data
         *
         * @return Response
         */
        protected function renderdocteurLogin(array $data)
        {
            return $this->render('AppBundle:Login:index.html.twig', $data);
        }

}
