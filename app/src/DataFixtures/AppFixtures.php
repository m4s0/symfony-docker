<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Guitars');
        $manager->persist($category);

        $product = new Product();
        $product->setName('Gibson Les Paul');
        $product->setCategory($category);
        $manager->persist($product);

        $manager->flush();
    }
}
