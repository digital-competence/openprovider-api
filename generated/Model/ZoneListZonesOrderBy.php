<?php

namespace DigiComp\OpenproviderApi\Model;

class ZoneListZonesOrderBy
{
    /**
     *
     *
     * @var string|null
     */
    protected $creationDate = 'desc';
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
    protected $name;
    /**
     *
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     *
     *
     * @param string|null $creationDate
     *
     * @return self
     */
    public function setCreationDate(?string $creationDate): self
    {
        $this->creationDate = $creationDate;
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
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
