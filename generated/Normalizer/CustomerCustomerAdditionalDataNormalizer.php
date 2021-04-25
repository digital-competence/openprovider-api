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

class CustomerCustomerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CustomerCustomerAdditionalData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CustomerCustomerAdditionalData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CustomerCustomerAdditionalData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('attached_files', $data) && $data['attached_files'] !== null) {
            $values = array();
            foreach ($data['attached_files'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\CustomerFile', 'json', $context);
            }
            $object->setAttachedFiles($values);
        } elseif (\array_key_exists('attached_files', $data) && $data['attached_files'] === null) {
            $object->setAttachedFiles(null);
        }
        if (\array_key_exists('birth_address', $data) && $data['birth_address'] !== null) {
            $object->setBirthAddress($data['birth_address']);
        } elseif (\array_key_exists('birth_address', $data) && $data['birth_address'] === null) {
            $object->setBirthAddress(null);
        }
        if (\array_key_exists('birth_city', $data) && $data['birth_city'] !== null) {
            $object->setBirthCity($data['birth_city']);
        } elseif (\array_key_exists('birth_city', $data) && $data['birth_city'] === null) {
            $object->setBirthCity(null);
        }
        if (\array_key_exists('birth_country', $data) && $data['birth_country'] !== null) {
            $object->setBirthCountry($data['birth_country']);
        } elseif (\array_key_exists('birth_country', $data) && $data['birth_country'] === null) {
            $object->setBirthCountry(null);
        }
        if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
            $object->setBirthDate($data['birth_date']);
        } elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('birth_state', $data) && $data['birth_state'] !== null) {
            $object->setBirthState($data['birth_state']);
        } elseif (\array_key_exists('birth_state', $data) && $data['birth_state'] === null) {
            $object->setBirthState(null);
        }
        if (\array_key_exists('birth_zipcode', $data) && $data['birth_zipcode'] !== null) {
            $object->setBirthZipcode($data['birth_zipcode']);
        } elseif (\array_key_exists('birth_zipcode', $data) && $data['birth_zipcode'] === null) {
            $object->setBirthZipcode(null);
        }
        if (\array_key_exists('company_registration_city', $data) && $data['company_registration_city'] !== null) {
            $object->setCompanyRegistrationCity($data['company_registration_city']);
        } elseif (\array_key_exists('company_registration_city', $data) && $data['company_registration_city'] === null) {
            $object->setCompanyRegistrationCity(null);
        }
        if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
            $object->setCompanyRegistrationNumber($data['company_registration_number']);
        } elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
            $object->setCompanyRegistrationNumber(null);
        }
        if (\array_key_exists('company_registration_subscription_date', $data) && $data['company_registration_subscription_date'] !== null) {
            $object->setCompanyRegistrationSubscriptionDate($data['company_registration_subscription_date']);
        } elseif (\array_key_exists('company_registration_subscription_date', $data) && $data['company_registration_subscription_date'] === null) {
            $object->setCompanyRegistrationSubscriptionDate(null);
        }
        if (\array_key_exists('company_url', $data) && $data['company_url'] !== null) {
            $object->setCompanyUrl($data['company_url']);
        } elseif (\array_key_exists('company_url', $data) && $data['company_url'] === null) {
            $object->setCompanyUrl(null);
        }
        if (\array_key_exists('headquarters_address', $data) && $data['headquarters_address'] !== null) {
            $object->setHeadquartersAddress($data['headquarters_address']);
        } elseif (\array_key_exists('headquarters_address', $data) && $data['headquarters_address'] === null) {
            $object->setHeadquartersAddress(null);
        }
        if (\array_key_exists('headquarters_city', $data) && $data['headquarters_city'] !== null) {
            $object->setHeadquartersCity($data['headquarters_city']);
        } elseif (\array_key_exists('headquarters_city', $data) && $data['headquarters_city'] === null) {
            $object->setHeadquartersCity(null);
        }
        if (\array_key_exists('headquarters_country', $data) && $data['headquarters_country'] !== null) {
            $object->setHeadquartersCountry($data['headquarters_country']);
        } elseif (\array_key_exists('headquarters_country', $data) && $data['headquarters_country'] === null) {
            $object->setHeadquartersCountry(null);
        }
        if (\array_key_exists('headquarters_state', $data) && $data['headquarters_state'] !== null) {
            $object->setHeadquartersState($data['headquarters_state']);
        } elseif (\array_key_exists('headquarters_state', $data) && $data['headquarters_state'] === null) {
            $object->setHeadquartersState(null);
        }
        if (\array_key_exists('headquarters_zipcode', $data) && $data['headquarters_zipcode'] !== null) {
            $object->setHeadquartersZipcode($data['headquarters_zipcode']);
        } elseif (\array_key_exists('headquarters_zipcode', $data) && $data['headquarters_zipcode'] === null) {
            $object->setHeadquartersZipcode(null);
        }
        if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
            $object->setPassportNumber($data['passport_number']);
        } elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
            $object->setPassportNumber(null);
        }
        if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
            $object->setSocialSecurityNumber($data['social_security_number']);
        } elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
            $object->setSocialSecurityNumber(null);
        }
        if (\array_key_exists('trading_name', $data) && $data['trading_name'] !== null) {
            $object->setTradingName($data['trading_name']);
        } elseif (\array_key_exists('trading_name', $data) && $data['trading_name'] === null) {
            $object->setTradingName(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAttachedFiles()) {
            $values = array();
            foreach ($object->getAttachedFiles() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['attached_files'] = $values;
        }
        if (null !== $object->getBirthAddress()) {
            $data['birth_address'] = $object->getBirthAddress();
        }
        if (null !== $object->getBirthCity()) {
            $data['birth_city'] = $object->getBirthCity();
        }
        if (null !== $object->getBirthCountry()) {
            $data['birth_country'] = $object->getBirthCountry();
        }
        if (null !== $object->getBirthDate()) {
            $data['birth_date'] = $object->getBirthDate();
        }
        if (null !== $object->getBirthState()) {
            $data['birth_state'] = $object->getBirthState();
        }
        if (null !== $object->getBirthZipcode()) {
            $data['birth_zipcode'] = $object->getBirthZipcode();
        }
        if (null !== $object->getCompanyRegistrationCity()) {
            $data['company_registration_city'] = $object->getCompanyRegistrationCity();
        }
        if (null !== $object->getCompanyRegistrationNumber()) {
            $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
        }
        if (null !== $object->getCompanyRegistrationSubscriptionDate()) {
            $data['company_registration_subscription_date'] = $object->getCompanyRegistrationSubscriptionDate();
        }
        if (null !== $object->getCompanyUrl()) {
            $data['company_url'] = $object->getCompanyUrl();
        }
        if (null !== $object->getHeadquartersAddress()) {
            $data['headquarters_address'] = $object->getHeadquartersAddress();
        }
        if (null !== $object->getHeadquartersCity()) {
            $data['headquarters_city'] = $object->getHeadquartersCity();
        }
        if (null !== $object->getHeadquartersCountry()) {
            $data['headquarters_country'] = $object->getHeadquartersCountry();
        }
        if (null !== $object->getHeadquartersState()) {
            $data['headquarters_state'] = $object->getHeadquartersState();
        }
        if (null !== $object->getHeadquartersZipcode()) {
            $data['headquarters_zipcode'] = $object->getHeadquartersZipcode();
        }
        if (null !== $object->getPassportNumber()) {
            $data['passport_number'] = $object->getPassportNumber();
        }
        if (null !== $object->getSocialSecurityNumber()) {
            $data['social_security_number'] = $object->getSocialSecurityNumber();
        }
        if (null !== $object->getTradingName()) {
            $data['trading_name'] = $object->getTradingName();
        }
        return $data;
    }
}
