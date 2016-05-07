<?php
namespace TunisiaMall\AdminBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
class AjoutCarteFid extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('numCarte')
                ->add('validite')
                ->add('nbPoint')
                ->add('Ajouter', 'submit');
    }

    public function getName() {
        return 'nom';
    }
}