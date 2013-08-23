<?php

namespace Photograph\PhotoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;


class PageController extends Controller {

    public function contactAction() {
        return $this->render('PhotographPhotoBundle:Page:contact.html.twig');
    }

    public function portfolioAction($name) {
        switch ($name) {
            case 'angelique-et-pierre':
                return $this->render('PhotographPhotoBundle:Page:portfolio-post-angelique-et-pierre.html.twig');
                break;
            case 'maud-et-fabrice':
                return $this->render('PhotographPhotoBundle:Page:portfolio-post-maud-et-fabrice.html.twig');
                break;
            case 'paysages':
                return $this->render('PhotographPhotoBundle:Page:portfolio-post-paysages.html.twig');
                break;
            case 'portraits':
                return $this->render('PhotographPhotoBundle:Page:portfolio-post-portraits.html.twig');
                break;
            case 'architecture':
                return $this->render('PhotographPhotoBundle:Page:portfolio-post-architecture.html.twig');
                break;
            default :
                return $this->render('PhotographPhotoBundle:Page:portfolio.html.twig');
                break;
        }
        return $this->render('PhotographPhotoBundle:Page:portfolio.html.twig');
    }

    public function aboutAction() {
        return $this->render('PhotographPhotoBundle:Page:about.html.twig');
    }

    public function faqAction() {
        return $this->render('PhotographPhotoBundle:Page:faq.html.twig');
    }

    public function sitemapAction() {
        return $this->render('PhotographPhotoBundle:Page:sitemap.html.twig');
    }
    
    public function prestationsAction() {
        return $this->render('PhotographPhotoBundle:Page:prestations.html.twig');
    }

    public function galleryAction($name) {
        $finder = new Finder();               
        $path = 'img/gallery/' . str_replace('-', '_', $name);       
        $array = array();
        
        $finder->files()->in('/var/www/ePhotograph/web/' . $path)->sortByName()->depth('== 0');
        foreach ($finder as $file){
            array_push($array, array('src' => $path . '/thumbs/' . $file->getFilename(), 'href' => $path . '/' . $file->getFilename()));
        }
        
        return $this->render('PhotographPhotoBundle:Page:gallery.html.twig', array('divs' => $array));
    }
}
