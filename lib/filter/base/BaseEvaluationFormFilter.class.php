<?php

/**
 * Evaluation filter form base class.
 *
 * @package    concurso
 * @subpackage filter
 * @author     Javier Aguirre
 */
abstract class BaseEvaluationFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'devel'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'finished'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'community'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment'         => new sfWidgetFormFilterInput(),
      'finished_form'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'project_jury_id' => new sfWidgetFormPropelChoice(array('model' => 'ProjectJury', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'devel'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'finished'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'doc'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'community'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'comment'         => new sfValidatorPass(array('required' => false)),
      'finished_form'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'project_jury_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'ProjectJury', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('evaluation_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluation';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'devel'           => 'Number',
      'finished'        => 'Number',
      'doc'             => 'Number',
      'community'       => 'Number',
      'comment'         => 'Text',
      'finished_form'   => 'Boolean',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
      'project_jury_id' => 'ForeignKey',
    );
  }
}
