<?php

namespace DigiComp\OpenproviderApi\Model;

class EmailRestartEmailVerificationResponseData
{
    /**
     *
     *
     * @var bool|null
     */
    protected $success;
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
}
