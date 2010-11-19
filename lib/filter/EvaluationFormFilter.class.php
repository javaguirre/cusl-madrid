<?php

/**
 * Evaluation filter form.
 *
 * @package    concurso
 * @subpackage filter
 * @author     Javier Aguirre
 */
class EvaluationFormFilter extends BaseEvaluationFormFilter
{
  public function configure()
  {
    $this->useFields(array('project_jury_id'));
  }
}
