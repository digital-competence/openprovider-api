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

class DomainUpdateAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\DomainUpdateAdditionalData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\DomainUpdateAdditionalData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\DomainUpdateAdditionalData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('abogado_acceptance', $data) && $data['abogado_acceptance'] !== null) {
            $object->setAbogadoAcceptance($data['abogado_acceptance']);
        } elseif (\array_key_exists('abogado_acceptance', $data) && $data['abogado_acceptance'] === null) {
            $object->setAbogadoAcceptance(null);
        }
        if (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] !== null) {
            $object->setAdminSingPassId($data['admin_sing_pass_id']);
        } elseif (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] === null) {
            $object->setAdminSingPassId(null);
        }
        if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
            $object->setAuthCode($data['auth_code']);
        } elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
            $object->setAuthCode(null);
        }
        if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
            $object->setCompanyRegistrationNumber($data['company_registration_number']);
        } elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
            $object->setCompanyRegistrationNumber(null);
        }
        if (\array_key_exists('customer_uin', $data) && $data['customer_uin'] !== null) {
            $object->setCustomerUin($data['customer_uin']);
        } elseif (\array_key_exists('customer_uin', $data) && $data['customer_uin'] === null) {
            $object->setCustomerUin(null);
        }
        if (\array_key_exists('customer_uin_doc_type', $data) && $data['customer_uin_doc_type'] !== null) {
            $object->setCustomerUinDocType($this->denormalizer->denormalize($data['customer_uin_doc_type'], 'DigiComp\\OpenproviderApi\\Model\\DomainUINDocumentType', 'json', $context));
        } elseif (\array_key_exists('customer_uin_doc_type', $data) && $data['customer_uin_doc_type'] === null) {
            $object->setCustomerUinDocType(null);
        }
        if (\array_key_exists('domain_name_variants', $data) && $data['domain_name_variants'] !== null) {
            $values = array();
            foreach ($data['domain_name_variants'] as $value) {
                $values[] = $value;
            }
            $object->setDomainNameVariants($values);
        } elseif (\array_key_exists('domain_name_variants', $data) && $data['domain_name_variants'] === null) {
            $object->setDomainNameVariants(null);
        }
        if (\array_key_exists('intended_use', $data) && $data['intended_use'] !== null) {
            $object->setIntendedUse($data['intended_use']);
        } elseif (\array_key_exists('intended_use', $data) && $data['intended_use'] === null) {
            $object->setIntendedUse(null);
        }
        if (\array_key_exists('law_acceptance', $data) && $data['law_acceptance'] !== null) {
            $object->setLawAcceptance($data['law_acceptance']);
        } elseif (\array_key_exists('law_acceptance', $data) && $data['law_acceptance'] === null) {
            $object->setLawAcceptance(null);
        }
        if (\array_key_exists('maintainer', $data) && $data['maintainer'] !== null) {
            $object->setMaintainer($data['maintainer']);
        } elseif (\array_key_exists('maintainer', $data) && $data['maintainer'] === null) {
            $object->setMaintainer(null);
        }
        if (\array_key_exists('membership_id', $data) && $data['membership_id'] !== null) {
            $object->setMembershipId($data['membership_id']);
        } elseif (\array_key_exists('membership_id', $data) && $data['membership_id'] === null) {
            $object->setMembershipId(null);
        }
        if (\array_key_exists('mobile_phone_number_verification', $data) && $data['mobile_phone_number_verification'] !== null) {
            $object->setMobilePhoneNumberVerification($data['mobile_phone_number_verification']);
        } elseif (\array_key_exists('mobile_phone_number_verification', $data) && $data['mobile_phone_number_verification'] === null) {
            $object->setMobilePhoneNumberVerification(null);
        }
        if (\array_key_exists('ngo_ong_eligibility_acceptance', $data) && $data['ngo_ong_eligibility_acceptance'] !== null) {
            $object->setNgoOngEligibilityAcceptance($data['ngo_ong_eligibility_acceptance']);
        } elseif (\array_key_exists('ngo_ong_eligibility_acceptance', $data) && $data['ngo_ong_eligibility_acceptance'] === null) {
            $object->setNgoOngEligibilityAcceptance(null);
        }
        if (\array_key_exists('ngo_ong_policy_acceptance', $data) && $data['ngo_ong_policy_acceptance'] !== null) {
            $object->setNgoOngPolicyAcceptance($data['ngo_ong_policy_acceptance']);
        } elseif (\array_key_exists('ngo_ong_policy_acceptance', $data) && $data['ngo_ong_policy_acceptance'] === null) {
            $object->setNgoOngPolicyAcceptance(null);
        }
        if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
            $object->setPassportNumber($data['passport_number']);
        } elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
            $object->setPassportNumber(null);
        }
        if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
            $object->setVat($data['vat']);
        } elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
            $object->setVat(null);
        }
        if (\array_key_exists('verification_code', $data) && $data['verification_code'] !== null) {
            $object->setVerificationCode($data['verification_code']);
        } elseif (\array_key_exists('verification_code', $data) && $data['verification_code'] === null) {
            $object->setVerificationCode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAbogadoAcceptance()) {
            $data['abogado_acceptance'] = $object->getAbogadoAcceptance();
        }
        if (null !== $object->getAdminSingPassId()) {
            $data['admin_sing_pass_id'] = $object->getAdminSingPassId();
        }
        if (null !== $object->getAuthCode()) {
            $data['auth_code'] = $object->getAuthCode();
        }
        if (null !== $object->getCompanyRegistrationNumber()) {
            $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
        }
        if (null !== $object->getCustomerUin()) {
            $data['customer_uin'] = $object->getCustomerUin();
        }
        if (null !== $object->getCustomerUinDocType()) {
            $data['customer_uin_doc_type'] = $this->normalizer->normalize($object->getCustomerUinDocType(), 'json', $context);
        }
        if (null !== $object->getDomainNameVariants()) {
            $values = array();
            foreach ($object->getDomainNameVariants() as $value) {
                $values[] = $value;
            }
            $data['domain_name_variants'] = $values;
        }
        if (null !== $object->getIntendedUse()) {
            $data['intended_use'] = $object->getIntendedUse();
        }
        if (null !== $object->getLawAcceptance()) {
            $data['law_acceptance'] = $object->getLawAcceptance();
        }
        if (null !== $object->getMaintainer()) {
            $data['maintainer'] = $object->getMaintainer();
        }
        if (null !== $object->getMembershipId()) {
            $data['membership_id'] = $object->getMembershipId();
        }
        if (null !== $object->getMobilePhoneNumberVerification()) {
            $data['mobile_phone_number_verification'] = $object->getMobilePhoneNumberVerification();
        }
        if (null !== $object->getNgoOngEligibilityAcceptance()) {
            $data['ngo_ong_eligibility_acceptance'] = $object->getNgoOngEligibilityAcceptance();
        }
        if (null !== $object->getNgoOngPolicyAcceptance()) {
            $data['ngo_ong_policy_acceptance'] = $object->getNgoOngPolicyAcceptance();
        }
        if (null !== $object->getPassportNumber()) {
            $data['passport_number'] = $object->getPassportNumber();
        }
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        if (null !== $object->getVerificationCode()) {
            $data['verification_code'] = $object->getVerificationCode();
        }
        return $data;
    }
}
