<?php

namespace RichBrains\Bundles\AdminGeneratorBundle\Form\Type\Language;

use Admingenerated\RichBrainsAdminGeneratorBundle\Form\BaseLanguageType\EditType as BaseEditType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Type;

/**
 * EditType
 */
class EditType extends BaseEditType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $formOptions = $this->getFormOption('name', [
            'required' => true,
            'trim' => true,
            'label' => 'Name',
            'translation_domain' => 'Admin',
            'constraints' => [
                new Type('string'),
                new Length(['max' => 255]),
            ],
        ]);
        $builder->add('name', 'text', $formOptions);
    }
}
