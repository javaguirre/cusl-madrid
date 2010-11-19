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
  }
}
