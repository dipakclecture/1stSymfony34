<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Doctrine\Bundle\MongoDBBundle\Command\ShardDoctrineODMCommand' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/AbstractCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Tools/Console/Command/Schema/ShardCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/Command/ShardDoctrineODMCommand.php';

return $this->services['Doctrine\\Bundle\\MongoDBBundle\\Command\\ShardDoctrineODMCommand'] = new \Doctrine\Bundle\MongoDBBundle\Command\ShardDoctrineODMCommand();
