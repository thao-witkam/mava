<?php
/**
 * Created by PhpStorm.
 * User: devmob
 * Date: 25/10/2017
 * Time: 23:11
 */

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Task;

class LoadTasks extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $task1 = new Task();
        $task1->setProject($this->getReference('symfony-project'));
        $task1->setTitle('Download Symfony 3');
        $task1->setDescription('Download Symfony execute file to /usr/local/bin/');
        $task1->setDueDate(new \DateTime('2017-10-23'));
        $task1->setUser($this->getReference('user-1'));
        $manager->persist($task1);

        $task2 = new Task();
        $task2->setProject($this->getReference('symfony-project'));
        $task2->setTitle('Create new project');
        $task2->setDescription('Run symfony create project');
        $task2->setDueDate(new \DateTime('2017-10-23'));
        $task2->setUser($this->getReference('user-1'));
        $manager->persist($task2);

        $task3 = new Task();
        $task3->setProject($this->getReference('symfony-project'));
        $task3->setTitle('build EER diagram - Enhanced Entity Relationship Diagram');
        $task3->setDescription('create EER using MySQL Workbench');
        $task3->setDueDate(new \DateTime('2017-10-25'));
        $task3->setUser($this->getReference('user-2'));
        $manager->persist($task3);

        $manager->flush();


    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        // TODO: Implement getOrder() method.
    }
}