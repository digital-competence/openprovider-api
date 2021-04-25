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

class SettingsPaymentMethodSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SettingsPaymentMethodSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
            $object->setLimit($this->denormalizer->denormalize($data['limit'], 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethodLimits', 'json', $context));
        } elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
            $object->setLimit(null);
        }
        if (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] !== null) {
            $object->setTransactionFee($data['transaction_fee']);
        } elseif (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] === null) {
            $object->setTransactionFee(null);
        }
        if (\array_key_exists('transaction_fee_absolute', $data) && $data['transaction_fee_absolute'] !== null) {
            $object->setTransactionFeeAbsolute($data['transaction_fee_absolute']);
        } elseif (\array_key_exists('transaction_fee_absolute', $data) && $data['transaction_fee_absolute'] === null) {
            $object->setTransactionFeeAbsolute(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getLimit()) {
            $data['limit'] = $this->normalizer->normalize($object->getLimit(), 'json', $context);
        }
        if (null !== $object->getTransactionFee()) {
            $data['transaction_fee'] = $object->getTransactionFee();
        }
        if (null !== $object->getTransactionFeeAbsolute()) {
            $data['transaction_fee_absolute'] = $object->getTransactionFeeAbsolute();
        }
        return $data;
    }
}
