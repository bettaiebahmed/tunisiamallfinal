<?php
namespace TunisiaMall\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class AttribuerPoint extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('nbPoint')
                
                ->add('Modifier', 'submit');
    }

    public function getName() {
        return 'nom';
    }
}