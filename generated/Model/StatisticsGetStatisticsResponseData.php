<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsGetStatisticsResponseData
{
    /**
     *
     *
     * @var StatisticsCurrencyStatistics|null
     */
    protected $currency;
    /**
     *
     *
     * @var StatisticsCustomerStatistics|null
     */
    protected $customer;
    /**
     *
     *
     * @var StatisticsDnsStatistics|null
     */
    protected $dns;
    /**
     *
     *
     * @var StatisticsDomainStatistics|null
     */
    protected $domain;
    /**
     *
     *
     * @var StatisticsLicenseStatistics|null
     */
    protected $license;
    /**
     *
     *
     * @var StatisticsSpamExpertsStatistics|null
     */
    protected $spamExperts;
    /**
     *
     *
     * @var StatisticsSslStatistics|null
     */
    protected $ssl;
    /**
     *
     *
     * @return StatisticsCurrencyStatistics|null
     */
    public function getCurrency(): ?StatisticsCurrencyStatistics
    {
        return $this->currency;
    }
    /**
     *
     *
     * @param StatisticsCurrencyStatistics|null $currency
     *
     * @return self
     */
    public function setCurrency(?StatisticsCurrencyStatistics $currency): self
    {
        $this->currency = $currency;
        return $this;
    }
    /**
     *
     *
     * @return StatisticsCustomerStatistics|null
     */
    public function getCustomer(): ?StatisticsCustomerStatistics
    {
        return $this->customer;
    }
    /**
     *
     *
     * @param StatisticsCustomerStatistics|null $customer
     *
     * @return self
     */
    public function setCustomer(?StatisticsCustomerStatistics $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
    /**
     *
     *
     * @return StatisticsDnsStatistics|null
     */
    public function getDns(): ?StatisticsDnsStatistics
    {
        return $this->dns;
    }
    /**
     *
     *
     * @param StatisticsDnsStatistics|null $dns
     *
     * @return self
     */
    public function setDns(?StatisticsDnsStatistics $dns): self
    {
        $this->dns = $dns;
        return $this;
    }
    /**
     *
     *
     * @return StatisticsDomainStatistics|null
     */
    public function getDomain(): ?StatisticsDomainStatistics
    {
        return $this->domain;
    }
    /**
     *
     *
     * @param StatisticsDomainStatistics|null $domain
     *
     * @return self
     */
    public function setDomain(?StatisticsDomainStatistics $domain): self
    {
        $this->domain = $domain;
        return $this;
    }
    /**
     *
     *
     * @return StatisticsLicenseStatistics|null
     */
    public function getLicense(): ?StatisticsLicenseStatistics
    {
        return $this->license;
    }
    /**
     *
     *
     * @param StatisticsLicenseStatistics|null $license
     *
     * @return self
     */
    public function setLicense(?StatisticsLicenseStatistics $license): self
    {
        $this->license = $license;
        return $this;
    }
    /**
     *
     *
     * @return StatisticsSpamExpertsStatistics|null
     */
    public function getSpamExperts(): ?StatisticsSpamExpertsStatistics
    {
        return $this->spamExperts;
    }
    /**
     *
     *
     * @param StatisticsSpamExpertsStatistics|null $spamExperts
     *
     * @return self
     */
    public function setSpamExperts(?StatisticsSpamExpertsStatistics $spamExperts): self
    {
        $this->spamExperts = $spamExperts;
        return $this;
    }
    /**
     *
     *
     * @return StatisticsSslStatistics|null
     */
    public function getSsl(): ?StatisticsSslStatistics
    {
        return $this->ssl;
    }
    /**
     *
     *
     * @param StatisticsSslStatistics|null $ssl
     *
     * @return self
     */
    public function setSsl(?StatisticsSslStatistics $ssl): self
    {
        $this->ssl = $ssl;
        return $this;
    }
}
