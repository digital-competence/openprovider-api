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

class SettingsTransactionFeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SettingsTransactionFee';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SettingsTransactionFee';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SettingsTransactionFee();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bank', $data) && $data['bank'] !== null) {
            $object->setBank($data['bank']);
        } elseif (\array_key_exists('bank', $data) && $data['bank'] === null) {
            $object->setBank(null);
        }
        if (\array_key_exists('credit_card', $data) && $data['credit_card'] !== null) {
            $object->setCreditCard($data['credit_card']);
        } elseif (\array_key_exists('credit_card', $data) && $data['credit_card'] === null) {
            $object->setCreditCard(null);
        }
        if (\array_key_exists('ideal', $data) && $data['ideal'] !== null) {
            $object->setIdeal($data['ideal']);
        } elseif (\array_key_exists('ideal', $data) && $data['ideal'] === null) {
            $object->setIdeal(null);
        }
        if (\array_key_exists('paypal', $data) && $data['paypal'] !== null) {
            $object->setPaypal($data['paypal']);
        } elseif (\array_key_exists('paypal', $data) && $data['paypal'] === null) {
            $object->setPaypal(null);
        }
        if (\array_key_exists('western_union', $data) && $data['western_union'] !== null) {
            $object->setWesternUnion($data['western_union']);
        } elseif (\array_key_exists('western_union', $data) && $data['western_union'] === null) {
            $object->setWesternUnion(null);
        }
        if (\array_key_exists('yandex', $data) && $data['yandex'] !== null) {
            $object->setYandex($data['yandex']);
        } elseif (\array_key_exists('yandex', $data) && $data['yandex'] === null) {
            $object->setYandex(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBank()) {
            $data['bank'] = $object->getBank();
        }
        if (null !== $object->getCreditCard()) {
            $data['credit_card'] = $object->getCreditCard();
        }
        if (null !== $object->getIdeal()) {
            $data['ideal'] = $object->getIdeal();
        }
        if (null !== $object->getPaypal()) {
            $data['paypal'] = $object->getPaypal();
        }
        if (null !== $object->getWesternUnion()) {
            $data['western_union'] = $object->getWesternUnion();
        }
        if (null !== $object->getYandex()) {
            $data['yandex'] = $object->getYandex();
        }
        return $data;
    }
}
