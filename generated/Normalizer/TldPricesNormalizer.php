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

class TldPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\TldPrices';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\TldPrices';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\TldPrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('create_price', $data) && $data['create_price'] !== null) {
            $object->setCreatePrice($this->denormalizer->denormalize($data['create_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('create_price', $data) && $data['create_price'] === null) {
            $object->setCreatePrice(null);
        }
        if (\array_key_exists('domicile_price', $data) && $data['domicile_price'] !== null) {
            $object->setDomicilePrice($this->denormalizer->denormalize($data['domicile_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('domicile_price', $data) && $data['domicile_price'] === null) {
            $object->setDomicilePrice(null);
        }
        if (\array_key_exists('max_period', $data) && $data['max_period'] !== null) {
            $object->setMaxPeriod($data['max_period']);
        } elseif (\array_key_exists('max_period', $data) && $data['max_period'] === null) {
            $object->setMaxPeriod(null);
        }
        if (\array_key_exists('min_period', $data) && $data['min_period'] !== null) {
            $object->setMinPeriod($data['min_period']);
        } elseif (\array_key_exists('min_period', $data) && $data['min_period'] === null) {
            $object->setMinPeriod(null);
        }
        if (\array_key_exists('renew_price', $data) && $data['renew_price'] !== null) {
            $object->setRenewPrice($this->denormalizer->denormalize($data['renew_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('renew_price', $data) && $data['renew_price'] === null) {
            $object->setRenewPrice(null);
        }
        if (\array_key_exists('reseller_price', $data) && $data['reseller_price'] !== null) {
            $object->setResellerPrice($this->denormalizer->denormalize($data['reseller_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPriceWithPromoInfo', 'json', $context));
        } elseif (\array_key_exists('reseller_price', $data) && $data['reseller_price'] === null) {
            $object->setResellerPrice(null);
        }
        if (\array_key_exists('restore_price', $data) && $data['restore_price'] !== null) {
            $object->setRestorePrice($this->denormalizer->denormalize($data['restore_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('restore_price', $data) && $data['restore_price'] === null) {
            $object->setRestorePrice(null);
        }
        if (\array_key_exists('setup_price', $data) && $data['setup_price'] !== null) {
            $object->setSetupPrice($this->denormalizer->denormalize($data['setup_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('setup_price', $data) && $data['setup_price'] === null) {
            $object->setSetupPrice(null);
        }
        if (\array_key_exists('soft_restore_price', $data) && $data['soft_restore_price'] !== null) {
            $object->setSoftRestorePrice($this->denormalizer->denormalize($data['soft_restore_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('soft_restore_price', $data) && $data['soft_restore_price'] === null) {
            $object->setSoftRestorePrice(null);
        }
        if (\array_key_exists('trade_price', $data) && $data['trade_price'] !== null) {
            $object->setTradePrice($this->denormalizer->denormalize($data['trade_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('trade_price', $data) && $data['trade_price'] === null) {
            $object->setTradePrice(null);
        }
        if (\array_key_exists('transfer_price', $data) && $data['transfer_price'] !== null) {
            $object->setTransferPrice($this->denormalizer->denormalize($data['transfer_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('transfer_price', $data) && $data['transfer_price'] === null) {
            $object->setTransferPrice(null);
        }
        if (\array_key_exists('update_price', $data) && $data['update_price'] !== null) {
            $object->setUpdatePrice($this->denormalizer->denormalize($data['update_price'], 'DigiComp\\OpenproviderApi\\Model\\TldPrice', 'json', $context));
        } elseif (\array_key_exists('update_price', $data) && $data['update_price'] === null) {
            $object->setUpdatePrice(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCreatePrice()) {
            $data['create_price'] = $this->normalizer->normalize($object->getCreatePrice(), 'json', $context);
        }
        if (null !== $object->getDomicilePrice()) {
            $data['domicile_price'] = $this->normalizer->normalize($object->getDomicilePrice(), 'json', $context);
        }
        if (null !== $object->getMaxPeriod()) {
            $data['max_period'] = $object->getMaxPeriod();
        }
        if (null !== $object->getMinPeriod()) {
            $data['min_period'] = $object->getMinPeriod();
        }
        if (null !== $object->getRenewPrice()) {
            $data['renew_price'] = $this->normalizer->normalize($object->getRenewPrice(), 'json', $context);
        }
        if (null !== $object->getResellerPrice()) {
            $data['reseller_price'] = $this->normalizer->normalize($object->getResellerPrice(), 'json', $context);
        }
        if (null !== $object->getRestorePrice()) {
            $data['restore_price'] = $this->normalizer->normalize($object->getRestorePrice(), 'json', $context);
        }
        if (null !== $object->getSetupPrice()) {
            $data['setup_price'] = $this->normalizer->normalize($object->getSetupPrice(), 'json', $context);
        }
        if (null !== $object->getSoftRestorePrice()) {
            $data['soft_restore_price'] = $this->normalizer->normalize($object->getSoftRestorePrice(), 'json', $context);
        }
        if (null !== $object->getTradePrice()) {
            $data['trade_price'] = $this->normalizer->normalize($object->getTradePrice(), 'json', $context);
        }
        if (null !== $object->getTransferPrice()) {
            $data['transfer_price'] = $this->normalizer->normalize($object->getTransferPrice(), 'json', $context);
        }
        if (null !== $object->getUpdatePrice()) {
            $data['update_price'] = $this->normalizer->normalize($object->getUpdatePrice(), 'json', $context);
        }
        return $data;
    }
}
