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

class CsrCsrPublicKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CsrCsrPublicKey';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CsrCsrPublicKey';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CsrCsrPublicKey();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bits', $data) && $data['bits'] !== null) {
            $object->setBits($data['bits']);
        } elseif (\array_key_exists('bits', $data) && $data['bits'] === null) {
            $object->setBits(null);
        }
        if (\array_key_exists('key', $data) && $data['key'] !== null) {
            $object->setKey($data['key']);
        } elseif (\array_key_exists('key', $data) && $data['key'] === null) {
            $object->setKey(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBits()) {
            $data['bits'] = $object->getBits();
        }
        if (null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        return $data;
    }
}
