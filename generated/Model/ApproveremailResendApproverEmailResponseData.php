<?php

namespace DigiComp\OpenproviderApi\Model;

class ApproveremailResendApproverEmailResponseData
{
    /**
     *
     *
     * @var int|null
     */
    protected $id;
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
}
