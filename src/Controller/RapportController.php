<?php

namespace App\Controller;

use App\Entity\Rapport;
use App\Form\RapportType;
use App\Repository\RapportRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RapportController extends AbstractController
{
    #[Route('/rapport', name: 'app_rapport')]
    public function index(): Response
    {
        return $this->render('rapport/index.html.twig', [
            'controller_name' => 'RapportController',
        ]);
    }

    #[Route('/showrapport', name: 'showrapport')]
    public function showrapport(RapportRepository $rapportRepository): Response
    {
        $rpport=$rapportRepository->findAll();
        
        return $this->render('admin/showrapport.html.twig', [
            'rapport' => $rpport,
            
        ]);
        
    }

    #[Route('/addrapport', name: 'addrapport')]
    public function addrapport(ManagerRegistry $managerRegistry,Request $request): Response
    {
        $x=$managerRegistry->getManager();
        

        $rapport=new Rapport();
        $form=$this->createForm(RapportType::class,$rapport);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $rendezvous=$rapport->getRendezvous();
            $x->persist($rendezvous);
            $x->persist($rapport);
            $x->flush();
            return $this->redirectToRoute('showrapport');

        }
        return $this->renderForm('admin/addrapport.html.twig', [
            'f' => $form,
        ]);
    }

    #[Route('/editrapport/{id}', name: 'editrapport')]
    public function editrapport(ManagerRegistry $managerRegistry,RapportRepository $repositery,Request $req,$id): Response
    {
        $x=$managerRegistry->getManager();
        $rd=$repositery->find($id);
        $form=$this->createForm(RapportType::class,$rd);
        $form->handleRequest($req);
        if($form->isSubmitted() and $form->isValid()){
            $x->persist($rd);
            $x->flush();
            return $this->redirectToRoute('showrapport');
        }

        return $this->renderForm('admin/editrapport.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/deleterapport/{id}', name: 'deleterapport')]
    public function deleterapport(ManagerRegistry $managerRegistry,$id,RapportRepository $rendezvous): Response
    {
        $x=$managerRegistry->getManager();
        $rd=$rendezvous->find($id);
        $x->remove($rd);
        $x->flush();
        return $this->redirectToRoute('showrapport');
    }
}
