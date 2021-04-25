<?php

namespace DigiComp\OpenproviderApi\Model;

class CustomerFile
{
    /**
     *
     *
     * @var string|null
     */
    protected $description;
    /**
     *
     *
     * @var string|null
     */
    protected $docType;
    /**
     *
     *
     * @var string|null
     */
    protected $path;
    /**
     *
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     *
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDocType(): ?string
    {
        return $this->docType;
    }
    /**
     *
     *
     * @param string|null $docType
     *
     * @return self
     */
    public function setDocType(?string $docType): self
    {
        $this->docType = $docType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }
    /**
     *
     *
     * @param string|null $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;
        return $this;
    }
}
