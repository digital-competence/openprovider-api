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

class ZoneRecordUpdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ZoneRecordUpdates';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ZoneRecordUpdates';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ZoneRecordUpdates();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('add', $data) && $data['add'] !== null) {
            $values = array();
            foreach ($data['add'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\ZoneRecord', 'json', $context);
            }
            $object->setAdd($values);
        } elseif (\array_key_exists('add', $data) && $data['add'] === null) {
            $object->setAdd(null);
        }
        if (\array_key_exists('remove', $data) && $data['remove'] !== null) {
            $values_1 = array();
            foreach ($data['remove'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\ZoneRecord', 'json', $context);
            }
            $object->setRemove($values_1);
        } elseif (\array_key_exists('remove', $data) && $data['remove'] === null) {
            $object->setRemove(null);
        }
        if (\array_key_exists('replace', $data) && $data['replace'] !== null) {
            $values_2 = array();
            foreach ($data['replace'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DigiComp\\OpenproviderApi\\Model\\ZoneRecord', 'json', $context);
            }
            $object->setReplace($values_2);
        } elseif (\array_key_exists('replace', $data) && $data['replace'] === null) {
            $object->setReplace(null);
        }
        if (\array_key_exists('update', $data) && $data['update'] !== null) {
            $values_3 = array();
            foreach ($data['update'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'DigiComp\\OpenproviderApi\\Model\\ZoneRecordWithOriginal', 'json', $context);
            }
            $object->setUpdate($values_3);
        } elseif (\array_key_exists('update', $data) && $data['update'] === null) {
            $object->setUpdate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdd()) {
            $values = array();
            foreach ($object->getAdd() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['add'] = $values;
        }
        if (null !== $object->getRemove()) {
            $values_1 = array();
            foreach ($object->getRemove() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['remove'] = $values_1;
        }
        if (null !== $object->getReplace()) {
            $values_2 = array();
            foreach ($object->getReplace() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['replace'] = $values_2;
        }
        if (null !== $object->getUpdate()) {
            $values_3 = array();
            foreach ($object->getUpdate() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['update'] = $values_3;
        }
        return $data;
    }
}
