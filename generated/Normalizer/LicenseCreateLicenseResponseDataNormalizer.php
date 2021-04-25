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

class LicenseCreateLicenseResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\LicenseCreateLicenseResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\LicenseCreateLicenseResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\LicenseCreateLicenseResponseData();
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
        if (\array_key_exists('key_id', $data) && $data['key_id'] !== null) {
            $object->setKeyId($data['key_id']);
        } elseif (\array_key_exists('key_id', $data) && $data['key_id'] === null) {
            $object->setKeyId(null);
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
        if (null !== $object->getKeyId()) {
            $data['key_id'] = $object->getKeyId();
        }
        return $data;
    }
}
