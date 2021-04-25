<?php

namespace DigiComp\OpenproviderApi\Model;

class EmailRestartEmailVerificationRequest
{
    /**
     *
     *
     * @var string|null
     */
    protected $email;
    /**
     *
     *
     * @var string|null
     */
    protected $language;
    /**
     *
     *
     * @var string|null
     */
    protected $tag;
    /**
     *
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     *
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
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
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }
    /**
     *
     *
     * @param string|null $tag
     *
     * @return self
     */
    public function setTag(?string $tag): self
    {
        $this->tag = $tag;
        return $this;
    }
}
