<?php

namespace DigiComp\OpenproviderApi\Model;

class SpamExpertGenerateLoginURLResponseData
{
    /**
     *
     *
     * @var string|null
     */
    protected $url;
    /**
     *
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     *
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
