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

class TldPriceWithPromoInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\TldPriceWithPromoInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\TldPriceWithPromoInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\TldPriceWithPromoInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('product', $data) && $data['product'] !== null) {
            $object->setProduct($this->denormalizer->denormalize($data['product'], 'DigiComp\\OpenproviderApi\\Model\\TldPriceInCurrency', 'json', $context));
        } elseif (\array_key_exists('product', $data) && $data['product'] === null) {
            $object->setProduct(null);
        }
        if (\array_key_exists('promotion_details', $data) && $data['promotion_details'] !== null) {
            $object->setPromotionDetails($this->denormalizer->denormalize($data['promotion_details'], 'DigiComp\\OpenproviderApi\\Model\\TldPromoDetails', 'json', $context));
        } elseif (\array_key_exists('promotion_details', $data) && $data['promotion_details'] === null) {
            $object->setPromotionDetails(null);
        }
        if (\array_key_exists('reseller', $data) && $data['reseller'] !== null) {
            $object->setReseller($this->denormalizer->denormalize($data['reseller'], 'DigiComp\\OpenproviderApi\\Model\\TldPriceInCurrency', 'json', $context));
        } elseif (\array_key_exists('reseller', $data) && $data['reseller'] === null) {
            $object->setReseller(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getProduct()) {
            $data['product'] = $this->normalizer->normalize($object->getProduct(), 'json', $context);
        }
        if (null !== $object->getPromotionDetails()) {
            $data['promotion_details'] = $this->normalizer->normalize($object->getPromotionDetails(), 'json', $context);
        }
        if (null !== $object->getReseller()) {
            $data['reseller'] = $this->normalizer->normalize($object->getReseller(), 'json', $context);
        }
        return $data;
    }
}
