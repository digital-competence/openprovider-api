<?php

namespace DigiComp\OpenproviderApi\Model;

class AuthcodeAuthInfo
{
    /**
     *
     *
     * @var string|null
     */
    protected $pw;
    /**
     *
     *
     * @return string|null
     */
    public function getPw(): ?string
    {
        return $this->pw;
    }
    /**
     *
     *
     * @param string|null $pw
     *
     * @return self
     */
    public function setPw(?string $pw): self
    {
        $this->pw = $pw;
        return $this;
    }
}
