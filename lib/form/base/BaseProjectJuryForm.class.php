<?php

/**
 * ProjectJury form base class.
 *
 * @method ProjectJury getObject() Returns the current form's model object
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
abstract class BaseProjectJuryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'project_id' => new sfWidgetFormPropelChoice(array('model' => 'Project', 'add_empty' => false)),
      'jury_id'    => new sfWidgetFormPropelChoice(array('model' => 'Jury', 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'ProjectJury', 'column' => 'id', 'required' => false)),
      'project_id' => new sfValidatorPropelChoice(array('model' => 'Project', 'column' => 'id')),
      'jury_id'    => new sfValidatorPropelChoice(array('model' => 'Jury', 'column' => 'id')),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('project_jury[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjectJury';
  }


}
