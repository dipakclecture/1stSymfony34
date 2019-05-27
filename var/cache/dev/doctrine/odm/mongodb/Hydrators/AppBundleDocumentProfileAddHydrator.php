<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class AppBundleDocumentProfileAddHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="int") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['id']['type'];
                $return = (int) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @ReferenceOne */
        if (isset($data['for_id'])) {
            $reference = $data['for_id'];
            $className = $this->unitOfWork->getClassNameForAssociation($this->class->fieldMappings['for_id'], $reference);
            $mongoId = ClassMetadataInfo::getReferenceId($reference, $this->class->fieldMappings['for_id']['storeAs']);
            $targetMetadata = $this->dm->getClassMetadata($className);
            $id = $targetMetadata->getPHPIdentifierValue($mongoId);
            $return = $this->dm->getReference($className, $id);
            $this->class->reflFields['for_id']->setValue($document, $return);
            $hydratedData['for_id'] = $return;
        }

        /** @Field(type="int") */
        if (isset($data['age']) || (! empty($this->class->fieldMappings['age']['nullable']) && array_key_exists('age', $data))) {
            $value = $data['age'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['age']['type'];
                $return = (int) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['age']->setValue($document, $return);
            $hydratedData['age'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['gender']) || (! empty($this->class->fieldMappings['gender']['nullable']) && array_key_exists('gender', $data))) {
            $value = $data['gender'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['gender']['type'];
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['gender']->setValue($document, $return);
            $hydratedData['gender'] = $return;
        }

        /** @Field(type="timestamp") */
        if (isset($data['created']) || (! empty($this->class->fieldMappings['created']['nullable']) && array_key_exists('created', $data))) {
            $value = $data['created'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['created']['type'];
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['created']->setValue($document, $return);
            $hydratedData['created'] = $return;
        }

        /** @Field(type="timestamp") */
        if (isset($data['updated']) || (! empty($this->class->fieldMappings['updated']['nullable']) && array_key_exists('updated', $data))) {
            $value = $data['updated'];
            if ($value !== null) {
                $typeIdentifier = $this->class->fieldMappings['updated']['type'];
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['updated']->setValue($document, $return);
            $hydratedData['updated'] = $return;
        }
        return $hydratedData;
    }
}