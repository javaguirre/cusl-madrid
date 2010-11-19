<?php

/**
 * EvalQuestion form base class.
 *
 * @method EvalQuestion getObject() Returns the current form's model object
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
abstract class BaseEvalQuestionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInputText(),
      'point'        => new sfWidgetFormInputText(),
      'eval_type_id' => new sfWidgetFormPropelChoice(array('model' => 'EvalType', 'add_empty' => false)),
      'comment'      => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'EvalQuestion', 'column' => 'id', 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255)),
      'point'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'eval_type_id' => new sfValidatorPropelChoice(array('model' => 'EvalType', 'column' => 'id')),
      'comment'      => new sfValidatorString(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'EvalQuestion', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('eval_question[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EvalQuestion';
  }


}
