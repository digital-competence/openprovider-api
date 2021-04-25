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

class ResellerResellerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ResellerReseller';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ResellerReseller';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ResellerReseller();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'DigiComp\\OpenproviderApi\\Model\\ResellerResellerAdditionalData', 'json', $context));
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'DigiComp\\OpenproviderApi\\Model\\ContactAddress', 'json', $context));
        } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('balance', $data) && $data['balance'] !== null) {
            $object->setBalance($data['balance']);
        } elseif (\array_key_exists('balance', $data) && $data['balance'] === null) {
            $object->setBalance(null);
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $object->setComments($data['comments']);
        } elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
            $object->setCompanyName($data['company_name']);
        } elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
            $object->setCompanyName(null);
        }
        if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
            $values = array();
            foreach ($data['contacts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\PersoncontactContact', 'json', $context);
            }
            $object->setContacts($values);
        } elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
            $object->setContacts(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($this->denormalizer->denormalize($data['fax'], 'DigiComp\\OpenproviderApi\\Model\\CustomerFax', 'json', $context));
        } elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
            $object->setLocale($data['locale']);
        } elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
            $object->setLocale(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'DigiComp\\OpenproviderApi\\Model\\ContactName', 'json', $context));
        } elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($this->denormalizer->denormalize($data['phone'], 'DigiComp\\OpenproviderApi\\Model\\ContactPhone', 'json', $context));
        } elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('reserved_balance', $data) && $data['reserved_balance'] !== null) {
            $object->setReservedBalance($data['reserved_balance']);
        } elseif (\array_key_exists('reserved_balance', $data) && $data['reserved_balance'] === null) {
            $object->setReservedBalance(null);
        }
        if (\array_key_exists('settings', $data) && $data['settings'] !== null) {
            $object->setSettings($this->denormalizer->denormalize($data['settings'], 'DigiComp\\OpenproviderApi\\Model\\ResellerSettings', 'json', $context));
        } elseif (\array_key_exists('settings', $data) && $data['settings'] === null) {
            $object->setSettings(null);
        }
        if (\array_key_exists('statistics', $data) && $data['statistics'] !== null) {
            $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'DigiComp\\OpenproviderApi\\Model\\ResellerStatistics', 'json', $context));
        } elseif (\array_key_exists('statistics', $data) && $data['statistics'] === null) {
            $object->setStatistics(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('tier', $data) && $data['tier'] !== null) {
            $object->setTier($data['tier']);
        } elseif (\array_key_exists('tier', $data) && $data['tier'] === null) {
            $object->setTier(null);
        }
        if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
            $object->setVat($data['vat']);
        } elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
            $object->setVat(null);
        }
        if (\array_key_exists('vatperc', $data) && $data['vatperc'] !== null) {
            $object->setVatperc($data['vatperc']);
        } elseif (\array_key_exists('vatperc', $data) && $data['vatperc'] === null) {
            $object->setVatperc(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getBalance()) {
            $data['balance'] = $object->getBalance();
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getCompanyName()) {
            $data['company_name'] = $object->getCompanyName();
        }
        if (null !== $object->getContacts()) {
            $values = array();
            foreach ($object->getContacts() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['contacts'] = $values;
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        if (null !== $object->getName()) {
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
        }
        if (null !== $object->getReservedBalance()) {
            $data['reserved_balance'] = $object->getReservedBalance();
        }
        if (null !== $object->getSettings()) {
            $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        }
        if (null !== $object->getStatistics()) {
            $data['statistics'] = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTier()) {
            $data['tier'] = $object->getTier();
        }
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        if (null !== $object->getVatperc()) {
            $data['vatperc'] = $object->getVatperc();
        }
        return $data;
    }
}
