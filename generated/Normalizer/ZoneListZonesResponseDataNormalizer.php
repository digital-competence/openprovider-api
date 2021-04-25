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

class ZoneListZonesResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ZoneListZonesResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ZoneListZonesResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ZoneListZonesResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('results', $data) && $data['results'] !== null) {
            $values = array();
            foreach ($data['results'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\ZoneZone', 'json', $context);
            }
            $object->setResults($values);
        } elseif (\array_key_exists('results', $data) && $data['results'] === null) {
            $object->setResults(null);
        }
        if (\array_key_exists('total', $data) && $data['total'] !== null) {
            $object->setTotal($data['total']);
        } elseif (\array_key_exists('total', $data) && $data['total'] === null) {
            $object->setTotal(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getResults()) {
            $values = array();
            foreach ($object->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['results'] = $values;
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        return $data;
    }
}
