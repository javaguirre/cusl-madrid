<?php

/**
 * entry actions.
 *
 * @package    concurso
 * @subpackage entry
 * @author     Javier Aguirre
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class entryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->entrys = EntryPeer::getPublishedEntries();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->entry = EntryPeer::retrieveBySlug($request->getParameter('slug'));
    $this->getResponse()->addMeta('keywords', $this->entry->getMeta());
    $this->getResponse()->addMeta('description', $this->entry->getText());
    $this->forward404Unless($this->entry);
  }

  public function executeFeed(sfWebRequest $request)
  {
    $feed = new sfAtom1Feed();

    $feed->setTitle('Concurso Software Libre de Madrid');
    $feed->setLink('http://www.cuslmadrid.org');
    $feed->setAuthorEmail('contacto@javaguirre.net');
    $feed->setAuthorName('CUSL Madrid');

    $criteria = new Criteria();
    $criteria->setLimit(5);
    $criteria->addAscendingOrderByColumn('created_at');
    $entries = EntryPeer::doSelect($criteria);

    foreach ($entries as $entry)
    {
      $item = new sfFeedItem();
      $item->setTitle($entry->getTitle());
      $item->setLink('@entry_show?id='.$entry->getId().'&slug='.$entry->getSlug());
      $item->setPubdate($entry->getCreatedAt('U'));
      $item->setUniqueId($entry->getId());
      $item->setDescription($entry->getText());
      $feed->addItem($item);
  }
  $this->feed = $feed;
  }

  public function executeRss(sfWebRequest $request)
  {
    $feed = new sfRss201Feed();

    $feed->setTitle('Concurso Software Libre de Madrid');
    $feed->setLink('http://www.cuslmadrid.org');
    $feed->setAuthorEmail('contacto@javaguirre.net');
    $feed->setAuthorName('CUSL Madrid');
    $criteria = new Criteria();
    $criteria->setLimit(5);
    $criteria->addAscendingOrderByColumn('created_at');
    $entries = EntryPeer::doSelect($criteria);

    foreach ($entries as $entry)
    {
      $item = new sfFeedItem();
      $item->setTitle($entry->getTitle());
      $item->setLink('@entry_show?id='.$entry->getId().'&slug='.$entry->getSlug());
      $item->setPubdate($entry->getCreatedAt('U'));
      $item->setUniqueId($entry->getId());
      $item->setDescription($entry->getText());

      $feed->addItem($item);
  }
  $this->feed = $feed;
  }
}
