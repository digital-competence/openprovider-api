<?php

namespace DigiComp\OpenproviderApi\Model;

class CsrDecodeCsrResponseData
{
    /**
     *
     *
     * @var int|null
     */
    protected $domainNamesCount;
    /**
     *
     *
     * @var CsrCsrPublicKey|null
     */
    protected $publicKey;
    /**
     *
     *
     * @var string|null
     */
    protected $signatureHashAlgorithm;
    /**
     *
     *
     * @var CsrCsrSubject|null
     */
    protected $subject;
    /**
     *
     *
     * @var string[]|null
     */
    protected $subjectAlternativeName;
    /**
     *
     *
     * @return int|null
     */
    public function getDomainNamesCount(): ?int
    {
        return $this->domainNamesCount;
    }
    /**
     *
     *
     * @param int|null $domainNamesCount
     *
     * @return self
     */
    public function setDomainNamesCount(?int $domainNamesCount): self
    {
        $this->domainNamesCount = $domainNamesCount;
        return $this;
    }
    /**
     *
     *
     * @return CsrCsrPublicKey|null
     */
    public function getPublicKey(): ?CsrCsrPublicKey
    {
        return $this->publicKey;
    }
    /**
     *
     *
     * @param CsrCsrPublicKey|null $publicKey
     *
     * @return self
     */
    public function setPublicKey(?CsrCsrPublicKey $publicKey): self
    {
        $this->publicKey = $publicKey;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSignatureHashAlgorithm(): ?string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     *
     *
     * @param string|null $signatureHashAlgorithm
     *
     * @return self
     */
    public function setSignatureHashAlgorithm(?string $signatureHashAlgorithm): self
    {
        $this->signatureHashAlgorithm = $signatureHashAlgorithm;
        return $this;
    }
    /**
     *
     *
     * @return CsrCsrSubject|null
     */
    public function getSubject(): ?CsrCsrSubject
    {
        return $this->subject;
    }
    /**
     *
     *
     * @param CsrCsrSubject|null $subject
     *
     * @return self
     */
    public function setSubject(?CsrCsrSubject $subject): self
    {
        $this->subject = $subject;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getSubjectAlternativeName(): ?array
    {
        return $this->subjectAlternativeName;
    }
    /**
     *
     *
     * @param string[]|null $subjectAlternativeName
     *
     * @return self
     */
    public function setSubjectAlternativeName(?array $subjectAlternativeName): self
    {
        $this->subjectAlternativeName = $subjectAlternativeName;
        return $this;
    }
}
