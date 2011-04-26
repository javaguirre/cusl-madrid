<?php

class planetTask extends sfBaseTask
{
  protected function configure()
  {

    $this->namespace        = 'task';
    $this->name             = 'planet';
    $this->briefDescription = 'Generates Planet Cache';

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'propel'),
      // add your own options here
    ));

    $this->namespace        = '';
    $this->name             = '';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [adSearchTask|INFO] task does things.
Call it with:

  [php symfony planet|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection = $databaseManager->getDatabase($options['connection'])->getConnection();
    Concurso::getPlanet();
  }
}
