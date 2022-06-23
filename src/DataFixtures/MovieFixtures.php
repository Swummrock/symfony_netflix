<?php

namespace App\DataFixtures;

use App\Entity\movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();

        $movie->setTitle('Game of Throne');

        $movie->setImage('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ-tLgIt3dwgSlbWGnWFdzCiNuxifSvpJCCTk8dsODbSHuiRsu5');

        $movie->setYear('2011');

        $movie->setType("Drame");



        $manager->persist($movie);



        $movie2 = new Movie();

        $movie2->setTitle('Star Wars');

        $movie2->setImage('https://upload.wikimedia.org/wikipedia/commons/6/6c/Star_Wars_Logo.svg');

        $movie2->setYear('1977');

        $movie2->setType("Action");
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('The Hobbit');
        $movie3->setImage('https://static.hitek.fr/img/actualite/ill_m/158956086/lehobbittrilogie.webp');
        $movie3->setYear('2012');
        $movie3->setType("Fantasy");
        $manager->persist($movie3);

        // $faker = Factory::create('fr_FR');

        // for ($p = 0; $p < 10; $p++) {
        //     $movie = new movie;
        //     $movie->setTitle($faker->title);
        //     $movie->setImage($faker->image);
        //     $movie->setType("SF");
        //     $dateTimeZone = new \DateTimeZone('Europe/Paris');
        //     $movie->setYear(new \DateTime('now', $dateTimeZone));
        //     $manager->persist($movie);
        // }
         $manager->flush();
    }
}
