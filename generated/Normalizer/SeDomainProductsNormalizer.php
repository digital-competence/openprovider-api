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

class SeDomainProductsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SeDomainProducts';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SeDomainProducts';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SeDomainProducts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('archiving', $data) && $data['archiving'] !== null) {
            $object->setArchiving($data['archiving']);
        } elseif (\array_key_exists('archiving', $data) && $data['archiving'] === null) {
            $object->setArchiving(null);
        }
        if (\array_key_exists('incoming', $data) && $data['incoming'] !== null) {
            $object->setIncoming($data['incoming']);
        } elseif (\array_key_exists('incoming', $data) && $data['incoming'] === null) {
            $object->setIncoming(null);
        }
        if (\array_key_exists('outgoing', $data) && $data['outgoing'] !== null) {
            $object->setOutgoing($data['outgoing']);
        } elseif (\array_key_exists('outgoing', $data) && $data['outgoing'] === null) {
            $object->setOutgoing(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getArchiving()) {
            $data['archiving'] = $object->getArchiving();
        }
        if (null !== $object->getIncoming()) {
            $data['incoming'] = $object->getIncoming();
        }
        if (null !== $object->getOutgoing()) {
            $data['outgoing'] = $object->getOutgoing();
        }
        return $data;
    }
}
