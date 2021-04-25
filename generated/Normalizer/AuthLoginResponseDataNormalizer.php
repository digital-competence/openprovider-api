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

class AuthLoginResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\AuthLoginResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\AuthLoginResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\AuthLoginResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
            $object->setResellerId($data['reseller_id']);
        } elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
            $object->setResellerId(null);
        }
        if (\array_key_exists('token', $data) && $data['token'] !== null) {
            $object->setToken($data['token']);
        } elseif (\array_key_exists('token', $data) && $data['token'] === null) {
            $object->setToken(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        if (null !== $object->getToken()) {
            $data['token'] = $object->getToken();
        }
        return $data;
    }
}
