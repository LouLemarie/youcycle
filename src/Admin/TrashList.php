<?php

 namespace App\Admin;

 use Sonata\AdminBundle\Admin\AbstractAdmin;
 use Sonata\AdminBundle\Datagrid\ListMapper;

 final class TrashList extends AbstractAdmin
 {
     protected function configureListFields(ListMapper $listMapper)
     {
         $listMapper
             ->add('title')
             ->add('draft')
         ;
     }
 }