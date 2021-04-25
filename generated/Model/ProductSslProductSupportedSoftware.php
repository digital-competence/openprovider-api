<?php

namespace DigiComp\OpenproviderApi\Model;

class ProductSslProductSupportedSoftware
{
    /**
     *
     *
     * @var string|null
     */
    protected $id;
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     *
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     *
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
