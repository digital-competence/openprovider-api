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

class DomainRegistryStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainRegistryStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_changeable', $data) && $data['is_changeable'] !== null) {
            $object->setIsChangeable($data['is_changeable']);
        } elseif (\array_key_exists('is_changeable', $data) && $data['is_changeable'] === null) {
            $object->setIsChangeable(null);
        }
        if (\array_key_exists('value', $data) && $data['value'] !== null) {
            $object->setValue($data['value']);
        } elseif (\array_key_exists('value', $data) && $data['value'] === null) {
            $object->setValue(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsChangeable()) {
            $data['is_changeable'] = $object->getIsChangeable();
        }
        if (null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        return $data;
    }
}
