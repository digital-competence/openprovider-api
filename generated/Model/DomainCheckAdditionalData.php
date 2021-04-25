<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainCheckAdditionalData
{
    /**
     *
     *
     * @var string|null
     */
    protected $idnScript;
    /**
     *
     *
     * @return string|null
     */
    public function getIdnScript(): ?string
    {
        return $this->idnScript;
    }
    /**
     *
     *
     * @param string|null $idnScript
     *
     * @return self
     */
    public function setIdnScript(?string $idnScript): self
    {
        $this->idnScript = $idnScript;
        return $this;
    }
}
