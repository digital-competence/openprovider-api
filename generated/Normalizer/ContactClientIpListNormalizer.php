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

class ContactClientIpListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ContactClientIpList';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ContactClientIpList';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ContactClientIpList();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('allow', $data) && $data['allow'] !== null) {
            $values = array();
            foreach ($data['allow'] as $value) {
                $values[] = $value;
            }
            $object->setAllow($values);
        } elseif (\array_key_exists('allow', $data) && $data['allow'] === null) {
            $object->setAllow(null);
        }
        if (\array_key_exists('deny', $data) && $data['deny'] !== null) {
            $values_1 = array();
            foreach ($data['deny'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDeny($values_1);
        } elseif (\array_key_exists('deny', $data) && $data['deny'] === null) {
            $object->setDeny(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAllow()) {
            $values = array();
            foreach ($object->getAllow() as $value) {
                $values[] = $value;
            }
            $data['allow'] = $values;
        }
        if (null !== $object->getDeny()) {
            $values_1 = array();
            foreach ($object->getDeny() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['deny'] = $values_1;
        }
        return $data;
    }
}
