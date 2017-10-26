<?php
/**
 * User: devmob
 * Date: 24/10/2017
 * Time: 23:05
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUsers extends AbstractFixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName('John');
        $user1->setEmail('john@mava.info');
        $user1->setBio('He is a cool guy');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('Jack');
        $user2->setEmail('jack@mava.info');
        $user2->setBio('He is a cool guy too');
        $manager->persist($user2);

        $manager->flush();

        $this->addReference('user-1', $user1);
        $this->addReference('user-2', $user2);
    }
}