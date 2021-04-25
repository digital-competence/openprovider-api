<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseListLicensesResponse
{
    /**
     *
     *
     * @var int|null
     */
    protected $code;
    /**
     *
     *
     * @var LicenseListLicensesResponseData|null
     */
    protected $data;
    /**
     *
     *
     * @var string|null
     */
    protected $desc;
    /**
     *
     *
     * @var bool|null
     */
    protected $maintenance;
    /**
     *
     *
     * @var ErrorWarning[]|null
     */
    protected $warnings;
    /**
     *
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     *
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     *
     *
     * @return LicenseListLicensesResponseData|null
     */
    public function getData(): ?LicenseListLicensesResponseData
    {
        return $this->data;
    }
    /**
     *
     *
     * @param LicenseListLicensesResponseData|null $data
     *
     * @return self
     */
    public function setData(?LicenseListLicensesResponseData $data): self
    {
        $this->data = $data;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }
    /**
     *
     *
     * @param string|null $desc
     *
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getMaintenance(): ?bool
    {
        return $this->maintenance;
    }
    /**
     *
     *
     * @param bool|null $maintenance
     *
     * @return self
     */
    public function setMaintenance(?bool $maintenance): self
    {
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     *
     *
     * @return ErrorWarning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }
    /**
     *
     *
     * @param ErrorWarning[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;
        return $this;
    }
}
