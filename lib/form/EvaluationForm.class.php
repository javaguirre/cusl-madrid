<?php

/**
 * Evaluation form.
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
class EvaluationForm extends BaseEvaluationForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
  }
}
