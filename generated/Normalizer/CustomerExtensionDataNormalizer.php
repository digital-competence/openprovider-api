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

class CustomerExtensionDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'DigiComp\\OpenproviderApi\\Model\\CustomerExtensionData';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'DigiComp\\OpenproviderApi\\Model\\CustomerExtensionData';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \DigiComp\OpenproviderApi\Model\CustomerExtensionData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('admin_type', $data) && $data['admin_type'] !== null) {
            $object->setAdminType($data['admin_type']);
        } elseif (\array_key_exists('admin_type', $data) && $data['admin_type'] === null) {
            $object->setAdminType(null);
        }
        if (\array_key_exists('applicant_purpose', $data) && $data['applicant_purpose'] !== null) {
            $object->setApplicantPurpose($data['applicant_purpose']);
        } elseif (\array_key_exists('applicant_purpose', $data) && $data['applicant_purpose'] === null) {
            $object->setApplicantPurpose(null);
        }
        if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
            $object->setBirthDate($data['birth_date']);
        } elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
            $object->setBirthDate(null);
        }
        if (\array_key_exists('company_name_cyrillic', $data) && $data['company_name_cyrillic'] !== null) {
            $object->setCompanyNameCyrillic($data['company_name_cyrillic']);
        } elseif (\array_key_exists('company_name_cyrillic', $data) && $data['company_name_cyrillic'] === null) {
            $object->setCompanyNameCyrillic(null);
        }
        if (\array_key_exists('company_name_latin', $data) && $data['company_name_latin'] !== null) {
            $object->setCompanyNameLatin($data['company_name_latin']);
        } elseif (\array_key_exists('company_name_latin', $data) && $data['company_name_latin'] === null) {
            $object->setCompanyNameLatin(null);
        }
        if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
            $object->setCompanyRegistrationNumber($data['company_registration_number']);
        } elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
            $object->setCompanyRegistrationNumber(null);
        }
        if (\array_key_exists('contact_title', $data) && $data['contact_title'] !== null) {
            $object->setContactTitle($data['contact_title']);
        } elseif (\array_key_exists('contact_title', $data) && $data['contact_title'] === null) {
            $object->setContactTitle(null);
        }
        if (\array_key_exists('country_of_citizenship', $data) && $data['country_of_citizenship'] !== null) {
            $object->setCountryOfCitizenship($data['country_of_citizenship']);
        } elseif (\array_key_exists('country_of_citizenship', $data) && $data['country_of_citizenship'] === null) {
            $object->setCountryOfCitizenship(null);
        }
        if (\array_key_exists('customer_uin', $data) && $data['customer_uin'] !== null) {
            $object->setCustomerUin($data['customer_uin']);
        } elseif (\array_key_exists('customer_uin', $data) && $data['customer_uin'] === null) {
            $object->setCustomerUin(null);
        }
        if (\array_key_exists('ens_auth_id', $data) && $data['ens_auth_id'] !== null) {
            $object->setEnsAuthId($data['ens_auth_id']);
        } elseif (\array_key_exists('ens_auth_id', $data) && $data['ens_auth_id'] === null) {
            $object->setEnsAuthId(null);
        }
        if (\array_key_exists('ens_key', $data) && $data['ens_key'] !== null) {
            $object->setEnsKey($data['ens_key']);
        } elseif (\array_key_exists('ens_key', $data) && $data['ens_key'] === null) {
            $object->setEnsKey(null);
        }
        if (\array_key_exists('first_name_cyrillic', $data) && $data['first_name_cyrillic'] !== null) {
            $object->setFirstNameCyrillic($data['first_name_cyrillic']);
        } elseif (\array_key_exists('first_name_cyrillic', $data) && $data['first_name_cyrillic'] === null) {
            $object->setFirstNameCyrillic(null);
        }
        if (\array_key_exists('first_name_latin', $data) && $data['first_name_latin'] !== null) {
            $object->setFirstNameLatin($data['first_name_latin']);
        } elseif (\array_key_exists('first_name_latin', $data) && $data['first_name_latin'] === null) {
            $object->setFirstNameLatin(null);
        }
        if (\array_key_exists('hr_member', $data) && $data['hr_member'] !== null) {
            $object->setHrMember($data['hr_member']);
        } elseif (\array_key_exists('hr_member', $data) && $data['hr_member'] === null) {
            $object->setHrMember(null);
        }
        if (\array_key_exists('industry_class', $data) && $data['industry_class'] !== null) {
            $object->setIndustryClass($data['industry_class']);
        } elseif (\array_key_exists('industry_class', $data) && $data['industry_class'] === null) {
            $object->setIndustryClass(null);
        }
        if (\array_key_exists('is_private_enterpreneur', $data) && $data['is_private_enterpreneur'] !== null) {
            $object->setIsPrivateEnterpreneur($data['is_private_enterpreneur']);
        } elseif (\array_key_exists('is_private_enterpreneur', $data) && $data['is_private_enterpreneur'] === null) {
            $object->setIsPrivateEnterpreneur(null);
        }
        if (\array_key_exists('last_name_cyrillic', $data) && $data['last_name_cyrillic'] !== null) {
            $object->setLastNameCyrillic($data['last_name_cyrillic']);
        } elseif (\array_key_exists('last_name_cyrillic', $data) && $data['last_name_cyrillic'] === null) {
            $object->setLastNameCyrillic(null);
        }
        if (\array_key_exists('last_name_latin', $data) && $data['last_name_latin'] !== null) {
            $object->setLastNameLatin($data['last_name_latin']);
        } elseif (\array_key_exists('last_name_latin', $data) && $data['last_name_latin'] === null) {
            $object->setLastNameLatin(null);
        }
        if (\array_key_exists('legal_address_cyrillic', $data) && $data['legal_address_cyrillic'] !== null) {
            $object->setLegalAddressCyrillic($data['legal_address_cyrillic']);
        } elseif (\array_key_exists('legal_address_cyrillic', $data) && $data['legal_address_cyrillic'] === null) {
            $object->setLegalAddressCyrillic(null);
        }
        if (\array_key_exists('middle_name_cyrillic', $data) && $data['middle_name_cyrillic'] !== null) {
            $object->setMiddleNameCyrillic($data['middle_name_cyrillic']);
        } elseif (\array_key_exists('middle_name_cyrillic', $data) && $data['middle_name_cyrillic'] === null) {
            $object->setMiddleNameCyrillic(null);
        }
        if (\array_key_exists('middle_name_latin', $data) && $data['middle_name_latin'] !== null) {
            $object->setMiddleNameLatin($data['middle_name_latin']);
        } elseif (\array_key_exists('middle_name_latin', $data) && $data['middle_name_latin'] === null) {
            $object->setMiddleNameLatin(null);
        }
        if (\array_key_exists('mobile_phone_number', $data) && $data['mobile_phone_number'] !== null) {
            $object->setMobilePhoneNumber($data['mobile_phone_number']);
        } elseif (\array_key_exists('mobile_phone_number', $data) && $data['mobile_phone_number'] === null) {
            $object->setMobilePhoneNumber(null);
        }
        if (\array_key_exists('nexus_category', $data) && $data['nexus_category'] !== null) {
            $object->setNexusCategory($data['nexus_category']);
        } elseif (\array_key_exists('nexus_category', $data) && $data['nexus_category'] === null) {
            $object->setNexusCategory(null);
        }
        if (\array_key_exists('org_type', $data) && $data['org_type'] !== null) {
            $object->setOrgType($data['org_type']);
        } elseif (\array_key_exists('org_type', $data) && $data['org_type'] === null) {
            $object->setOrgType(null);
        }
        if (\array_key_exists('passport_issue_date', $data) && $data['passport_issue_date'] !== null) {
            $object->setPassportIssueDate($data['passport_issue_date']);
        } elseif (\array_key_exists('passport_issue_date', $data) && $data['passport_issue_date'] === null) {
            $object->setPassportIssueDate(null);
        }
        if (\array_key_exists('passport_issuer', $data) && $data['passport_issuer'] !== null) {
            $object->setPassportIssuer($data['passport_issuer']);
        } elseif (\array_key_exists('passport_issuer', $data) && $data['passport_issuer'] === null) {
            $object->setPassportIssuer(null);
        }
        if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
            $object->setPassportNumber($data['passport_number']);
        } elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
            $object->setPassportNumber(null);
        }
        if (\array_key_exists('passport_series', $data) && $data['passport_series'] !== null) {
            $object->setPassportSeries($data['passport_series']);
        } elseif (\array_key_exists('passport_series', $data) && $data['passport_series'] === null) {
            $object->setPassportSeries(null);
        }
        if (\array_key_exists('postal_address_cyrillic', $data) && $data['postal_address_cyrillic'] !== null) {
            $object->setPostalAddressCyrillic($data['postal_address_cyrillic']);
        } elseif (\array_key_exists('postal_address_cyrillic', $data) && $data['postal_address_cyrillic'] === null) {
            $object->setPostalAddressCyrillic(null);
        }
        if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
            $object->setSocialSecurityNumber($data['social_security_number']);
        } elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
            $object->setSocialSecurityNumber(null);
        }
        if (\array_key_exists('tax_payer_number', $data) && $data['tax_payer_number'] !== null) {
            $object->setTaxPayerNumber($data['tax_payer_number']);
        } elseif (\array_key_exists('tax_payer_number', $data) && $data['tax_payer_number'] === null) {
            $object->setTaxPayerNumber(null);
        }
        if (\array_key_exists('uin', $data) && $data['uin'] !== null) {
            $object->setUin($data['uin']);
        } elseif (\array_key_exists('uin', $data) && $data['uin'] === null) {
            $object->setUin(null);
        }
        if (\array_key_exists('user_type', $data) && $data['user_type'] !== null) {
            $object->setUserType($data['user_type']);
        } elseif (\array_key_exists('user_type', $data) && $data['user_type'] === null) {
            $object->setUserType(null);
        }
        if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
            $object->setVat($data['vat']);
        } elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
            $object->setVat(null);
        }
        if (\array_key_exists('website', $data) && $data['website'] !== null) {
            $object->setWebsite($data['website']);
        } elseif (\array_key_exists('website', $data) && $data['website'] === null) {
            $object->setWebsite(null);
        }
        if (\array_key_exists('whois_email', $data) && $data['whois_email'] !== null) {
            $object->setWhoisEmail($data['whois_email']);
        } elseif (\array_key_exists('whois_email', $data) && $data['whois_email'] === null) {
            $object->setWhoisEmail(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdminType()) {
            $data['admin_type'] = $object->getAdminType();
        }
        if (null !== $object->getApplicantPurpose()) {
            $data['applicant_purpose'] = $object->getApplicantPurpose();
        }
        if (null !== $object->getBirthDate()) {
            $data['birth_date'] = $object->getBirthDate();
        }
        if (null !== $object->getCompanyNameCyrillic()) {
            $data['company_name_cyrillic'] = $object->getCompanyNameCyrillic();
        }
        if (null !== $object->getCompanyNameLatin()) {
            $data['company_name_latin'] = $object->getCompanyNameLatin();
        }
        if (null !== $object->getCompanyRegistrationNumber()) {
            $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
        }
        if (null !== $object->getContactTitle()) {
            $data['contact_title'] = $object->getContactTitle();
        }
        if (null !== $object->getCountryOfCitizenship()) {
            $data['country_of_citizenship'] = $object->getCountryOfCitizenship();
        }
        if (null !== $object->getCustomerUin()) {
            $data['customer_uin'] = $object->getCustomerUin();
        }
        if (null !== $object->getEnsAuthId()) {
            $data['ens_auth_id'] = $object->getEnsAuthId();
        }
        if (null !== $object->getEnsKey()) {
            $data['ens_key'] = $object->getEnsKey();
        }
        if (null !== $object->getFirstNameCyrillic()) {
            $data['first_name_cyrillic'] = $object->getFirstNameCyrillic();
        }
        if (null !== $object->getFirstNameLatin()) {
            $data['first_name_latin'] = $object->getFirstNameLatin();
        }
        if (null !== $object->getHrMember()) {
            $data['hr_member'] = $object->getHrMember();
        }
        if (null !== $object->getIndustryClass()) {
            $data['industry_class'] = $object->getIndustryClass();
        }
        if (null !== $object->getIsPrivateEnterpreneur()) {
            $data['is_private_enterpreneur'] = $object->getIsPrivateEnterpreneur();
        }
        if (null !== $object->getLastNameCyrillic()) {
            $data['last_name_cyrillic'] = $object->getLastNameCyrillic();
        }
        if (null !== $object->getLastNameLatin()) {
            $data['last_name_latin'] = $object->getLastNameLatin();
        }
        if (null !== $object->getLegalAddressCyrillic()) {
            $data['legal_address_cyrillic'] = $object->getLegalAddressCyrillic();
        }
        if (null !== $object->getMiddleNameCyrillic()) {
            $data['middle_name_cyrillic'] = $object->getMiddleNameCyrillic();
        }
        if (null !== $object->getMiddleNameLatin()) {
            $data['middle_name_latin'] = $object->getMiddleNameLatin();
        }
        if (null !== $object->getMobilePhoneNumber()) {
            $data['mobile_phone_number'] = $object->getMobilePhoneNumber();
        }
        if (null !== $object->getNexusCategory()) {
            $data['nexus_category'] = $object->getNexusCategory();
        }
        if (null !== $object->getOrgType()) {
            $data['org_type'] = $object->getOrgType();
        }
        if (null !== $object->getPassportIssueDate()) {
            $data['passport_issue_date'] = $object->getPassportIssueDate();
        }
        if (null !== $object->getPassportIssuer()) {
            $data['passport_issuer'] = $object->getPassportIssuer();
        }
        if (null !== $object->getPassportNumber()) {
            $data['passport_number'] = $object->getPassportNumber();
        }
        if (null !== $object->getPassportSeries()) {
            $data['passport_series'] = $object->getPassportSeries();
        }
        if (null !== $object->getPostalAddressCyrillic()) {
            $data['postal_address_cyrillic'] = $object->getPostalAddressCyrillic();
        }
        if (null !== $object->getSocialSecurityNumber()) {
            $data['social_security_number'] = $object->getSocialSecurityNumber();
        }
        if (null !== $object->getTaxPayerNumber()) {
            $data['tax_payer_number'] = $object->getTaxPayerNumber();
        }
        if (null !== $object->getUin()) {
            $data['uin'] = $object->getUin();
        }
        if (null !== $object->getUserType()) {
            $data['user_type'] = $object->getUserType();
        }
        if (null !== $object->getVat()) {
            $data['vat'] = $object->getVat();
        }
        if (null !== $object->getWebsite()) {
            $data['website'] = $object->getWebsite();
        }
        if (null !== $object->getWhoisEmail()) {
            $data['whois_email'] = $object->getWhoisEmail();
        }
        return $data;
    }
}
