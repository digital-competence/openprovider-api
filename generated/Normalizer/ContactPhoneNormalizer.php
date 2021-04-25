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

class ContactPhoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ContactPhone';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ContactPhone';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ContactPhone();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('area_code', $data) && $data['area_code'] !== null) {
            $object->setAreaCode($data['area_code']);
        } elseif (\array_key_exists('area_code', $data) && $data['area_code'] === null) {
            $object->setAreaCode(null);
        }
        if (\array_key_exists('country_code', $data) && $data['country_code'] !== null) {
            $object->setCountryCode($data['country_code']);
        } elseif (\array_key_exists('country_code', $data) && $data['country_code'] === null) {
            $object->setCountryCode(null);
        }
        if (\array_key_exists('subscriber_number', $data) && $data['subscriber_number'] !== null) {
            $object->setSubscriberNumber($data['subscriber_number']);
        } elseif (\array_key_exists('subscriber_number', $data) && $data['subscriber_number'] === null) {
            $object->setSubscriberNumber(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAreaCode()) {
            $data['area_code'] = $object->getAreaCode();
        }
        if (null !== $object->getCountryCode()) {
            $data['country_code'] = $object->getCountryCode();
        }
        if (null !== $object->getSubscriberNumber()) {
            $data['subscriber_number'] = $object->getSubscriberNumber();
        }
        return $data;
    }
}
