<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_mongodb.odm.metadata.xml' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Mapping/Driver/XmlDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm/lib/Doctrine/ODM/MongoDB/Mapping/Driver/SimplifiedXmlDriver.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/Mapping/Driver/XmlDriver.php';

return $this->services['doctrine_mongodb.odm.metadata.xml'] = new \Doctrine\Bundle\MongoDBBundle\Mapping\Driver\XmlDriver([]);