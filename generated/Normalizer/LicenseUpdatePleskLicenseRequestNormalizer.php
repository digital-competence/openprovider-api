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

class LicenseUpdatePleskLicenseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\LicenseUpdatePleskLicenseRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\LicenseUpdatePleskLicenseRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\LicenseUpdatePleskLicenseRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attached_keys', $data) && $data['attached_keys'] !== null) {
            $values = array();
            foreach ($data['attached_keys'] as $value) {
                $values[] = $value;
            }
            $object->setAttachedKeys($values);
        } elseif (\array_key_exists('attached_keys', $data) && $data['attached_keys'] === null) {
            $object->setAttachedKeys(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] !== null) {
            $object->setIpAddressBinding($data['ip_address_binding']);
        } elseif (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] === null) {
            $object->setIpAddressBinding(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_1 = array();
            foreach ($data['items'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setItems($values_1);
        } elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('key_id', $data) && $data['key_id'] !== null) {
            $object->setKeyId($data['key_id']);
        } elseif (\array_key_exists('key_id', $data) && $data['key_id'] === null) {
            $object->setKeyId(null);
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
        if (\array_key_exists('restrict_ip_binding', $data) && $data['restrict_ip_binding'] !== null) {
            $object->setRestrictIpBinding($data['restrict_ip_binding']);
        } elseif (\array_key_exists('restrict_ip_binding', $data) && $data['restrict_ip_binding'] === null) {
            $object->setRestrictIpBinding(null);
        }
        if (\array_key_exists('suspended', $data) && $data['suspended'] !== null) {
            $object->setSuspended($data['suspended']);
        } elseif (\array_key_exists('suspended', $data) && $data['suspended'] === null) {
            $object->setSuspended(null);
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
        if (null !== $object->getAttachedKeys()) {
            $values = array();
            foreach ($object->getAttachedKeys() as $value) {
                $values[] = $value;
            }
            $data['attached_keys'] = $values;
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getIpAddressBinding()) {
            $data['ip_address_binding'] = $object->getIpAddressBinding();
        }
        if (null !== $object->getItems()) {
            $values_1 = array();
            foreach ($object->getItems() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['items'] = $values_1;
        }
        if (null !== $object->getKeyId()) {
            $data['key_id'] = $object->getKeyId();
        }
        if (null !== $object->getParentKeyId()) {
            $data['parent_key_id'] = $object->getParentKeyId();
        }
        if (null !== $object->getPeriod()) {
            $data['period'] = $object->getPeriod();
        }
        if (null !== $object->getRestrictIpBinding()) {
            $data['restrict_ip_binding'] = $object->getRestrictIpBinding();
        }
        if (null !== $object->getSuspended()) {
            $data['suspended'] = $object->getSuspended();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}
