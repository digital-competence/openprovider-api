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

class StatisticsDomainStatisticsByStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\StatisticsDomainStatisticsByStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\StatisticsDomainStatisticsByStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\StatisticsDomainStatisticsByStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ACT', $data) && $data['ACT'] !== null) {
            $object->setACT($data['ACT']);
        } elseif (\array_key_exists('ACT', $data) && $data['ACT'] === null) {
            $object->setACT(null);
        }
        if (\array_key_exists('FAI', $data) && $data['FAI'] !== null) {
            $object->setFAI($data['FAI']);
        } elseif (\array_key_exists('FAI', $data) && $data['FAI'] === null) {
            $object->setFAI(null);
        }
        if (\array_key_exists('NSR', $data) && $data['NSR'] !== null) {
            $object->setNSR($data['NSR']);
        } elseif (\array_key_exists('NSR', $data) && $data['NSR'] === null) {
            $object->setNSR(null);
        }
        if (\array_key_exists('PEN', $data) && $data['PEN'] !== null) {
            $object->setPEN($data['PEN']);
        } elseif (\array_key_exists('PEN', $data) && $data['PEN'] === null) {
            $object->setPEN(null);
        }
        if (\array_key_exists('REJ', $data) && $data['REJ'] !== null) {
            $object->setREJ($data['REJ']);
        } elseif (\array_key_exists('REJ', $data) && $data['REJ'] === null) {
            $object->setREJ(null);
        }
        if (\array_key_exists('REQ', $data) && $data['REQ'] !== null) {
            $object->setREQ($data['REQ']);
        } elseif (\array_key_exists('REQ', $data) && $data['REQ'] === null) {
            $object->setREQ(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getACT()) {
            $data['ACT'] = $object->getACT();
        }
        if (null !== $object->getFAI()) {
            $data['FAI'] = $object->getFAI();
        }
        if (null !== $object->getNSR()) {
            $data['NSR'] = $object->getNSR();
        }
        if (null !== $object->getPEN()) {
            $data['PEN'] = $object->getPEN();
        }
        if (null !== $object->getREJ()) {
            $data['REJ'] = $object->getREJ();
        }
        if (null !== $object->getREQ()) {
            $data['REQ'] = $object->getREQ();
        }
        return $data;
    }
}
