<?php

namespace Bundles\AdminGeneratorBundle\Form\Type\Language;

use Admingenerated\AdminGeneratorBundle\Form\BaseLanguageType\NewType as BaseNewType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Type;

/**
 * NewType
 */
class NewType extends BaseNewType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $formOptions = $this->getFormOption('name', [
            'required' => true,
            'label' => 'Language',
            'translation_domain' => 'Admin',
            'constraints' => [
                new Type('string'),
                new Length(['max' => 255]),
            ],
        ]);
        $builder->add('name', 'text', $formOptions);
    }
}
