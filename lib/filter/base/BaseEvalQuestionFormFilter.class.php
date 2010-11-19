<?php

/**
 * EvalQuestion filter form base class.
 *
 * @package    concurso
 * @subpackage filter
 * @author     Javier Aguirre
 */
abstract class BaseEvalQuestionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'point'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'eval_type_id' => new sfWidgetFormPropelChoice(array('model' => 'EvalType', 'add_empty' => true)),
      'comment'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'         => new sfValidatorPass(array('required' => false)),
      'point'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'eval_type_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'EvalType', 'column' => 'id')),
      'comment'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('eval_question_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EvalQuestion';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'name'         => 'Text',
      'point'        => 'Number',
      'eval_type_id' => 'ForeignKey',
      'comment'      => 'Text',
    );
  }
}
