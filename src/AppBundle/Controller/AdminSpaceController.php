<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AdminSpaceController extends Controller
{

	/**
     * @Route("/adminspace")
     */
    public function indexAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('adminspace/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
	}


?>