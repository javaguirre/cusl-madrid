<?php

/**
 * ProjectJury filter form base class.
 *
 * @package    concurso
 * @subpackage filter
 * @author     Javier Aguirre
 */
abstract class BaseProjectJuryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'project_id' => new sfWidgetFormPropelChoice(array('model' => 'Project', 'add_empty' => true)),
      'jury_id'    => new sfWidgetFormPropelChoice(array('model' => 'Jury', 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'project_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Project', 'column' => 'id')),
      'jury_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Jury', 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('project_jury_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjectJury';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'project_id' => 'ForeignKey',
      'jury_id'    => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
