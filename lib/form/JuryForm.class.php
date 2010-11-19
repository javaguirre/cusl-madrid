<?php

/**
 * Jury form.
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
class JuryForm extends BaseJuryForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    $this->widgetSchema['description'] = new sfWidgetFormTextareaTinyMCE(array(
      'width' => 507,
      'height' => 200,
      'config' => 'theme_advanced_disable: "anchor,image,cleanup,help"',
    ));
  }
}
