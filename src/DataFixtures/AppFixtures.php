<?php

namespace App\DataFixtures;

use App\Entity\Learner;
use App\Entity\Level;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /* Level */
        $level_01 = new Level();
        $level_01->setGrade('Maternelle');
        $level_01->setSchoolClass('Petite Section');
        $manager->persist($level_01);
        $level_02 = new Level();
        $level_02->setGrade('Maternelle');
        $level_02->setSchoolClass('Moyenne Section');
        $manager->persist($level_02);
        $level_03 = new Level();
        $level_03->setGrade('Maternelle');
        $level_03->setSchoolClass('Grande Section');
        $manager->persist($level_03);

        $level_04 = new Level();
        $level_04->setGrade('Primaire');
        $level_04->setSchoolClass('CP');
        $manager->persist($level_04);
        $level_05 = new Level();
        $level_05->setGrade('Primaire');
        $level_05->setSchoolClass('CE1');
        $manager->persist($level_05);
        $level_06 = new Level();
        $level_06->setGrade('Primaire');
        $level_06->setSchoolClass('CE2');
        $manager->persist($level_06);
        $level_07 = new Level();
        $level_07->setGrade('Primaire');
        $level_07->setSchoolClass('CM1');
        $manager->persist($level_07);
        $level_08 = new Level();
        $level_08->setGrade('Primaire');
        $level_08->setSchoolClass('CM2');
        $manager->persist($level_08);

        $level_09 = new Level();
        $level_09->setGrade('Collège');
        $level_09->setSchoolClass('Sixième');
        $manager->persist($level_09);
        $level_10 = new Level();
        $level_10->setGrade('Collège');
        $level_10->setSchoolClass('Cinquième');
        $manager->persist($level_10);
        $level_11 = new Level();
        $level_11->setGrade('Collège');
        $level_11->setSchoolClass('Quatrième');
        $manager->persist($level_11);
        $level_12 = new Level();
        $level_12->setGrade('Collège');
        $level_12->setSchoolClass('Troisième');
        $manager->persist($level_12);

        $level_13 = new Level();
        $level_13->setGrade('Lycée');
        $level_13->setSchoolClass('Seconde');
        $manager->persist($level_13);
        $level_14 = new Level();
        $level_14->setGrade('Lycée');
        $level_14->setSchoolClass('Première');
        $manager->persist($level_14);
        $level_15 = new Level();
        $level_15->setGrade('Lycée');
        $level_15->setSchoolClass('Terminale');
        $manager->persist($level_15);

        /* Learner */
        $learner_01 = new Learner();
        $learner_01->setFirstName('Shemsedine');
        $learner_01->setLastName('Giannotta');
        $learner_01->setGender(true);
        $learner_01->setLevel($level_06);
        $manager->persist($learner_01);
        $learner_02 = new Learner();
        $learner_02->setFirstName('Souleyman');
        $learner_02->setLastName('Giannotta');
        $learner_02->setGender(true);
        $learner_02->setLevel($level_05);
        $manager->persist($learner_02);
        $learner_03 = new Learner();
        $learner_03->setFirstName('Bilel');
        $learner_03->setLastName('Giannotta');
        $learner_03->setGender(true);
        $learner_03->setLevel($level_04);
        $manager->persist($learner_03);
        $learner_04 = new Learner();
        $learner_04->setFirstName('Hafsa');
        $learner_04->setLastName('Giannotta');
        $learner_04->setGender(false);
        $learner_04->setLevel($level_02);
        $manager->persist($learner_04);
        $learner_05 = new Learner();
        $learner_05->setFirstName('OubaydoulLah');
        $learner_05->setLastName('Giannotta');
        $learner_05->setGender(true);
        $learner_05->setLevel($level_01);
        $manager->persist($learner_05);


        $manager->flush();
    }
}
