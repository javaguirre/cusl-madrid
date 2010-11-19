<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <title>Noticias</title>
  <subtitle>Últimas noticias</subtitle>
  <link href="<?php echo url_for('entry', array('sf_format' => 'atom'), true) ?>" rel="self"/>
  <link href="<?php echo url_for('@homepage', true) ?>"/>
  <updated><?php echo gmstrftime('%Y-%m-%dT%H:%M:%SZ', Doctrine_Core::getTable('Entry')->createQuery('a')->execute() ?></updated>
  <author><name>Concurso Software Libre</name></author>
  <id><?php echo sha1(url_for('entry', array('sf_format' => 'atom'), true)) ?></id>

  <entry>
    <title>Job title</title>
    <link href="" />
    <id>Unique id</id>
    <updated></updated>
    <summary>Job description</summary>
    <author><name>Company</name></author>
  </entry>
</feed>