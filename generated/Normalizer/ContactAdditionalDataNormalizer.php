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

class ContactAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ContactAdditionalData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ContactAdditionalData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ContactAdditionalData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('birth_city', $data) && $data['birth_city'] !== null) {
            $object->setBirthCity($data['birth_city']);
        } elseif (\array_key_exists('birth_city', $data) && $data['birth_city'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
            $object->setBirthDate($data['birth_date']);
        } elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
            $object->setSocialSecurityNumber($data['social_security_number']);
        } elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
            $object->setSocialSecurityNumber(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBirthCity()) {
            $data['birth_city'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthDate()) {
            $data['birth_date'] = $object->getBirthDate();
        }
        if (null !== $object->getSocialSecurityNumber()) {
            $data['social_security_number'] = $object->getSocialSecurityNumber();
        }
        return $data;
    }
}
