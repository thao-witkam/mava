<?php
/**
 * User: devmob
 * Date: 25/10/2017
 * Time: 22:52
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Workspace;

class LoadWorkspaces extends AbstractFixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $workspace = new Workspace();
        $workspace->setTitle('learning');
        $workspace->setDescription('an example project');
        $workspace->setDueDate(new \DateTime('2017-11-01'));
        $manager->persist($workspace);
        $manager->flush();

        $this->addReference('work-space', $workspace);
    }
}