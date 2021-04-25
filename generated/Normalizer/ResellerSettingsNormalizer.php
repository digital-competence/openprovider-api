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

class ResellerSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\ResellerSettings';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\ResellerSettings';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\ResellerSettings();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('av_handle', $data) && $data['av_handle'] !== null) {
            $object->setAvHandle($data['av_handle']);
        } elseif (\array_key_exists('av_handle', $data) && $data['av_handle'] === null) {
            $object->setAvHandle(null);
        }
        if (\array_key_exists('claims_confirm_url', $data) && $data['claims_confirm_url'] !== null) {
            $object->setClaimsConfirmUrl($data['claims_confirm_url']);
        } elseif (\array_key_exists('claims_confirm_url', $data) && $data['claims_confirm_url'] === null) {
            $object->setClaimsConfirmUrl(null);
        }
        if (\array_key_exists('claims_email_subject', $data) && $data['claims_email_subject'] !== null) {
            $object->setClaimsEmailSubject($data['claims_email_subject']);
        } elseif (\array_key_exists('claims_email_subject', $data) && $data['claims_email_subject'] === null) {
            $object->setClaimsEmailSubject(null);
        }
        if (\array_key_exists('claims_reseller_name', $data) && $data['claims_reseller_name'] !== null) {
            $object->setClaimsResellerName($data['claims_reseller_name']);
        } elseif (\array_key_exists('claims_reseller_name', $data) && $data['claims_reseller_name'] === null) {
            $object->setClaimsResellerName(null);
        }
        if (\array_key_exists('claims_sender_email', $data) && $data['claims_sender_email'] !== null) {
            $object->setClaimsSenderEmail($data['claims_sender_email']);
        } elseif (\array_key_exists('claims_sender_email', $data) && $data['claims_sender_email'] === null) {
            $object->setClaimsSenderEmail(null);
        }
        if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
            $object->setCurrency($data['currency']);
        } elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
            $object->setCurrency(null);
        }
        if (\array_key_exists('default_domain_billing_handle', $data) && $data['default_domain_billing_handle'] !== null) {
            $object->setDefaultDomainBillingHandle($data['default_domain_billing_handle']);
        } elseif (\array_key_exists('default_domain_billing_handle', $data) && $data['default_domain_billing_handle'] === null) {
            $object->setDefaultDomainBillingHandle(null);
        }
        if (\array_key_exists('default_domain_reseller_handle', $data) && $data['default_domain_reseller_handle'] !== null) {
            $object->setDefaultDomainResellerHandle($data['default_domain_reseller_handle']);
        } elseif (\array_key_exists('default_domain_reseller_handle', $data) && $data['default_domain_reseller_handle'] === null) {
            $object->setDefaultDomainResellerHandle(null);
        }
        if (\array_key_exists('foa_confirm_url', $data) && $data['foa_confirm_url'] !== null) {
            $object->setFoaConfirmUrl($data['foa_confirm_url']);
        } elseif (\array_key_exists('foa_confirm_url', $data) && $data['foa_confirm_url'] === null) {
            $object->setFoaConfirmUrl(null);
        }
        if (\array_key_exists('foa_email_subject', $data) && $data['foa_email_subject'] !== null) {
            $object->setFoaEmailSubject($data['foa_email_subject']);
        } elseif (\array_key_exists('foa_email_subject', $data) && $data['foa_email_subject'] === null) {
            $object->setFoaEmailSubject(null);
        }
        if (\array_key_exists('foa_reseller_name', $data) && $data['foa_reseller_name'] !== null) {
            $object->setFoaResellerName($data['foa_reseller_name']);
        } elseif (\array_key_exists('foa_reseller_name', $data) && $data['foa_reseller_name'] === null) {
            $object->setFoaResellerName(null);
        }
        if (\array_key_exists('foa_sender_email', $data) && $data['foa_sender_email'] !== null) {
            $object->setFoaSenderEmail($data['foa_sender_email']);
        } elseif (\array_key_exists('foa_sender_email', $data) && $data['foa_sender_email'] === null) {
            $object->setFoaSenderEmail(null);
        }
        if (\array_key_exists('foa_terms_conditions_url', $data) && $data['foa_terms_conditions_url'] !== null) {
            $object->setFoaTermsConditionsUrl($data['foa_terms_conditions_url']);
        } elseif (\array_key_exists('foa_terms_conditions_url', $data) && $data['foa_terms_conditions_url'] === null) {
            $object->setFoaTermsConditionsUrl(null);
        }
        if (\array_key_exists('is_auto_renew_enabled', $data) && $data['is_auto_renew_enabled'] !== null) {
            $object->setIsAutoRenewEnabled($data['is_auto_renew_enabled']);
        } elseif (\array_key_exists('is_auto_renew_enabled', $data) && $data['is_auto_renew_enabled'] === null) {
            $object->setIsAutoRenewEnabled(null);
        }
        if (\array_key_exists('is_custom_nses_enabled', $data) && $data['is_custom_nses_enabled'] !== null) {
            $object->setIsCustomNsesEnabled($data['is_custom_nses_enabled']);
        } elseif (\array_key_exists('is_custom_nses_enabled', $data) && $data['is_custom_nses_enabled'] === null) {
            $object->setIsCustomNsesEnabled(null);
        }
        if (\array_key_exists('ive2_customized_body', $data) && $data['ive2_customized_body'] !== null) {
            $object->setIve2CustomizedBody($data['ive2_customized_body']);
        } elseif (\array_key_exists('ive2_customized_body', $data) && $data['ive2_customized_body'] === null) {
            $object->setIve2CustomizedBody(null);
        }
        if (\array_key_exists('ive2_email_subject', $data) && $data['ive2_email_subject'] !== null) {
            $object->setIve2EmailSubject($data['ive2_email_subject']);
        } elseif (\array_key_exists('ive2_email_subject', $data) && $data['ive2_email_subject'] === null) {
            $object->setIve2EmailSubject(null);
        }
        if (\array_key_exists('ive_confirm_url', $data) && $data['ive_confirm_url'] !== null) {
            $object->setIveConfirmUrl($data['ive_confirm_url']);
        } elseif (\array_key_exists('ive_confirm_url', $data) && $data['ive_confirm_url'] === null) {
            $object->setIveConfirmUrl(null);
        }
        if (\array_key_exists('ive_customized_body', $data) && $data['ive_customized_body'] !== null) {
            $object->setIveCustomizedBody($data['ive_customized_body']);
        } elseif (\array_key_exists('ive_customized_body', $data) && $data['ive_customized_body'] === null) {
            $object->setIveCustomizedBody(null);
        }
        if (\array_key_exists('ive_email_subject', $data) && $data['ive_email_subject'] !== null) {
            $object->setIveEmailSubject($data['ive_email_subject']);
        } elseif (\array_key_exists('ive_email_subject', $data) && $data['ive_email_subject'] === null) {
            $object->setIveEmailSubject(null);
        }
        if (\array_key_exists('ive_reseller_name', $data) && $data['ive_reseller_name'] !== null) {
            $object->setIveResellerName($data['ive_reseller_name']);
        } elseif (\array_key_exists('ive_reseller_name', $data) && $data['ive_reseller_name'] === null) {
            $object->setIveResellerName(null);
        }
        if (\array_key_exists('ive_sender_email', $data) && $data['ive_sender_email'] !== null) {
            $object->setIveSenderEmail($data['ive_sender_email']);
        } elseif (\array_key_exists('ive_sender_email', $data) && $data['ive_sender_email'] === null) {
            $object->setIveSenderEmail(null);
        }
        if (\array_key_exists('jurisdiction', $data) && $data['jurisdiction'] !== null) {
            $object->setJurisdiction($data['jurisdiction']);
        } elseif (\array_key_exists('jurisdiction', $data) && $data['jurisdiction'] === null) {
            $object->setJurisdiction(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        } elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('maximum_credit', $data) && $data['maximum_credit'] !== null) {
            $object->setMaximumCredit($data['maximum_credit']);
        } elseif (\array_key_exists('maximum_credit', $data) && $data['maximum_credit'] === null) {
            $object->setMaximumCredit(null);
        }
        if (\array_key_exists('maximum_credit_card_payment', $data) && $data['maximum_credit_card_payment'] !== null) {
            $object->setMaximumCreditCardPayment($data['maximum_credit_card_payment']);
        } elseif (\array_key_exists('maximum_credit_card_payment', $data) && $data['maximum_credit_card_payment'] === null) {
            $object->setMaximumCreditCardPayment(null);
        }
        if (\array_key_exists('maximum_i_deal_payment', $data) && $data['maximum_i_deal_payment'] !== null) {
            $object->setMaximumIDealPayment($data['maximum_i_deal_payment']);
        } elseif (\array_key_exists('maximum_i_deal_payment', $data) && $data['maximum_i_deal_payment'] === null) {
            $object->setMaximumIDealPayment(null);
        }
        if (\array_key_exists('maximum_western_union_payment', $data) && $data['maximum_western_union_payment'] !== null) {
            $object->setMaximumWesternUnionPayment($data['maximum_western_union_payment']);
        } elseif (\array_key_exists('maximum_western_union_payment', $data) && $data['maximum_western_union_payment'] === null) {
            $object->setMaximumWesternUnionPayment(null);
        }
        if (\array_key_exists('minimum_payment', $data) && $data['minimum_payment'] !== null) {
            $object->setMinimumPayment($data['minimum_payment']);
        } elseif (\array_key_exists('minimum_payment', $data) && $data['minimum_payment'] === null) {
            $object->setMinimumPayment(null);
        }
        if (\array_key_exists('minimum_western_union_payment', $data) && $data['minimum_western_union_payment'] !== null) {
            $object->setMinimumWesternUnionPayment($data['minimum_western_union_payment']);
        } elseif (\array_key_exists('minimum_western_union_payment', $data) && $data['minimum_western_union_payment'] === null) {
            $object->setMinimumWesternUnionPayment(null);
        }
        if (\array_key_exists('pay_methods', $data) && $data['pay_methods'] !== null) {
            $values = array();
            foreach ($data['pay_methods'] as $value) {
                $values[] = $value;
            }
            $object->setPayMethods($values);
        } elseif (\array_key_exists('pay_methods', $data) && $data['pay_methods'] === null) {
            $object->setPayMethods(null);
        }
        if (\array_key_exists('payment_methods', $data) && $data['payment_methods'] !== null) {
            $values_1 = array();
            foreach ($data['payment_methods'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethods', 'json', $context);
            }
            $object->setPaymentMethods($values_1);
        } elseif (\array_key_exists('payment_methods', $data) && $data['payment_methods'] === null) {
            $object->setPaymentMethods(null);
        }
        if (\array_key_exists('preregistered_domain_priorities', $data) && $data['preregistered_domain_priorities'] !== null) {
            $object->setPreregisteredDomainPriorities($data['preregistered_domain_priorities']);
        } elseif (\array_key_exists('preregistered_domain_priorities', $data) && $data['preregistered_domain_priorities'] === null) {
            $object->setPreregisteredDomainPriorities(null);
        }
        if (\array_key_exists('recurring_payment_methods', $data) && $data['recurring_payment_methods'] !== null) {
            $values_2 = array();
            foreach ($data['recurring_payment_methods'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'DigiComp\\OpenproviderApi\\Model\\SettingsPaymentMethods', 'json', $context);
            }
            $object->setRecurringPaymentMethods($values_2);
        } elseif (\array_key_exists('recurring_payment_methods', $data) && $data['recurring_payment_methods'] === null) {
            $object->setRecurringPaymentMethods(null);
        }
        if (\array_key_exists('renew_notification_days', $data) && $data['renew_notification_days'] !== null) {
            $values_3 = array();
            foreach ($data['renew_notification_days'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setRenewNotificationDays($values_3);
        } elseif (\array_key_exists('renew_notification_days', $data) && $data['renew_notification_days'] === null) {
            $object->setRenewNotificationDays(null);
        }
        if (\array_key_exists('renew_notification_every_week', $data) && $data['renew_notification_every_week'] !== null) {
            $object->setRenewNotificationEveryWeek($data['renew_notification_every_week']);
        } elseif (\array_key_exists('renew_notification_every_week', $data) && $data['renew_notification_every_week'] === null) {
            $object->setRenewNotificationEveryWeek(null);
        }
        if (\array_key_exists('tac_contract', $data) && $data['tac_contract'] !== null) {
            $object->setTacContract($this->denormalizer->denormalize($data['tac_contract'], 'DigiComp\\OpenproviderApi\\Model\\SettingsTacContract', 'json', $context));
        } elseif (\array_key_exists('tac_contract', $data) && $data['tac_contract'] === null) {
            $object->setTacContract(null);
        }
        if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
            $values_4 = array();
            foreach ($data['tags'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setTags($values_4);
        } elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
            $object->setTags(null);
        }
        if (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] !== null) {
            $object->setTransactionFee($this->denormalizer->denormalize($data['transaction_fee'], 'DigiComp\\OpenproviderApi\\Model\\SettingsTransactionFee', 'json', $context));
        } elseif (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] === null) {
            $object->setTransactionFee(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAvHandle()) {
            $data['av_handle'] = $object->getAvHandle();
        }
        if (null !== $object->getClaimsConfirmUrl()) {
            $data['claims_confirm_url'] = $object->getClaimsConfirmUrl();
        }
        if (null !== $object->getClaimsEmailSubject()) {
            $data['claims_email_subject'] = $object->getClaimsEmailSubject();
        }
        if (null !== $object->getClaimsResellerName()) {
            $data['claims_reseller_name'] = $object->getClaimsResellerName();
        }
        if (null !== $object->getClaimsSenderEmail()) {
            $data['claims_sender_email'] = $object->getClaimsSenderEmail();
        }
        if (null !== $object->getCurrency()) {
            $data['currency'] = $object->getCurrency();
        }
        if (null !== $object->getDefaultDomainBillingHandle()) {
            $data['default_domain_billing_handle'] = $object->getDefaultDomainBillingHandle();
        }
        if (null !== $object->getDefaultDomainResellerHandle()) {
            $data['default_domain_reseller_handle'] = $object->getDefaultDomainResellerHandle();
        }
        if (null !== $object->getFoaConfirmUrl()) {
            $data['foa_confirm_url'] = $object->getFoaConfirmUrl();
        }
        if (null !== $object->getFoaEmailSubject()) {
            $data['foa_email_subject'] = $object->getFoaEmailSubject();
        }
        if (null !== $object->getFoaResellerName()) {
            $data['foa_reseller_name'] = $object->getFoaResellerName();
        }
        if (null !== $object->getFoaSenderEmail()) {
            $data['foa_sender_email'] = $object->getFoaSenderEmail();
        }
        if (null !== $object->getFoaTermsConditionsUrl()) {
            $data['foa_terms_conditions_url'] = $object->getFoaTermsConditionsUrl();
        }
        if (null !== $object->getIsAutoRenewEnabled()) {
            $data['is_auto_renew_enabled'] = $object->getIsAutoRenewEnabled();
        }
        if (null !== $object->getIsCustomNsesEnabled()) {
            $data['is_custom_nses_enabled'] = $object->getIsCustomNsesEnabled();
        }
        if (null !== $object->getIve2CustomizedBody()) {
            $data['ive2_customized_body'] = $object->getIve2CustomizedBody();
        }
        if (null !== $object->getIve2EmailSubject()) {
            $data['ive2_email_subject'] = $object->getIve2EmailSubject();
        }
        if (null !== $object->getIveConfirmUrl()) {
            $data['ive_confirm_url'] = $object->getIveConfirmUrl();
        }
        if (null !== $object->getIveCustomizedBody()) {
            $data['ive_customized_body'] = $object->getIveCustomizedBody();
        }
        if (null !== $object->getIveEmailSubject()) {
            $data['ive_email_subject'] = $object->getIveEmailSubject();
        }
        if (null !== $object->getIveResellerName()) {
            $data['ive_reseller_name'] = $object->getIveResellerName();
        }
        if (null !== $object->getIveSenderEmail()) {
            $data['ive_sender_email'] = $object->getIveSenderEmail();
        }
        if (null !== $object->getJurisdiction()) {
            $data['jurisdiction'] = $object->getJurisdiction();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getMaximumCredit()) {
            $data['maximum_credit'] = $object->getMaximumCredit();
        }
        if (null !== $object->getMaximumCreditCardPayment()) {
            $data['maximum_credit_card_payment'] = $object->getMaximumCreditCardPayment();
        }
        if (null !== $object->getMaximumIDealPayment()) {
            $data['maximum_i_deal_payment'] = $object->getMaximumIDealPayment();
        }
        if (null !== $object->getMaximumWesternUnionPayment()) {
            $data['maximum_western_union_payment'] = $object->getMaximumWesternUnionPayment();
        }
        if (null !== $object->getMinimumPayment()) {
            $data['minimum_payment'] = $object->getMinimumPayment();
        }
        if (null !== $object->getMinimumWesternUnionPayment()) {
            $data['minimum_western_union_payment'] = $object->getMinimumWesternUnionPayment();
        }
        if (null !== $object->getPayMethods()) {
            $values = array();
            foreach ($object->getPayMethods() as $value) {
                $values[] = $value;
            }
            $data['pay_methods'] = $values;
        }
        if (null !== $object->getPaymentMethods()) {
            $values_1 = array();
            foreach ($object->getPaymentMethods() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['payment_methods'] = $values_1;
        }
        if (null !== $object->getPreregisteredDomainPriorities()) {
            $data['preregistered_domain_priorities'] = $object->getPreregisteredDomainPriorities();
        }
        if (null !== $object->getRecurringPaymentMethods()) {
            $values_2 = array();
            foreach ($object->getRecurringPaymentMethods() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['recurring_payment_methods'] = $values_2;
        }
        if (null !== $object->getRenewNotificationDays()) {
            $values_3 = array();
            foreach ($object->getRenewNotificationDays() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['renew_notification_days'] = $values_3;
        }
        if (null !== $object->getRenewNotificationEveryWeek()) {
            $data['renew_notification_every_week'] = $object->getRenewNotificationEveryWeek();
        }
        if (null !== $object->getTacContract()) {
            $data['tac_contract'] = $this->normalizer->normalize($object->getTacContract(), 'json', $context);
        }
        if (null !== $object->getTags()) {
            $values_4 = array();
            foreach ($object->getTags() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['tags'] = $values_4;
        }
        if (null !== $object->getTransactionFee()) {
            $data['transaction_fee'] = $this->normalizer->normalize($object->getTransactionFee(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}
