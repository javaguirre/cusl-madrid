<?php

/**
 * eval_type module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage eval_type
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseEval_typeGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'eval_type' : 'eval_type_'.$action;
  }
}
