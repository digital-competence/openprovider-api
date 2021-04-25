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

class ZoneUpdateZoneRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ZoneUpdateZoneRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ZoneUpdateZoneRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ZoneUpdateZoneRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($this->denormalizer->denormalize($data['domain'], 'DigiComp\\OpenproviderApi\\Model\\ZoneDomain', 'json', $context));
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
            $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
        } elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
            $object->setIsSpamexpertsEnabled(null);
        }
        if (\array_key_exists('master_ip', $data) && $data['master_ip'] !== null) {
            $object->setMasterIp($data['master_ip']);
        } elseif (\array_key_exists('master_ip', $data) && $data['master_ip'] === null) {
            $object->setMasterIp(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('records', $data) && $data['records'] !== null) {
            $object->setRecords($this->denormalizer->denormalize($data['records'], 'DigiComp\\OpenproviderApi\\Model\\ZoneRecordUpdates', 'json', $context));
        } elseif (\array_key_exists('records', $data) && $data['records'] === null) {
            $object->setRecords(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDomain()) {
            $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsSpamexpertsEnabled()) {
            $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
        }
        if (null !== $object->getMasterIp()) {
            $data['master_ip'] = $object->getMasterIp();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getRecords()) {
            $data['records'] = $this->normalizer->normalize($object->getRecords(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}
