<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use App\Entity\Semestre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create("fr_FR");
        for ($c = 1; $c <= 5; $c++) {
            $semestre = new Semestre();
            $semestre->setSemestre("$faker->word")
                ->setFormation("$faker->word")
            ->setCours("$faker->word");
            $manager->persist($semestre);
            for ($i = 0; $i < 10; $i++) {
                $cours = new Cours();
                $cours->setNom("$faker->sentence")
                    ->setDescription(join("\n\n**",$faker->paragraphs))
                    ->setEtcs($i)
                    ->setNombreHeureTD($i)
                    ->setNombreHeureTP($i)
                    ->setCM($i);
                $manager->persist($cours);
            }
        }
        $manager->flush();
    }
}
