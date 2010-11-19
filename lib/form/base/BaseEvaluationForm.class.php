<?php

/**
 * Evaluation form base class.
 *
 * @method Evaluation getObject() Returns the current form's model object
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
abstract class BaseEvaluationForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'devel'           => new sfWidgetFormInputText(),
      'finished'        => new sfWidgetFormInputText(),
      'doc'             => new sfWidgetFormInputText(),
      'community'       => new sfWidgetFormInputText(),
      'comment'         => new sfWidgetFormInputText(),
      'finished_form'   => new sfWidgetFormInputCheckbox(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'project_jury_id' => new sfWidgetFormPropelChoice(array('model' => 'ProjectJury', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorPropelChoice(array('model' => 'Evaluation', 'column' => 'id', 'required' => false)),
      'devel'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'finished'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'doc'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'community'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'comment'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'finished_form'   => new sfValidatorBoolean(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
      'updated_at'      => new sfValidatorDateTime(array('required' => false)),
      'project_jury_id' => new sfValidatorPropelChoice(array('model' => 'ProjectJury', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('evaluation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluation';
  }


}
