<?php

namespace App\Form;

use App\Entity\Level;
use App\Entity\Learner;
use App\Entity\Teacher;
use App\Repository\LevelRepository;
use App\Repository\TeacherRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class LearnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',TextType::class, [
            'label' => 'prénom']
            )
            ->add('lastName',TextType::class, [
                'label' => 'nom']
                )
            ->add('gender', ChoiceType::class, [
                'choices'  => [
                    'Garçon' => true,
                    'Fille' => false,
                ],
                'label' => 'genre'
                ])
            ->add('level', null, [
                'label' => 'niveau scolaire'])
            ->add('teacher', null,[
                'label' => 'enseignant'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Learner::class
        ]);
    }
}
