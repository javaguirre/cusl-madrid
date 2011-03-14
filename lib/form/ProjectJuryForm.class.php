<?php

/**
 * ProjectJury form.
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
class ProjectJuryForm extends BaseProjectJuryForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);

    $this->widgetSchema['project_id']->setOption('multiple', true);
    $this->validatorSchema['project_id']->setOption('multiple', true);
  }
}
