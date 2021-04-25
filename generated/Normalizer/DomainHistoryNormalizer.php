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

class DomainHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainHistory';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainHistory';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('contents', $data) && $data['contents'] !== null) {
            $object->setContents($data['contents']);
        } elseif (\array_key_exists('contents', $data) && $data['contents'] === null) {
            $object->setContents(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($data['domain']);
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
            $object->setIp($data['ip']);
        } elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
            $object->setIp(null);
        }
        if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
            $object->setSubject($data['subject']);
        } elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
            $object->setSubject(null);
        }
        if (\array_key_exists('timestamp', $data) && $data['timestamp'] !== null) {
            $object->setTimestamp($data['timestamp']);
        } elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
            $object->setTimestamp(null);
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
        if (null !== $object->getContents()) {
            $data['contents'] = $object->getContents();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getSubject()) {
            $data['subject'] = $object->getSubject();
        }
        if (null !== $object->getTimestamp()) {
            $data['timestamp'] = $object->getTimestamp();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}
