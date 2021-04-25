<?php

namespace DigiComp\OpenproviderApi\Model;

class TldDescription
{
    /**
     *
     *
     * @var string|null
     */
    protected $text;
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
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     *
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }
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
