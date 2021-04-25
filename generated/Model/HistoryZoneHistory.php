<?php

namespace DigiComp\OpenproviderApi\Model;

class HistoryZoneHistory
{
    /**
     *
     *
     * @var string|null
     */
    protected $date;
    /**
     *
     *
     * @var string|null
     */
    protected $is;
    /**
     *
     *
     * @var string|null
     */
    protected $source;
    /**
     *
     *
     * @var string|null
     */
    protected $was;
    /**
     *
     *
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     *
     *
     * @param string|null $date
     *
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIs(): ?string
    {
        return $this->is;
    }
    /**
     *
     *
     * @param string|null $is
     *
     * @return self
     */
    public function setIs(?string $is): self
    {
        $this->is = $is;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }
    /**
     *
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getWas(): ?string
    {
        return $this->was;
    }
    /**
     *
     *
     * @param string|null $was
     *
     * @return self
     */
    public function setWas(?string $was): self
    {
        $this->was = $was;
        return $this;
    }
}
