<?php

/**
 * evaluation module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage evaluation
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseEvaluationGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%devel%% - %%finished%% - %%doc%% - %%community%% - %%comment%% - %%finished_form%% - %%created_at%% - %%updated_at%% - %%project_jury_id%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Evaluation List';
  }

  public function getEditTitle()
  {
    return 'Edit Evaluation';
  }

  public function getNewTitle()
  {
    return 'New Evaluation';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'devel',  2 => 'finished',  3 => 'doc',  4 => 'community',  5 => 'comment',  6 => 'finished_form',  7 => 'created_at',  8 => 'updated_at',  9 => 'project_jury_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'devel' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'finished' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'doc' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'community' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'comment' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'finished_form' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Boolean',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'project_jury_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'devel' => array(),
      'finished' => array(),
      'doc' => array(),
      'community' => array(),
      'comment' => array(),
      'finished_form' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'project_jury_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'devel' => array(),
      'finished' => array(),
      'doc' => array(),
      'community' => array(),
      'comment' => array(),
      'finished_form' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'project_jury_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'devel' => array(),
      'finished' => array(),
      'doc' => array(),
      'community' => array(),
      'comment' => array(),
      'finished_form' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'project_jury_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'devel' => array(),
      'finished' => array(),
      'doc' => array(),
      'community' => array(),
      'comment' => array(),
      'finished_form' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'project_jury_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'devel' => array(),
      'finished' => array(),
      'doc' => array(),
      'community' => array(),
      'comment' => array(),
      'finished_form' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'project_jury_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'EvaluationForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'EvaluationFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfPropelPager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getPeerMethod()
  {
    return 'doSelect';
  }

  public function getPeerCountMethod()
  {
    return 'doCount';
  }
}
