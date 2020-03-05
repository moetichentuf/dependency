<?php

namespace App\Controller;

use iTemplate;
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
/**
 * @Route("/", name="Homepagecontroller_index")
 */

class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {

    }

    public function getHtml($template)
    {


        return $template;
    }
}