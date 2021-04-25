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

class DomainAbuseDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainAbuseDetails';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainAbuseDetails';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainAbuseDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('abuse_id', $data) && $data['abuse_id'] !== null) {
            $object->setAbuseId($data['abuse_id']);
        } elseif (\array_key_exists('abuse_id', $data) && $data['abuse_id'] === null) {
            $object->setAbuseId(null);
        }
        if (\array_key_exists('is_domain_held', $data) && $data['is_domain_held'] !== null) {
            $object->setIsDomainHeld($data['is_domain_held']);
        } elseif (\array_key_exists('is_domain_held', $data) && $data['is_domain_held'] === null) {
            $object->setIsDomainHeld(null);
        }
        if (\array_key_exists('message', $data) && $data['message'] !== null) {
            $object->setMessage($data['message']);
        } elseif (\array_key_exists('message', $data) && $data['message'] === null) {
            $object->setMessage(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAbuseId()) {
            $data['abuse_id'] = $object->getAbuseId();
        }
        if (null !== $object->getIsDomainHeld()) {
            $data['is_domain_held'] = $object->getIsDomainHeld();
        }
        if (null !== $object->getMessage()) {
            $data['message'] = $object->getMessage();
        }
        return $data;
    }
}
