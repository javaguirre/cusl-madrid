<?php

/**
 * jury actions.
 *
 * @package    concurso
 * @subpackage jury
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class juryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jurys =JuryPeer::doSelect(new Criteria());
  }
}
