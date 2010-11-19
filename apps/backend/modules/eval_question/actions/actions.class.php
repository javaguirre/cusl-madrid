<?php

require_once dirname(__FILE__).'/../lib/eval_questionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/eval_questionGeneratorHelper.class.php';

/**
 * eval_question actions.
 *
 * @package    concurso
 * @subpackage eval_question
 * @author     Javier Aguirre
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class eval_questionActions extends autoEval_questionActions
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

    $this->points = 0;
    $questions = $this->pager->getResults();
    foreach ($questions as $question)
    {
      $this->points += $question->getPoint();
    }
  }

}
