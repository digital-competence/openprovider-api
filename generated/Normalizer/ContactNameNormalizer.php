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

class ContactNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ContactName';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ContactName';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ContactName();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        } elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('full_name', $data) && $data['full_name'] !== null) {
            $object->setFullName($data['full_name']);
        } elseif (\array_key_exists('full_name', $data) && $data['full_name'] === null) {
            $object->setFullName(null);
        }
        if (\array_key_exists('initials', $data) && $data['initials'] !== null) {
            $object->setInitials($data['initials']);
        } elseif (\array_key_exists('initials', $data) && $data['initials'] === null) {
            $object->setInitials(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        } elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('prefix', $data) && $data['prefix'] !== null) {
            $object->setPrefix($data['prefix']);
        } elseif (\array_key_exists('prefix', $data) && $data['prefix'] === null) {
            $object->setPrefix(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getFullName()) {
            $data['full_name'] = $object->getFullName();
        }
        if (null !== $object->getInitials()) {
            $data['initials'] = $object->getInitials();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getPrefix()) {
            $data['prefix'] = $object->getPrefix();
        }
        return $data;
    }
}
