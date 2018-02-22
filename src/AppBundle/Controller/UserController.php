<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;

class UserController extends Controller
{

	 /**
     * @Route("/user/register")
     */
    public function indexAction()
    {
	   // replace this example code with whatever you need
        return $this->render('register/register.html.php', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
	   
	   
    }


	 /**
     * @Route("/user/saveuser")
	 *
     */
    public function saveUserAction(Request $request)
    {
			$user = null ;
			
			
		
			$user = new User();
			$em = $this->getDoctrine()->getManager();
			//$user = $this->container->get('security.token_storage')->getToken()->getUser();
			
		
					
					$user->setUsername($request->get('username'));
					
					$user->setName($request->get('name'));
					$user->setEmail($request->get('email'));
					
					//encrypt user password
					$factory = $this->get('security.encoder_factory');
					$encoder = $factory->getEncoder($user);
					
					

					//generate password
					$password = $encoder->encodePassword($request->get('plainPassword'), $user->getSalt());
					
					

				if (!$encoder->isPasswordValid($password, $request->get('plainPassword'), $user->getSalt())) {
					throw new \Exception('Password incorrectly encoded during user registration');
				} else {
				   $user->setPassword($password);
				}
					

					$user->setType('User');
					$user->setRole('ROLE_USER');
					$user->setIsActive(true);
					$em->persist($user);
					$em->flush();
					
					
					return $this->redirect("register");
					
	   }
	   
    }
	



?>