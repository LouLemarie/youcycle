<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/03/2019
 * Time: 11:06
 */

namespace App\Form;

use App\Entity\Admin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AdminType extends AbstractType
{
    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('name', TextType::class)
            ->add('firstname', TextType::class)
            ->add('pwd', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_option' => array('label' => 'Password'),
                'second_option' => array('label' => 'Repeat Password'),
            ));
    }

    public function buildLoginForm(FormBuilderInterface $builder)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('pwd', PasswordType::class);
    }

    public function configueOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Admin::class,
        ));
    }
}