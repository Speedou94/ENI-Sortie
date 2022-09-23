<?php

namespace App\EventSubscriber;

use App\Entity\City;
use App\Entity\Location;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class FormEventSubscriber implements EventSubscriberInterface
{
    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::POST_SET_DATA => 'onPostSetData',
        ];
    }

    /**
     * Verifie sur le formulaire est de type creation ou mise a jour.
     */
    public function onPostSetData(FormEvent $event): void
    {
        $form = $event->getForm();
        $city = $form->getConfig()->getOption('event_city');
        $isNew = boolval($event->getForm()->getData()->getId());
        if (!$isNew) {
            $form->add('city', EntityType::class, [
              'empty_data' => 'Ville',
              'class' => City::class,
              'attr' => [
                  'class' => 'form-select read-only',
              ],
              'label' => 'Ville',
              'label_attr' => [
                  'class' => 'form-label mt-3',
              ],
              'placeholder' => 'Ville',
              'choice_label' => 'name',
              'multiple' => false,
              'expanded' => false,
              'mapped' => false,
              'required' => false,
         ])
                ->add('submit', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-primary mt-4',
                    ],
                    'label' => 'Valider',
                ]);
        } else {
            $event->getForm()
                ->add('location', EntityType::class, [
                'class' => Location::class,
                'query_builder' => function (EntityRepository $repository) use ($city) {
                    return $repository->createQueryBuilder('l')
                        ->select('l')
                        ->join('l.city', 'c')
                        ->where('c.name = :name')
                        ->setParameter('name', $city);
                },
                'attr' => [
                    'class' => 'form-select',
                    'id' => 'location',
                ],
                'label' => 'Lieu',
                'empty_data' => 'default value',
                'label_attr' => [
                    'class' => 'form-label mt-3',
                ],
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false,
            ])
                ->add('city', TextType::class, [
                    'attr' => [
                        'class' => 'form-control',
                        'disabled' => true,
                    ],
                    'label' => 'Ville',
                    'label_attr' => [
                        'class' => 'form-label mt-3',
                    ],
                    'mapped' => false,
                    'data' => $city,
                ])
                ->add('submit', SubmitType::class, [
                    'attr' => [
                        'class' => 'btn btn-primary mt-4',
                    ],
                    'label' => 'Modifier',
                ]);
        }
    }
}
