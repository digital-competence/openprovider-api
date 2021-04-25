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

class DomainApiHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainApiHistory';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainApiHistory';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainApiHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cmd', $data) && $data['cmd'] !== null) {
            $object->setCmd($data['cmd']);
        } elseif (\array_key_exists('cmd', $data) && $data['cmd'] === null) {
            $object->setCmd(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
        } elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('domain_id', $data) && $data['domain_id'] !== null) {
            $object->setDomainId($data['domain_id']);
        } elseif (\array_key_exists('domain_id', $data) && $data['domain_id'] === null) {
            $object->setDomainId(null);
        }
        if (\array_key_exists('in', $data) && $data['in'] !== null) {
            $object->setIn($data['in']);
        } elseif (\array_key_exists('in', $data) && $data['in'] === null) {
            $object->setIn(null);
        }
        if (\array_key_exists('out', $data) && $data['out'] !== null) {
            $object->setOut($data['out']);
        } elseif (\array_key_exists('out', $data) && $data['out'] === null) {
            $object->setOut(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCmd()) {
            $data['cmd'] = $object->getCmd();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getDomainId()) {
            $data['domain_id'] = $object->getDomainId();
        }
        if (null !== $object->getIn()) {
            $data['in'] = $object->getIn();
        }
        if (null !== $object->getOut()) {
            $data['out'] = $object->getOut();
        }
        return $data;
    }
}
