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

class DomainDnssecKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainDnssecKey';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainDnssecKey';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainDnssecKey();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('alg', $data) && $data['alg'] !== null) {
            $object->setAlg($data['alg']);
        } elseif (\array_key_exists('alg', $data) && $data['alg'] === null) {
            $object->setAlg(null);
        }
        if (\array_key_exists('flags', $data) && $data['flags'] !== null) {
            $object->setFlags($data['flags']);
        } elseif (\array_key_exists('flags', $data) && $data['flags'] === null) {
            $object->setFlags(null);
        }
        if (\array_key_exists('protocol', $data) && $data['protocol'] !== null) {
            $object->setProtocol($data['protocol']);
        } elseif (\array_key_exists('protocol', $data) && $data['protocol'] === null) {
            $object->setProtocol(null);
        }
        if (\array_key_exists('pub_key', $data) && $data['pub_key'] !== null) {
            $object->setPubKey($data['pub_key']);
        } elseif (\array_key_exists('pub_key', $data) && $data['pub_key'] === null) {
            $object->setPubKey(null);
        }
        if (\array_key_exists('readonly', $data) && $data['readonly'] !== null) {
            $object->setReadonly($data['readonly']);
        } elseif (\array_key_exists('readonly', $data) && $data['readonly'] === null) {
            $object->setReadonly(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAlg()) {
            $data['alg'] = $object->getAlg();
        }
        if (null !== $object->getFlags()) {
            $data['flags'] = $object->getFlags();
        }
        if (null !== $object->getProtocol()) {
            $data['protocol'] = $object->getProtocol();
        }
        if (null !== $object->getPubKey()) {
            $data['pub_key'] = $object->getPubKey();
        }
        if (null !== $object->getReadonly()) {
            $data['readonly'] = $object->getReadonly();
        }
        return $data;
    }
}
