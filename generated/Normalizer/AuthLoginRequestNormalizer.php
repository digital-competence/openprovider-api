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

class AuthLoginRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\AuthLoginRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\AuthLoginRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\AuthLoginRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
            $object->setIp($data['ip']);
        } elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
            $object->setIp(null);
        }
        if (\array_key_exists('password', $data) && $data['password'] !== null) {
            $object->setPassword($data['password']);
        } elseif (\array_key_exists('password', $data) && $data['password'] === null) {
            $object->setPassword(null);
        }
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getPassword()) {
            $data['password'] = $object->getPassword();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        return $data;
    }
}
