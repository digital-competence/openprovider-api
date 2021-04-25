<?php

namespace DigiComp\OpenproviderApi\Model;

class CustomerExtensionData
{
    /**
     *
     *
     * @var string|null
     */
    protected $adminType;
    /**
     *
     *
     * @var string|null
     */
    protected $applicantPurpose;
    /**
     *
     *
     * @var string|null
     */
    protected $birthDate;
    /**
     *
     *
     * @var string|null
     */
    protected $companyNameCyrillic;
    /**
     *
     *
     * @var string|null
     */
    protected $companyNameLatin;
    /**
     *
     *
     * @var string|null
     */
    protected $companyRegistrationNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $contactTitle;
    /**
     *
     *
     * @var string|null
     */
    protected $countryOfCitizenship;
    /**
     *
     *
     * @var string|null
     */
    protected $customerUin;
    /**
     *
     *
     * @var string|null
     */
    protected $ensAuthId;
    /**
     *
     *
     * @var string|null
     */
    protected $ensKey;
    /**
     *
     *
     * @var string|null
     */
    protected $firstNameCyrillic;
    /**
     *
     *
     * @var string|null
     */
    protected $firstNameLatin;
    /**
     *
     *
     * @var string|null
     */
    protected $hrMember;
    /**
     *
     *
     * @var string|null
     */
    protected $industryClass;
    /**
     *
     *
     * @var string|null
     */
    protected $isPrivateEnterpreneur;
    /**
     *
     *
     * @var string|null
     */
    protected $lastNameCyrillic;
    /**
     *
     *
     * @var string|null
     */
    protected $lastNameLatin;
    /**
     *
     *
     * @var string|null
     */
    protected $legalAddressCyrillic;
    /**
     *
     *
     * @var string|null
     */
    protected $middleNameCyrillic;
    /**
     *
     *
     * @var string|null
     */
    protected $middleNameLatin;
    /**
     *
     *
     * @var string|null
     */
    protected $mobilePhoneNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $nexusCategory;
    /**
     *
     *
     * @var string|null
     */
    protected $orgType;
    /**
     *
     *
     * @var string|null
     */
    protected $passportIssueDate;
    /**
     *
     *
     * @var string|null
     */
    protected $passportIssuer;
    /**
     *
     *
     * @var string|null
     */
    protected $passportNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $passportSeries;
    /**
     *
     *
     * @var string|null
     */
    protected $postalAddressCyrillic;
    /**
     *
     *
     * @var string|null
     */
    protected $socialSecurityNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $taxPayerNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $uin;
    /**
     *
     *
     * @var string|null
     */
    protected $userType;
    /**
     *
     *
     * @var string|null
     */
    protected $vat;
    /**
     *
     *
     * @var string|null
     */
    protected $website;
    /**
     *
     *
     * @var string|null
     */
    protected $whoisEmail;
    /**
     *
     *
     * @return string|null
     */
    public function getAdminType(): ?string
    {
        return $this->adminType;
    }
    /**
     *
     *
     * @param string|null $adminType
     *
     * @return self
     */
    public function setAdminType(?string $adminType): self
    {
        $this->adminType = $adminType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getApplicantPurpose(): ?string
    {
        return $this->applicantPurpose;
    }
    /**
     *
     *
     * @param string|null $applicantPurpose
     *
     * @return self
     */
    public function setApplicantPurpose(?string $applicantPurpose): self
    {
        $this->applicantPurpose = $applicantPurpose;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }
    /**
     *
     *
     * @param string|null $birthDate
     *
     * @return self
     */
    public function setBirthDate(?string $birthDate): self
    {
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCompanyNameCyrillic(): ?string
    {
        return $this->companyNameCyrillic;
    }
    /**
     *
     *
     * @param string|null $companyNameCyrillic
     *
     * @return self
     */
    public function setCompanyNameCyrillic(?string $companyNameCyrillic): self
    {
        $this->companyNameCyrillic = $companyNameCyrillic;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCompanyNameLatin(): ?string
    {
        return $this->companyNameLatin;
    }
    /**
     *
     *
     * @param string|null $companyNameLatin
     *
     * @return self
     */
    public function setCompanyNameLatin(?string $companyNameLatin): self
    {
        $this->companyNameLatin = $companyNameLatin;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCompanyRegistrationNumber(): ?string
    {
        return $this->companyRegistrationNumber;
    }
    /**
     *
     *
     * @param string|null $companyRegistrationNumber
     *
     * @return self
     */
    public function setCompanyRegistrationNumber(?string $companyRegistrationNumber): self
    {
        $this->companyRegistrationNumber = $companyRegistrationNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getContactTitle(): ?string
    {
        return $this->contactTitle;
    }
    /**
     *
     *
     * @param string|null $contactTitle
     *
     * @return self
     */
    public function setContactTitle(?string $contactTitle): self
    {
        $this->contactTitle = $contactTitle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCountryOfCitizenship(): ?string
    {
        return $this->countryOfCitizenship;
    }
    /**
     *
     *
     * @param string|null $countryOfCitizenship
     *
     * @return self
     */
    public function setCountryOfCitizenship(?string $countryOfCitizenship): self
    {
        $this->countryOfCitizenship = $countryOfCitizenship;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCustomerUin(): ?string
    {
        return $this->customerUin;
    }
    /**
     *
     *
     * @param string|null $customerUin
     *
     * @return self
     */
    public function setCustomerUin(?string $customerUin): self
    {
        $this->customerUin = $customerUin;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEnsAuthId(): ?string
    {
        return $this->ensAuthId;
    }
    /**
     *
     *
     * @param string|null $ensAuthId
     *
     * @return self
     */
    public function setEnsAuthId(?string $ensAuthId): self
    {
        $this->ensAuthId = $ensAuthId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEnsKey(): ?string
    {
        return $this->ensKey;
    }
    /**
     *
     *
     * @param string|null $ensKey
     *
     * @return self
     */
    public function setEnsKey(?string $ensKey): self
    {
        $this->ensKey = $ensKey;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFirstNameCyrillic(): ?string
    {
        return $this->firstNameCyrillic;
    }
    /**
     *
     *
     * @param string|null $firstNameCyrillic
     *
     * @return self
     */
    public function setFirstNameCyrillic(?string $firstNameCyrillic): self
    {
        $this->firstNameCyrillic = $firstNameCyrillic;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFirstNameLatin(): ?string
    {
        return $this->firstNameLatin;
    }
    /**
     *
     *
     * @param string|null $firstNameLatin
     *
     * @return self
     */
    public function setFirstNameLatin(?string $firstNameLatin): self
    {
        $this->firstNameLatin = $firstNameLatin;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getHrMember(): ?string
    {
        return $this->hrMember;
    }
    /**
     *
     *
     * @param string|null $hrMember
     *
     * @return self
     */
    public function setHrMember(?string $hrMember): self
    {
        $this->hrMember = $hrMember;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIndustryClass(): ?string
    {
        return $this->industryClass;
    }
    /**
     *
     *
     * @param string|null $industryClass
     *
     * @return self
     */
    public function setIndustryClass(?string $industryClass): self
    {
        $this->industryClass = $industryClass;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIsPrivateEnterpreneur(): ?string
    {
        return $this->isPrivateEnterpreneur;
    }
    /**
     *
     *
     * @param string|null $isPrivateEnterpreneur
     *
     * @return self
     */
    public function setIsPrivateEnterpreneur(?string $isPrivateEnterpreneur): self
    {
        $this->isPrivateEnterpreneur = $isPrivateEnterpreneur;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLastNameCyrillic(): ?string
    {
        return $this->lastNameCyrillic;
    }
    /**
     *
     *
     * @param string|null $lastNameCyrillic
     *
     * @return self
     */
    public function setLastNameCyrillic(?string $lastNameCyrillic): self
    {
        $this->lastNameCyrillic = $lastNameCyrillic;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLastNameLatin(): ?string
    {
        return $this->lastNameLatin;
    }
    /**
     *
     *
     * @param string|null $lastNameLatin
     *
     * @return self
     */
    public function setLastNameLatin(?string $lastNameLatin): self
    {
        $this->lastNameLatin = $lastNameLatin;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLegalAddressCyrillic(): ?string
    {
        return $this->legalAddressCyrillic;
    }
    /**
     *
     *
     * @param string|null $legalAddressCyrillic
     *
     * @return self
     */
    public function setLegalAddressCyrillic(?string $legalAddressCyrillic): self
    {
        $this->legalAddressCyrillic = $legalAddressCyrillic;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMiddleNameCyrillic(): ?string
    {
        return $this->middleNameCyrillic;
    }
    /**
     *
     *
     * @param string|null $middleNameCyrillic
     *
     * @return self
     */
    public function setMiddleNameCyrillic(?string $middleNameCyrillic): self
    {
        $this->middleNameCyrillic = $middleNameCyrillic;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMiddleNameLatin(): ?string
    {
        return $this->middleNameLatin;
    }
    /**
     *
     *
     * @param string|null $middleNameLatin
     *
     * @return self
     */
    public function setMiddleNameLatin(?string $middleNameLatin): self
    {
        $this->middleNameLatin = $middleNameLatin;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     *
     *
     * @param string|null $mobilePhoneNumber
     *
     * @return self
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber): self
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNexusCategory(): ?string
    {
        return $this->nexusCategory;
    }
    /**
     *
     *
     * @param string|null $nexusCategory
     *
     * @return self
     */
    public function setNexusCategory(?string $nexusCategory): self
    {
        $this->nexusCategory = $nexusCategory;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getOrgType(): ?string
    {
        return $this->orgType;
    }
    /**
     *
     *
     * @param string|null $orgType
     *
     * @return self
     */
    public function setOrgType(?string $orgType): self
    {
        $this->orgType = $orgType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPassportIssueDate(): ?string
    {
        return $this->passportIssueDate;
    }
    /**
     *
     *
     * @param string|null $passportIssueDate
     *
     * @return self
     */
    public function setPassportIssueDate(?string $passportIssueDate): self
    {
        $this->passportIssueDate = $passportIssueDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPassportIssuer(): ?string
    {
        return $this->passportIssuer;
    }
    /**
     *
     *
     * @param string|null $passportIssuer
     *
     * @return self
     */
    public function setPassportIssuer(?string $passportIssuer): self
    {
        $this->passportIssuer = $passportIssuer;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPassportNumber(): ?string
    {
        return $this->passportNumber;
    }
    /**
     *
     *
     * @param string|null $passportNumber
     *
     * @return self
     */
    public function setPassportNumber(?string $passportNumber): self
    {
        $this->passportNumber = $passportNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPassportSeries(): ?string
    {
        return $this->passportSeries;
    }
    /**
     *
     *
     * @param string|null $passportSeries
     *
     * @return self
     */
    public function setPassportSeries(?string $passportSeries): self
    {
        $this->passportSeries = $passportSeries;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPostalAddressCyrillic(): ?string
    {
        return $this->postalAddressCyrillic;
    }
    /**
     *
     *
     * @param string|null $postalAddressCyrillic
     *
     * @return self
     */
    public function setPostalAddressCyrillic(?string $postalAddressCyrillic): self
    {
        $this->postalAddressCyrillic = $postalAddressCyrillic;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSocialSecurityNumber(): ?string
    {
        return $this->socialSecurityNumber;
    }
    /**
     *
     *
     * @param string|null $socialSecurityNumber
     *
     * @return self
     */
    public function setSocialSecurityNumber(?string $socialSecurityNumber): self
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTaxPayerNumber(): ?string
    {
        return $this->taxPayerNumber;
    }
    /**
     *
     *
     * @param string|null $taxPayerNumber
     *
     * @return self
     */
    public function setTaxPayerNumber(?string $taxPayerNumber): self
    {
        $this->taxPayerNumber = $taxPayerNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUin(): ?string
    {
        return $this->uin;
    }
    /**
     *
     *
     * @param string|null $uin
     *
     * @return self
     */
    public function setUin(?string $uin): self
    {
        $this->uin = $uin;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }
    /**
     *
     *
     * @param string|null $userType
     *
     * @return self
     */
    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVat(): ?string
    {
        return $this->vat;
    }
    /**
     *
     *
     * @param string|null $vat
     *
     * @return self
     */
    public function setVat(?string $vat): self
    {
        $this->vat = $vat;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }
    /**
     *
     *
     * @param string|null $website
     *
     * @return self
     */
    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getWhoisEmail(): ?string
    {
        return $this->whoisEmail;
    }
    /**
     *
     *
     * @param string|null $whoisEmail
     *
     * @return self
     */
    public function setWhoisEmail(?string $whoisEmail): self
    {
        $this->whoisEmail = $whoisEmail;
        return $this;
    }
}
