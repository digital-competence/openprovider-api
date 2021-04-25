<?php

namespace DigiComp\OpenproviderApi\Model;

class SettingsSignedContracts
{
    /**
     *
     *
     * @var string|null
     */
    protected $contents;
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var bool|null
     */
    protected $isSigned;
    /**
     *
     *
     * @var string|null
     */
    protected $modificationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $signOnDate;
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @var int|null
     */
    protected $versionId;
    /**
     *
     *
     * @return string|null
     */
    public function getContents(): ?string
    {
        return $this->contents;
    }
    /**
     *
     *
     * @param string|null $contents
     *
     * @return self
     */
    public function setContents(?string $contents): self
    {
        $this->contents = $contents;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsSigned(): ?bool
    {
        return $this->isSigned;
    }
    /**
     *
     *
     * @param bool|null $isSigned
     *
     * @return self
     */
    public function setIsSigned(?bool $isSigned): self
    {
        $this->isSigned = $isSigned;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getModificationDate(): ?string
    {
        return $this->modificationDate;
    }
    /**
     *
     *
     * @param string|null $modificationDate
     *
     * @return self
     */
    public function setModificationDate(?string $modificationDate): self
    {
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSignOnDate(): ?string
    {
        return $this->signOnDate;
    }
    /**
     *
     *
     * @param string|null $signOnDate
     *
     * @return self
     */
    public function setSignOnDate(?string $signOnDate): self
    {
        $this->signOnDate = $signOnDate;
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
    /**
     *
     *
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     *
     *
     * @param int|null $versionId
     *
     * @return self
     */
    public function setVersionId(?int $versionId): self
    {
        $this->versionId = $versionId;
        return $this;
    }
}
