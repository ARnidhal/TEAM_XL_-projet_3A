<?php

namespace App\Controller;

use App\Entity\Medecin;
use App\Entity\Rendezvous;
use App\Form\RendezvousType;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\TexterInterface;
use Symfony\Component\Notifier\Texter\ProviderOptions;
use Twilio\Rest\Client as TwilioClient;
use App\Repository\MedecinRepository;
use App\Repository\RendezvousRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class RendezvousController extends AbstractController
{
    #[Route('/rendezvous', name: 'app_rendezvous')]
    public function index(): Response
    {
        return $this->render('rendezvous/index.html.twig', [
            'controller_name' => 'RendezvousController',
        ]);
    }

    #[Route('/indexadmin', name: 'indexadmin')]
    public function indexadmin(): Response
    {
        return $this->render('admin/indexadmin.html.twig'
        );
    }

    #[Route('/indexfront', name: 'indexfront')]
    public function indexfront(): Response
    {
        return $this->render('front/indexfront.html.twig'
        );
    }

    #[Route('/show', name: 'show')]
    public function show(RendezvousRepository $rendezvousRepository,Request $request): Response
    {
        $rd=$rendezvousRepository->findAll();
        $medecinname=[];
        foreach($rd as $rendezvous){
            $medecinname[]=$rendezvous->getMedecin()->getFullname();
        }
       /* $criteria = [
            'fullname' => $request->query->get('fullname'),
            'date' => $request->query->get('date'),
            'medecin' => $request->query->get('medecin'),
            // Ajoutez autant de critères que nécessaire
        ];

        $results = $rendezvousRepository->searchByCriteria($criteria);*/
        return $this->render('admin/show.html.twig', [
            'rendezvous' => $rd,
            'medecinsname' =>$medecinname,
            //'results' => $results,
        ]);
    }

    #[Route('/addRV', name: 'addRV')]
    public function addRV(ManagerRegistry $managerRegistry,Request $request): Response
    {
        $x=$managerRegistry->getManager();
        

        $rd=new Rendezvous();
        $form=$this->createForm(RendezvousType::class,$rd);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $medecin=$rd->getMedecin();
           // $spec=$rd->$medecin->getSpecialite();
            $x->persist($medecin);
            //$x->persist($spec);
            $x->persist($rd);
            $x->flush();
            return $this->redirectToRoute('show');

        }
        return $this->renderForm('admin/addRV.html.twig', [
            'f' => $form,
        ]);
    }

    #[Route('/deleteRV/{id}', name: 'deleteRV')]
    public function deleteRV(ManagerRegistry $managerRegistry,$id,RendezvousRepository $rendezvous): Response
    {
        $x=$managerRegistry->getManager();
        $rd=$rendezvous->find($id);
        $x->remove($rd);
        $x->flush();
        return $this->redirectToRoute('show');
    }

    #[Route('/editrv/{id}', name: 'editrv')]
    public function editrv(ManagerRegistry $managerRegistry,RendezvousRepository $repositery,Request $req,$id): Response
    {
        $x=$managerRegistry->getManager();
        $rd=$repositery->find($id);
        $form=$this->createForm(RendezvousType::class,$rd);
        $form->handleRequest($req);
        if($form->isSubmitted() and $form->isValid()){
            $x->persist($rd);
            $x->flush();
            return $this->redirectToRoute('show');
        }

        return $this->renderForm('admin/editrv.html.twig', [
            'f' => $form
        ]);
    }

    #[Route('/add', name: 'add')]
    public function add(ManagerRegistry $managerRegistry,Request $request): Response
    {
        $x=$managerRegistry->getManager();
        

        $rd=new Rendezvous();
        $form=$this->createForm(RendezvousType::class,$rd);
        $form->handleRequest($request);
        if($form->isSubmitted() and $form->isValid()){
            $medecin=$rd->getMedecin();
           // $spec=$rd->$medecin->getSpecialite();
            $x->persist($medecin);
            //$x->persist($spec);
            $x->persist($rd);
            $x->flush();
            return $this->render('front/confirmation.html.twig');

        }
        return $this->renderForm('front/add.html.twig', [
            'f' => $form,
        ]);
    }



//////////////////////////////////////METIERS///////////////////////////////////////
  //////////////////////////////////////METIERS///////////////////////////////////////
  #[Route('/confirmerRV/{id}', name: 'confirmerRV')]
  public function confirmerRV(RendezvousRepository $rendezvous ,$id,ManagerRegistry $managerRegistry,TexterInterface $texter): Response
  {
      

    /*
      
   // Replace these with your Twilio credentials
   $accountSid = 'AC19405307081f214bf11a9ffe75ed0720';
   $authToken  = '7686e2fcc6b2df57b44c2cf8db0da723';

   // Create a Twilio client
   $twilio = new TwilioClient($accountSid, $authToken);

   // Replace these with the phone number you want to send the SMS to and your Twilio phone number
   $to = '+21629304408'; // recipient's phone number
   $from = '+13342343809'; // your Twilio phone number

   // Message content
   $message = $twilio->messages
       ->create($to, [
           "body" => "bonjour votre rendezvous est confirmé!",
           "from" => $from
       ]);

   // You can handle the response as needed
   // For example, you can check if the message was successfully sent
   if ($message->sid) {
       //return new Response('SMS sent successfully!');
       $x=$managerRegistry->getManager();
      $rv=$rendezvous->find($id);
      $rv->setEtat(1);
      $x->persist($rv);
      $x->flush();

      *////fincommentaire1
      return $this->redirectToRoute('show');
      /*commentaire2
   } else {
       return new Response('Failed to send SMS.');
       return $this->redirectToRoute('show');

   }
   */
  }

  


    /**
     * @Route("/rendezvous-calendar/{id}", name="rendezvous_calendar")
     */
    public function calendar($id): Response
    {
        return $this->render('front/calendar.html.twig', [
            'id' => $id,
        ]);
    }


    /**
     * @Route("/get-rendezvous/{id}", name="get_rendezvous")
     */
    public function getRendezvous($id,ManagerRegistry $managerRegistry)
    {
        
        $entityManager = $managerRegistry->getManager();
        $rendezvousRepository = $entityManager->getRepository(Rendezvous::class);
        $rendezvous = $rendezvousRepository->findBy(['medecin' => $id]);

        $data = [];
        foreach ($rendezvous as $rendezvous) {
            $data[] = [
                'fullname' => $rendezvous->getFullname(),
                'date' => $rendezvous->getDate()->format('Y-m-d'),
                'time' => $rendezvous->getTime()->format('H:i:s'),
            ];
        }

        return new JsonResponse($data);
    
    }



    #[Route('/searchrendezvous', name: 'searchrendezvous')]
    public function searchrendezvous(Request $request, RendezvousRepository $repository): Response
    {

        $criteria = [
            'fullname' => $request->query->get('fullname'),
            'date' => $request->query->get('date'),
            'medecin' => $request->query->get('medecin'),
            // Ajoutez autant de critères que nécessaire
        ];

        $results = $repository->searchByCriteria($criteria);
        return $this->render('admin/show.html.twig', [
            'results' => $results,
        ]);
    }
}
  