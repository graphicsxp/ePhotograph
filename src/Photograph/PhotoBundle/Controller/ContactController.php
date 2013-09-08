<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Photograph\PhotoBundle\Document\Message;

class ContactController extends Controller {

    public function indexAction(Request $request) {
        $message = new Message();

        $form = $this->createFormBuilder($message)
                ->add('name', 'text', array('attr' => array('placeholder' => 'nom')))
                ->add('email', 'email')
                ->add('subject', 'text')
                ->add('body', 'textarea')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $message = $form->getData();

            //save message in mongodb
            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($message);
            $dm->flush();

            //create mail and send it
            $mail = \Swift_Message::newInstance()
                ->setSubject($message->getSubject())
                ->setFrom($message->getEmail())
                ->setTo("graphicsxp@gmail.com")
                ->setBody($message->getBody());

            $this->get('mailer')->send($mail);

        }
        
        return $this->render('PhotographPhotoBundle:Contact:index.html.twig', array('form' => $form->createView()));
    }
}

?>