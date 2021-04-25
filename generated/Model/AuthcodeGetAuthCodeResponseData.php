<?php

namespace DigiComp\OpenproviderApi\Model;

class AuthcodeGetAuthCodeResponseData
{
    /**
     *
     *
     * @var string|null
     */
    protected $authCode;
    /**
     *
     *
     * @var bool|null
     */
    protected $success;
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
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     *
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success): self
    {
        $this->success = $success;
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
