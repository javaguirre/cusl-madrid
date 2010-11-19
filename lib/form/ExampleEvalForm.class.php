<?php

/**
 * Evaluation form.
 *
 * @package    concurso
 * @subpackage form
 * @author     Javier Aguirre
 */
class ExampleEvalForm extends sfForm
{
  public function configure()
  {
    $questions = EvalQuestionPeer::doSelect(new Criteria());

    foreach($questions as $question)
    {
      $this->widgetSchema[Concurso::slugify($question->getName())] = new sfWidgetFormChoice(array(
                                                  'choices' => range(0, $question->getPoint()),
                                                  'label' => $question->getName()
                                                  ));
      $this->widgetSchema->setHelp(Concurso::slugify($question->getName()), $question->getComment());
      $this->validatorSchema[Concurso::slugify($question->getName())] = new sfValidatorInteger(array(
                                                    'min' => -2147483648,
                                                    'max' => 2147483647
                                                  ));
    }

    $this->widgetSchema['comment'] = new sfWidgetFormTextareaTinyMCE(array(
      'width' => 507,
      'height' => 200,
      'config' => 'theme_advanced_disable: "anchor,image,cleanup,help"',
    ));

    $this->widgetSchema->setNameFormat('evaluation[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }
}
