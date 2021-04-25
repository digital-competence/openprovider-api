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

class CustomerCreateCustomerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CustomerCreateCustomerRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CustomerCreateCustomerRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CustomerCreateCustomerRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'DigiComp\\OpenproviderApi\\Model\\CustomerCustomerAdditionalData', 'json', $context));
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
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('extension_additional_data', $data) && $data['extension_additional_data'] !== null) {
            $values = array();
            foreach ($data['extension_additional_data'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\CustomerExtensionAdditionalData', 'json', $context);
            }
            $object->setExtensionAdditionalData($values);
        } elseif (\array_key_exists('extension_additional_data', $data) && $data['extension_additional_data'] === null) {
            $object->setExtensionAdditionalData(null);
        }
        if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
            $object->setFax($this->denormalizer->denormalize($data['fax'], 'DigiComp\\OpenproviderApi\\Model\\CustomerFax', 'json', $context));
        } elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
            $object->setFax(null);
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
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_1 = array();
            foreach ($data['tags'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\CustomerTags', 'json', $context);
            }
            $object->setTags($values_1);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
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
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getExtensionAdditionalData()) {
            $values = array();
            foreach ($object->getExtensionAdditionalData() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['extension_additional_data'] = $values;
        }
        if (null !== $object->getFax()) {
            $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
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
        if (null !== $object->getTags()) {
            $values_1 = array();
            foreach ($object->getTags() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['tags'] = $values_1;
        }
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        return $data;
    }
}
