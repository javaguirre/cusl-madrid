<?php

require_once dirname(__FILE__).'/../lib/projectGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/projectGeneratorHelper.class.php';

/**
 * project actions.
 *
 * @package    concurso
 * @subpackage project
 * @author     Javier Aguirre
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class projectActions extends autoProjectActions
{
    public function executeIndex(sfWebRequest $request)
    {
      // sorting
      if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort')))
      {
        $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
      }

      // pager
      if ($request->getParameter('page'))
      {
        $this->setPage($request->getParameter('page'));
     } 

      $this->pager = $this->getPager();
      $this->sort = $this->getSort();

      //Provisional :-)
      $grafica = array(array(1,1), array(1.5, 2.25), array(2,4), array(2.5,6.25), array(3,9), array(3.5,12.25), array(4,16));
      $this->grafica = json_encode($grafica);
    }

    public function executeBatchChoose(sfWebRequest $request)
    {
        $ids = $request->getParameter('ids');

        //Provisional
        foreach ($ids as $id)
        {
            $project_jury = new ProjectJury();
            $project_jury->setProjectId($id);
            $project_jury->setJuryId($this->getUser()->getProfile()->getId());
            $project_jury->save();
            //TODO If existsTuple...
        }
        
        $this->getUser()->setFlash('notice', 'Projects selected successfully.');

        $this->redirect('project/index');
    }

    public function executeListChoose(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $criteria = new Criteria();
        $criteria->add(ProjectJuryPeer::PROJECT_ID, $id);
        $criteria->add(ProjectJuryPeer::JURY_ID, $this->getUser()->getProfile()->getId());
        $elem = ProjectJuryPeer::doSelectOne($criteria);
        
        if($elem == null)
        {
            $project_jury = new ProjectJury();
            $project_jury->setProjectId($id);
            $project_jury->setJuryId($this->getUser()->getProfile()->getId());
            $project_jury->save();
        }
        $this->getUser()->setFlash('notice', 'Project selected successfully.');

        $this->redirect('project/index');
    }
}
