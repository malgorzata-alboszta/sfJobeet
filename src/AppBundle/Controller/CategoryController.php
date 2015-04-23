<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of CategoryController
 *
 * @author gosia
 */
class CategoryController extends Controller
{

    /**
     * @Template()
     */
    public function listAction()
    {
        $categories = $this->getDoctrine()
                ->getRepository('AppBundle:Category')
                ->findAll();
        
        return array(
            'lista_kategorii' => $categories,
        );
    }

}
