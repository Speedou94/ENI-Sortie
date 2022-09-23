<?php

namespace App\Form;

use App\Entity\City;
use App\Entity\Location;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city', EntityType::class, [
                'class' => City::class,
                'label' => 'Les villes',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ],
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
            ])
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '2',
                    'maxlength' => '50',
                ],
                'label' => 'Nom',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ],
                'constraints' => [
                    new Assert\Length(['min' => 2, 'max' => 50]),
                    new Assert\NotBlank(),
                ],
            ])
            ->add('street', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => '2',
                    'maxlength' => '180',
                ],
                'label' => 'Rue',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ],
                'constraints' => [
                    new Assert\Length(['min' => 2, 'max' => 180]),
                    new Assert\NotBlank(),
                ],
            ])
            ->add('latitude', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'precision' => '9',
                    'scale' => '6',
                    'maxlength' => '10',
                ],
                'label' => 'Latitude',
                'required' => false,
                'empty_data' => '0',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ],
                'constraints' => [
                    new Assert\Length(['max' => 10]),
                ],
            ])
            ->add('longitude', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'precision' => '9',
                    'scale' => '6',
                    'maxlength' => '10',
                ],
                'label' => 'Longitude',
                'required' => false,
                'empty_data' => '0',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ],
                'constraints' => [
                    new Assert\Length(['max' => 10]),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter un lieu',
                'attr' => [
                    'class' => 'btn btn-primary mt-4',
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}
