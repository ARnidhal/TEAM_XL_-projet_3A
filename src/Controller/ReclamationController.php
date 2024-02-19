<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ReclamationRepository;

class ReclamationController extends AbstractController
{
    #[Route('/reclamation', name: 'display_reclamations')]
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    #[Route('/admin', name: 'adisplay_admin')]
    public function indexAdmin(): Response
    {
        return $this->render('Admin/index.html.twig');
    }

    #[Route('/addReclamation', name: 'add_reclamation')]
    public function addReclamation(ManagerRegistry $managerRegistry, Request $request): Response
    {
        $entityManager = $managerRegistry->getManager();
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();
            return $this->redirectToRoute('show_reclamations');
        }
        return $this->renderForm('reclamation/createReclamation.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/showReclamations', name: 'show_reclamations')]
    public function showReclamations(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();
        return $this->render('reclamation/showReclamations.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/editReclamation/{id}', name: 'edit_reclamation')]
    public function editReclamation($id, ReclamationRepository $reclamationRepository, ManagerRegistry $managerRegistry, Request $request): Response
    {
        $entityManager = $managerRegistry->getManager();
        $reclamation = $reclamationRepository->find($id);
    
        if ($reclamation->hasReplies()) {
            $this->addFlash('warning', 'Cette réclamation a des réponses et ne peut pas être modifiée.');
            return $this->redirectToRoute('show_reclamations');
        }
    
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('show_reclamations');
        }
    
        return $this->renderForm('reclamation/editReclamation.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    


    #[Route('/deleteReclamation/{id}', name: 'delete_reclamation')]
    public function deleteReclamation($id, ManagerRegistry $managerRegistry, ReclamationRepository $reclamationRepository): Response
    {
        $entityManager = $managerRegistry->getManager();
        $reclamation = $reclamationRepository->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation non trouvée');
        }
        $entityManager->remove($reclamation);
        $entityManager->flush();
        return $this->redirectToRoute('show_reclamations');
        
        
    }

    #[Route('/show_dbreplies/{id}', name: 'show_dbreplies')]
    public function showReplies(Reclamation $reclamation): Response
    {
        $replies = $reclamation->getReplies();
        return $this->render('reclamation/replies.html.twig', [
            'reclamation' => $reclamation,
            'replies' => $replies
        ]);
    }
}
