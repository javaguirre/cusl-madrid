<?php

/**
 * project actions.
 *
 * @package    concurso
 * @subpackage project
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class projectActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->projects = ProjectPeer::doSelect(new Criteria());
    $this->count_projects = ProjectPeer::doCount(new Criteria());
    $this->num_participants = ParticipantPeer::doCount(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->project = ProjectPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->project);
  }
}
