<?php

namespace Photograph\PhotoBundle\Controller;

use Assetic\Filter\GoogleClosure\CompilerApiFilter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Photograph\PhotoBundle\Document;


class PageController extends Controller
{

    public function contactAction()
    {
        return $this->render('PhotographPhotoBundle:Page:contact.html.twig');
    }

    public function portfolioAction($name)
    {
        if ($name != '') {
            $portfolioPost = $this->get('doctrine_mongodb')
                ->getRepository('Photograph\PhotoBundle\Document\PortfolioPost')
                ->findBy(array('name' => $name));
            $portfolioPost->next();
            $temp = $portfolioPost->current();

            return $this->render('PhotographPhotoBundle:Page:portfolio-post.html.twig', array('post' => $temp));
        }
        return $this->render('PhotographPhotoBundle:Page:portfolio.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('PhotographPhotoBundle:Page:about.html.twig');
    }

    public function linksAction()
    {
        return $this->render('PhotographPhotoBundle:Page:links.html.twig');
    }

    public function faqAction()
    {
        return $this->render('PhotographPhotoBundle:Page:faq.html.twig');
    }

    public function sitemapAction()
    {
        return $this->render('PhotographPhotoBundle:Page:sitemap.html.twig');
    }

    public function prestationsAction()
    {
        return $this->render('PhotographPhotoBundle:Page:prestations.html.twig');
    }

    public function googleFakePageLuxembourgAction()
    {
        return $this->render('PhotographPhotoBundle:Page:mariage-luxembourg.html.twig');
    }

    public function googleFakePageLorraineAction()
    {
        return $this->render('PhotographPhotoBundle:Page:mariage-lorraine.html.twig');
    }

    public function googleFakePageAlsaceAction()
    {
        return $this->render('PhotographPhotoBundle:Page:mariage-alsace.html.twig');
    }

    public function googleFakePageBelgiqueAction()
    {
        return $this->render('PhotographPhotoBundle:Page:mariage-belgique.html.twig');
    }

    public function galleryAction($name)
    {
        $finder = new Finder();
        $path = 'img/gallery/' . str_replace('-', '_', $name);
        $array = array();

        $finder->files()->in('/var/www/ePhotograph/web/' . $path)->sortByName()->depth('== 0');
        foreach ($finder as $file) {
            array_push($array, array('src' => $path . '/thumbs/' . $file->getFilename(), 'href' => $path . '/' . $file->getFilename()));
        }

        return $this->render('PhotographPhotoBundle:Page:gallery.html.twig', array('divs' => $array));
    }
}
