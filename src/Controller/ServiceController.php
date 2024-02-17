<?php

namespace App\Controller;
use App\Entity\Service;
use App\Entity\Category;
use App\Form\ServiceType;
use APP\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Repository\ServiceRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\FileUpload;





class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);
    }

   /* #[Route('/admin', name: 'app_service')]
    public function indexadmin(): Response
    {
        return $this->render('showservicebyid.html.twig' 
            
        );
    }*/

  /*#[Route('/user', name: 'app_services')]
    public function indexuser(): Response
    {
        return $this->render('user/index.html.twig' 
            
        );
    }*/

    #[Route('/addformservice', name: 'addformauthor')]
    public function addformauthor(ManagerRegistry $managerRegistry,SluggerInterface $slugger ,Request $req): Response
    {
        $x=$managerRegistry->getManager();//ya3mel ay update w ayy delete ay ajout
        $service=new Service();
        $form=$this->createForm(ServiceType::class,$service);
        $form->handleRequest($req);//ima post bech thot fil base 
        if($form->isSubmitted() and $form->isValid())
        {

           
            $photoFile = $form->get('image')->getData();

            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('image_directory'), // Specify the directory where photos should be uploaded
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                }

                // Update the photo path in the user entity
                $service->setImage($newFilename);

                $cat = $service->getIdCategorie();
            }
          
         $x->persist($cat);
        $x->persist($service);
        $x->flush();
        return $this->redirectToRoute('showdbservice', ['page' => 'back']);//bech ihezni lil page show kima href
        
        
        }

        return $this->renderForm('formservice.html.twig', [
            'f'=>$form,
        ]);
    }
    #[Route('/tableservice/{page}', name: 'showdbservice' , requirements: ['page' => '^(front|back|front1)$'])] //affichage
    public function showdbservice(ServiceRepository $serviceRepository,CategoryRepository $categoryRepository , string $page): Response
    {

        $service=$serviceRepository->findAll();
        $cat=$categoryRepository->findAll();
         $service1 = $serviceRepository->findBy(['active' => true]);
      //$service=$ServiceRepository->orderbyusername();//tri ASC
      // $aservice=$serviceRepository-> seachwithalph();//recherche

      if ($page === 'back') {
        return $this->render('tableservice.html.twig', [
            'cat' => $cat,
            'service'=>$service

        ]);
       }elseif ($page === 'front') {
        // Rendre la seconde page
        return $this->render('frontaffichageservice.html.twig' , [
            'cat' => $cat,
            'service'=>$service1
        ]);
    }

    return new Response('Page non trouvée', Response::HTTP_NOT_FOUND);

    }

   /* #[Route('/tableservicef', name: 'showdbservicef')] //affichage
    public function showdbauthorf(ServiceRepository $authorRepository): Response
    {

        $service=$authorRepository->findAll();
      //$service=$ServiceRepository->orderbyusername();//tri ASC
      // $author=$authorRepository-> seachwithalph();//recherche
        return $this->render('frontaffichageservice.html.twig', [
            'service'=>$service

        ]);
    }*/

    #[Route('/editsevice/{id}', name: 'editservice')]
    public function editservice($id, serviceRepository $serviceRepository, ManagerRegistry $managerRegistry,Request $req): Response
    {
       
       
        $x = $managerRegistry->getManager();
        $dataid=$serviceRepository->find($id); 
        
        $form=$this->createForm(Servicetype::class,$dataid);
        $form->handleRequest($req);
        if($form->isSubmitted() and $form->isValid()){

            $photoFile = $form->get('image')->getData();

            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('image_directory'), // Specify the directory where photos should be uploaded
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                }

                // Update the photo path in the service entity
                $dataid->setImage($newFilename);
            }

            
        $x->persist($dataid);
        $x->flush();
           return $this->redirectToRoute('showdbservice', ['page' => 'back']);

        }
        return $this->renderForm('editservice.html.twig', [
            'x' => $form 
        ]);
    }

    #[Route('/deleteservice/{id}', name: 'deleteservice')]
    public function deleteauthor($id, ManagerRegistry $managerRegistry, ServiceRepository $serviceRepository): Response
    {
        $em = $managerRegistry->getManager();
        $dataid = $serviceRepository->find($id);
        $em->remove($dataid);
        $em->flush();
        return $this->redirectToRoute('showdbservice', ['page' => 'back']);
    }


    
  
    #[Route('/showidservice/{id}', name: 'showidservice')]
public function showidservice( $id,ServiceRepository $serviceRepository): Response
{
    // Find the post entity by ID
    $service= $serviceRepository->find($id);

    if (!$service) {
        // Post not found, handle this case accordingly
        throw $this->createNotFoundException('service not found');
    }

    return $this->render('showservicebyid.html.twig', [
        'service' => $service,
        
    ]);
}

   
#[Route('/activer/{id}', name: 'activer')]
public function activer(Service $service, ManagerRegistry $managerRegistry): Response
{
    $em = $managerRegistry->getManager();

    // Toggle the "active" status
    $isActive = $service->isActive();
    $service->setActive(!$isActive);

    // Persist changes
    $em->persist($service);
    $em->flush();

    // Respond with a message indicating success
    return new Response("Service active status toggled successfully.");
}

/*#[Route('/supprimer/{id}', name: 'activer')]
public function activer(Service $service, ManagerRegistry $managerRegistry): Response
{
    $em = $managerRegistry->getManager();

    // Toggle the "active" status
    $isActive = $service->isActive();
    $service->setActive(!$isActive);

    // Persist changes
    $em->persist($service);
    $em->flush();

    // Respond with a message indicating success
    return new Response("Service active status toggled successfully.");
}*/
}

