<?php

/**
 * Project form.
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
class ProjectForm extends BaseProjectForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
  }
}
