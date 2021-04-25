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

class PriceGetPriceResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\PriceGetPriceResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\PriceGetPriceResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\PriceGetPriceResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_premium', $data) && $data['is_premium'] !== null) {
            $object->setIsPremium($data['is_premium']);
        } elseif (\array_key_exists('is_premium', $data) && $data['is_premium'] === null) {
            $object->setIsPremium(null);
        }
        if (\array_key_exists('is_promotion', $data) && $data['is_promotion'] !== null) {
            $object->setIsPromotion($data['is_promotion']);
        } elseif (\array_key_exists('is_promotion', $data) && $data['is_promotion'] === null) {
            $object->setIsPromotion(null);
        }
        if (\array_key_exists('membership_price', $data) && $data['membership_price'] !== null) {
            $object->setMembershipPrice($this->denormalizer->denormalize($data['membership_price'], 'DigiComp\\OpenproviderApi\\Model\\DomainPriceGroup', 'json', $context));
        } elseif (\array_key_exists('membership_price', $data) && $data['membership_price'] === null) {
            $object->setMembershipPrice(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], 'DigiComp\\OpenproviderApi\\Model\\DomainPriceGroup', 'json', $context));
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('promotion_data', $data) && $data['promotion_data'] !== null) {
            $object->setPromotionData($this->denormalizer->denormalize($data['promotion_data'], 'DigiComp\\OpenproviderApi\\Model\\PricePromotionData', 'json', $context));
        } elseif (\array_key_exists('promotion_data', $data) && $data['promotion_data'] === null) {
            $object->setPromotionData(null);
        }
        if (\array_key_exists('tier_price', $data) && $data['tier_price'] !== null) {
            $object->setTierPrice($this->denormalizer->denormalize($data['tier_price'], 'DigiComp\\OpenproviderApi\\Model\\DomainPriceGroup', 'json', $context));
        } elseif (\array_key_exists('tier_price', $data) && $data['tier_price'] === null) {
            $object->setTierPrice(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getIsPremium()) {
            $data['is_premium'] = $object->getIsPremium();
        }
        if (null !== $object->getIsPromotion()) {
            $data['is_promotion'] = $object->getIsPromotion();
        }
        if (null !== $object->getMembershipPrice()) {
            $data['membership_price'] = $this->normalizer->normalize($object->getMembershipPrice(), 'json', $context);
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
        }
        if (null !== $object->getPromotionData()) {
            $data['promotion_data'] = $this->normalizer->normalize($object->getPromotionData(), 'json', $context);
        }
        if (null !== $object->getTierPrice()) {
            $data['tier_price'] = $this->normalizer->normalize($object->getTierPrice(), 'json', $context);
        }
        return $data;
    }
}
