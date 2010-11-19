<?php

/**
 * Entry form base class.
 *
 * @method Entry getObject() Returns the current form's model object
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
abstract class BaseEntryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'title'      => new sfWidgetFormInputText(),
      'text'       => new sfWidgetFormTextarea(),
      'slug'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Entry', 'column' => 'id', 'required' => false)),
      'title'      => new sfValidatorString(array('max_length' => 255)),
      'text'       => new sfValidatorString(),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Entry', 'column' => array('title'))),
        new sfValidatorPropelUnique(array('model' => 'Entry', 'column' => array('slug'))),
      ))
    );

    $this->widgetSchema->setNameFormat('entry[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Entry';
  }


}
