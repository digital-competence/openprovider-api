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

class DomainCheckDomainResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainCheckDomainResult';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainCheckDomainResult';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainCheckDomainResult();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('claim_key', $data) && $data['claim_key'] !== null) {
            $object->setClaimKey($data['claim_key']);
        } elseif (\array_key_exists('claim_key', $data) && $data['claim_key'] === null) {
            $object->setClaimKey(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($data['domain']);
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('is_premium', $data) && $data['is_premium'] !== null) {
            $object->setIsPremium($data['is_premium']);
        } elseif (\array_key_exists('is_premium', $data) && $data['is_premium'] === null) {
            $object->setIsPremium(null);
        }
        if (\array_key_exists('premium', $data) && $data['premium'] !== null) {
            $object->setPremium($this->denormalizer->denormalize($data['premium'], 'DigiComp\\OpenproviderApi\\Model\\DomainPremiumPrice', 'json', $context));
        } elseif (\array_key_exists('premium', $data) && $data['premium'] === null) {
            $object->setPremium(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($this->denormalizer->denormalize($data['price'], 'DigiComp\\OpenproviderApi\\Model\\DomainPriceGroup', 'json', $context));
        } elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        if (\array_key_exists('reason', $data) && $data['reason'] !== null) {
            $object->setReason($data['reason']);
        } elseif (\array_key_exists('reason', $data) && $data['reason'] === null) {
            $object->setReason(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('whois', $data) && $data['whois'] !== null) {
            $object->setWhois($data['whois']);
        } elseif (\array_key_exists('whois', $data) && $data['whois'] === null) {
            $object->setWhois(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClaimKey()) {
            $data['claim_key'] = $object->getClaimKey();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getIsPremium()) {
            $data['is_premium'] = $object->getIsPremium();
        }
        if (null !== $object->getPremium()) {
            $data['premium'] = $this->normalizer->normalize($object->getPremium(), 'json', $context);
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
        }
        if (null !== $object->getReason()) {
            $data['reason'] = $object->getReason();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getWhois()) {
            $data['whois'] = $object->getWhois();
        }
        return $data;
    }
}
