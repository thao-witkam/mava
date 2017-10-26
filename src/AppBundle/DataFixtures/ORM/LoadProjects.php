<?php
/**
 * User: devmob
 * Date: 25/10/2017
 * Time: 00:02
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Project;
use AppBundle\DataFixtures\ORM\LoadWorkspaces;

class LoadProjects extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setTitle('Symfony book');
        $project->setDescription('practice develop a project using symfony in the good way');
        $project->setDueDate(new \DateTime('2017-11-15'));
        $project->setWorkspace($this->getReference('work-space'));
        $manager->persist($project);

        $manager->flush();
        $this->addReference('symfony-project', $project);
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