<?php

namespace DigiComp\OpenproviderApi\Model;

class SettingsPaymentMethodLimits
{
    /**
     *
     *
     * @var SettingsPaymentMethodLimit|null
     */
    protected $maximum;
    /**
     *
     *
     * @var SettingsPaymentMethodLimit|null
     */
    protected $minimum;
    /**
     *
     *
     * @return SettingsPaymentMethodLimit|null
     */
    public function getMaximum(): ?SettingsPaymentMethodLimit
    {
        return $this->maximum;
    }
    /**
     *
     *
     * @param SettingsPaymentMethodLimit|null $maximum
     *
     * @return self
     */
    public function setMaximum(?SettingsPaymentMethodLimit $maximum): self
    {
        $this->maximum = $maximum;
        return $this;
    }
    /**
     *
     *
     * @return SettingsPaymentMethodLimit|null
     */
    public function getMinimum(): ?SettingsPaymentMethodLimit
    {
        return $this->minimum;
    }
    /**
     *
     *
     * @param SettingsPaymentMethodLimit|null $minimum
     *
     * @return self
     */
    public function setMinimum(?SettingsPaymentMethodLimit $minimum): self
    {
        $this->minimum = $minimum;
        return $this;
    }
}
