<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FamilleBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of AccrecType
 *
 * @author Boukhchina Alaa
 */
class AccrecType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
                $builder
                ->add('ref','text',array("label"=>'Reference : ' ,'attr'=> array('class'=>'form-group form-control') ))
                ->add('des','text',array("label"=>'Designation : ' ,'attr'=> array('class'=>'form-group form-control') ))
                ->add('unite','text',array("label"=>'Unite : ' ,'attr'=> array('class'=>'form-group form-control') ))   
                ->add('qte','integer',array("label"=>'Quantite : ','attr'=> array('class'=>'form-group form-control') ))
                ->add('prix','text',array("label"=>'Prix H.T : ','attr'=> array('class'=>'form-group form-control') ))
                ->add('valider', 'submit', array('label' => 'Cliquer ici pour valider' , 'attr'=> array('class'=>'form-group btn btn-info')));
        
    }
    public function getName() {
    }


}
