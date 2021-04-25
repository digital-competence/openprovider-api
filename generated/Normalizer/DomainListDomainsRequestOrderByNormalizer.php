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

class DomainListDomainsRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainListDomainsRequestOrderBy';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainListDomainsRequestOrderBy';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainListDomainsRequestOrderBy();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active_date', $data) && $data['active_date'] !== null) {
            $object->setActiveDate($data['active_date']);
        } elseif (\array_key_exists('active_date', $data) && $data['active_date'] === null) {
            $object->setActiveDate(null);
        }
        if (\array_key_exists('domain_extension', $data) && $data['domain_extension'] !== null) {
            $object->setDomainExtension($data['domain_extension']);
        } elseif (\array_key_exists('domain_extension', $data) && $data['domain_extension'] === null) {
            $object->setDomainExtension(null);
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
        if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
            $object->setOrderDate($data['order_date']);
        } elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
            $object->setRenewalDate($data['renewal_date']);
        } elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
            $object->setRenewalDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('transfer_date', $data) && $data['transfer_date'] !== null) {
            $object->setTransferDate($data['transfer_date']);
        } elseif (\array_key_exists('transfer_date', $data) && $data['transfer_date'] === null) {
            $object->setTransferDate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActiveDate()) {
            $data['active_date'] = $object->getActiveDate();
        }
        if (null !== $object->getDomainExtension()) {
            $data['domain_extension'] = $object->getDomainExtension();
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
        if (null !== $object->getOrderDate()) {
            $data['order_date'] = $object->getOrderDate();
        }
        if (null !== $object->getRenewalDate()) {
            $data['renewal_date'] = $object->getRenewalDate();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTransferDate()) {
            $data['transfer_date'] = $object->getTransferDate();
        }
        return $data;
    }
}
