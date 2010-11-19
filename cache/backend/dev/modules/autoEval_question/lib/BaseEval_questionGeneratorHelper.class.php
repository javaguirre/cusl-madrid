<?php

/**
 * eval_question module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage eval_question
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseEval_questionGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'eval_question' : 'eval_question_'.$action;
  }
}
