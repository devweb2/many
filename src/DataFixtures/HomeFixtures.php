<?php

// src/DataFixtures/HomeFixtures.php

namespace App\DataFixtures;

use App\Entity\Home;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class HomeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $home1 = new Home();
        $home1->setTitre('Bienvenue chez Many');
        $home1->setTexte('Restaurant Afro Caribéen et Européen');
        $home1->setIsactive(true);
        $home1->setSignature(); // Ajoutez une valeur pour 'signature'
        $manager->persist($home1);

        $home2 = new Home();
        $home2->setTitre('Bienvenue chez Many');
        $home2->setTexte("C'est l'été ! Salade à volonté.");
        $home2->setIsactive(false);
        $home2->setSignature(); // Ajoutez une valeur pour 'signature'
        $manager->persist($home2);

        $manager->flush();
    }
}

