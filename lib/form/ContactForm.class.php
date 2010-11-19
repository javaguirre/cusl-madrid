<?php

class ContactForm extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormInput(),
      'email'   => new sfWidgetFormInput(),
      'message' => new sfWidgetFormTextarea(),
    ));
    $this->widgetSchema->setLabels(array(
      'name' => 'Nombre: ',
      'email' => 'Email: ',
      'message' => 'Mensaje: '
    ));

    $this->widgetSchema['name']->setAttribute('class', 'input-text');
    $this->widgetSchema['email']->setAttribute('class', 'input-text');
    $this->widgetSchema['message']->setAttribute('class', 'input-text');
    $this->widgetSchema['name']->setAttribute('size', '30');
    $this->widgetSchema['email']->setAttribute('size', '30');
    $this->widgetSchema['message']->setAttribute('rows', '20');

    $this->validatorSchema['message'] = new sfValidatorString(array('max_length' => 1200));
    $this->validatorSchema['name'] = new sfValidatorString(array('max_length' => 50));
    $this->validatorSchema['email'] = new sfValidatorString(array('max_length' => 50));
    $this->validatorSchema['email'] = new sfValidatorAnd(array(
      $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));

    $this->getValidator('name')->setMessage('required','Debe introducir el destinatario');
    $this->getValidator('email')->setMessage('invalid','Formato de email incorrecto : xx@xx.xx');
    $this->getValidator('message')->setMessage('required','Debe introducir un mensaje');
//     $this->widgetSchema['captcha'] = new sfWidgetCaptchaGD();
//
//     $this->validatorSchema['captcha'] = new sfCaptchaGDValidator(array('length' => 4, 'required' => true));
  }
}