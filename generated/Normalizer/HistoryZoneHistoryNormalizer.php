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

class HistoryZoneHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\HistoryZoneHistory';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\HistoryZoneHistory';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\HistoryZoneHistory();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate($data['date']);
        } elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('is', $data) && $data['is'] !== null) {
            $object->setIs($data['is']);
        } elseif (\array_key_exists('is', $data) && $data['is'] === null) {
            $object->setIs(null);
        }
        if (\array_key_exists('source', $data) && $data['source'] !== null) {
            $object->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && $data['source'] === null) {
            $object->setSource(null);
        }
        if (\array_key_exists('was', $data) && $data['was'] !== null) {
            $object->setWas($data['was']);
        } elseif (\array_key_exists('was', $data) && $data['was'] === null) {
            $object->setWas(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if (null !== $object->getIs()) {
            $data['is'] = $object->getIs();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getWas()) {
            $data['was'] = $object->getWas();
        }
        return $data;
    }
}
