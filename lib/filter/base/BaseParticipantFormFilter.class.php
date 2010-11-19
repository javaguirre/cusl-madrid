<?php

/**
 * Participant filter form base class.
 *
 * @package    concurso
 * @subpackage filter
 * @author     Javier Aguirre
 */
abstract class BaseParticipantFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'university' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'project_id' => new sfWidgetFormPropelChoice(array('model' => 'Project', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'university' => new sfValidatorPass(array('required' => false)),
      'project_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Project', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('participant_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Participant';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'university' => 'Text',
      'project_id' => 'ForeignKey',
    );
  }
}
