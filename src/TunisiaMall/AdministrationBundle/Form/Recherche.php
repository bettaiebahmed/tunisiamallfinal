<?php

namespace TunisiaMall\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TunisiaMall\AdminBundle\Form\MediaType;

class Recherche extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nomArticle')
                
                ->add('Recherche', 'submit');
    }

    public function getName() {
        return 'nom';
    }

}
