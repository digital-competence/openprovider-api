<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsSslStatisticsByStatus
{
    /**
     *
     *
     * @var int|null
     */
    protected $aCT;
    /**
     *
     *
     * @var int|null
     */
    protected $fAI;
    /**
     *
     *
     * @var int|null
     */
    protected $nSR;
    /**
     *
     *
     * @var int|null
     */
    protected $pEN;
    /**
     *
     *
     * @var int|null
     */
    protected $rEJ;
    /**
     *
     *
     * @var int|null
     */
    protected $rEQ;
    /**
     *
     *
     * @return int|null
     */
    public function getACT(): ?int
    {
        return $this->aCT;
    }
    /**
     *
     *
     * @param int|null $aCT
     *
     * @return self
     */
    public function setACT(?int $aCT): self
    {
        $this->aCT = $aCT;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getFAI(): ?int
    {
        return $this->fAI;
    }
    /**
     *
     *
     * @param int|null $fAI
     *
     * @return self
     */
    public function setFAI(?int $fAI): self
    {
        $this->fAI = $fAI;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getNSR(): ?int
    {
        return $this->nSR;
    }
    /**
     *
     *
     * @param int|null $nSR
     *
     * @return self
     */
    public function setNSR(?int $nSR): self
    {
        $this->nSR = $nSR;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPEN(): ?int
    {
        return $this->pEN;
    }
    /**
     *
     *
     * @param int|null $pEN
     *
     * @return self
     */
    public function setPEN(?int $pEN): self
    {
        $this->pEN = $pEN;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getREJ(): ?int
    {
        return $this->rEJ;
    }
    /**
     *
     *
     * @param int|null $rEJ
     *
     * @return self
     */
    public function setREJ(?int $rEJ): self
    {
        $this->rEJ = $rEJ;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getREQ(): ?int
    {
        return $this->rEQ;
    }
    /**
     *
     *
     * @param int|null $rEQ
     *
     * @return self
     */
    public function setREQ(?int $rEQ): self
    {
        $this->rEQ = $rEQ;
        return $this;
    }
}
