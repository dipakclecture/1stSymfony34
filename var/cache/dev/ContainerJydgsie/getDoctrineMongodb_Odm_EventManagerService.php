<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_mongodb.odm.event_manager' shared service.

include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/EventManager.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/ContainerAwareEventManager.php';

return $this->services['doctrine_mongodb.odm.event_manager'] = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
