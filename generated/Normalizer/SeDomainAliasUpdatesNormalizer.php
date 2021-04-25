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

class SeDomainAliasUpdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SeDomainAliasUpdates';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SeDomainAliasUpdates';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SeDomainAliasUpdates();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('add', $data) && $data['add'] !== null) {
            $values = array();
            foreach ($data['add'] as $value) {
                $values[] = $value;
            }
            $object->setAdd($values);
        } elseif (\array_key_exists('add', $data) && $data['add'] === null) {
            $object->setAdd(null);
        }
        if (\array_key_exists('remove', $data) && $data['remove'] !== null) {
            $values_1 = array();
            foreach ($data['remove'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setRemove($values_1);
        } elseif (\array_key_exists('remove', $data) && $data['remove'] === null) {
            $object->setRemove(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdd()) {
            $values = array();
            foreach ($object->getAdd() as $value) {
                $values[] = $value;
            }
            $data['add'] = $values;
        }
        if (null !== $object->getRemove()) {
            $values_1 = array();
            foreach ($object->getRemove() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['remove'] = $values_1;
        }
        return $data;
    }
}
