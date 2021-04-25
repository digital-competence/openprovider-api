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

class ZoneRecordWithOriginalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ZoneRecordWithOriginal';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ZoneRecordWithOriginal';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ZoneRecordWithOriginal();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('original_record', $data) && $data['original_record'] !== null) {
            $object->setOriginalRecord($this->denormalizer->denormalize($data['original_record'], 'DigiComp\\OpenproviderApi\\Model\\ZoneRecord', 'json', $context));
        } elseif (\array_key_exists('original_record', $data) && $data['original_record'] === null) {
            $object->setOriginalRecord(null);
        }
        if (\array_key_exists('record', $data) && $data['record'] !== null) {
            $object->setRecord($this->denormalizer->denormalize($data['record'], 'DigiComp\\OpenproviderApi\\Model\\ZoneRecord', 'json', $context));
        } elseif (\array_key_exists('record', $data) && $data['record'] === null) {
            $object->setRecord(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getOriginalRecord()) {
            $data['original_record'] = $this->normalizer->normalize($object->getOriginalRecord(), 'json', $context);
        }
        if (null !== $object->getRecord()) {
            $data['record'] = $this->normalizer->normalize($object->getRecord(), 'json', $context);
        }
        return $data;
    }
}
