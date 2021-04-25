<?php

namespace DigiComp\OpenproviderApi\Model;

class ZoneRecordWithOriginal
{
    /**
     *
     *
     * @var ZoneRecord|null
     */
    protected $originalRecord;
    /**
     *
     *
     * @var ZoneRecord|null
     */
    protected $record;
    /**
     *
     *
     * @return ZoneRecord|null
     */
    public function getOriginalRecord(): ?ZoneRecord
    {
        return $this->originalRecord;
    }
    /**
     *
     *
     * @param ZoneRecord|null $originalRecord
     *
     * @return self
     */
    public function setOriginalRecord(?ZoneRecord $originalRecord): self
    {
        $this->originalRecord = $originalRecord;
        return $this;
    }
    /**
     *
     *
     * @return ZoneRecord|null
     */
    public function getRecord(): ?ZoneRecord
    {
        return $this->record;
    }
    /**
     *
     *
     * @param ZoneRecord|null $record
     *
     * @return self
     */
    public function setRecord(?ZoneRecord $record): self
    {
        $this->record = $record;
        return $this;
    }
}
