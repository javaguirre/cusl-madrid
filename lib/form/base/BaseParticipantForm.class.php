<?php

/**
 * Participant form base class.
 *
 * @method Participant getObject() Returns the current form's model object
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
abstract class BaseParticipantForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'university' => new sfWidgetFormInputText(),
      'project_id' => new sfWidgetFormPropelChoice(array('model' => 'Project', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Participant', 'column' => 'id', 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'university' => new sfValidatorString(array('max_length' => 255)),
      'project_id' => new sfValidatorPropelChoice(array('model' => 'Project', 'column' => 'id')),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Participant', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('participant[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Participant';
  }


}
