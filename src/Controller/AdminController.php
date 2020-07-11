<?php

namespace App\Controller;

use App\Entity\Learner;
use App\Form\LearnerType;
use App\Repository\LearnerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @var PropertyRepository
     */
    private $repository;

    public function __construct(LearnerRepository $repository, EntityManagerInterface $entityManagerInterface)
    {
        $this->repository= $repository;
        $this->entityManagerInterface= $entityManagerInterface;
    }
    /**
     * @Route("/admin/create/learner", name="create_learner")
     */
    public function create_learner(Request $request)
    {
        $learner = new Learner();
        $form = $this->createForm(LearnerType::class, $learner);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->entityManagerInterface->persist($learner);
            $this->entityManagerInterface->flush();
    
            $this->addFlash('success', 'L\'apprenant a été créé avec succès');

            return $this->redirectToRoute('learners');
        }
        return $this->render('pages/learners/create_learner.html.twig', [
            'controller_name' => 'AdminController',
            'form' =>$form->createView()
        ]);
    }
}
