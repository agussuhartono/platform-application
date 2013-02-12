<?php
namespace Acme\Bundle\DemoDataFlowBundle\Form\Type;

use Oro\Bundle\DataFlowBundle\Form\Type\AbstractConfigurationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Configuration form type
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2012 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 *
 */
class CsvConnectorType extends AbstractConfigurationType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('charset', 'text', array('required' => true));
        $builder->add('delimiter', 'text', array('required' => true));
        $builder->add('enclosure', 'text', array('required' => true));
        $builder->add('escape', 'text', array('required' => true));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Acme\Bundle\DemoDataFlowBundle\Configuration\CsvConfiguration'));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'configuration_csv';
    }
}
