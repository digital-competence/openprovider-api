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

class ContactAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ContactAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ContactAddress';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ContactAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('city', $data) && $data['city'] !== null) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && $data['city'] === null) {
            $object->setCity(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('number', $data) && $data['number'] !== null) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('street', $data) && $data['street'] !== null) {
            $object->setStreet($data['street']);
        } elseif (\array_key_exists('street', $data) && $data['street'] === null) {
            $object->setStreet(null);
        }
        if (\array_key_exists('suffix', $data) && $data['suffix'] !== null) {
            $object->setSuffix($data['suffix']);
        } elseif (\array_key_exists('suffix', $data) && $data['suffix'] === null) {
            $object->setSuffix(null);
        }
        if (\array_key_exists('zipcode', $data) && $data['zipcode'] !== null) {
            $object->setZipcode($data['zipcode']);
        } elseif (\array_key_exists('zipcode', $data) && $data['zipcode'] === null) {
            $object->setZipcode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getStreet()) {
            $data['street'] = $object->getStreet();
        }
        if (null !== $object->getSuffix()) {
            $data['suffix'] = $object->getSuffix();
        }
        if (null !== $object->getZipcode()) {
            $data['zipcode'] = $object->getZipcode();
        }
        return $data;
    }
}
