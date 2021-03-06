<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
   /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request)
    {
		 $authenticationUtils = $this->get('security.authentication_utils');

		// get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('login/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));   
	
	}

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(Request $request)
    {

       return $this->redirect("/");
			
    }
	
	
	/**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        return $this->redirect("/");
    }

}

?>