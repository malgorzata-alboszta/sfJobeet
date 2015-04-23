<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Description of LoadCategoryData
 *
 * @author gosia
 */
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{

    public function getOrder()
    {
        return 1;
    }

    public function load(ObjectManager $manager)
    {
        $fakeCategory = new Category();
        $fakeCategory->setName('IT')->setEnabled(true)
        ->setDescription('Praca przed kompem, zadbaj o wygodne krzesło');
        $manager->persist($fakeCategory);
        $manager->flush();
    }

}
