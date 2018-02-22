<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    
	 /**
     * @Route("/register", name="register")
     */
    public function indexAction(Request $request)
    {
	
        // replace this example code with whatever you need
        return $this->render('register/register.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
	
	
	
	
}


?>