<?php

namespace App\DataFixtures;

use App\Entity\Posts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $factory=Factory::create('fr_FR');

        for ($i=0; $i <100 ; $i++) { 
            $post=new Posts();
            $post->setTitle($factory->sentence(1));
            $post->setContent($factory->sentence(1));
         $manager->persist($post);

        }

        $manager->flush();
    }
}
