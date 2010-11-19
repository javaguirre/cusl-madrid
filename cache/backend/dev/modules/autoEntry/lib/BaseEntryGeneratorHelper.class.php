<?php

/**
 * entry module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage entry
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseEntryGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'entry' : 'entry_'.$action;
  }
}
