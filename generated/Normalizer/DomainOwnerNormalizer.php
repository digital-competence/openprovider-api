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

class DomainOwnerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainOwner';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainOwner';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainOwner();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
            $object->setCompanyName($data['company_name']);
        } elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
            $object->setCompanyName(null);
        }
        if (\array_key_exists('full_name', $data) && $data['full_name'] !== null) {
            $object->setFullName($data['full_name']);
        } elseif (\array_key_exists('full_name', $data) && $data['full_name'] === null) {
            $object->setFullName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCompanyName()) {
            $data['company_name'] = $object->getCompanyName();
        }
        if (null !== $object->getFullName()) {
            $data['full_name'] = $object->getFullName();
        }
        return $data;
    }
}
