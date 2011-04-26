<?php

class Concurso
{
  static protected $memcache = null;

  public static function getMemcache()
  {
    if(self::$memcache == null)
    {
        self::$memcache = new sfMemcacheCache();
        self::$memcache->initialize();
    }

    return self::$memcache;
  }

  public static function getDataFromCache($key)
  {
    if(self::$memcache == null)
    {
        self::getMemcache();
    }
    $key = md5($key);
    $data = self::$memcache->get($key);
    $result = null;
    if($data)
    {
        $result = unserialize($data);
    }

    return $result;
  }

  public static function getPlanet()
  {
    $result = self::getDataFromCache('planet');
    
    if ($result == null)
    {
      $projects = ProjectPeer::doSelect(new Criteria());
      $rss = array();
      foreach($projects as $key=>$project)
        {
      //TODO Check Rss
        if ($project->getRss() !== '')
        {
          $feed = sfFeedPeer::createFromWeb($project->getRss());
          
          if(is_object($feed))
          {
            $rss[$key] = $feed;
          }
        }
      }
      $feed = sfFeedPeer::aggregate($rss, array('limit' => 20));
      $result = $feed->getItems();
      self::$memcache->set('planet', $result, 3600);
    }
    
    return $result;
  }

  static public function slugify($text)
  {

      // replace non letter or digits by -
      $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

      // trim
      $text = trim($text, '-');

      // transliterate
      $vowels =   array("a", "e", "i", "o", "u", "n", "" , "a", "e", "i", "o", "u", "c", "a", "e", "i", "o", "u");
      $vowelsacute   =  array("á", "é", "í", "ó", "ú", "ñ", " ", "à", "è", "ì", "ò", "ù", "ç", "Á", "É", "Í", "Ó", "Ú");

      $text = str_replace($vowelsacute, $vowels, $text);


      // lowercase
      $text = strtolower($text);

      // remove unwanted characters
      $text = preg_replace('#[^-\w]+#', '', $text);

      if (empty($text))
      {
        return 'n-a';
      }

      return $text;

  }
    
}