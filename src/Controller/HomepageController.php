<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="Homepagecontroller_index")
     */
    public function index()
    {
       echo $name = 'homepage';
        return $this->render('homepage/index.html.twig', [
            'name' => $name,
        ]);
    }

}
