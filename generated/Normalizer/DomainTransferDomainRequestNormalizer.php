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

class DomainTransferDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainTransferDomainRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainTransferDomainRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainTransferDomainRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accept_premium_fee', $data) && $data['accept_premium_fee'] !== null) {
            $object->setAcceptPremiumFee($data['accept_premium_fee']);
        } elseif (\array_key_exists('accept_premium_fee', $data) && $data['accept_premium_fee'] === null) {
            $object->setAcceptPremiumFee(null);
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'DigiComp\\OpenproviderApi\\Model\\DomainTransferAdditionalData', 'json', $context));
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('admin_handle', $data) && $data['admin_handle'] !== null) {
            $object->setAdminHandle($data['admin_handle']);
        } elseif (\array_key_exists('admin_handle', $data) && $data['admin_handle'] === null) {
            $object->setAdminHandle(null);
        }
        if (\array_key_exists('at', $data) && $data['at'] !== null) {
            $object->setAt($data['at']);
        } elseif (\array_key_exists('at', $data) && $data['at'] === null) {
            $object->setAt(null);
        }
        if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
            $object->setAuthCode($data['auth_code']);
        } elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
            $object->setAuthCode(null);
        }
        if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
            $object->setAutorenew($data['autorenew']);
        } elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
            $object->setAutorenew(null);
        }
        if (\array_key_exists('billing_handle', $data) && $data['billing_handle'] !== null) {
            $object->setBillingHandle($data['billing_handle']);
        } elseif (\array_key_exists('billing_handle', $data) && $data['billing_handle'] === null) {
            $object->setBillingHandle(null);
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $object->setComments($data['comments']);
        } elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] !== null) {
            $values = array();
            foreach ($data['dnssec_keys'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\DomainDnssecKey', 'json', $context);
            }
            $object->setDnssecKeys($values);
        } elseif (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] === null) {
            $object->setDnssecKeys(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($this->denormalizer->denormalize($data['domain'], 'DigiComp\\OpenproviderApi\\Model\\DomainDomain', 'json', $context));
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] !== null) {
            $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
        } elseif (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] === null) {
            $object->setIsDnssecEnabled(null);
        }
        if (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] !== null) {
            $object->setIsPrivateWhoisEnabled($data['is_private_whois_enabled']);
        } elseif (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] === null) {
            $object->setIsPrivateWhoisEnabled(null);
        }
        if (\array_key_exists('name_servers', $data) && $data['name_servers'] !== null) {
            $values_1 = array();
            foreach ($data['name_servers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\DomainNameserver', 'json', $context);
            }
            $object->setNameServers($values_1);
        } elseif (\array_key_exists('name_servers', $data) && $data['name_servers'] === null) {
            $object->setNameServers(null);
        }
        if (\array_key_exists('ns_group', $data) && $data['ns_group'] !== null) {
            $object->setNsGroup($data['ns_group']);
        } elseif (\array_key_exists('ns_group', $data) && $data['ns_group'] === null) {
            $object->setNsGroup(null);
        }
        if (\array_key_exists('ns_template_id', $data) && $data['ns_template_id'] !== null) {
            $object->setNsTemplateId($data['ns_template_id']);
        } elseif (\array_key_exists('ns_template_id', $data) && $data['ns_template_id'] === null) {
            $object->setNsTemplateId(null);
        }
        if (\array_key_exists('ns_template_name', $data) && $data['ns_template_name'] !== null) {
            $object->setNsTemplateName($data['ns_template_name']);
        } elseif (\array_key_exists('ns_template_name', $data) && $data['ns_template_name'] === null) {
            $object->setNsTemplateName(null);
        }
        if (\array_key_exists('owner_handle', $data) && $data['owner_handle'] !== null) {
            $object->setOwnerHandle($data['owner_handle']);
        } elseif (\array_key_exists('owner_handle', $data) && $data['owner_handle'] === null) {
            $object->setOwnerHandle(null);
        }
        if (\array_key_exists('promo_code', $data) && $data['promo_code'] !== null) {
            $object->setPromoCode($data['promo_code']);
        } elseif (\array_key_exists('promo_code', $data) && $data['promo_code'] === null) {
            $object->setPromoCode(null);
        }
        if (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] !== null) {
            $object->setResellerHandle($data['reseller_handle']);
        } elseif (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] === null) {
            $object->setResellerHandle(null);
        }
        if (\array_key_exists('roid', $data) && $data['roid'] !== null) {
            $object->setRoid($data['roid']);
        } elseif (\array_key_exists('roid', $data) && $data['roid'] === null) {
            $object->setRoid(null);
        }
        if (\array_key_exists('tech_handle', $data) && $data['tech_handle'] !== null) {
            $object->setTechHandle($data['tech_handle']);
        } elseif (\array_key_exists('tech_handle', $data) && $data['tech_handle'] === null) {
            $object->setTechHandle(null);
        }
        if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
            $object->setUnit($data['unit']);
        } elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
            $object->setUnit(null);
        }
        if (\array_key_exists('use_domicile', $data) && $data['use_domicile'] !== null) {
            $object->setUseDomicile($data['use_domicile']);
        } elseif (\array_key_exists('use_domicile', $data) && $data['use_domicile'] === null) {
            $object->setUseDomicile(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAcceptPremiumFee()) {
            $data['accept_premium_fee'] = $object->getAcceptPremiumFee();
        }
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        if (null !== $object->getAdminHandle()) {
            $data['admin_handle'] = $object->getAdminHandle();
        }
        if (null !== $object->getAt()) {
            $data['at'] = $object->getAt();
        }
        if (null !== $object->getAuthCode()) {
            $data['auth_code'] = $object->getAuthCode();
        }
        if (null !== $object->getAutorenew()) {
            $data['autorenew'] = $object->getAutorenew();
        }
        if (null !== $object->getBillingHandle()) {
            $data['billing_handle'] = $object->getBillingHandle();
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getDnssecKeys()) {
            $values = array();
            foreach ($object->getDnssecKeys() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['dnssec_keys'] = $values;
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
        }
        if (null !== $object->getIsDnssecEnabled()) {
            $data['is_dnssec_enabled'] = $object->getIsDnssecEnabled();
        }
        if (null !== $object->getIsPrivateWhoisEnabled()) {
            $data['is_private_whois_enabled'] = $object->getIsPrivateWhoisEnabled();
        }
        if (null !== $object->getNameServers()) {
            $values_1 = array();
            foreach ($object->getNameServers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['name_servers'] = $values_1;
        }
        if (null !== $object->getNsGroup()) {
            $data['ns_group'] = $object->getNsGroup();
        }
        if (null !== $object->getNsTemplateId()) {
            $data['ns_template_id'] = $object->getNsTemplateId();
        }
        if (null !== $object->getNsTemplateName()) {
            $data['ns_template_name'] = $object->getNsTemplateName();
        }
        if (null !== $object->getOwnerHandle()) {
            $data['owner_handle'] = $object->getOwnerHandle();
        }
        if (null !== $object->getPromoCode()) {
            $data['promo_code'] = $object->getPromoCode();
        }
        if (null !== $object->getResellerHandle()) {
            $data['reseller_handle'] = $object->getResellerHandle();
        }
        if (null !== $object->getRoid()) {
            $data['roid'] = $object->getRoid();
        }
        if (null !== $object->getTechHandle()) {
            $data['tech_handle'] = $object->getTechHandle();
        }
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if (null !== $object->getUseDomicile()) {
            $data['use_domicile'] = $object->getUseDomicile();
        }
        return $data;
    }
}
