<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Photograph\PhotoBundle\Entity\Message;

class ContactController extends Controller {

    public function indexAction(Request $request) {
        $message = new Message();

        $form = $this->createFormBuilder($message)
                ->add('Name', 'text', array('required' => true))
                ->add('Email', 'email')
                ->add('Subject', 'text')
                ->add('Body', 'textarea')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
        }
        
        return $this->render('PhotographPhotoBundle:Contact:index.html.twig', array('form' => $form->createView()));
    }
}

?>