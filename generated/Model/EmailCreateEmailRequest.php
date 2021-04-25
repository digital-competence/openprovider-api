<?php

namespace DigiComp\OpenproviderApi\Model;

class EmailCreateEmailRequest
{
    /**
     *
     *
     * @var EmailFields[]|null
     */
    protected $fields;
    /**
     *
     *
     * @var string|null
     */
    protected $group;
    /**
     *
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     *
     *
     * @var bool|null
     */
    protected $isDefault;
    /**
     *
     *
     * @var string[]|null
     */
    protected $locale;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var EmailTags[]|null
     */
    protected $tags;
    /**
     *
     *
     * @return EmailFields[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }
    /**
     *
     *
     * @param EmailFields[]|null $fields
     *
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }
    /**
     *
     *
     * @param string|null $group
     *
     * @return self
     */
    public function setGroup(?string $group): self
    {
        $this->group = $group;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     *
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     *
     *
     * @param bool|null $isDefault
     *
     * @return self
     */
    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getLocale(): ?array
    {
        return $this->locale;
    }
    /**
     *
     *
     * @param string[]|null $locale
     *
     * @return self
     */
    public function setLocale(?array $locale): self
    {
        $this->locale = $locale;
        return $this;
    }
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
     * @return EmailTags[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }
    /**
     *
     *
     * @param EmailTags[]|null $tags
     *
     * @return self
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }
}
