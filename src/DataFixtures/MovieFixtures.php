<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($p = 0; $p < 10; $p++) {
            $movie = new movie;
            $movie->setTitle($faker->title);
            $movie->setImage($faker->image);
            $dateTimeZone = new \DateTimeZone('Europe/Paris');
            $movie->setYear(new \DateTime('now', $dateTimeZone));
            $manager->persist($movie);
        }
        $manager->flush();
    }
}
