<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainAdditionalData
{
    /**
     *
     *
     * @var string|null
     */
    protected $abogadoAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $adminSingPassId;
    /**
     *
     *
     * @var string|null
     */
    protected $aeAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $allocationToken;
    /**
     *
     *
     * @var string|null
     */
    protected $authCode;
    /**
     *
     *
     * @var string|null
     */
    protected $bankAcceptance;
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
    protected $customerUin;
    /**
     *
     *
     * @var DomainUINDocumentType|null
     */
    protected $customerUinDocType;
    /**
     *
     *
     * @var string[]|null
     */
    protected $domainNameVariants;
    /**
     *
     *
     * @var string|null
     */
    protected $eligibilityType;
    /**
     *
     *
     * @var string|null
     */
    protected $eligibilityTypeRelationship;
    /**
     *
     *
     * @var string|null
     */
    protected $ftldToken;
    /**
     *
     *
     * @var string|null
     */
    protected $gayDonationAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $gayRightsProtectionAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $idNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $idType;
    /**
     *
     *
     * @var string|null
     */
    protected $idnScript;
    /**
     *
     *
     * @var string|null
     */
    protected $insuranceAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $intendedUse;
    /**
     *
     *
     * @var string|null
     */
    protected $lawAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $legalType;
    /**
     *
     *
     * @var string|null
     */
    protected $maintainer;
    /**
     *
     *
     * @var string|null
     */
    protected $membershipId;
    /**
     *
     *
     * @var string|null
     */
    protected $mobilePhoneNumberVerification;
    /**
     *
     *
     * @var string|null
     */
    protected $ngoOngEligibilityAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $ngoOngPolicyAcceptance;
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
    protected $rurfBlockedDomains;
    /**
     *
     *
     * @var string|null
     */
    protected $selfService;
    /**
     *
     *
     * @var string|null
     */
    protected $trademark;
    /**
     *
     *
     * @var string|null
     */
    protected $trademarkId;
    /**
     *
     *
     * @var string|null
     */
    protected $travelAcceptance;
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
    protected $verificationCode;
    /**
     *
     *
     * @var string|null
     */
    protected $voteAcceptance;
    /**
     *
     *
     * @var string|null
     */
    protected $votoAcceptance;
    /**
     *
     *
     * @return string|null
     */
    public function getAbogadoAcceptance(): ?string
    {
        return $this->abogadoAcceptance;
    }
    /**
     *
     *
     * @param string|null $abogadoAcceptance
     *
     * @return self
     */
    public function setAbogadoAcceptance(?string $abogadoAcceptance): self
    {
        $this->abogadoAcceptance = $abogadoAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAdminSingPassId(): ?string
    {
        return $this->adminSingPassId;
    }
    /**
     *
     *
     * @param string|null $adminSingPassId
     *
     * @return self
     */
    public function setAdminSingPassId(?string $adminSingPassId): self
    {
        $this->adminSingPassId = $adminSingPassId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAeAcceptance(): ?string
    {
        return $this->aeAcceptance;
    }
    /**
     *
     *
     * @param string|null $aeAcceptance
     *
     * @return self
     */
    public function setAeAcceptance(?string $aeAcceptance): self
    {
        $this->aeAcceptance = $aeAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAllocationToken(): ?string
    {
        return $this->allocationToken;
    }
    /**
     *
     *
     * @param string|null $allocationToken
     *
     * @return self
     */
    public function setAllocationToken(?string $allocationToken): self
    {
        $this->allocationToken = $allocationToken;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     *
     *
     * @param string|null $authCode
     *
     * @return self
     */
    public function setAuthCode(?string $authCode): self
    {
        $this->authCode = $authCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBankAcceptance(): ?string
    {
        return $this->bankAcceptance;
    }
    /**
     *
     *
     * @param string|null $bankAcceptance
     *
     * @return self
     */
    public function setBankAcceptance(?string $bankAcceptance): self
    {
        $this->bankAcceptance = $bankAcceptance;
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
     * @return DomainUINDocumentType|null
     */
    public function getCustomerUinDocType(): ?DomainUINDocumentType
    {
        return $this->customerUinDocType;
    }
    /**
     *
     *
     * @param DomainUINDocumentType|null $customerUinDocType
     *
     * @return self
     */
    public function setCustomerUinDocType(?DomainUINDocumentType $customerUinDocType): self
    {
        $this->customerUinDocType = $customerUinDocType;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getDomainNameVariants(): ?array
    {
        return $this->domainNameVariants;
    }
    /**
     *
     *
     * @param string[]|null $domainNameVariants
     *
     * @return self
     */
    public function setDomainNameVariants(?array $domainNameVariants): self
    {
        $this->domainNameVariants = $domainNameVariants;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEligibilityType(): ?string
    {
        return $this->eligibilityType;
    }
    /**
     *
     *
     * @param string|null $eligibilityType
     *
     * @return self
     */
    public function setEligibilityType(?string $eligibilityType): self
    {
        $this->eligibilityType = $eligibilityType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getEligibilityTypeRelationship(): ?string
    {
        return $this->eligibilityTypeRelationship;
    }
    /**
     *
     *
     * @param string|null $eligibilityTypeRelationship
     *
     * @return self
     */
    public function setEligibilityTypeRelationship(?string $eligibilityTypeRelationship): self
    {
        $this->eligibilityTypeRelationship = $eligibilityTypeRelationship;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFtldToken(): ?string
    {
        return $this->ftldToken;
    }
    /**
     *
     *
     * @param string|null $ftldToken
     *
     * @return self
     */
    public function setFtldToken(?string $ftldToken): self
    {
        $this->ftldToken = $ftldToken;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGayDonationAcceptance(): ?string
    {
        return $this->gayDonationAcceptance;
    }
    /**
     *
     *
     * @param string|null $gayDonationAcceptance
     *
     * @return self
     */
    public function setGayDonationAcceptance(?string $gayDonationAcceptance): self
    {
        $this->gayDonationAcceptance = $gayDonationAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGayRightsProtectionAcceptance(): ?string
    {
        return $this->gayRightsProtectionAcceptance;
    }
    /**
     *
     *
     * @param string|null $gayRightsProtectionAcceptance
     *
     * @return self
     */
    public function setGayRightsProtectionAcceptance(?string $gayRightsProtectionAcceptance): self
    {
        $this->gayRightsProtectionAcceptance = $gayRightsProtectionAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIdNumber(): ?string
    {
        return $this->idNumber;
    }
    /**
     *
     *
     * @param string|null $idNumber
     *
     * @return self
     */
    public function setIdNumber(?string $idNumber): self
    {
        $this->idNumber = $idNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIdType(): ?string
    {
        return $this->idType;
    }
    /**
     *
     *
     * @param string|null $idType
     *
     * @return self
     */
    public function setIdType(?string $idType): self
    {
        $this->idType = $idType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIdnScript(): ?string
    {
        return $this->idnScript;
    }
    /**
     *
     *
     * @param string|null $idnScript
     *
     * @return self
     */
    public function setIdnScript(?string $idnScript): self
    {
        $this->idnScript = $idnScript;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getInsuranceAcceptance(): ?string
    {
        return $this->insuranceAcceptance;
    }
    /**
     *
     *
     * @param string|null $insuranceAcceptance
     *
     * @return self
     */
    public function setInsuranceAcceptance(?string $insuranceAcceptance): self
    {
        $this->insuranceAcceptance = $insuranceAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIntendedUse(): ?string
    {
        return $this->intendedUse;
    }
    /**
     *
     *
     * @param string|null $intendedUse
     *
     * @return self
     */
    public function setIntendedUse(?string $intendedUse): self
    {
        $this->intendedUse = $intendedUse;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLawAcceptance(): ?string
    {
        return $this->lawAcceptance;
    }
    /**
     *
     *
     * @param string|null $lawAcceptance
     *
     * @return self
     */
    public function setLawAcceptance(?string $lawAcceptance): self
    {
        $this->lawAcceptance = $lawAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLegalType(): ?string
    {
        return $this->legalType;
    }
    /**
     *
     *
     * @param string|null $legalType
     *
     * @return self
     */
    public function setLegalType(?string $legalType): self
    {
        $this->legalType = $legalType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMaintainer(): ?string
    {
        return $this->maintainer;
    }
    /**
     *
     *
     * @param string|null $maintainer
     *
     * @return self
     */
    public function setMaintainer(?string $maintainer): self
    {
        $this->maintainer = $maintainer;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMembershipId(): ?string
    {
        return $this->membershipId;
    }
    /**
     *
     *
     * @param string|null $membershipId
     *
     * @return self
     */
    public function setMembershipId(?string $membershipId): self
    {
        $this->membershipId = $membershipId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMobilePhoneNumberVerification(): ?string
    {
        return $this->mobilePhoneNumberVerification;
    }
    /**
     *
     *
     * @param string|null $mobilePhoneNumberVerification
     *
     * @return self
     */
    public function setMobilePhoneNumberVerification(?string $mobilePhoneNumberVerification): self
    {
        $this->mobilePhoneNumberVerification = $mobilePhoneNumberVerification;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNgoOngEligibilityAcceptance(): ?string
    {
        return $this->ngoOngEligibilityAcceptance;
    }
    /**
     *
     *
     * @param string|null $ngoOngEligibilityAcceptance
     *
     * @return self
     */
    public function setNgoOngEligibilityAcceptance(?string $ngoOngEligibilityAcceptance): self
    {
        $this->ngoOngEligibilityAcceptance = $ngoOngEligibilityAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNgoOngPolicyAcceptance(): ?string
    {
        return $this->ngoOngPolicyAcceptance;
    }
    /**
     *
     *
     * @param string|null $ngoOngPolicyAcceptance
     *
     * @return self
     */
    public function setNgoOngPolicyAcceptance(?string $ngoOngPolicyAcceptance): self
    {
        $this->ngoOngPolicyAcceptance = $ngoOngPolicyAcceptance;
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
    public function getRurfBlockedDomains(): ?string
    {
        return $this->rurfBlockedDomains;
    }
    /**
     *
     *
     * @param string|null $rurfBlockedDomains
     *
     * @return self
     */
    public function setRurfBlockedDomains(?string $rurfBlockedDomains): self
    {
        $this->rurfBlockedDomains = $rurfBlockedDomains;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSelfService(): ?string
    {
        return $this->selfService;
    }
    /**
     *
     *
     * @param string|null $selfService
     *
     * @return self
     */
    public function setSelfService(?string $selfService): self
    {
        $this->selfService = $selfService;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTrademark(): ?string
    {
        return $this->trademark;
    }
    /**
     *
     *
     * @param string|null $trademark
     *
     * @return self
     */
    public function setTrademark(?string $trademark): self
    {
        $this->trademark = $trademark;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTrademarkId(): ?string
    {
        return $this->trademarkId;
    }
    /**
     *
     *
     * @param string|null $trademarkId
     *
     * @return self
     */
    public function setTrademarkId(?string $trademarkId): self
    {
        $this->trademarkId = $trademarkId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTravelAcceptance(): ?string
    {
        return $this->travelAcceptance;
    }
    /**
     *
     *
     * @param string|null $travelAcceptance
     *
     * @return self
     */
    public function setTravelAcceptance(?string $travelAcceptance): self
    {
        $this->travelAcceptance = $travelAcceptance;
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
    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }
    /**
     *
     *
     * @param string|null $verificationCode
     *
     * @return self
     */
    public function setVerificationCode(?string $verificationCode): self
    {
        $this->verificationCode = $verificationCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVoteAcceptance(): ?string
    {
        return $this->voteAcceptance;
    }
    /**
     *
     *
     * @param string|null $voteAcceptance
     *
     * @return self
     */
    public function setVoteAcceptance(?string $voteAcceptance): self
    {
        $this->voteAcceptance = $voteAcceptance;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getVotoAcceptance(): ?string
    {
        return $this->votoAcceptance;
    }
    /**
     *
     *
     * @param string|null $votoAcceptance
     *
     * @return self
     */
    public function setVotoAcceptance(?string $votoAcceptance): self
    {
        $this->votoAcceptance = $votoAcceptance;
        return $this;
    }
}
