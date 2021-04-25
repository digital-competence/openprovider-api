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

class ResellerUpdateResellerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ResellerUpdateResellerRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ResellerUpdateResellerRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ResellerUpdateResellerRequest();
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
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
        }
        if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
            $object->setKpp(null);
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
        if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
            $object->setVat($data['vat']);
        } elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
            $object->setVat(null);
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
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getCompanyName()) {
            $data['company_name'] = $object->getCompanyName();
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
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
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        return $data;
    }
}
