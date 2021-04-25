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

class ProductSslProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ProductSslProduct';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ProductSslProduct';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ProductSslProduct();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('brand_name', $data) && $data['brand_name'] !== null) {
            $object->setBrandName($data['brand_name']);
        } elseif (\array_key_exists('brand_name', $data) && $data['brand_name'] === null) {
            $object->setBrandName(null);
        }
        if (\array_key_exists('bypass_san', $data) && $data['bypass_san'] !== null) {
            $object->setBypassSan($data['bypass_san']);
        } elseif (\array_key_exists('bypass_san', $data) && $data['bypass_san'] === null) {
            $object->setBypassSan(null);
        }
        if (\array_key_exists('category', $data) && $data['category'] !== null) {
            $object->setCategory($data['category']);
        } elseif (\array_key_exists('category', $data) && $data['category'] === null) {
            $object->setCategory(null);
        }
        if (\array_key_exists('delivery_time', $data) && $data['delivery_time'] !== null) {
            $object->setDeliveryTime($data['delivery_time']);
        } elseif (\array_key_exists('delivery_time', $data) && $data['delivery_time'] === null) {
            $object->setDeliveryTime(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('encryption', $data) && $data['encryption'] !== null) {
            $object->setEncryption($data['encryption']);
        } elseif (\array_key_exists('encryption', $data) && $data['encryption'] === null) {
            $object->setEncryption(null);
        }
        if (\array_key_exists('free_refund_period', $data) && $data['free_refund_period'] !== null) {
            $object->setFreeRefundPeriod($data['free_refund_period']);
        } elseif (\array_key_exists('free_refund_period', $data) && $data['free_refund_period'] === null) {
            $object->setFreeRefundPeriod(null);
        }
        if (\array_key_exists('free_reissue_period', $data) && $data['free_reissue_period'] !== null) {
            $object->setFreeReissuePeriod($data['free_reissue_period']);
        } elseif (\array_key_exists('free_reissue_period', $data) && $data['free_reissue_period'] === null) {
            $object->setFreeReissuePeriod(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('included_domains_count', $data) && $data['included_domains_count'] !== null) {
            $object->setIncludedDomainsCount($data['included_domains_count']);
        } elseif (\array_key_exists('included_domains_count', $data) && $data['included_domains_count'] === null) {
            $object->setIncludedDomainsCount(null);
        }
        if (\array_key_exists('is_extended_validation_supported', $data) && $data['is_extended_validation_supported'] !== null) {
            $object->setIsExtendedValidationSupported($data['is_extended_validation_supported']);
        } elseif (\array_key_exists('is_extended_validation_supported', $data) && $data['is_extended_validation_supported'] === null) {
            $object->setIsExtendedValidationSupported(null);
        }
        if (\array_key_exists('is_idn_supported', $data) && $data['is_idn_supported'] !== null) {
            $object->setIsIdnSupported($data['is_idn_supported']);
        } elseif (\array_key_exists('is_idn_supported', $data) && $data['is_idn_supported'] === null) {
            $object->setIsIdnSupported(null);
        }
        if (\array_key_exists('is_mobile_supported', $data) && $data['is_mobile_supported'] !== null) {
            $object->setIsMobileSupported($data['is_mobile_supported']);
        } elseif (\array_key_exists('is_mobile_supported', $data) && $data['is_mobile_supported'] === null) {
            $object->setIsMobileSupported(null);
        }
        if (\array_key_exists('is_sgc_supported', $data) && $data['is_sgc_supported'] !== null) {
            $object->setIsSgcSupported($data['is_sgc_supported']);
        } elseif (\array_key_exists('is_sgc_supported', $data) && $data['is_sgc_supported'] === null) {
            $object->setIsSgcSupported(null);
        }
        if (\array_key_exists('is_wildcard_multidomain_supported', $data) && $data['is_wildcard_multidomain_supported'] !== null) {
            $object->setIsWildcardMultidomainSupported($data['is_wildcard_multidomain_supported']);
        } elseif (\array_key_exists('is_wildcard_multidomain_supported', $data) && $data['is_wildcard_multidomain_supported'] === null) {
            $object->setIsWildcardMultidomainSupported(null);
        }
        if (\array_key_exists('is_wildcard_supported', $data) && $data['is_wildcard_supported'] !== null) {
            $object->setIsWildcardSupported($data['is_wildcard_supported']);
        } elseif (\array_key_exists('is_wildcard_supported', $data) && $data['is_wildcard_supported'] === null) {
            $object->setIsWildcardSupported(null);
        }
        if (\array_key_exists('level_prices', $data) && $data['level_prices'] !== null) {
            $values = array();
            foreach ($data['level_prices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductLevelPrices', 'json', $context);
            }
            $object->setLevelPrices($values);
        } elseif (\array_key_exists('level_prices', $data) && $data['level_prices'] === null) {
            $object->setLevelPrices(null);
        }
        if (\array_key_exists('max_domains', $data) && $data['max_domains'] !== null) {
            $object->setMaxDomains($data['max_domains']);
        } elseif (\array_key_exists('max_domains', $data) && $data['max_domains'] === null) {
            $object->setMaxDomains(null);
        }
        if (\array_key_exists('max_period', $data) && $data['max_period'] !== null) {
            $object->setMaxPeriod($data['max_period']);
        } elseif (\array_key_exists('max_period', $data) && $data['max_period'] === null) {
            $object->setMaxPeriod(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('number_of_domains', $data) && $data['number_of_domains'] !== null) {
            $object->setNumberOfDomains($data['number_of_domains']);
        } elseif (\array_key_exists('number_of_domains', $data) && $data['number_of_domains'] === null) {
            $object->setNumberOfDomains(null);
        }
        if (\array_key_exists('order_module', $data) && $data['order_module'] !== null) {
            $object->setOrderModule($data['order_module']);
        } elseif (\array_key_exists('order_module', $data) && $data['order_module'] === null) {
            $object->setOrderModule(null);
        }
        if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
            $values_1 = array();
            foreach ($data['prices'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductPrices', 'json', $context);
            }
            $object->setPrices($values_1);
        } elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
            $object->setPrices(null);
        }
        if (\array_key_exists('root', $data) && $data['root'] !== null) {
            $object->setRoot($data['root']);
        } elseif (\array_key_exists('root', $data) && $data['root'] === null) {
            $object->setRoot(null);
        }
        if (\array_key_exists('sub_category', $data) && $data['sub_category'] !== null) {
            $object->setSubCategory($data['sub_category']);
        } elseif (\array_key_exists('sub_category', $data) && $data['sub_category'] === null) {
            $object->setSubCategory(null);
        }
        if (\array_key_exists('supported_software', $data) && $data['supported_software'] !== null) {
            $values_2 = array();
            foreach ($data['supported_software'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductSupportedSoftware', 'json', $context);
            }
            $object->setSupportedSoftware($values_2);
        } elseif (\array_key_exists('supported_software', $data) && $data['supported_software'] === null) {
            $object->setSupportedSoftware(null);
        }
        if (\array_key_exists('validation_method', $data) && $data['validation_method'] !== null) {
            $object->setValidationMethod($data['validation_method']);
        } elseif (\array_key_exists('validation_method', $data) && $data['validation_method'] === null) {
            $object->setValidationMethod(null);
        }
        if (\array_key_exists('warranty', $data) && $data['warranty'] !== null) {
            $object->setWarranty($this->denormalizer->denormalize($data['warranty'], 'DigiComp\\OpenproviderApi\\Model\\ProductSslProductWarranty', 'json', $context));
        } elseif (\array_key_exists('warranty', $data) && $data['warranty'] === null) {
            $object->setWarranty(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBrandName()) {
            $data['brand_name'] = $object->getBrandName();
        }
        if (null !== $object->getBypassSan()) {
            $data['bypass_san'] = $object->getBypassSan();
        }
        if (null !== $object->getCategory()) {
            $data['category'] = $object->getCategory();
        }
        if (null !== $object->getDeliveryTime()) {
            $data['delivery_time'] = $object->getDeliveryTime();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getEncryption()) {
            $data['encryption'] = $object->getEncryption();
        }
        if (null !== $object->getFreeRefundPeriod()) {
            $data['free_refund_period'] = $object->getFreeRefundPeriod();
        }
        if (null !== $object->getFreeReissuePeriod()) {
            $data['free_reissue_period'] = $object->getFreeReissuePeriod();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIncludedDomainsCount()) {
            $data['included_domains_count'] = $object->getIncludedDomainsCount();
        }
        if (null !== $object->getIsExtendedValidationSupported()) {
            $data['is_extended_validation_supported'] = $object->getIsExtendedValidationSupported();
        }
        if (null !== $object->getIsIdnSupported()) {
            $data['is_idn_supported'] = $object->getIsIdnSupported();
        }
        if (null !== $object->getIsMobileSupported()) {
            $data['is_mobile_supported'] = $object->getIsMobileSupported();
        }
        if (null !== $object->getIsSgcSupported()) {
            $data['is_sgc_supported'] = $object->getIsSgcSupported();
        }
        if (null !== $object->getIsWildcardMultidomainSupported()) {
            $data['is_wildcard_multidomain_supported'] = $object->getIsWildcardMultidomainSupported();
        }
        if (null !== $object->getIsWildcardSupported()) {
            $data['is_wildcard_supported'] = $object->getIsWildcardSupported();
        }
        if (null !== $object->getLevelPrices()) {
            $values = array();
            foreach ($object->getLevelPrices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['level_prices'] = $values;
        }
        if (null !== $object->getMaxDomains()) {
            $data['max_domains'] = $object->getMaxDomains();
        }
        if (null !== $object->getMaxPeriod()) {
            $data['max_period'] = $object->getMaxPeriod();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNumberOfDomains()) {
            $data['number_of_domains'] = $object->getNumberOfDomains();
        }
        if (null !== $object->getOrderModule()) {
            $data['order_module'] = $object->getOrderModule();
        }
        if (null !== $object->getPrices()) {
            $values_1 = array();
            foreach ($object->getPrices() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['prices'] = $values_1;
        }
        if (null !== $object->getRoot()) {
            $data['root'] = $object->getRoot();
        }
        if (null !== $object->getSubCategory()) {
            $data['sub_category'] = $object->getSubCategory();
        }
        if (null !== $object->getSupportedSoftware()) {
            $values_2 = array();
            foreach ($object->getSupportedSoftware() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['supported_software'] = $values_2;
        }
        if (null !== $object->getValidationMethod()) {
            $data['validation_method'] = $object->getValidationMethod();
        }
        if (null !== $object->getWarranty()) {
            $data['warranty'] = $this->normalizer->normalize($object->getWarranty(), 'json', $context);
        }
        return $data;
    }
}
