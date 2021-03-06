<?php


/**
 * Skeleton subclass for representing a row from the 'project' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.4.1 on:
 *
 * Fri Oct 29 13:36:05 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Project extends BaseProject {
  public function __toString()
  {
    return sprintf('%s', $this->getName());

  }

  public function hasJury()
  {
    $jurys = $this->getProjectJurys();
    
    foreach($jurys as $jury)
    {
        if ($jury->getJuryId() == sfContext::getInstance()->getUser()->getGuardUser()->getProfile()->getId())
        {
            return true;
        }
    }

    return false;
  }

  public function getMarks()
  {

//     $elems = ProjectJuryPeer::doSelectJoinEvaluation($criteria);
    return 0;
  }

  public function getEvals()
  {
    //TODO Number of evals
    return 0;
  }

  public function getTotal()
  {
    //TODO Calculate marks/evals
    return 0;
  }
} // Project
