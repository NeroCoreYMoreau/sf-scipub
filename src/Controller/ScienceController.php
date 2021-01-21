<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ScienceController
 * @package App\Controller
 * @Route("/science", name="science_")
 */
class ScienceController extends AbstractController
{

    /**
     * @Route("/detail", name="detail")
     */
    public function scienceDetail(): Response
    {
        return $this->render('Science/science-detail.html.twig');
    }

    /**
     * @Route("/list", name="list")
     */
    public function sciencelist(): Response
    {
        return $this->render('Science/science-list.html.twig');
    }

}