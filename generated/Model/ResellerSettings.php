<?php

namespace DigiComp\OpenproviderApi\Model;

class ResellerSettings
{
    /**
     *
     *
     * @var string|null
     */
    protected $avHandle;
    /**
     *
     *
     * @var string|null
     */
    protected $claimsConfirmUrl;
    /**
     *
     *
     * @var string|null
     */
    protected $claimsEmailSubject;
    /**
     *
     *
     * @var string|null
     */
    protected $claimsResellerName;
    /**
     *
     *
     * @var string|null
     */
    protected $claimsSenderEmail;
    /**
     *
     *
     * @var string|null
     */
    protected $currency;
    /**
     *
     *
     * @var string|null
     */
    protected $defaultDomainBillingHandle;
    /**
     *
     *
     * @var string|null
     */
    protected $defaultDomainResellerHandle;
    /**
     *
     *
     * @var string|null
     */
    protected $foaConfirmUrl;
    /**
     *
     *
     * @var string|null
     */
    protected $foaEmailSubject;
    /**
     *
     *
     * @var string|null
     */
    protected $foaResellerName;
    /**
     *
     *
     * @var string|null
     */
    protected $foaSenderEmail;
    /**
     *
     *
     * @var string|null
     */
    protected $foaTermsConditionsUrl;
    /**
     *
     *
     * @var bool|null
     */
    protected $isAutoRenewEnabled;
    /**
     *
     *
     * @var bool|null
     */
    protected $isCustomNsesEnabled;
    /**
     *
     *
     * @var string|null
     */
    protected $ive2CustomizedBody;
    /**
     *
     *
     * @var string|null
     */
    protected $ive2EmailSubject;
    /**
     *
     *
     * @var string|null
     */
    protected $iveConfirmUrl;
    /**
     *
     *
     * @var string|null
     */
    protected $iveCustomizedBody;
    /**
     *
     *
     * @var string|null
     */
    protected $iveEmailSubject;
    /**
     *
     *
     * @var string|null
     */
    protected $iveResellerName;
    /**
     *
     *
     * @var string|null
     */
    protected $iveSenderEmail;
    /**
     *
     *
     * @var string|null
     */
    protected $jurisdiction;
    /**
     *
     *
     * @var string|null
     */
    protected $language;
    /**
     *
     *
     * @var float|null
     */
    protected $maximumCredit;
    /**
     *
     *
     * @var float|null
     */
    protected $maximumCreditCardPayment;
    /**
     *
     *
     * @var float|null
     */
    protected $maximumIDealPayment;
    /**
     *
     *
     * @var float|null
     */
    protected $maximumWesternUnionPayment;
    /**
     *
     *
     * @var float|null
     */
    protected $minimumPayment;
    /**
     *
     *
     * @var float|null
     */
    protected $minimumWesternUnionPayment;
    /**
     *
     *
     * @var string[]|null
     */
    protected $payMethods;
    /**
     *
     *
     * @var SettingsPaymentMethods[]|null
     */
    protected $paymentMethods;
    /**
     *
     *
     * @var string|null
     */
    protected $preregisteredDomainPriorities;
    /**
     *
     *
     * @var SettingsPaymentMethods[]|null
     */
    protected $recurringPaymentMethods;
    /**
     *
     *
     * @var int[]|null
     */
    protected $renewNotificationDays;
    /**
     *
     *
     * @var bool|null
     */
    protected $renewNotificationEveryWeek;
    /**
     *
     *
     * @var SettingsTacContract|null
     */
    protected $tacContract;
    /**
     *
     *
     * @var string[]|null
     */
    protected $tags;
    /**
     *
     *
     * @var SettingsTransactionFee|null
     */
    protected $transactionFee;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @return string|null
     */
    public function getAvHandle(): ?string
    {
        return $this->avHandle;
    }
    /**
     *
     *
     * @param string|null $avHandle
     *
     * @return self
     */
    public function setAvHandle(?string $avHandle): self
    {
        $this->avHandle = $avHandle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getClaimsConfirmUrl(): ?string
    {
        return $this->claimsConfirmUrl;
    }
    /**
     *
     *
     * @param string|null $claimsConfirmUrl
     *
     * @return self
     */
    public function setClaimsConfirmUrl(?string $claimsConfirmUrl): self
    {
        $this->claimsConfirmUrl = $claimsConfirmUrl;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getClaimsEmailSubject(): ?string
    {
        return $this->claimsEmailSubject;
    }
    /**
     *
     *
     * @param string|null $claimsEmailSubject
     *
     * @return self
     */
    public function setClaimsEmailSubject(?string $claimsEmailSubject): self
    {
        $this->claimsEmailSubject = $claimsEmailSubject;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getClaimsResellerName(): ?string
    {
        return $this->claimsResellerName;
    }
    /**
     *
     *
     * @param string|null $claimsResellerName
     *
     * @return self
     */
    public function setClaimsResellerName(?string $claimsResellerName): self
    {
        $this->claimsResellerName = $claimsResellerName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getClaimsSenderEmail(): ?string
    {
        return $this->claimsSenderEmail;
    }
    /**
     *
     *
     * @param string|null $claimsSenderEmail
     *
     * @return self
     */
    public function setClaimsSenderEmail(?string $claimsSenderEmail): self
    {
        $this->claimsSenderEmail = $claimsSenderEmail;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     *
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDefaultDomainBillingHandle(): ?string
    {
        return $this->defaultDomainBillingHandle;
    }
    /**
     *
     *
     * @param string|null $defaultDomainBillingHandle
     *
     * @return self
     */
    public function setDefaultDomainBillingHandle(?string $defaultDomainBillingHandle): self
    {
        $this->defaultDomainBillingHandle = $defaultDomainBillingHandle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDefaultDomainResellerHandle(): ?string
    {
        return $this->defaultDomainResellerHandle;
    }
    /**
     *
     *
     * @param string|null $defaultDomainResellerHandle
     *
     * @return self
     */
    public function setDefaultDomainResellerHandle(?string $defaultDomainResellerHandle): self
    {
        $this->defaultDomainResellerHandle = $defaultDomainResellerHandle;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFoaConfirmUrl(): ?string
    {
        return $this->foaConfirmUrl;
    }
    /**
     *
     *
     * @param string|null $foaConfirmUrl
     *
     * @return self
     */
    public function setFoaConfirmUrl(?string $foaConfirmUrl): self
    {
        $this->foaConfirmUrl = $foaConfirmUrl;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFoaEmailSubject(): ?string
    {
        return $this->foaEmailSubject;
    }
    /**
     *
     *
     * @param string|null $foaEmailSubject
     *
     * @return self
     */
    public function setFoaEmailSubject(?string $foaEmailSubject): self
    {
        $this->foaEmailSubject = $foaEmailSubject;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFoaResellerName(): ?string
    {
        return $this->foaResellerName;
    }
    /**
     *
     *
     * @param string|null $foaResellerName
     *
     * @return self
     */
    public function setFoaResellerName(?string $foaResellerName): self
    {
        $this->foaResellerName = $foaResellerName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFoaSenderEmail(): ?string
    {
        return $this->foaSenderEmail;
    }
    /**
     *
     *
     * @param string|null $foaSenderEmail
     *
     * @return self
     */
    public function setFoaSenderEmail(?string $foaSenderEmail): self
    {
        $this->foaSenderEmail = $foaSenderEmail;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFoaTermsConditionsUrl(): ?string
    {
        return $this->foaTermsConditionsUrl;
    }
    /**
     *
     *
     * @param string|null $foaTermsConditionsUrl
     *
     * @return self
     */
    public function setFoaTermsConditionsUrl(?string $foaTermsConditionsUrl): self
    {
        $this->foaTermsConditionsUrl = $foaTermsConditionsUrl;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsAutoRenewEnabled(): ?bool
    {
        return $this->isAutoRenewEnabled;
    }
    /**
     *
     *
     * @param bool|null $isAutoRenewEnabled
     *
     * @return self
     */
    public function setIsAutoRenewEnabled(?bool $isAutoRenewEnabled): self
    {
        $this->isAutoRenewEnabled = $isAutoRenewEnabled;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsCustomNsesEnabled(): ?bool
    {
        return $this->isCustomNsesEnabled;
    }
    /**
     *
     *
     * @param bool|null $isCustomNsesEnabled
     *
     * @return self
     */
    public function setIsCustomNsesEnabled(?bool $isCustomNsesEnabled): self
    {
        $this->isCustomNsesEnabled = $isCustomNsesEnabled;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIve2CustomizedBody(): ?string
    {
        return $this->ive2CustomizedBody;
    }
    /**
     *
     *
     * @param string|null $ive2CustomizedBody
     *
     * @return self
     */
    public function setIve2CustomizedBody(?string $ive2CustomizedBody): self
    {
        $this->ive2CustomizedBody = $ive2CustomizedBody;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIve2EmailSubject(): ?string
    {
        return $this->ive2EmailSubject;
    }
    /**
     *
     *
     * @param string|null $ive2EmailSubject
     *
     * @return self
     */
    public function setIve2EmailSubject(?string $ive2EmailSubject): self
    {
        $this->ive2EmailSubject = $ive2EmailSubject;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIveConfirmUrl(): ?string
    {
        return $this->iveConfirmUrl;
    }
    /**
     *
     *
     * @param string|null $iveConfirmUrl
     *
     * @return self
     */
    public function setIveConfirmUrl(?string $iveConfirmUrl): self
    {
        $this->iveConfirmUrl = $iveConfirmUrl;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIveCustomizedBody(): ?string
    {
        return $this->iveCustomizedBody;
    }
    /**
     *
     *
     * @param string|null $iveCustomizedBody
     *
     * @return self
     */
    public function setIveCustomizedBody(?string $iveCustomizedBody): self
    {
        $this->iveCustomizedBody = $iveCustomizedBody;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIveEmailSubject(): ?string
    {
        return $this->iveEmailSubject;
    }
    /**
     *
     *
     * @param string|null $iveEmailSubject
     *
     * @return self
     */
    public function setIveEmailSubject(?string $iveEmailSubject): self
    {
        $this->iveEmailSubject = $iveEmailSubject;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIveResellerName(): ?string
    {
        return $this->iveResellerName;
    }
    /**
     *
     *
     * @param string|null $iveResellerName
     *
     * @return self
     */
    public function setIveResellerName(?string $iveResellerName): self
    {
        $this->iveResellerName = $iveResellerName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIveSenderEmail(): ?string
    {
        return $this->iveSenderEmail;
    }
    /**
     *
     *
     * @param string|null $iveSenderEmail
     *
     * @return self
     */
    public function setIveSenderEmail(?string $iveSenderEmail): self
    {
        $this->iveSenderEmail = $iveSenderEmail;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getJurisdiction(): ?string
    {
        return $this->jurisdiction;
    }
    /**
     *
     *
     * @param string|null $jurisdiction
     *
     * @return self
     */
    public function setJurisdiction(?string $jurisdiction): self
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     *
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMaximumCredit(): ?float
    {
        return $this->maximumCredit;
    }
    /**
     *
     *
     * @param float|null $maximumCredit
     *
     * @return self
     */
    public function setMaximumCredit(?float $maximumCredit): self
    {
        $this->maximumCredit = $maximumCredit;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMaximumCreditCardPayment(): ?float
    {
        return $this->maximumCreditCardPayment;
    }
    /**
     *
     *
     * @param float|null $maximumCreditCardPayment
     *
     * @return self
     */
    public function setMaximumCreditCardPayment(?float $maximumCreditCardPayment): self
    {
        $this->maximumCreditCardPayment = $maximumCreditCardPayment;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMaximumIDealPayment(): ?float
    {
        return $this->maximumIDealPayment;
    }
    /**
     *
     *
     * @param float|null $maximumIDealPayment
     *
     * @return self
     */
    public function setMaximumIDealPayment(?float $maximumIDealPayment): self
    {
        $this->maximumIDealPayment = $maximumIDealPayment;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMaximumWesternUnionPayment(): ?float
    {
        return $this->maximumWesternUnionPayment;
    }
    /**
     *
     *
     * @param float|null $maximumWesternUnionPayment
     *
     * @return self
     */
    public function setMaximumWesternUnionPayment(?float $maximumWesternUnionPayment): self
    {
        $this->maximumWesternUnionPayment = $maximumWesternUnionPayment;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMinimumPayment(): ?float
    {
        return $this->minimumPayment;
    }
    /**
     *
     *
     * @param float|null $minimumPayment
     *
     * @return self
     */
    public function setMinimumPayment(?float $minimumPayment): self
    {
        $this->minimumPayment = $minimumPayment;
        return $this;
    }
    /**
     *
     *
     * @return float|null
     */
    public function getMinimumWesternUnionPayment(): ?float
    {
        return $this->minimumWesternUnionPayment;
    }
    /**
     *
     *
     * @param float|null $minimumWesternUnionPayment
     *
     * @return self
     */
    public function setMinimumWesternUnionPayment(?float $minimumWesternUnionPayment): self
    {
        $this->minimumWesternUnionPayment = $minimumWesternUnionPayment;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getPayMethods(): ?array
    {
        return $this->payMethods;
    }
    /**
     *
     *
     * @param string[]|null $payMethods
     *
     * @return self
     */
    public function setPayMethods(?array $payMethods): self
    {
        $this->payMethods = $payMethods;
        return $this;
    }
    /**
     *
     *
     * @return SettingsPaymentMethods[]|null
     */
    public function getPaymentMethods(): ?array
    {
        return $this->paymentMethods;
    }
    /**
     *
     *
     * @param SettingsPaymentMethods[]|null $paymentMethods
     *
     * @return self
     */
    public function setPaymentMethods(?array $paymentMethods): self
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPreregisteredDomainPriorities(): ?string
    {
        return $this->preregisteredDomainPriorities;
    }
    /**
     *
     *
     * @param string|null $preregisteredDomainPriorities
     *
     * @return self
     */
    public function setPreregisteredDomainPriorities(?string $preregisteredDomainPriorities): self
    {
        $this->preregisteredDomainPriorities = $preregisteredDomainPriorities;
        return $this;
    }
    /**
     *
     *
     * @return SettingsPaymentMethods[]|null
     */
    public function getRecurringPaymentMethods(): ?array
    {
        return $this->recurringPaymentMethods;
    }
    /**
     *
     *
     * @param SettingsPaymentMethods[]|null $recurringPaymentMethods
     *
     * @return self
     */
    public function setRecurringPaymentMethods(?array $recurringPaymentMethods): self
    {
        $this->recurringPaymentMethods = $recurringPaymentMethods;
        return $this;
    }
    /**
     *
     *
     * @return int[]|null
     */
    public function getRenewNotificationDays(): ?array
    {
        return $this->renewNotificationDays;
    }
    /**
     *
     *
     * @param int[]|null $renewNotificationDays
     *
     * @return self
     */
    public function setRenewNotificationDays(?array $renewNotificationDays): self
    {
        $this->renewNotificationDays = $renewNotificationDays;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getRenewNotificationEveryWeek(): ?bool
    {
        return $this->renewNotificationEveryWeek;
    }
    /**
     *
     *
     * @param bool|null $renewNotificationEveryWeek
     *
     * @return self
     */
    public function setRenewNotificationEveryWeek(?bool $renewNotificationEveryWeek): self
    {
        $this->renewNotificationEveryWeek = $renewNotificationEveryWeek;
        return $this;
    }
    /**
     *
     *
     * @return SettingsTacContract|null
     */
    public function getTacContract(): ?SettingsTacContract
    {
        return $this->tacContract;
    }
    /**
     *
     *
     * @param SettingsTacContract|null $tacContract
     *
     * @return self
     */
    public function setTacContract(?SettingsTacContract $tacContract): self
    {
        $this->tacContract = $tacContract;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     *
     *
     * @param string[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }
    /**
     *
     *
     * @return SettingsTransactionFee|null
     */
    public function getTransactionFee(): ?SettingsTransactionFee
    {
        return $this->transactionFee;
    }
    /**
     *
     *
     * @param SettingsTransactionFee|null $transactionFee
     *
     * @return self
     */
    public function setTransactionFee(?SettingsTransactionFee $transactionFee): self
    {
        $this->transactionFee = $transactionFee;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
