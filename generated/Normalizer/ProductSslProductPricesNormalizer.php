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

class ProductSslProductPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductPrices';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductPrices';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ProductSslProductPrices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('extra_domain_price', $data) && $data['extra_domain_price'] !== null) {
            $object->setExtraDomainPrice($this->denormalizer->denormalize($data['extra_domain_price'], 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductPriceGroup', 'json', $context));
        } elseif (\array_key_exists('extra_domain_price', $data) && $data['extra_domain_price'] === null) {
            $object->setExtraDomainPrice(null);
        }
        if (\array_key_exists('extra_wildcard_domain_price', $data) && $data['extra_wildcard_domain_price'] !== null) {
            $object->setExtraWildcardDomainPrice($this->denormalizer->denormalize($data['extra_wildcard_domain_price'], 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductPriceGroup', 'json', $context));
        } elseif (\array_key_exists('extra_wildcard_domain_price', $data) && $data['extra_wildcard_domain_price'] === null) {
            $object->setExtraWildcardDomainPrice(null);
        }
        if (\array_key_exists('period', $data) && $data['period'] !== null) {
            $object->setPeriod($data['period']);
        } elseif (\array_key_exists('period', $data) && $data['period'] === null) {
            $object->setPeriod(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductPriceGroup', 'json', $context));
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getExtraDomainPrice()) {
            $data['extra_domain_price'] = $this->normalizer->normalize($object->getExtraDomainPrice(), 'json', $context);
        }
        if (null !== $object->getExtraWildcardDomainPrice()) {
            $data['extra_wildcard_domain_price'] = $this->normalizer->normalize($object->getExtraWildcardDomainPrice(), 'json', $context);
        }
        if (null !== $object->getPeriod()) {
            $data['period'] = $object->getPeriod();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
        }
        return $data;
    }
}
