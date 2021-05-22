<?php

namespace App\DataFixtures;

use App\Entity\Observation;
use App\Entity\SetPoint;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture 
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $observation = new Observation();
        $observation->setDatetime(new \DateTime('now'));
        $observation->setValue('35.6');

        $setPoint = new SetPoint();
        $setPoint->setBaseTemperature('30');
        $setPoint->setRadius('1');
        $setPoint->setDatetime(new \DateTime('now'));
        $setPoint->addObservation($observation);

        $user = new User();
        $user->setEmail('admin@example.com');
        $user->setName('Francesco Borri');
        $hash = $this->encoder->encodePassword($user, 'Abcd1234');
        $user->setPassword($hash);
        $user->addSetPoint($setPoint);

        $manager->persist($user);
        $manager->persist($setPoint);
        $manager->persist($observation);
        $manager->flush();
    }
}
