<?php

namespace App\Controller;

use App\Entity\Reply;
use App\Form\ReplyType;
use App\Repository\ReplyRepository;
use App\Repository\ReclamationRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReplyController extends AbstractController
{
    #[Route('/reply', name: 'show_replies')]
    public function index(): Response
    {
        return $this->render('reply/index.html.twig', [
            'controller_name' => 'ReplyController',
        ]);
    }

    #[Route('/addReply', name: 'add_reply')]
    public function addReply(ManagerRegistry $managerRegistry, Request $request): Response
    {
        $entityManager = $managerRegistry->getManager();
        $reply = new Reply();
        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reply);
            $entityManager->flush();
            return $this->redirectToRoute('show_replies');
        }
        return $this->renderForm('reply/addReply.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/editReply/{id}', name: 'edit_reply')]
    public function editReply($id, ReplyRepository $replyRepository, ManagerRegistry $managerRegistry, Request $request): Response
    {
        $entityManager = $managerRegistry->getManager();
        $reply = $replyRepository->find($id);

        if (!$reply) {
            throw $this->createNotFoundException('Réponse non trouvée');
        }

        $form = $this->createForm(ReplyType::class, $reply);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('show_replies');
        }

        return $this->renderForm('reply/editReply.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/showReplies', name: 'show_replies')]
    public function showReplies(ReplyRepository $replyRepository): Response
    {
        $replies = $replyRepository->findAll();

        return $this->render('reply/showReplies.html.twig', [
            'replies' => $replies,
        ]);
    }

    #[Route('/delete_reply/{id}', name: 'delete_reply')]
    public function deleteReply($id, ManagerRegistry $managerRegistry, ReplyRepository $replyRepository): Response
    {
        $entityManager = $managerRegistry->getManager();
        $reply = $replyRepository->find($id);

        if (!$reply) {
            throw $this->createNotFoundException('Réponse introuvable');
        }

        $entityManager->remove($reply);
        $entityManager->flush();

        return $this->redirectToRoute('show_replies');
    }

    #[Route('/showdbReclamations', name: 'show_dbreclamations')]
    public function showReclamations(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();
        return $this->render('reply/showdbReclamations.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/deletedbReclamation/{id}', name: 'delete_dbreclamation')]
    public function deletedbReclamation($id, ManagerRegistry $managerRegistry, ReclamationRepository $reclamationRepository): Response
    {
        
        $entityManager = $managerRegistry->getManager();

        
        $reclamation = $reclamationRepository->find($id);

        
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation non trouvée');
        }
        $entityManager->remove($reclamation);
        $entityManager->flush();
        return $this->redirectToRoute('show_dbreclamations');
    }
}
