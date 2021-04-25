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

class OrderListOrdersRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\OrderListOrdersRequestOrderBy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\OrderListOrdersRequestOrderBy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\OrderListOrdersRequestOrderBy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active_date', $data) && $data['active_date'] !== null) {
            $object->setActiveDate($data['active_date']);
        } elseif (\array_key_exists('active_date', $data) && $data['active_date'] === null) {
            $object->setActiveDate(null);
        }
        if (\array_key_exists('common_name', $data) && $data['common_name'] !== null) {
            $object->setCommonName($data['common_name']);
        } elseif (\array_key_exists('common_name', $data) && $data['common_name'] === null) {
            $object->setCommonName(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
            $object->setOrderDate($data['order_date']);
        } elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('product_name', $data) && $data['product_name'] !== null) {
            $object->setProductName($data['product_name']);
        } elseif (\array_key_exists('product_name', $data) && $data['product_name'] === null) {
            $object->setProductName(null);
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
        if (null !== $object->getActiveDate()) {
            $data['active_date'] = $object->getActiveDate();
        }
        if (null !== $object->getCommonName()) {
            $data['common_name'] = $object->getCommonName();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getOrderDate()) {
            $data['order_date'] = $object->getOrderDate();
        }
        if (null !== $object->getProductName()) {
            $data['product_name'] = $object->getProductName();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}
