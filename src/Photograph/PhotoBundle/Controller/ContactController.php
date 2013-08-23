<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller {

    public function indexAction(Request $request) {
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
                ->add('nom', 'text', array('required' => true))
                ->add('email', 'email')
                ->add('sujet', 'text')
                ->add('message', 'textarea')                
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