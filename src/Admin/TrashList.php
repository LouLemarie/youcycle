<?php

 namespace App\Admin;

 use Sonata\AdminBundle\Admin\AbstractAdmin;
 use Sonata\AdminBundle\Datagrid\ListMapper;
 use Sonata\AdminBundle\Form\FormMapper;
 use Sonata\Form\Validator\ErrorElement;

 final class TrashList extends AbstractAdmin
 {
     protected function configureListFields(ListMapper $listMapper)
     {
         $listMapper
             ->add('title')
             ->add('draft')

         ;
     }
     protected function configureFormFields(FormMapper $formMapper)
     {
        $formMapper
            ->add('benne','localisation',[])
            ->add('enable')
            ->add('title')
            ->add('abstract', null, ['required' => false])
            ->add('content');

     }

 }