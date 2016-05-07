<?php

namespace TunisiaMall\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;

class modifArticle extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomArticle')
                ->add('prixAchat')
                ->add('prixVenteDetail')
                ->add('prixVenteGros')
                ->add('typeArticle')
                ->add('genreArticle')
                ->add('qte')

                ->add('Modifier', 'submit');
    }

    public function getName() {
        return 'nom';
    }

}
