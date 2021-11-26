<?php

namespace App\Form;

use App\Entity\Questions;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Game4QType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $qTest = $this->getDoctrine()->getRepository(Questions::class);
        $qTest = $qTest->findOneBy(['type' => 1, 'difficulty' => 1]);

        $A1 = qTest.question;

        $builder

            ->add(
                'Reponses',
                ChoiceType::class, 
                [
                    'choices' => [
                        $A1 => 'A1',
                        'A2' => 'A2',
                        'A3' => 'A3',
                        'A4' => 'A4',
                    ],
                'expanded' => true
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
