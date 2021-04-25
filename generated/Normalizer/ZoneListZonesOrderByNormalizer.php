<?php

namespace DigiComp\OpenproviderApi\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use DigiComp\OpenproviderApi\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ZoneListZonesOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ZoneListZonesOrderBy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ZoneListZonesOrderBy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ZoneListZonesOrderBy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
            $object->setCreationDate($data['creation_date']);
        } elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
            $object->setModificationDate($data['modification_date']);
        } elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
            $object->setModificationDate(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreationDate()) {
            $data['creation_date'] = $object->getCreationDate();
        }
        if (null !== $object->getModificationDate()) {
            $data['modification_date'] = $object->getModificationDate();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
}
