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
    $criteria = new Criteria();
    $criteria->setLimit(5);
    $criteria->addDescendingOrderByColumn('created_at');
    $this->entrys = EntryPeer::doSelect($criteria);

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
    $projects =ProjectPeer::doSelect(new Criteria());
    $rss = array();
    foreach($projects as $key=>$project)
    {
      //TODO Check Rss
      if ($project->getRss() !== '')
      {
        $rss[$key] = sfFeedPeer::createFromWeb($project->getRss());
      }
    }

    $this->feed = sfFeedPeer::aggregate($rss, array('limit' => 20));
  }
  public function executeRssplanet(sfWebRequest $request)
  {
    $projects =ProjectPeer::doSelect(new Criteria());
    $rss = array();
    foreach($projects as $key=>$project)
    {
      //TODO Check Rss
      if ($project->getRss() !== '')
      {
        $rss[$key] = sfFeedPeer::createFromWeb($project->getRss());
      }
    }

    $this->feed = sfFeedPeer::aggregate($rss, array('limit' => 20));
  }
}