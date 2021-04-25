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

class DomainGetDomainResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainGetDomainResponseData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainGetDomainResponseData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainGetDomainResponseData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('abuse_details', $data) && $data['abuse_details'] !== null) {
            $object->setAbuseDetails($this->denormalizer->denormalize($data['abuse_details'], 'DigiComp\\OpenproviderApi\\Model\\DomainAbuseDetails', 'json', $context));
        } elseif (\array_key_exists('abuse_details', $data) && $data['abuse_details'] === null) {
            $object->setAbuseDetails(null);
        }
        if (\array_key_exists('active_date', $data) && $data['active_date'] !== null) {
            $object->setActiveDate($data['active_date']);
        } elseif (\array_key_exists('active_date', $data) && $data['active_date'] === null) {
            $object->setActiveDate(null);
        }
        if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
            $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'DigiComp\\OpenproviderApi\\Model\\DomainAdditionalData', 'json', $context));
        } elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
            $object->setAdditionalData(null);
        }
        if (\array_key_exists('admin_handle', $data) && $data['admin_handle'] !== null) {
            $object->setAdminHandle($data['admin_handle']);
        } elseif (\array_key_exists('admin_handle', $data) && $data['admin_handle'] === null) {
            $object->setAdminHandle(null);
        }
        if (\array_key_exists('api_history', $data) && $data['api_history'] !== null) {
            $values = array();
            foreach ($data['api_history'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'DigiComp\\OpenproviderApi\\Model\\DomainApiHistory', 'json', $context);
            }
            $object->setApiHistory($values);
        } elseif (\array_key_exists('api_history', $data) && $data['api_history'] === null) {
            $object->setApiHistory(null);
        }
        if (\array_key_exists('application_id', $data) && $data['application_id'] !== null) {
            $object->setApplicationId($data['application_id']);
        } elseif (\array_key_exists('application_id', $data) && $data['application_id'] === null) {
            $object->setApplicationId(null);
        }
        if (\array_key_exists('application_mode', $data) && $data['application_mode'] !== null) {
            $object->setApplicationMode($data['application_mode']);
        } elseif (\array_key_exists('application_mode', $data) && $data['application_mode'] === null) {
            $object->setApplicationMode(null);
        }
        if (\array_key_exists('application_mode_expiration_date', $data) && $data['application_mode_expiration_date'] !== null) {
            $object->setApplicationModeExpirationDate($data['application_mode_expiration_date']);
        } elseif (\array_key_exists('application_mode_expiration_date', $data) && $data['application_mode_expiration_date'] === null) {
            $object->setApplicationModeExpirationDate(null);
        }
        if (\array_key_exists('application_mode_title', $data) && $data['application_mode_title'] !== null) {
            $object->setApplicationModeTitle($data['application_mode_title']);
        } elseif (\array_key_exists('application_mode_title', $data) && $data['application_mode_title'] === null) {
            $object->setApplicationModeTitle(null);
        }
        if (\array_key_exists('application_notice_id', $data) && $data['application_notice_id'] !== null) {
            $object->setApplicationNoticeId($data['application_notice_id']);
        } elseif (\array_key_exists('application_notice_id', $data) && $data['application_notice_id'] === null) {
            $object->setApplicationNoticeId(null);
        }
        if (\array_key_exists('application_smd', $data) && $data['application_smd'] !== null) {
            $object->setApplicationSmd($data['application_smd']);
        } elseif (\array_key_exists('application_smd', $data) && $data['application_smd'] === null) {
            $object->setApplicationSmd(null);
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
        if (\array_key_exists('can_renew', $data) && $data['can_renew'] !== null) {
            $object->setCanRenew($data['can_renew']);
        } elseif (\array_key_exists('can_renew', $data) && $data['can_renew'] === null) {
            $object->setCanRenew(null);
        }
        if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
            $object->setComments($data['comments']);
        } elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
            $object->setComments(null);
        }
        if (\array_key_exists('comments_last_changed_at', $data) && $data['comments_last_changed_at'] !== null) {
            $object->setCommentsLastChangedAt($data['comments_last_changed_at']);
        } elseif (\array_key_exists('comments_last_changed_at', $data) && $data['comments_last_changed_at'] === null) {
            $object->setCommentsLastChangedAt(null);
        }
        if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
            $object->setCreationDate($data['creation_date']);
        } elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
            $object->setCreationDate(null);
        }
        if (\array_key_exists('delete_status', $data) && $data['delete_status'] !== null) {
            $object->setDeleteStatus($data['delete_status']);
        } elseif (\array_key_exists('delete_status', $data) && $data['delete_status'] === null) {
            $object->setDeleteStatus(null);
        }
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt($data['deleted_at']);
        } elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
        }
        if (\array_key_exists('dnssec', $data) && $data['dnssec'] !== null) {
            $object->setDnssec($data['dnssec']);
        } elseif (\array_key_exists('dnssec', $data) && $data['dnssec'] === null) {
            $object->setDnssec(null);
        }
        if (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] !== null) {
            $values_1 = array();
            foreach ($data['dnssec_keys'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\DomainDnssecKey', 'json', $context);
            }
            $object->setDnssecKeys($values_1);
        } elseif (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] === null) {
            $object->setDnssecKeys(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($this->denormalizer->denormalize($data['domain'], 'DigiComp\\OpenproviderApi\\Model\\DomainDomain', 'json', $context));
        } elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        } elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('hard_quarantine_expiry_date', $data) && $data['hard_quarantine_expiry_date'] !== null) {
            $object->setHardQuarantineExpiryDate($data['hard_quarantine_expiry_date']);
        } elseif (\array_key_exists('hard_quarantine_expiry_date', $data) && $data['hard_quarantine_expiry_date'] === null) {
            $object->setHardQuarantineExpiryDate(null);
        }
        if (\array_key_exists('has_history', $data) && $data['has_history'] !== null) {
            $object->setHasHistory($data['has_history']);
        } elseif (\array_key_exists('has_history', $data) && $data['has_history'] === null) {
            $object->setHasHistory(null);
        }
        if (\array_key_exists('history', $data) && $data['history'] !== null) {
            $values_2 = array();
            foreach ($data['history'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DigiComp\\OpenproviderApi\\Model\\DomainHistory', 'json', $context);
            }
            $object->setHistory($values_2);
        } elseif (\array_key_exists('history', $data) && $data['history'] === null) {
            $object->setHistory(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('internal_auth_code', $data) && $data['internal_auth_code'] !== null) {
            $object->setInternalAuthCode($data['internal_auth_code']);
        } elseif (\array_key_exists('internal_auth_code', $data) && $data['internal_auth_code'] === null) {
            $object->setInternalAuthCode(null);
        }
        if (\array_key_exists('is_abusive', $data) && $data['is_abusive'] !== null) {
            $object->setIsAbusive($data['is_abusive']);
        } elseif (\array_key_exists('is_abusive', $data) && $data['is_abusive'] === null) {
            $object->setIsAbusive(null);
        }
        if (\array_key_exists('is_client_hold_enabled', $data) && $data['is_client_hold_enabled'] !== null) {
            $object->setIsClientHoldEnabled($data['is_client_hold_enabled']);
        } elseif (\array_key_exists('is_client_hold_enabled', $data) && $data['is_client_hold_enabled'] === null) {
            $object->setIsClientHoldEnabled(null);
        }
        if (\array_key_exists('is_deleted', $data) && $data['is_deleted'] !== null) {
            $object->setIsDeleted($data['is_deleted']);
        } elseif (\array_key_exists('is_deleted', $data) && $data['is_deleted'] === null) {
            $object->setIsDeleted(null);
        }
        if (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] !== null) {
            $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
        } elseif (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] === null) {
            $object->setIsDnssecEnabled(null);
        }
        if (\array_key_exists('is_hosted_whois', $data) && $data['is_hosted_whois'] !== null) {
            $object->setIsHostedWhois($data['is_hosted_whois']);
        } elseif (\array_key_exists('is_hosted_whois', $data) && $data['is_hosted_whois'] === null) {
            $object->setIsHostedWhois(null);
        }
        if (\array_key_exists('is_lockable', $data) && $data['is_lockable'] !== null) {
            $object->setIsLockable($data['is_lockable']);
        } elseif (\array_key_exists('is_lockable', $data) && $data['is_lockable'] === null) {
            $object->setIsLockable(null);
        }
        if (\array_key_exists('is_locked', $data) && $data['is_locked'] !== null) {
            $object->setIsLocked($data['is_locked']);
        } elseif (\array_key_exists('is_locked', $data) && $data['is_locked'] === null) {
            $object->setIsLocked(null);
        }
        if (\array_key_exists('is_parked', $data) && $data['is_parked'] !== null) {
            $object->setIsParked($data['is_parked']);
        } elseif (\array_key_exists('is_parked', $data) && $data['is_parked'] === null) {
            $object->setIsParked(null);
        }
        if (\array_key_exists('is_premium', $data) && $data['is_premium'] !== null) {
            $object->setIsPremium($data['is_premium']);
        } elseif (\array_key_exists('is_premium', $data) && $data['is_premium'] === null) {
            $object->setIsPremium(null);
        }
        if (\array_key_exists('is_private_whois_allowed', $data) && $data['is_private_whois_allowed'] !== null) {
            $object->setIsPrivateWhoisAllowed($data['is_private_whois_allowed']);
        } elseif (\array_key_exists('is_private_whois_allowed', $data) && $data['is_private_whois_allowed'] === null) {
            $object->setIsPrivateWhoisAllowed(null);
        }
        if (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] !== null) {
            $object->setIsPrivateWhoisEnabled($data['is_private_whois_enabled']);
        } elseif (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] === null) {
            $object->setIsPrivateWhoisEnabled(null);
        }
        if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
            $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
        } elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
            $object->setIsSpamexpertsEnabled(null);
        }
        if (\array_key_exists('last_changed', $data) && $data['last_changed'] !== null) {
            $object->setLastChanged($data['last_changed']);
        } elseif (\array_key_exists('last_changed', $data) && $data['last_changed'] === null) {
            $object->setLastChanged(null);
        }
        if (\array_key_exists('modify_owner_allowed', $data) && $data['modify_owner_allowed'] !== null) {
            $object->setModifyOwnerAllowed($data['modify_owner_allowed']);
        } elseif (\array_key_exists('modify_owner_allowed', $data) && $data['modify_owner_allowed'] === null) {
            $object->setModifyOwnerAllowed(null);
        }
        if (\array_key_exists('name_servers', $data) && $data['name_servers'] !== null) {
            $values_3 = array();
            foreach ($data['name_servers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'DigiComp\\OpenproviderApi\\Model\\DomainNameserver', 'json', $context);
            }
            $object->setNameServers($values_3);
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
        if (\array_key_exists('nsgroup_id', $data) && $data['nsgroup_id'] !== null) {
            $object->setNsgroupId($data['nsgroup_id']);
        } elseif (\array_key_exists('nsgroup_id', $data) && $data['nsgroup_id'] === null) {
            $object->setNsgroupId(null);
        }
        if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
            $object->setOrderDate($data['order_date']);
        } elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('owner', $data) && $data['owner'] !== null) {
            $object->setOwner($this->denormalizer->denormalize($data['owner'], 'DigiComp\\OpenproviderApi\\Model\\DomainOwner', 'json', $context));
        } elseif (\array_key_exists('owner', $data) && $data['owner'] === null) {
            $object->setOwner(null);
        }
        if (\array_key_exists('owner_company_name', $data) && $data['owner_company_name'] !== null) {
            $object->setOwnerCompanyName($data['owner_company_name']);
        } elseif (\array_key_exists('owner_company_name', $data) && $data['owner_company_name'] === null) {
            $object->setOwnerCompanyName(null);
        }
        if (\array_key_exists('owner_handle', $data) && $data['owner_handle'] !== null) {
            $object->setOwnerHandle($data['owner_handle']);
        } elseif (\array_key_exists('owner_handle', $data) && $data['owner_handle'] === null) {
            $object->setOwnerHandle(null);
        }
        if (\array_key_exists('quarantine_expiration_date', $data) && $data['quarantine_expiration_date'] !== null) {
            $object->setQuarantineExpirationDate($data['quarantine_expiration_date']);
        } elseif (\array_key_exists('quarantine_expiration_date', $data) && $data['quarantine_expiration_date'] === null) {
            $object->setQuarantineExpirationDate(null);
        }
        if (\array_key_exists('registry_expiration_date', $data) && $data['registry_expiration_date'] !== null) {
            $object->setRegistryExpirationDate($data['registry_expiration_date']);
        } elseif (\array_key_exists('registry_expiration_date', $data) && $data['registry_expiration_date'] === null) {
            $object->setRegistryExpirationDate(null);
        }
        if (\array_key_exists('registry_statuses', $data) && $data['registry_statuses'] !== null) {
            $object->setRegistryStatuses($this->denormalizer->denormalize($data['registry_statuses'], 'DigiComp\\OpenproviderApi\\Model\\DomainRegistryStatuses', 'json', $context));
        } elseif (\array_key_exists('registry_statuses', $data) && $data['registry_statuses'] === null) {
            $object->setRegistryStatuses(null);
        }
        if (\array_key_exists('renew', $data) && $data['renew'] !== null) {
            $object->setRenew($data['renew']);
        } elseif (\array_key_exists('renew', $data) && $data['renew'] === null) {
            $object->setRenew(null);
        }
        if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
            $object->setRenewalDate($data['renewal_date']);
        } elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
            $object->setRenewalDate(null);
        }
        if (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] !== null) {
            $object->setResellerHandle($data['reseller_handle']);
        } elseif (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] === null) {
            $object->setResellerHandle(null);
        }
        if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
            $object->setResellerId($data['reseller_id']);
        } elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
            $object->setResellerId(null);
        }
        if (\array_key_exists('restorable_until', $data) && $data['restorable_until'] !== null) {
            $object->setRestorableUntil($data['restorable_until']);
        } elseif (\array_key_exists('restorable_until', $data) && $data['restorable_until'] === null) {
            $object->setRestorableUntil(null);
        }
        if (\array_key_exists('scheduled_at', $data) && $data['scheduled_at'] !== null) {
            $object->setScheduledAt($data['scheduled_at']);
        } elseif (\array_key_exists('scheduled_at', $data) && $data['scheduled_at'] === null) {
            $object->setScheduledAt(null);
        }
        if (\array_key_exists('scheduled_from', $data) && $data['scheduled_from'] !== null) {
            $object->setScheduledFrom($data['scheduled_from']);
        } elseif (\array_key_exists('scheduled_from', $data) && $data['scheduled_from'] === null) {
            $object->setScheduledFrom(null);
        }
        if (\array_key_exists('soft_quarantine_expiry_date', $data) && $data['soft_quarantine_expiry_date'] !== null) {
            $object->setSoftQuarantineExpiryDate($data['soft_quarantine_expiry_date']);
        } elseif (\array_key_exists('soft_quarantine_expiry_date', $data) && $data['soft_quarantine_expiry_date'] === null) {
            $object->setSoftQuarantineExpiryDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('tech_handle', $data) && $data['tech_handle'] !== null) {
            $object->setTechHandle($data['tech_handle']);
        } elseif (\array_key_exists('tech_handle', $data) && $data['tech_handle'] === null) {
            $object->setTechHandle(null);
        }
        if (\array_key_exists('trade_allowed', $data) && $data['trade_allowed'] !== null) {
            $object->setTradeAllowed($data['trade_allowed']);
        } elseif (\array_key_exists('trade_allowed', $data) && $data['trade_allowed'] === null) {
            $object->setTradeAllowed(null);
        }
        if (\array_key_exists('trade_auth_code_required', $data) && $data['trade_auth_code_required'] !== null) {
            $object->setTradeAuthCodeRequired($data['trade_auth_code_required']);
        } elseif (\array_key_exists('trade_auth_code_required', $data) && $data['trade_auth_code_required'] === null) {
            $object->setTradeAuthCodeRequired(null);
        }
        if (\array_key_exists('transfer_auth_code_required', $data) && $data['transfer_auth_code_required'] !== null) {
            $object->setTransferAuthCodeRequired($data['transfer_auth_code_required']);
        } elseif (\array_key_exists('transfer_auth_code_required', $data) && $data['transfer_auth_code_required'] === null) {
            $object->setTransferAuthCodeRequired(null);
        }
        if (\array_key_exists('transfer_cancel_supported', $data) && $data['transfer_cancel_supported'] !== null) {
            $object->setTransferCancelSupported($data['transfer_cancel_supported']);
        } elseif (\array_key_exists('transfer_cancel_supported', $data) && $data['transfer_cancel_supported'] === null) {
            $object->setTransferCancelSupported(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
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
        if (\array_key_exists('verification_email_exp_date', $data) && $data['verification_email_exp_date'] !== null) {
            $object->setVerificationEmailExpDate($data['verification_email_exp_date']);
        } elseif (\array_key_exists('verification_email_exp_date', $data) && $data['verification_email_exp_date'] === null) {
            $object->setVerificationEmailExpDate(null);
        }
        if (\array_key_exists('verification_email_name', $data) && $data['verification_email_name'] !== null) {
            $object->setVerificationEmailName($data['verification_email_name']);
        } elseif (\array_key_exists('verification_email_name', $data) && $data['verification_email_name'] === null) {
            $object->setVerificationEmailName(null);
        }
        if (\array_key_exists('verification_email_status', $data) && $data['verification_email_status'] !== null) {
            $object->setVerificationEmailStatus($data['verification_email_status']);
        } elseif (\array_key_exists('verification_email_status', $data) && $data['verification_email_status'] === null) {
            $object->setVerificationEmailStatus(null);
        }
        if (\array_key_exists('verification_email_status_description', $data) && $data['verification_email_status_description'] !== null) {
            $object->setVerificationEmailStatusDescription($data['verification_email_status_description']);
        } elseif (\array_key_exists('verification_email_status_description', $data) && $data['verification_email_status_description'] === null) {
            $object->setVerificationEmailStatusDescription(null);
        }
        if (\array_key_exists('whois_privacy_data', $data) && $data['whois_privacy_data'] !== null) {
            $object->setWhoisPrivacyData($this->denormalizer->denormalize($data['whois_privacy_data'], 'DigiComp\\OpenproviderApi\\Model\\DomainWhoisPrivacyData', 'json', $context));
        } elseif (\array_key_exists('whois_privacy_data', $data) && $data['whois_privacy_data'] === null) {
            $object->setWhoisPrivacyData(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAbuseDetails()) {
            $data['abuse_details'] = $this->normalizer->normalize($object->getAbuseDetails(), 'json', $context);
        }
        if (null !== $object->getActiveDate()) {
            $data['active_date'] = $object->getActiveDate();
        }
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
        }
        if (null !== $object->getAdminHandle()) {
            $data['admin_handle'] = $object->getAdminHandle();
        }
        if (null !== $object->getApiHistory()) {
            $values = array();
            foreach ($object->getApiHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['api_history'] = $values;
        }
        if (null !== $object->getApplicationId()) {
            $data['application_id'] = $object->getApplicationId();
        }
        if (null !== $object->getApplicationMode()) {
            $data['application_mode'] = $object->getApplicationMode();
        }
        if (null !== $object->getApplicationModeExpirationDate()) {
            $data['application_mode_expiration_date'] = $object->getApplicationModeExpirationDate();
        }
        if (null !== $object->getApplicationModeTitle()) {
            $data['application_mode_title'] = $object->getApplicationModeTitle();
        }
        if (null !== $object->getApplicationNoticeId()) {
            $data['application_notice_id'] = $object->getApplicationNoticeId();
        }
        if (null !== $object->getApplicationSmd()) {
            $data['application_smd'] = $object->getApplicationSmd();
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
        if (null !== $object->getCanRenew()) {
            $data['can_renew'] = $object->getCanRenew();
        }
        if (null !== $object->getComments()) {
            $data['comments'] = $object->getComments();
        }
        if (null !== $object->getCommentsLastChangedAt()) {
            $data['comments_last_changed_at'] = $object->getCommentsLastChangedAt();
        }
        if (null !== $object->getCreationDate()) {
            $data['creation_date'] = $object->getCreationDate();
        }
        if (null !== $object->getDeleteStatus()) {
            $data['delete_status'] = $object->getDeleteStatus();
        }
        if (null !== $object->getDeletedAt()) {
            $data['deleted_at'] = $object->getDeletedAt();
        }
        if (null !== $object->getDnssec()) {
            $data['dnssec'] = $object->getDnssec();
        }
        if (null !== $object->getDnssecKeys()) {
            $values_1 = array();
            foreach ($object->getDnssecKeys() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['dnssec_keys'] = $values_1;
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
        }
        if (null !== $object->getExpirationDate()) {
            $data['expiration_date'] = $object->getExpirationDate();
        }
        if (null !== $object->getHardQuarantineExpiryDate()) {
            $data['hard_quarantine_expiry_date'] = $object->getHardQuarantineExpiryDate();
        }
        if (null !== $object->getHasHistory()) {
            $data['has_history'] = $object->getHasHistory();
        }
        if (null !== $object->getHistory()) {
            $values_2 = array();
            foreach ($object->getHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['history'] = $values_2;
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getInternalAuthCode()) {
            $data['internal_auth_code'] = $object->getInternalAuthCode();
        }
        if (null !== $object->getIsAbusive()) {
            $data['is_abusive'] = $object->getIsAbusive();
        }
        if (null !== $object->getIsClientHoldEnabled()) {
            $data['is_client_hold_enabled'] = $object->getIsClientHoldEnabled();
        }
        if (null !== $object->getIsDeleted()) {
            $data['is_deleted'] = $object->getIsDeleted();
        }
        if (null !== $object->getIsDnssecEnabled()) {
            $data['is_dnssec_enabled'] = $object->getIsDnssecEnabled();
        }
        if (null !== $object->getIsHostedWhois()) {
            $data['is_hosted_whois'] = $object->getIsHostedWhois();
        }
        if (null !== $object->getIsLockable()) {
            $data['is_lockable'] = $object->getIsLockable();
        }
        if (null !== $object->getIsLocked()) {
            $data['is_locked'] = $object->getIsLocked();
        }
        if (null !== $object->getIsParked()) {
            $data['is_parked'] = $object->getIsParked();
        }
        if (null !== $object->getIsPremium()) {
            $data['is_premium'] = $object->getIsPremium();
        }
        if (null !== $object->getIsPrivateWhoisAllowed()) {
            $data['is_private_whois_allowed'] = $object->getIsPrivateWhoisAllowed();
        }
        if (null !== $object->getIsPrivateWhoisEnabled()) {
            $data['is_private_whois_enabled'] = $object->getIsPrivateWhoisEnabled();
        }
        if (null !== $object->getIsSpamexpertsEnabled()) {
            $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
        }
        if (null !== $object->getLastChanged()) {
            $data['last_changed'] = $object->getLastChanged();
        }
        if (null !== $object->getModifyOwnerAllowed()) {
            $data['modify_owner_allowed'] = $object->getModifyOwnerAllowed();
        }
        if (null !== $object->getNameServers()) {
            $values_3 = array();
            foreach ($object->getNameServers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['name_servers'] = $values_3;
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
        if (null !== $object->getNsgroupId()) {
            $data['nsgroup_id'] = $object->getNsgroupId();
        }
        if (null !== $object->getOrderDate()) {
            $data['order_date'] = $object->getOrderDate();
        }
        if (null !== $object->getOwner()) {
            $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
        }
        if (null !== $object->getOwnerCompanyName()) {
            $data['owner_company_name'] = $object->getOwnerCompanyName();
        }
        if (null !== $object->getOwnerHandle()) {
            $data['owner_handle'] = $object->getOwnerHandle();
        }
        if (null !== $object->getQuarantineExpirationDate()) {
            $data['quarantine_expiration_date'] = $object->getQuarantineExpirationDate();
        }
        if (null !== $object->getRegistryExpirationDate()) {
            $data['registry_expiration_date'] = $object->getRegistryExpirationDate();
        }
        if (null !== $object->getRegistryStatuses()) {
            $data['registry_statuses'] = $this->normalizer->normalize($object->getRegistryStatuses(), 'json', $context);
        }
        if (null !== $object->getRenew()) {
            $data['renew'] = $object->getRenew();
        }
        if (null !== $object->getRenewalDate()) {
            $data['renewal_date'] = $object->getRenewalDate();
        }
        if (null !== $object->getResellerHandle()) {
            $data['reseller_handle'] = $object->getResellerHandle();
        }
        if (null !== $object->getResellerId()) {
            $data['reseller_id'] = $object->getResellerId();
        }
        if (null !== $object->getRestorableUntil()) {
            $data['restorable_until'] = $object->getRestorableUntil();
        }
        if (null !== $object->getScheduledAt()) {
            $data['scheduled_at'] = $object->getScheduledAt();
        }
        if (null !== $object->getScheduledFrom()) {
            $data['scheduled_from'] = $object->getScheduledFrom();
        }
        if (null !== $object->getSoftQuarantineExpiryDate()) {
            $data['soft_quarantine_expiry_date'] = $object->getSoftQuarantineExpiryDate();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTechHandle()) {
            $data['tech_handle'] = $object->getTechHandle();
        }
        if (null !== $object->getTradeAllowed()) {
            $data['trade_allowed'] = $object->getTradeAllowed();
        }
        if (null !== $object->getTradeAuthCodeRequired()) {
            $data['trade_auth_code_required'] = $object->getTradeAuthCodeRequired();
        }
        if (null !== $object->getTransferAuthCodeRequired()) {
            $data['transfer_auth_code_required'] = $object->getTransferAuthCodeRequired();
        }
        if (null !== $object->getTransferCancelSupported()) {
            $data['transfer_cancel_supported'] = $object->getTransferCancelSupported();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getUnit()) {
            $data['unit'] = $object->getUnit();
        }
        if (null !== $object->getUseDomicile()) {
            $data['use_domicile'] = $object->getUseDomicile();
        }
        if (null !== $object->getVerificationEmailExpDate()) {
            $data['verification_email_exp_date'] = $object->getVerificationEmailExpDate();
        }
        if (null !== $object->getVerificationEmailName()) {
            $data['verification_email_name'] = $object->getVerificationEmailName();
        }
        if (null !== $object->getVerificationEmailStatus()) {
            $data['verification_email_status'] = $object->getVerificationEmailStatus();
        }
        if (null !== $object->getVerificationEmailStatusDescription()) {
            $data['verification_email_status_description'] = $object->getVerificationEmailStatusDescription();
        }
        if (null !== $object->getWhoisPrivacyData()) {
            $data['whois_privacy_data'] = $this->normalizer->normalize($object->getWhoisPrivacyData(), 'json', $context);
        }
        return $data;
    }
}
