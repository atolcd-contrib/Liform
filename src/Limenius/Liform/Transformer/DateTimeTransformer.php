<?php

namespace Limenius\Liform\Transformer;

use Symfony\Component\Form\FormInterface;

/**
 */
class DateTimeTransformer extends AbstractTransformer
{
  /**
   * {@inheritdoc}
   */
  public function transform(FormInterface $form, array $extensions = [], $widget = null)
  {
    $schema = [
      'type' => 'string',
      'title' => 'Date-time',
      'format' => 'date-time',
    ];
    $schema = $this->addCommonSpecs($form, $schema, $extensions, $widget);
    
    return $schema;
  }
}
