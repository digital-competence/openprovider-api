<?php

namespace DigiComp\OpenproviderApi\Model;

class ErrorError
{
    /**
     *
     *
     * @var int|null
     */
    protected $code;
    /**
     *
     *
     * @var string|null
     */
    protected $data;
    /**
     *
     *
     * @var string|null
     */
    protected $desc;
    /**
     *
     *
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->code;
    }
    /**
     *
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code): self
    {
        $this->code = $code;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     *
     *
     * @param string|null $data
     *
     * @return self
     */
    public function setData(?string $data): self
    {
        $this->data = $data;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }
    /**
     *
     *
     * @param string|null $desc
     *
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }
}
