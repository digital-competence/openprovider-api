<?php

namespace DigiComp\OpenproviderApi\Model;

class CsrDecodeCsrRequest
{
    /**
     *
     *
     * @var string|null
     */
    protected $csr;
    /**
     *
     *
     * @return string|null
     */
    public function getCsr(): ?string
    {
        return $this->csr;
    }
    /**
     *
     *
     * @param string|null $csr
     *
     * @return self
     */
    public function setCsr(?string $csr): self
    {
        $this->csr = $csr;
        return $this;
    }
}
