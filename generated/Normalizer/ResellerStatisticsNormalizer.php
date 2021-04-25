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

class ResellerStatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ResellerStatistics';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ResellerStatistics';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ResellerStatistics();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsCurrencyStatistics', 'json', $context));
        } elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('customer', $data) && $data['customer'] !== null) {
            $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsCustomerStatistics', 'json', $context));
        } elseif (\array_key_exists('customer', $data) && $data['customer'] === null) {
            $object->setCustomer(null);
        }
        if (\array_key_exists('dns', $data) && $data['dns'] !== null) {
            $object->setDns($this->denormalizer->denormalize($data['dns'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsDnsStatistics', 'json', $context));
        } elseif (\array_key_exists('dns', $data) && $data['dns'] === null) {
            $object->setDns(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($this->denormalizer->denormalize($data['domain'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsDomainStatistics', 'json', $context));
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('level', $data) && $data['level'] !== null) {
            $object->setLevel($data['level']);
        } elseif (\array_key_exists('level', $data) && $data['level'] === null) {
            $object->setLevel(null);
        }
        if (\array_key_exists('license', $data) && $data['license'] !== null) {
            $object->setLicense($this->denormalizer->denormalize($data['license'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsLicenseStatistics', 'json', $context));
        } elseif (\array_key_exists('license', $data) && $data['license'] === null) {
            $object->setLicense(null);
        }
        if (\array_key_exists('spam_experts', $data) && $data['spam_experts'] !== null) {
            $object->setSpamExperts($this->denormalizer->denormalize($data['spam_experts'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsSpamExpertsStatistics', 'json', $context));
        } elseif (\array_key_exists('spam_experts', $data) && $data['spam_experts'] === null) {
            $object->setSpamExperts(null);
        }
        if (\array_key_exists('ssl', $data) && $data['ssl'] !== null) {
            $object->setSsl($this->denormalizer->denormalize($data['ssl'], 'DigiComp\\OpenproviderApi\\Model\\StatisticsSslStatistics', 'json', $context));
        } elseif (\array_key_exists('ssl', $data) && $data['ssl'] === null) {
            $object->setSsl(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCurrency()) {
            $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
        }
        if (null !== $object->getCustomer()) {
            $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
        }
        if (null !== $object->getDns()) {
            $data['dns'] = $this->normalizer->normalize($object->getDns(), 'json', $context);
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
        }
        if (null !== $object->getLevel()) {
            $data['level'] = $object->getLevel();
        }
        if (null !== $object->getLicense()) {
            $data['license'] = $this->normalizer->normalize($object->getLicense(), 'json', $context);
        }
        if (null !== $object->getSpamExperts()) {
            $data['spam_experts'] = $this->normalizer->normalize($object->getSpamExperts(), 'json', $context);
        }
        if (null !== $object->getSsl()) {
            $data['ssl'] = $this->normalizer->normalize($object->getSsl(), 'json', $context);
        }
        return $data;
    }
}
