<?php

require_once dirname(__FILE__).'/../lib/evaluationGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/evaluationGeneratorHelper.class.php';

/**
 * evaluation actions.
 *
 * @package    concurso
 * @subpackage evaluation
 * @author     Javier Aguirre
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class evaluationActions extends autoEvaluationActions
{
  public function executeEval(sfWebRequest $request)
  {
    //TODO Get the project and the evaluator from the jury
    $this->form = new ExampleEvalForm();
  }

  public function executeMarks(sfWebRequest $request)
  {
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $this->redirect('evaluation/index');
  }
}
