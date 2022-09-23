<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CancelEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'readonly' => true,
                ],
                'label' => 'Nom de la sortie',
                'label_attr' => [
                    'class' => 'form-label',
                ],
            ])

            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control border border-danger',
                ],
                'label' => 'Motif d annulation',
                'data' => '',
                'label_attr' => [
                'class' => 'form-label text-light',
                ],
                'constraints' => [
                    new Assert\Length(['min' => 10]),
                    new Assert\NotBlank(),
                ],
            ])
            ->add('submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-danger mt-4',
                ],
                'label' => 'Annuler la sortie',
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
