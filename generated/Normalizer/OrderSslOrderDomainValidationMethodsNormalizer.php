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

class OrderSslOrderDomainValidationMethodsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationMethods';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationMethods';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\OrderSslOrderDomainValidationMethods();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('host_name', $data) && $data['host_name'] !== null) {
            $object->setHostName($data['host_name']);
        } elseif (\array_key_exists('host_name', $data) && $data['host_name'] === null) {
            $object->setHostName(null);
        }
        if (\array_key_exists('method', $data) && $data['method'] !== null) {
            $object->setMethod($data['method']);
        } elseif (\array_key_exists('method', $data) && $data['method'] === null) {
            $object->setMethod(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getHostName()) {
            $data['host_name'] = $object->getHostName();
        }
        if (null !== $object->getMethod()) {
            $data['method'] = $object->getMethod();
        }
        return $data;
    }
}
