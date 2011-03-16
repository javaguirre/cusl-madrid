<?php

require_once dirname(__FILE__).'/../lib/project_juryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/project_juryGeneratorHelper.class.php';

/**
 * project_jury actions.
 *
 * @package    concurso
 * @subpackage project_jury
 * @author     Javier Aguirre
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class project_juryActions extends autoProject_juryActions
{
    public function executeListEvaluate(sfWebRequest $request)
    {
        $this->redirect('evaluation/eval?id='.$request->getParameter('id'));
    }
}
