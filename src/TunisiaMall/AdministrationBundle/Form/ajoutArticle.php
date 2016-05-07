<?php

namespace TunisiaMall\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;

class ajoutArticle extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomArticle')
                ->add('prixAchat')
                ->add('prixVenteDetail')
                ->add('prixVenteGros')
                ->add('typeArticle','choice', array(
    'choices' => array('Homme' => 'Homme', 'Femme' => 'Femme'),
    'preferred_choices' => array('Selectionner votre Sex'),
))
                ->add('genreArticle')
                ->add('qte')
                ->add('image', new MediaType())
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'nom';
    }

}
