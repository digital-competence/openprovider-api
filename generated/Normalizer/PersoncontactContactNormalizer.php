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

class PersoncontactContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\PersoncontactContact';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\PersoncontactContact';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\PersoncontactContact();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'DigiComp\\OpenproviderApi\\Model\\ContactAdditionalData', 'json', $context));
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'DigiComp\\OpenproviderApi\\Model\\ContactAddress', 'json', $context));
        } elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('api_access_enabled', $data) && $data['api_access_enabled'] !== null) {
            $object->setApiAccessEnabled($data['api_access_enabled']);
        } elseif (\array_key_exists('api_access_enabled', $data) && $data['api_access_enabled'] === null) {
            $object->setApiAccessEnabled(null);
        }
        if (\array_key_exists('api_client_ip_list', $data) && $data['api_client_ip_list'] !== null) {
            $object->setApiClientIpList($this->denormalizer->denormalize($data['api_client_ip_list'], 'DigiComp\\OpenproviderApi\\Model\\ContactClientIpList', 'json', $context));
        } elseif (\array_key_exists('api_client_ip_list', $data) && $data['api_client_ip_list'] === null) {
            $object->setApiClientIpList(null);
        }
        if (\array_key_exists('auth_type', $data) && $data['auth_type'] !== null) {
            $object->setAuthType($data['auth_type']);
        } elseif (\array_key_exists('auth_type', $data) && $data['auth_type'] === null) {
            $object->setAuthType(null);
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
        if (\array_key_exists('hash_changed_at', $data) && $data['hash_changed_at'] !== null) {
            $object->setHashChangedAt($data['hash_changed_at']);
        } elseif (\array_key_exists('hash_changed_at', $data) && $data['hash_changed_at'] === null) {
            $object->setHashChangedAt(null);
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
        if (\array_key_exists('last_api_call_at', $data) && $data['last_api_call_at'] !== null) {
            $object->setLastApiCallAt($data['last_api_call_at']);
        } elseif (\array_key_exists('last_api_call_at', $data) && $data['last_api_call_at'] === null) {
            $object->setLastApiCallAt(null);
        }
        if (\array_key_exists('last_login_at', $data) && $data['last_login_at'] !== null) {
            $object->setLastLoginAt($data['last_login_at']);
        } elseif (\array_key_exists('last_login_at', $data) && $data['last_login_at'] === null) {
            $object->setLastLoginAt(null);
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
        if (\array_key_exists('password_change_declined_at', $data) && $data['password_change_declined_at'] !== null) {
            $object->setPasswordChangeDeclinedAt($data['password_change_declined_at']);
        } elseif (\array_key_exists('password_change_declined_at', $data) && $data['password_change_declined_at'] === null) {
            $object->setPasswordChangeDeclinedAt(null);
        }
        if (\array_key_exists('password_changed_at', $data) && $data['password_changed_at'] !== null) {
            $object->setPasswordChangedAt($data['password_changed_at']);
        } elseif (\array_key_exists('password_changed_at', $data) && $data['password_changed_at'] === null) {
            $object->setPasswordChangedAt(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($this->denormalizer->denormalize($data['phone'], 'DigiComp\\OpenproviderApi\\Model\\ContactPhone', 'json', $context));
        } elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('rcp_client_ip_list', $data) && $data['rcp_client_ip_list'] !== null) {
            $object->setRcpClientIpList($this->denormalizer->denormalize($data['rcp_client_ip_list'], 'DigiComp\\OpenproviderApi\\Model\\ContactClientIpList', 'json', $context));
        } elseif (\array_key_exists('rcp_client_ip_list', $data) && $data['rcp_client_ip_list'] === null) {
            $object->setRcpClientIpList(null);
        }
        if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
            $object->setResellerId($data['reseller_id']);
        } elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
            $object->setResellerId(null);
        }
        if (\array_key_exists('role', $data) && $data['role'] !== null) {
            $object->setRole($data['role']);
        } elseif (\array_key_exists('role', $data) && $data['role'] === null) {
            $object->setRole(null);
        }
        if (\array_key_exists('secret_key', $data) && $data['secret_key'] !== null) {
            $object->setSecretKey($data['secret_key']);
        } elseif (\array_key_exists('secret_key', $data) && $data['secret_key'] === null) {
            $object->setSecretKey(null);
        }
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $object->setUsername($data['username']);
        } elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
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
        if (null !== $object->getApiAccessEnabled()) {
            $data['api_access_enabled'] = $object->getApiAccessEnabled();
        }
        if (null !== $object->getApiClientIpList()) {
            $data['api_client_ip_list'] = $this->normalizer->normalize($object->getApiClientIpList(), 'json', $context);
        }
        if (null !== $object->getAuthType()) {
            $data['auth_type'] = $object->getAuthType();
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
        if (null !== $object->getHashChangedAt()) {
            $data['hash_changed_at'] = $object->getHashChangedAt();
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getIsActive()) {
            $data['is_active'] = $object->getIsActive();
        }
        if (null !== $object->getLastApiCallAt()) {
            $data['last_api_call_at'] = $object->getLastApiCallAt();
        }
        if (null !== $object->getLastLoginAt()) {
            $data['last_login_at'] = $object->getLastLoginAt();
        }
        if (null !== $object->getLocale()) {
            $data['locale'] = $object->getLocale();
        }
        if (null !== $object->getName()) {
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        }
        if (null !== $object->getPasswordChangeDeclinedAt()) {
            $data['password_change_declined_at'] = $object->getPasswordChangeDeclinedAt();
        }
        if (null !== $object->getPasswordChangedAt()) {
            $data['password_changed_at'] = $object->getPasswordChangedAt();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
        }
        if (null !== $object->getRcpClientIpList()) {
            $data['rcp_client_ip_list'] = $this->normalizer->normalize($object->getRcpClientIpList(), 'json', $context);
        }
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        if (null !== $object->getRole()) {
            $data['role'] = $object->getRole();
        }
        if (null !== $object->getSecretKey()) {
            $data['secret_key'] = $object->getSecretKey();
        }
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        return $data;
    }
}
