<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;
use App\Entity\Developer;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $projects = [];
        for ($i = 1; $i <= 5; $i++) {
            $project = new Project();
            $project->setName("Project $i");
            $project->setCustomer("Customer $i");
            $manager->persist($project);
            $projects[] = $project;
        }

        for ($i = 1; $i <= 10; $i++) {
            $developer = new Developer();
            $developer->setFullName("Developer $i");
            $developer->setPosition("Position $i");
            $developer->setEmail("developer$i@example.com");
            $developer->setPhone("+7123456789$i");
            $developer->setAge(18+$i);
            $developer->setSalary(50000*$i);

            $assignedProjects = array_rand($projects, rand(1, 3));
            if (!is_array($assignedProjects)) {
                $assignedProjects = [$assignedProjects];
            }
            foreach ($assignedProjects as $projectIndex) {
                $developer->addProject($projects[$projectIndex]);
            }

            $manager->persist($developer);
        }

        $manager->flush();
    }
}
