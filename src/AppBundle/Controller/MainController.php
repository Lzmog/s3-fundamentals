<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepage()
    {
        return $this->render('main/homepage.html.twig');
    }
}
