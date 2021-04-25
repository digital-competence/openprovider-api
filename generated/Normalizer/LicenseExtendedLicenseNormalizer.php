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

class LicenseExtendedLicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\LicenseExtendedLicense';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\LicenseExtendedLicense';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\LicenseExtendedLicense();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activation_code', $data) && $data['activation_code'] !== null) {
            $object->setActivationCode($data['activation_code']);
        } elseif (\array_key_exists('activation_code', $data) && $data['activation_code'] === null) {
            $object->setActivationCode(null);
        }
        if (\array_key_exists('billing_type', $data) && $data['billing_type'] !== null) {
            $object->setBillingType($data['billing_type']);
        } elseif (\array_key_exists('billing_type', $data) && $data['billing_type'] === null) {
            $object->setBillingType(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('contract', $data) && $data['contract'] !== null) {
            $object->setContract($data['contract']);
        } elseif (\array_key_exists('contract', $data) && $data['contract'] === null) {
            $object->setContract(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('extensions', $data) && $data['extensions'] !== null) {
            $values = array();
            foreach ($data['extensions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\LicenseExtendedLicense', 'json', $context);
            }
            $object->setExtensions($values);
        } elseif (\array_key_exists('extensions', $data) && $data['extensions'] === null) {
            $object->setExtensions(null);
        }
        if (\array_key_exists('features', $data) && $data['features'] !== null) {
            $values_1 = array();
            foreach ($data['features'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\LicenseLicenseItem', 'json', $context);
            }
            $object->setFeatures($values_1);
        } elseif (\array_key_exists('features', $data) && $data['features'] === null) {
            $object->setFeatures(null);
        }
        if (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] !== null) {
            $object->setIpAddressBinding($data['ip_address_binding']);
        } elseif (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] === null) {
            $object->setIpAddressBinding(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_2 = array();
            foreach ($data['items'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setItems($values_2);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('key', $data) && $data['key'] !== null) {
            $object->setKey($this->denormalizer->denormalize($data['key'], 'DigiComp\\OpenproviderApi\\Model\\LicenseKey', 'json', $context));
        } elseif (\array_key_exists('key', $data) && $data['key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('key_id', $data) && $data['key_id'] !== null) {
            $object->setKeyId($data['key_id']);
        } elseif (\array_key_exists('key_id', $data) && $data['key_id'] === null) {
            $object->setKeyId(null);
        }
        if (\array_key_exists('key_number', $data) && $data['key_number'] !== null) {
            $object->setKeyNumber($data['key_number']);
        } elseif (\array_key_exists('key_number', $data) && $data['key_number'] === null) {
            $object->setKeyNumber(null);
        }
        if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
            $object->setOrderDate($data['order_date']);
        } elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('parent_key_id', $data) && $data['parent_key_id'] !== null) {
            $object->setParentKeyId($data['parent_key_id']);
        } elseif (\array_key_exists('parent_key_id', $data) && $data['parent_key_id'] === null) {
            $object->setParentKeyId(null);
        }
        if (\array_key_exists('period', $data) && $data['period'] !== null) {
            $object->setPeriod($data['period']);
        } elseif (\array_key_exists('period', $data) && $data['period'] === null) {
            $object->setPeriod(null);
        }
        if (\array_key_exists('product', $data) && $data['product'] !== null) {
            $object->setProduct($data['product']);
        } elseif (\array_key_exists('product', $data) && $data['product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('sku_values', $data) && $data['sku_values'] !== null) {
            $values_3 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['sku_values'] as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $object->setSkuValues($values_3);
        } elseif (\array_key_exists('sku_values', $data) && $data['sku_values'] === null) {
            $object->setSkuValues(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
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
        if (null !== $object->getActivationCode()) {
            $data['activation_code'] = $object->getActivationCode();
        }
        if (null !== $object->getBillingType()) {
            $data['billing_type'] = $object->getBillingType();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getContract()) {
            $data['contract'] = $object->getContract();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getExtensions()) {
            $values = array();
            foreach ($object->getExtensions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['extensions'] = $values;
        }
        if (null !== $object->getFeatures()) {
            $values_1 = array();
            foreach ($object->getFeatures() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['features'] = $values_1;
        }
        if (null !== $object->getIpAddressBinding()) {
            $data['ip_address_binding'] = $object->getIpAddressBinding();
        }
        if (null !== $object->getItems()) {
            $values_2 = array();
            foreach ($object->getItems() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['items'] = $values_2;
        }
        if (null !== $object->getKey()) {
            $data['key'] = $this->normalizer->normalize($object->getKey(), 'json', $context);
        }
        if (null !== $object->getKeyId()) {
            $data['key_id'] = $object->getKeyId();
        }
        if (null !== $object->getKeyNumber()) {
            $data['key_number'] = $object->getKeyNumber();
        }
        if (null !== $object->getOrderDate()) {
            $data['order_date'] = $object->getOrderDate();
        }
        if (null !== $object->getParentKeyId()) {
            $data['parent_key_id'] = $object->getParentKeyId();
        }
        if (null !== $object->getPeriod()) {
            $data['period'] = $object->getPeriod();
        }
        if (null !== $object->getProduct()) {
            $data['product'] = $object->getProduct();
        }
        if (null !== $object->getSkuValues()) {
            $values_3 = array();
            foreach ($object->getSkuValues() as $key => $value_3) {
                $values_3[$key] = $value_3;
            }
            $data['sku_values'] = $values_3;
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}
