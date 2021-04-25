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

class LicenseKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\LicenseKey';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\LicenseKey';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\LicenseKey();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('item', $data) && $data['item'] !== null) {
            $object->setItem($data['item']);
        } elseif (\array_key_exists('item', $data) && $data['item'] === null) {
            $object->setItem(null);
        }
        if (\array_key_exists('product', $data) && $data['product'] !== null) {
            $object->setProduct($data['product']);
        } elseif (\array_key_exists('product', $data) && $data['product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('sku_values', $data) && $data['sku_values'] !== null) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['sku_values'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSkuValues($values);
        } elseif (\array_key_exists('sku_values', $data) && $data['sku_values'] === null) {
            $object->setSkuValues(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getItem()) {
            $data['item'] = $object->getItem();
        }
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        if (null !== $object->getSkuValues()) {
            $values = array();
            foreach ($object->getSkuValues() as $key => $value) {
                $values[$key] = $value;
            }
            $data['sku_values'] = $values;
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}
