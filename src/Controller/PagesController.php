<?php

namespace App\Controller;

use App\Entity\Learner;
use App\Entity\Level;
use App\Repository\LearnerRepository;
use App\Repository\LevelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('pages/home.html.twig');
    }

    /**
     * @Route("/learners", name="learners")
     */
    public function learners(LearnerRepository $learnerRepository)
    {
        $learners = $learnerRepository->findAll();
        return $this->render('pages/learners/learners.html.twig', [
            'learners' => $learners,
        ]);
    }

    /**
     * @Route("/learner/{id}", name="show_one_learner")
     */
    public function show_one_learner(Learner $learner)
    {
        return $this->render('pages/learners/show_one_learner.html.twig', [
            'learner' => $learner,
        ]);
    }
}
