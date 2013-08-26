<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Photograph\PhotoBundle\Entity\Message;

class ClientController extends Controller {

    public function indexAction(String $client) {
        return $this->render('PhotographPhotoBundle:Client:index.html.twig');
    }
}

?>