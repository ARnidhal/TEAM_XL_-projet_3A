<?php

namespace App\Controller;

use App\Entity\Medecin;
use App\Form\DoctorType;
use App\Form\UserType;
use App\Repository\MedecinRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    #[Route('/pagehome', name: 'pagehome')]
    public function index(): Response
    {
        return $this->render('user/pagehome.html.twig', [
            
        ]);
    }



    private $passwordEncoder;//hashage mdp

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    #[Route('/edituser/{id}', name: 'edituser')]
    public function editadmin($id, ManagerRegistry $managerRegistry, Request $req, MedecinRepository $UserRepository, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $entityManager = $managerRegistry->getManager();
        $detaid = $UserRepository->find($id);
    
        if (!$detaid) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        $form = $this->createForm(UserType::class, $detaid);
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Hacher le mot de passe
            $photoFile = $form->get('photo')->getData();
    
            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();
    
                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'), // Specify the directory where photos should be uploaded
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                }
    
                // Update the photo path in the user entity
                $detaid->setPhoto($newFilename);
            }
            $detaid = $form->getData();
            $hashedPassword = $passwordEncoder->encodePassword($detaid, $detaid->getPassword());
            $detaid->setPassword($hashedPassword);
    
            $entityManager->persist($detaid);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_login');
        }
    
        return $this->render('user/edituser.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    
    
    
    #[Route('/editdoc/{id}', name: 'editdoc')]
    public function editdoc($id, ManagerRegistry $managerRegistry, Request $req, MedecinRepository $UserRepository, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $entityManager = $managerRegistry->getManager();
        $detaid = $UserRepository->find($id);
    
        if (!$detaid) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }
    
        $form = $this->createForm(DoctorType::class, $detaid);
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Hacher le mot de passe
            $photoFile = $form->get('photo')->getData();
    
            if ($photoFile) {
                $newFilename = uniqid().'.'.$photoFile->guessExtension();
    
                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'), // Specify the directory where photos should be uploaded
                        $newFilename
                    );
                } catch (FileException $e) {
                    // Handle file upload error
                }
    
                // Update the photo path in the user entity
                $detaid->setPhoto($newFilename);
            }
            $detaid = $form->getData();
            $hashedPassword = $passwordEncoder->encodePassword($detaid, $detaid->getPassword());
            $detaid->setPassword($hashedPassword);
    
            $entityManager->persist($detaid);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_login');
        }
    
        return $this->render('user/editdoc.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    
    
    
    
    
        #[Route('/profile', name: 'profile')]
        public function profile(SessionInterface $session): Response
        {
            // Retrieve user data from the session
            $user = $session->get('user');
    
            // Render the profile page template with user data
            return $this->render('user/profile.html.twig', [
                'user' => $user,
            ]);
        }
    
    
        #[Route('/profiledoc', name: 'profiledoc')]
        public function profiledoc(SessionInterface $session): Response
        {
            // Retrieve user data from the session
            $user = $session->get('user');
    
            // Render the profile page template with user data
            return $this->render('user/profiledoc.html.twig', [
                'user' => $user,
            ]);
        }
    
    
    
    
        #[Route('/showdbuser', name: 'showdbuser')] //affichage
        public function showdbuser(MedecinRepository $userRepository): Response
        {
    
            $user=$userRepository->findAll();
            return $this->render('user/showdbuser.html.twig', [
                'user'=>$user,
    
            ]);
        }
    
    
        #[Route('/showdocuser', name: 'showdocuser')] //affichage
        public function showdocuser(MedecinRepository $userRepository): Response
        {
    
            $user=$userRepository->findAll();
            return $this->render('user/showdocuser.html.twig', [
                'user'=>$user,
    
            ]);
        }
    
    
    
    
        #[Route('/deleteuser/{id}', name: 'deleteuser')]
        public function deleteUser($id, SessionInterface $session): Response
        {
            // The $id parameter is automatically resolved from the route parameters
            
            $userRepository = $this->getDoctrine()->getRepository(Medecin::class);
    
            // Find the user by ID
            $user = $userRepository->find($id);
    
            // Check if the user exists
            if (!$user) {
                throw $this->createNotFoundException('User not founddddd');
            }
    
            // Delete the user
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
    
            // Clear the session
            $session->invalidate();
    
            // Redirect to an appropriate page after deletion
            // For example, redirect to the user list page
            return $this->redirectToRoute('signup');
        }
    
    
    
    
        #[Route('/addadmin', name: 'addadmin')]
        public function addformuser( Request $req, SessionInterface $session): Response
        {
            $user = new Medecin();
    
            $form = $this->createForm(UserType::class, $user);
            $form->handleRequest($req);
    
            if ($form->isSubmitted() and $form->isValid()) {
                 $user->setPassword($this->passwordEncoder->encodePassword($user, $user->getPassword()));
                  $photoFile = $form->get('photo')->getData();
    
                if ($photoFile) {
                    $newFilename = uniqid().'.'.$photoFile->guessExtension();
    
                    try {
                        $photoFile->move(
                            $this->getParameter('photo_directory'), // Specify the directory where photos should be uploaded
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // Handle file upload error
                    }
    
                    // Update the photo path in the user entity
                    $user->setPhoto($newFilename);
                   
                }
                $session->set('user', $user);
             $user->setRoles(['ROLE_ADMIN']);
              $em=$this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                
                return $this->redirectToRoute('showdbuser');
            }
            return $this->renderForm('user/addadmin.html.twig', [
                'form' => $form
            ]);
        }
        #[Route('/editadmin/{id}', name: 'editadmin')]
        public function editad($id, ManagerRegistry $managerRegistry, Request $req, MedecinRepository $UserRepository, UserPasswordEncoderInterface $passwordEncoder): Response
        {
            $entityManager = $managerRegistry->getManager();
            $detaid = $UserRepository->find($id);
        
            if (!$detaid) {
                throw $this->createNotFoundException('Utilisateur non trouvé');
            }
        
            $form = $this->createForm(UserType::class, $detaid);
            $form->handleRequest($req);
        
            if ($form->isSubmitted() && $form->isValid()) {
                // Hacher le mot de passe
                $photoFile = $form->get('photo')->getData();
        
                if ($photoFile) {
                    $newFilename = uniqid().'.'.$photoFile->guessExtension();
        
                    try {
                        $photoFile->move(
                            $this->getParameter('photo_directory'), // Specify the directory where photos should be uploaded
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // Handle file upload error
                    }
        
                    // Update the photo path in the user entity
                    $detaid->setPhoto($newFilename);
                }
                $detaid = $form->getData();
                $hashedPassword = $passwordEncoder->encodePassword($detaid, $detaid->getPassword());
                $detaid->setPassword($hashedPassword);
        
                $entityManager->persist($detaid);
                $entityManager->flush();
        
                return $this->redirectToRoute('app_login');
            }
        
            return $this->render('user/editadmin.html.twig', [
                'form' => $form->createView()
            ]);
        }
    
    
    
    
        #[Route('/adminprofile', name: 'adminprofile')]
        public function adminprofile(SessionInterface $session): Response
        {
            // Retrieve user data from the session
            $user = $session->get('user');
    
            // Render the profile page template with user data
            return $this->render('user/adminprofile.html.twig', [
                'user' => $user,
            ]);
        }
    
    
    
    
}
