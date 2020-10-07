<?php

namespace App\Form;

use App\Entity\AddWork;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddWorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('via',TextType::class)
            ->add('giorno',ChoiceType::class,[
                'choices' => [
                    'Lunedi' => 'Lunedi',
                    'Martedi' => 'Martedi',
                    'Mercoledi' => 'Mercoledi',
                    'Giovedi' => 'Giovedi',
                    'Venerdi' => 'Venerdi',
                    'Sabato' => 'Sabato',

                ]
            ])
            ->add('aggiungi',SubmitType::class,[

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AddWork::class,
        ]);
    }
}
