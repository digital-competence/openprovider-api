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

class SettingsPaymentMethodLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimits';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimits';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SettingsPaymentMethodLimits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
            $object->setMaximum($this->denormalizer->denormalize($data['maximum'], 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimit', 'json', $context));
        } elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
            $object->setMaximum(null);
        }
        if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
            $object->setMinimum($this->denormalizer->denormalize($data['minimum'], 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimit', 'json', $context));
        } elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
            $object->setMinimum(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMaximum()) {
            $data['maximum'] = $this->normalizer->normalize($object->getMaximum(), 'json', $context);
        }
        if (null !== $object->getMinimum()) {
            $data['minimum'] = $this->normalizer->normalize($object->getMinimum(), 'json', $context);
        }
        return $data;
    }
}
