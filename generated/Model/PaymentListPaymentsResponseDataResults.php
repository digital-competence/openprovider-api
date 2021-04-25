<?php

namespace DigiComp\OpenproviderApi\Model;

class PaymentListPaymentsResponseDataResults
{
    /**
     *
     *
     * @var PaymentPrices|null
     */
    protected $amount;
    /**
     *
     *
     * @var string|null
     */
    protected $confirmationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $creationDate;
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
    protected $isProcessed;
    /**
     *
     *
     * @var string|null
     */
    protected $method;
    /**
     *
     *
     * @var string|null
     */
    protected $paymentDate;
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @return PaymentPrices|null
     */
    public function getAmount(): ?PaymentPrices
    {
        return $this->amount;
    }
    /**
     *
     *
     * @param PaymentPrices|null $amount
     *
     * @return self
     */
    public function setAmount(?PaymentPrices $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getConfirmationDate(): ?string
    {
        return $this->confirmationDate;
    }
    /**
     *
     *
     * @param string|null $confirmationDate
     *
     * @return self
     */
    public function setConfirmationDate(?string $confirmationDate): self
    {
        $this->confirmationDate = $confirmationDate;
        return $this;
    }
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
    public function getIsProcessed(): ?bool
    {
        return $this->isProcessed;
    }
    /**
     *
     *
     * @param bool|null $isProcessed
     *
     * @return self
     */
    public function setIsProcessed(?bool $isProcessed): self
    {
        $this->isProcessed = $isProcessed;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     *
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     *
     *
     * @param string|null $paymentDate
     *
     * @return self
     */
    public function setPaymentDate(?string $paymentDate): self
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     *
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
}
