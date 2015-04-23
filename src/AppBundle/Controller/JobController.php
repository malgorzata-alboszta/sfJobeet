<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of JobController
 *
 * @author gosia
 */
class JobController extends Controller
{

    /**
     * @Route ("/oferty/{id}", name="oferty")
     * @Template()
     * @param Category $category
     */
    public function listAction(Category $category)
    {
        $jobs = $this->getDoctrine()
                ->getRepository('AppBundle:Job')
                ->findBy(
                        array('category' => $category), 
                        array('publishedAt' => 'DESC'), 
                        10
                        );
        
        return array (
            'lista_ofert'=> $jobs, 
            'nazwa_kategorii' => $category ->getName()
        );
    }

}
