<?php

namespace Limenius\Liform\Transformer;

use Symfony\Component\Form\FormInterface;

/**
 */
class FileTransformer extends AbstractTransformer
{
  /**
   * {@inheritdoc}
   */
  public function transform(FormInterface $form, array $extensions = [], $widget = null)
  {
    $schema = [
      'type' => 'string',
      'format' => 'data-url',
    ];
    $schema = $this->addCommonSpecs($form, $schema, $extensions, $widget);
    
    return $schema;
  }
}
