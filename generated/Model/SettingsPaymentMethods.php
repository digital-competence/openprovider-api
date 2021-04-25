<?php

namespace DigiComp\OpenproviderApi\Model;

class SettingsPaymentMethods
{
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var SettingsPaymentMethodSettings|null
     */
    protected $settings;
    /**
     *
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return SettingsPaymentMethodSettings|null
     */
    public function getSettings(): ?SettingsPaymentMethodSettings
    {
        return $this->settings;
    }
    /**
     *
     *
     * @param SettingsPaymentMethodSettings|null $settings
     *
     * @return self
     */
    public function setSettings(?SettingsPaymentMethodSettings $settings): self
    {
        $this->settings = $settings;
        return $this;
    }
}
