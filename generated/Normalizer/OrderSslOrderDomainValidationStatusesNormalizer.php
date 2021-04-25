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

class OrderSslOrderDomainValidationStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationStatuses';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\OrderSslOrderDomainValidationStatuses';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\OrderSslOrderDomainValidationStatuses();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ca_operation', $data) && $data['ca_operation'] !== null) {
            $object->setCaOperation($data['ca_operation']);
        } elseif (\array_key_exists('ca_operation', $data) && $data['ca_operation'] === null) {
            $object->setCaOperation(null);
        }
        if (\array_key_exists('ca_order_status', $data) && $data['ca_order_status'] !== null) {
            $object->setCaOrderStatus($data['ca_order_status']);
        } elseif (\array_key_exists('ca_order_status', $data) && $data['ca_order_status'] === null) {
            $object->setCaOrderStatus(null);
        }
        if (\array_key_exists('ca_status', $data) && $data['ca_status'] !== null) {
            $object->setCaStatus($data['ca_status']);
        } elseif (\array_key_exists('ca_status', $data) && $data['ca_status'] === null) {
            $object->setCaStatus(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCaOperation()) {
            $data['ca_operation'] = $object->getCaOperation();
        }
        if (null !== $object->getCaOrderStatus()) {
            $data['ca_order_status'] = $object->getCaOrderStatus();
        }
        if (null !== $object->getCaStatus()) {
            $data['ca_status'] = $object->getCaStatus();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}
