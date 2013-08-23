<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PhotographPhotoBundle:Default:index.html.twig');
    }
}
