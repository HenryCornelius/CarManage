<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ferrari = new Brand();
        $peugeot = new Brand();
        $volkswagen = new Brand();
        $ferrari->setName('Ferrari')
              ->setUpdatedAt(new \DateTimeImmutable())
              ->setStatus('');
        $peugeot->setName('Peugeot')
              ->setUpdatedAt(new \DateTimeImmutable())
              ->setStatus('');
        $volkswagen->setName('Volkswagen')
              ->setUpdatedAt(new \DateTimeImmutable())
              ->setStatus('');
        
        $manager->persist($ferrari);
        $manager->persist($peugeot);
        $manager->persist($volkswagen);

        $enzo = new Car();
        $partner = new Car();
        $golf = new Car();
        $enzo->setName('Enzo')
            ->setBrand($ferrari)
            ->setYear('2002')
            ->setFuel('Essence')
            ->setColor('Rouge')
            ->setPlacesNumber(2)
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setStatus('');
        $partner->setName('Partner')
            ->setBrand($peugeot)
            ->setYear('2008')
            ->setFuel('Diesel')
            ->setColor('Blanc')
            ->setPlacesNumber(5)
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setStatus('');
        $golf->setName('Golf')
            ->setBrand($volkswagen)
            ->setYear('2016')
            ->setFuel('Hybride')
            ->setColor('Bleu')
            ->setPlacesNumber(5)
            ->setUpdatedAt(new \DateTimeImmutable())
            ->setStatus('');

        $manager->persist($enzo);
        $manager->persist($partner);
        $manager->persist($golf);

        $manager->flush();
    }
}
