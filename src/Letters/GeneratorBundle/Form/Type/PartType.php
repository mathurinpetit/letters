<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class PartType
 * @author mathurin
 */

namespace Letters\GeneratorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface as FBI;

class PartType extends AbstractType
{
    public function buildForm(FBI $builder, array $options)
    {
        $builder->add('type_letter', 'text')
            ->add('type_part', 'text')     
            ->add('part_text', 'text')
            ->add('save', 'submit');
    }

    
    public function getName()
    {
        return 'part';
    }
}
