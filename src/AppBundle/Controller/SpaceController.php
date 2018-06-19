<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Etudiant;


class SpaceController extends Controller
{


	public function getYears(){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	return $repository->findBy(array(), array('id' => 'ASC'));
    }
	
	public function getThisYears(){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	return $repository->findOneBy(['isActive' => true])->getAnnee();
    }

    public function setYears($yr){
    	$repository = $this->getDoctrine()->getRepository('AppBundle:AnneeScolaires');
    	$em = $this->getDoctrine()->getManager();
    	$years = $repository->findAll();
    	foreach ($years as $key) {
    		$key->setIsActive(false);
    		if($key->getAnnee() == $yr) $key->setIsActive(true);
    	}
    	$em->flush();
    }

	/**
     * @Route("/myspace", name="app_homePage")
     */
    public function accueilAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}

		if ($request->isMethod('post')){
    		$this->setYears($request->get('YearSelected'));
    	}
    	$years = $this->getYears();			
		 return $this->render('myspace/accueil.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user, 'years', $years

        ));
       
    }



    /**
     * @Route("/myspace/parametrage" , name="parametrage")
     */
    public function parametrageAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/parametrage2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }

    /**
     * @Route("/myspace/eleve1" , name="eleve1")
     */
    public function eleve1Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/eleve1.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/eleve2" , name="eleve2")
     */
    public function eleve2Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/eleve2.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }

    /**
     * @Route("/myspace/Ficheselevev3/{id} " , name="Ficheselevev3")
     */

    public function Ficheselevev3Action(Request $request, $id)
    {
		$user = null ;

		$path = $this->container->getParameter ( 'file_directory' ) ;

		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		}
		$rep = $this->getDoctrine()->getManager()->getRepository(Etudiant::class);
		$eleve = $rep->find($id);

		$path.="/".$eleve->getImage();
		return $this->render('myspace/Ficheselevev3.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
            'eleve' => $eleve, 'path' => $path , 
        ));

	}

    /**
     * @Route("/myspace/ecolev3 " , name="ecolev3")
     */
    public function ecolev3Action(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			

		}

		if ($request->isMethod('post')){
			$em = $this->getDoctrine()->getManager();
			$rep = $this->getDoctrine()->getRepository('AppBundle:Etudiant');
			$years = $this->getYears();
			if ($request->get('matricule') == '')
			{
					return $this->render('myspace/ecolev3.html.twig', array(
			            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
			            'user'=> $user,
			            'ErrTitle' => 'Erreur !!',
			            'ErrMsg' => 'Les champs suivi par * sont obligatoire', 
			        ));
			}
			else {
				$etd = new Etudiant();
				$etd->setCne($request->get('cne'));
				$etd->setIdMassar($request->get('cmasar'));
				$etd->setNom($request->get('nom'));
				$etd->setPrenom($request->get('prenom'));
				$etd->setNomfr($request->get('nomfr'));
				$etd->setPrenomfr($request->get('prenomfr'));
				$etd->setDate(new \Datetime($request->get('date') ));
				$etd->setSex($request->get('sex'));
				$request->get('lieu1') == 'Autre' ? $etd->setAutre1($request->get('autre1')) : $etd->setLieu1($request->get('lieu1'));
				$request->get('lieu2') == 'Autre' ? $etd->setAutre2($request->get('autre2')) : $etd->setLieu2($request->get('lieu2'));
				$request->get('nat') == 'autre' ? $etd->setNat($request->get('nat2')) : $etd->setNat($request->get('nat'));
				$etd->setCin($request->get('cin'));
				$etd->setMatricule($request->get('matricule'));
				$etd->setStatut($request->get('statut'));
				$etd->setNiveau($request->get('niveau'));
				$etd->setNiveau2($request->get('niveau2'));
				$etd->setClasse($classe=$request->get('classe'));
				$etd->setRed($request->get('red'));
				$etd->setTransport($request->get('transport'));
				$etd->setDate2(new \Datetime($request->get('date2') ));
				$etd->setNiveau3($request->get('niveau3'));
				$etd->setEtablissement($request->get('etablissement'));
				$etd->setRad3($request->get('rad3'));
				$etd->setCode($request->get('code'));
				$etd->setVille($request->get('ville'));
				$etd->setAdresse($request->get('adresse'));
				$etd->setTel($request->get('telephone'));
				$etd->setPortable($request->get('portable'));
				$etd->setEmail($request->get('email'));
				$etd->setDate3(new \Datetime($request->get('date3') ));
				$etd->setMotif($request->get('motif'));
				$etd->setEtablissement2($request->get('etablissement2'));
				$etd->setRad10($request->get('rad10'));
				$etd->setCode2($request->get('code2'));
				$etd->setVille2($request->get('ville2'));
				$etd->setAnnee($this->getThisYears());
				$file = $request->files->get('photo');
				if($file !== null){
	        		$fileName = md5 ( uniqid () ) . '.' . $file->guessExtension ();
	            	$etd->setImage($fileName) ;
	            	$file->move ( $this->container->getParameter ( 'file_directory' ), $fileName );
	            } 	
				$etdMat = $rep->findAll();
				foreach ($etdMat as $key) {
					if ($key->getMatricule() == $request->get('matricule')) return $this->render('myspace/ecolev3.html.twig', array(
				            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
				            'user'=> $user,
				            'errMat' => true,
				            'etd' => $etd,
				        ));
				}
				$em->persist($etd);
				$em->flush();
			}
		}
		 return $this->render('myspace/ecolev3.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }

    /**
     * @Route("/myspace/Ficheseleve " , name="Ficheseleve")
     */
    public function FicheseleveAction(Request $request)
    {
	    $user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
		}
		$rep = $this->getDoctrine()->getRepository(Etudiant::class);
		$etds = $rep->findAll();
			
			 return $this->render('myspace/Ficheseleve.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user, 'etds' => $etds,
        ));
       
    }
     /**
     * @Route("/myspace/Listeeleve " , name="Listeeleve")
     */
    public function ListeeleveAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
		}
		$rep = $this->getDoctrine()->getRepository(Etudiant::class);

			

		$etds = $rep->findBy(['annee' => $this->getThisYears() ]);
		$years = $this->getYears();
		return $this->render('myspace/Listeeleve.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user, 'etds' => $etds, 'years' => $years

        ));
       
    }

     /**
     * @Route("/myspace/servsco " , name="servsco")
     */
    public function servscoAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/servsco.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportVCL" , name="transportVCL")
     */
    public function  transportVCLAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportVCL.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
      /**
     * @Route("/myspace/transportAFF" , name="transportAFF")
     */
    public function  transportAFFAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportAFF.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportCSL" , name="transportCSL")
     */
    public function  transportCSLAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportCSL.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportEDT" , name="transportEDT")
     */
    public function  transportEDTAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportEDT.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
     /**
     * @Route("/myspace/transportAUTRE" , name="transportAUTRE")
     */
    public function  transportAUTREAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/transportAUTRE.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
    /**
     * @Route("/myspace/mobilite" , name="mobilite")
     */
    public function  mobiliteAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/mobilite.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
      /**
     * @Route("/myspace/Listedepart " , name="Listedepart")
     */
    public function ListedepartAction(Request $request)
    {
	    $user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
		}
		$rep = $this->getDoctrine()->getRepository(Etudiant::class);
		$etds = $rep->findAll();
			
			 return $this->render('myspace/Listedepart.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user, 'etds' => $etds,
        ));
       
    }


     /**
     * @Route("/myspace/Listedepart2" , name="Listedepart2")

     */
    public function Listedepart2Action(Request $request)
    {
	    $user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
		}

			$rep = $this->getDoctrine()->getRepository(Etudiant::class);
			$etds = $rep->findAll();
			 return $this->render('myspace/Listedepart2.html.twig', array(
             'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user, 'etds' => $etds,

        ));
       
    }


     /**
     * @Route("/myspace/registreINS" , name="registreINS")
     */
    public function  registreINSAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/registreINS.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
         /**
     * @Route("/myspace/reditionregistre" , name="editionregistre")
     */
    public function  editionregistreAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/editionregistre.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
             /**
     * @Route("/myspace/ecoleIns" , name="ecoleIns")
     */
    public function  ecoleInsAction(Request $request)
    {
		 $user = null ;
		
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		
		
		}
			
			 return $this->render('myspace/ecoleIns.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
        ));
       
    }
      /**
     * @Route("/myspace/FicheseleveD " , name="FicheseleveD")
     */
    public function FicheseleveDAction(Request $request)
    {
	    $user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
		}
		$rep = $this->getDoctrine()->getRepository(Etudiant::class);
		$etds = $rep->findAll();
			
			 return $this->render('myspace/FicheseleveD.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user, 'etds' => $etds,
        ));
       
    }

     /**

     * @Route("/myspace/Ficheselevev3D/{id}" , name="Ficheselevev3D")

     */

    public function Ficheselevev3DAction(Request $request, $id)
    {
		$user = null ;
		if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY') ){
			$user = $this->container->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			
		}

		$rep = $this->getDoctrine()->getManager()->getRepository('AppBundle:Etudiant');
		$etd = $rep->find($id);
        if( $request->isMethod('post') ){
    		$em = $this->getDoctrine()->getManager();
			$etd->setCne($request->get('cne'));
			$etd->setIdMassar($request->get('cmasar'));
			$etd->setNom($request->get('nom'));
			$etd->setPrenom($request->get('prenom'));
			$etd->setNomfr($request->get('nomfr'));
			$etd->setPrenomfr($request->get('prenomfr'));
			$etd->setDate(new \Datetime($request->get('date') ));
			$etd->setSex($request->get('sex'));
			$request->get('lieu1') == 'Autre' ? $etd->setAutre1($request->get('autre1')) : $etd->setLieu1($request->get('lieu1'));
			$request->get('lieu2') == 'Autre' ? $etd->setAutre2($request->get('autre2')) : $etd->setLieu2($request->get('lieu2'));
			$request->get('nat') == 'Autre' ? $etd->setNat($request->get('nat2')) : $etd->setNat($request->get('nat'));
			$etd->setCin($request->get('cin'));
			$etd->setMatricule($request->get('matricule'));
			$etd->setStatut($request->get('statut'));
			$etd->setNiveau($request->get('niveau'));
			$etd->setNiveau2($request->get('niveau2'));
			$etd->setClasse($classe=$request->get('classe'));
			$etd->setRed($request->get('red'));
			$etd->setTransport($request->get('transport'));
			$etd->setDate2(new \Datetime($request->get('date2') ));
			$etd->setNiveau3($request->get('niveau3'));
			$etd->setEtablissement($request->get('etablissement'));
			$etd->setRad3($request->get('rad3'));
			$etd->setCode($request->get('code'));
			$etd->setVille($request->get('ville'));
			$etd->setAdresse($request->get('adresse'));
			$etd->setTel($request->get('telephone'));
			$etd->setPortable($request->get('portable'));
			$etd->setEmail($request->get('email'));
			$etd->setDate3(new \Datetime($request->get('date3') ));
			$etd->setMotif($request->get('motif'));
			$etd->setEtablissement2($request->get('etablissement2'));
			$etd->setRad10($request->get('rad10'));
			$etd->setCode2($request->get('code2'));
			$etd->setVille2($request->get('ville2'));
			$em->flush();
        }
		return $this->render('myspace/Ficheselevev3D.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),'user'=> $user,
            'eleve' => $etd,
        ));
	}


    /**
     * @Route("/myspace/{id}/{statut} " , name="SetStatuts")
     */
    public function SetStatutAction(Request $request, $id, $statut)
    {
		$em = $this->getDoctrine()->getManager();
		$rep = $this->getDoctrine()->getRepository(Etudiant::class);
		$etd = $rep->find($id);
		if ($etd){
			$etd->setStatut($statut);
			$em->flush();
		}
		return new Response ('a');
	}



}


?>