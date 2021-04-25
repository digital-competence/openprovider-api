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

class CsrCreateCsrResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CsrCreateCsrResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CsrCreateCsrResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CsrCreateCsrResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('command', $data) && $data['command'] !== null) {
            $object->setCommand($data['command']);
        } elseif (\array_key_exists('command', $data) && $data['command'] === null) {
            $object->setCommand(null);
        }
        if (\array_key_exists('config', $data) && $data['config'] !== null) {
            $object->setConfig($data['config']);
        } elseif (\array_key_exists('config', $data) && $data['config'] === null) {
            $object->setConfig(null);
        }
        if (\array_key_exists('config_path', $data) && $data['config_path'] !== null) {
            $object->setConfigPath($data['config_path']);
        } elseif (\array_key_exists('config_path', $data) && $data['config_path'] === null) {
            $object->setConfigPath(null);
        }
        if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
            $object->setCsr($data['csr']);
        } elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
            $object->setCsr(null);
        }
        if (\array_key_exists('key', $data) && $data['key'] !== null) {
            $object->setKey($data['key']);
        } elseif (\array_key_exists('key', $data) && $data['key'] === null) {
            $object->setKey(null);
        }
        if (\array_key_exists('key_path', $data) && $data['key_path'] !== null) {
            $object->setKeyPath($data['key_path']);
        } elseif (\array_key_exists('key_path', $data) && $data['key_path'] === null) {
            $object->setKeyPath(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCommand()) {
            $data['command'] = $object->getCommand();
        }
        if (null !== $object->getConfig()) {
            $data['config'] = $object->getConfig();
        }
        if (null !== $object->getConfigPath()) {
            $data['config_path'] = $object->getConfigPath();
        }
        if (null !== $object->getCsr()) {
            $data['csr'] = $object->getCsr();
        }
        if (null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        if (null !== $object->getKeyPath()) {
            $data['key_path'] = $object->getKeyPath();
        }
        return $data;
    }
}
