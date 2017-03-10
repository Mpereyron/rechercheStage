<?php

/**
 * Created by PhpStorm.
 * User: lp
 * Date: 09/03/2017
 * Time: 14:28
 */
namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class etudiantForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['label'=>'Nom'])
            ->add('firstName', TextType::class, ['label'=>'Prenom'])
            ->add('email', EmailType::class, ['label'=>'Email'])
            ->add('CV', FileType::class, ['label'=>'CV'])
            ->add('btnModif', SubmitType::class, ['label'=>'Valider'])
        ;
    }
}