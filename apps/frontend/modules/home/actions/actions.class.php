<?php

/**
 * home actions.
 *
 * @package    concurso
 * @subpackage home
 * @author     Javier Aguirre
 */
class homeActions extends sfActions
{

  /**
  * Shows the Main Menu of the Backend
  * Takes the current user for the new comments "warning"
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->entrys = EntryPeer::getPublishedEntries(5);
    $this->feed = sfFeedPeer::createFromWeb('http://www.concursosoftwarelibre.org/1011/rss.xml');
  }

  public function executeContact(sfWebRequest $request)
  {
     $this->form = new ContactForm();
  }

  public function executeSend(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));
    $params = array(
      'name'    => $request->getParameter('name'),
      'email'   => $request->getParameter('email'),
      'message' => $request->getParameter('message'),
    );

//     echo $request->getParameter('captcha');
    $message = $this->getMailer()->compose(
          array( $params['email'] => $params['name']),
          'contacto@javaguirre.net',
          'Correo enviado desde el form de contacto',
          $params['message']);

    if ($this->getMailer()->send($message))
    {
      $this->getUser()->setFlash('notice', sprintf('Correo enviado'));
    }
    else
    {
      $this->getUser()->setFlash('error', sprintf('Correo no enviado'));
    }
    $this->redirect('home/index');
  }

  public function executeBase(sfWebRequest $request)
  {
  }
  
  public function executeParticipate(sfWebRequest $request)
  {
  }
  
  public function executePlanet(sfWebRequest $request)
  {
    $this->items = Concurso::getPlanet();
  }
  
  public function executeRssplanet(sfWebRequest $request)
  {
    $this->items = Concurso::getPlanet();
  }
  
}