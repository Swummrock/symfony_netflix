<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures
// extends Fixture

{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('john@wick.us');
        // $user->setPassword($this->passwordEncoder->hashPassword(
        //     $user,
        //     'wick'
        // ));
        $manager->persist($user);
        $user2 = new User();
        $user2->setEmail('se13@gp.fr');
        // $user2->setPassword($this->passwordEncoder->hashPassword(
        //     $user2,
        //     'SE13'
        // ));
        $manager->persist($user2);
        $manager->flush();
    }
}
