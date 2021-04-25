<?php

namespace DigiComp\OpenproviderApi\Model;

class InvoiceInvoice
{
    /**
     *
     *
     * @var InvoicePrices|null
     */
    protected $amount;
    /**
     *
     *
     * @var string|null
     */
    protected $attachmentUrl;
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
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $invoiceUrl;
    /**
     *
     *
     * @return InvoicePrices|null
     */
    public function getAmount(): ?InvoicePrices
    {
        return $this->amount;
    }
    /**
     *
     *
     * @param InvoicePrices|null $amount
     *
     * @return self
     */
    public function setAmount(?InvoicePrices $amount): self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAttachmentUrl(): ?string
    {
        return $this->attachmentUrl;
    }
    /**
     *
     *
     * @param string|null $attachmentUrl
     *
     * @return self
     */
    public function setAttachmentUrl(?string $attachmentUrl): self
    {
        $this->attachmentUrl = $attachmentUrl;
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
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }
    /**
     *
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber): self
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getInvoiceUrl(): ?string
    {
        return $this->invoiceUrl;
    }
    /**
     *
     *
     * @param string|null $invoiceUrl
     *
     * @return self
     */
    public function setInvoiceUrl(?string $invoiceUrl): self
    {
        $this->invoiceUrl = $invoiceUrl;
        return $this;
    }
}
