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

class DomainRegistryStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatuses';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatuses';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainRegistryStatuses();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('client_hold', $data) && $data['client_hold'] !== null) {
            $object->setClientHold($this->denormalizer->denormalize($data['client_hold'], 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatus', 'json', $context));
        } elseif (\array_key_exists('client_hold', $data) && $data['client_hold'] === null) {
            $object->setClientHold(null);
        }
        if (\array_key_exists('client_transfer_prohibited', $data) && $data['client_transfer_prohibited'] !== null) {
            $object->setClientTransferProhibited($this->denormalizer->denormalize($data['client_transfer_prohibited'], 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatus', 'json', $context));
        } elseif (\array_key_exists('client_transfer_prohibited', $data) && $data['client_transfer_prohibited'] === null) {
            $object->setClientTransferProhibited(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClientHold()) {
            $data['client_hold'] = $this->normalizer->normalize($object->getClientHold(), 'json', $context);
        }
        if (null !== $object->getClientTransferProhibited()) {
            $data['client_transfer_prohibited'] = $this->normalizer->normalize($object->getClientTransferProhibited(), 'json', $context);
        }
        return $data;
    }
}
