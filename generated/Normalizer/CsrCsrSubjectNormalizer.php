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

class CsrCsrSubjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CsrCsrSubject';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CsrCsrSubject';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CsrCsrSubject();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('common_name', $data) && $data['common_name'] !== null) {
            $object->setCommonName($data['common_name']);
        } elseif (\array_key_exists('common_name', $data) && $data['common_name'] === null) {
            $object->setCommonName(null);
        }
        if (\array_key_exists('country', $data) && $data['country'] !== null) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && $data['country'] === null) {
            $object->setCountry(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('locality', $data) && $data['locality'] !== null) {
            $object->setLocality($data['locality']);
        } elseif (\array_key_exists('locality', $data) && $data['locality'] === null) {
            $object->setLocality(null);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        } elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('state', $data) && $data['state'] !== null) {
            $object->setState($data['state']);
        } elseif (\array_key_exists('state', $data) && $data['state'] === null) {
            $object->setState(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
        } elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCommonName()) {
            $data['common_name'] = $object->getCommonName();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getLocality()) {
            $data['locality'] = $object->getLocality();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getState()) {
            $data['state'] = $object->getState();
        }
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        return $data;
    }
}
