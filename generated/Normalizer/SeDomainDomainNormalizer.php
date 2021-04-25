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

class SeDomainDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\SeDomainDomain';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\SeDomainDomain';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\SeDomainDomain();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bundle', $data) && $data['bundle'] !== null) {
            $object->setBundle($data['bundle']);
        } elseif (\array_key_exists('bundle', $data) && $data['bundle'] === null) {
            $object->setBundle(null);
        }
        if (\array_key_exists('domain_name', $data) && $data['domain_name'] !== null) {
            $object->setDomainName($data['domain_name']);
        } elseif (\array_key_exists('domain_name', $data) && $data['domain_name'] === null) {
            $object->setDomainName(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
            $object->setIsActive($data['is_active']);
        } elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
            $object->setOrderId($data['order_id']);
        } elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
            $object->setOrderId(null);
        }
        if (\array_key_exists('products', $data) && $data['products'] !== null) {
            $object->setProducts($this->denormalizer->denormalize($data['products'], 'DigiComp\\OpenproviderApi\\Model\\SeDomainProducts', 'json', $context));
        } elseif (\array_key_exists('products', $data) && $data['products'] === null) {
            $object->setProducts(null);
        }
        if (\array_key_exists('records', $data) && $data['records'] !== null) {
            $object->setRecords($this->denormalizer->denormalize($data['records'], 'DigiComp\\OpenproviderApi\\Model\\SeDomainRecords', 'json', $context));
        } elseif (\array_key_exists('records', $data) && $data['records'] === null) {
            $object->setRecords(null);
        }
        if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
            $object->setResellerId($data['reseller_id']);
        } elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
            $object->setResellerId(null);
        }
        if (\array_key_exists('smtp_password', $data) && $data['smtp_password'] !== null) {
            $object->setSmtpPassword($data['smtp_password']);
        } elseif (\array_key_exists('smtp_password', $data) && $data['smtp_password'] === null) {
            $object->setSmtpPassword(null);
        }
        if (\array_key_exists('user_email', $data) && $data['user_email'] !== null) {
            $object->setUserEmail($data['user_email']);
        } elseif (\array_key_exists('user_email', $data) && $data['user_email'] === null) {
            $object->setUserEmail(null);
        }
        if (\array_key_exists('user_password', $data) && $data['user_password'] !== null) {
            $object->setUserPassword($data['user_password']);
        } elseif (\array_key_exists('user_password', $data) && $data['user_password'] === null) {
            $object->setUserPassword(null);
        }
        if (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] !== null) {
            $object->setWithOutgoingFilter($data['with_outgoing_filter']);
        } elseif (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] === null) {
            $object->setWithOutgoingFilter(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBundle()) {
            $data['bundle'] = $object->getBundle();
        }
        if (null !== $object->getDomainName()) {
            $data['domain_name'] = $object->getDomainName();
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getOrderId()) {
            $data['order_id'] = $object->getOrderId();
        }
        if (null !== $object->getProducts()) {
            $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
        }
        if (null !== $object->getRecords()) {
            $data['records'] = $this->normalizer->normalize($object->getRecords(), 'json', $context);
        }
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        if (null !== $object->getSmtpPassword()) {
            $data['smtp_password'] = $object->getSmtpPassword();
        }
        if (null !== $object->getUserEmail()) {
            $data['user_email'] = $object->getUserEmail();
        }
        if (null !== $object->getUserPassword()) {
            $data['user_password'] = $object->getUserPassword();
        }
        if (null !== $object->getWithOutgoingFilter()) {
            $data['with_outgoing_filter'] = $object->getWithOutgoingFilter();
        }
        return $data;
    }
}
