<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PublicationController
 * @package App\Controller
 * @Route("/publication", name="publication_")
 */
class PublicationController extends AbstractController
{

    /**
     * @Route("/detail", name="detail")
     */
    public function scienceDetail(): Response
    {
        return $this->render('Publication/publication-detail.html.twig');
    }

    /**
     * @Route("/publish", name="list")
     */
    public function publish(): Response
    {
        return $this->render('Publication/publish.html.twig');
    }
}