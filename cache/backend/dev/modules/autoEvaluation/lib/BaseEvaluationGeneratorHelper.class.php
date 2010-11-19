<?php

/**
 * evaluation module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage evaluation
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseEvaluationGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'evaluation' : 'evaluation_'.$action;
  }
}
