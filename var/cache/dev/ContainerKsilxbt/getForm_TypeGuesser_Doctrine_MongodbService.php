<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.type_guesser.doctrine.mongodb' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeGuesserInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/mongodb-odm-bundle/Form/DoctrineMongoDBTypeGuesser.php';

return $this->services['form.type_guesser.doctrine.mongodb'] = new \Doctrine\Bundle\MongoDBBundle\Form\DoctrineMongoDBTypeGuesser(${($_ = isset($this->services['doctrine_mongodb']) ? $this->services['doctrine_mongodb'] : $this->getDoctrineMongodbService()) && false ?: '_'});
