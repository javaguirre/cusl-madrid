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

        $project_jury = new ProjectJury();
        $project_jury->setProjectId($id);
        $project_jury->setJuryId($this->getUser()->getProfile()->getId());
        $project_jury->save();

        $this->getUser()->setFlash('notice', 'Project selected successfully.');

        $this->redirect('project/index');
    }
}
