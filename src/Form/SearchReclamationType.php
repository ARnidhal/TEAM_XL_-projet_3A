<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType; // Importez DateType
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            
            ->add('category', ChoiceType::class, [
                'required' => false,
                'label' => 'Catégorie',
                'choices' => [
                    'Technique' => 'Technique',
                    'Design/UI' => 'Design/UI',
                    'Contenu' => 'Contenu',
                    'Sécurité' => 'Sécurité',
                    'Communication/Support' => 'Communication/Support',
                ],
            ])
            // Ajoutez le champ de date de soumission
            ->add('submissionDate', DateType::class, [
                'required' => false,
                'label' => 'Date de soumission',
                'widget' => 'single_text',
                // Ajoutez d'autres options selon vos besoins
            ]);
            // Ajoutez d'autres champs selon vos besoins
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configurez les options par défaut du formulaire
        ]);
    }
}
