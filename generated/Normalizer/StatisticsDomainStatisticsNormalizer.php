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

class StatisticsDomainStatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\StatisticsDomainStatistics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\StatisticsDomainStatistics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\StatisticsDomainStatistics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('by_status', $data) && $data['by_status'] !== null) {
            $object->setByStatus($this->denormalizer->denormalize($data['by_status'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsDomainStatisticsByStatus', 'json', $context));
        } elseif (\array_key_exists('by_status', $data) && $data['by_status'] === null) {
            $object->setByStatus(null);
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
        if (null !== $object->getByStatus()) {
            $data['by_status'] = $this->normalizer->normalize($object->getByStatus(), 'json', $context);
        }
        if (null !== $object->getTotal()) {
            $data['total'] = $object->getTotal();
        }
        return $data;
    }
}
