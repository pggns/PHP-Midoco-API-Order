<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SapChangeHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SapChangeHistoryDTO extends AbstractStructBase
{
    /**
     * The changedId
     * @var string|null
     */
    protected ?string $changedId = null;
    /**
     * The changedSubject
     * @var string|null
     */
    protected ?string $changedSubject = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The exported
     * @var bool|null
     */
    protected ?bool $exported = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SapChangeHistoryDTO
     * @uses SapChangeHistoryDTO::setChangedId()
     * @uses SapChangeHistoryDTO::setChangedSubject()
     * @uses SapChangeHistoryDTO::setExportTimestamp()
     * @uses SapChangeHistoryDTO::setExported()
     * @uses SapChangeHistoryDTO::setHistoryId()
     * @uses SapChangeHistoryDTO::setModifyTimestamp()
     * @uses SapChangeHistoryDTO::setUnitName()
     * @param string $changedId
     * @param string $changedSubject
     * @param string $exportTimestamp
     * @param bool $exported
     * @param int $historyId
     * @param string $modifyTimestamp
     * @param string $unitName
     */
    public function __construct(?string $changedId = null, ?string $changedSubject = null, ?string $exportTimestamp = null, ?bool $exported = null, ?int $historyId = null, ?string $modifyTimestamp = null, ?string $unitName = null)
    {
        $this
            ->setChangedId($changedId)
            ->setChangedSubject($changedSubject)
            ->setExportTimestamp($exportTimestamp)
            ->setExported($exported)
            ->setHistoryId($historyId)
            ->setModifyTimestamp($modifyTimestamp)
            ->setUnitName($unitName);
    }
    /**
     * Get changedId value
     * @return string|null
     */
    public function getChangedId(): ?string
    {
        return $this->changedId;
    }
    /**
     * Set changedId value
     * @param string $changedId
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setChangedId(?string $changedId = null): self
    {
        // validation for constraint: string
        if (!is_null($changedId) && !is_string($changedId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changedId, true), gettype($changedId)), __LINE__);
        }
        $this->changedId = $changedId;
        
        return $this;
    }
    /**
     * Get changedSubject value
     * @return string|null
     */
    public function getChangedSubject(): ?string
    {
        return $this->changedSubject;
    }
    /**
     * Set changedSubject value
     * @param string $changedSubject
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setChangedSubject(?string $changedSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($changedSubject) && !is_string($changedSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changedSubject, true), gettype($changedSubject)), __LINE__);
        }
        $this->changedSubject = $changedSubject;
        
        return $this;
    }
    /**
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
    /**
     * Get exported value
     * @return bool|null
     */
    public function getExported(): ?bool
    {
        return $this->exported;
    }
    /**
     * Set exported value
     * @param bool $exported
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setExported(?bool $exported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exported) && !is_bool($exported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exported, true), gettype($exported)), __LINE__);
        }
        $this->exported = $exported;
        
        return $this;
    }
    /**
     * Get historyId value
     * @return int|null
     */
    public function getHistoryId(): ?int
    {
        return $this->historyId;
    }
    /**
     * Set historyId value
     * @param int $historyId
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setHistoryId(?int $historyId = null): self
    {
        // validation for constraint: int
        if (!is_null($historyId) && !(is_int($historyId) || ctype_digit($historyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyId, true), gettype($historyId)), __LINE__);
        }
        $this->historyId = $historyId;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SapChangeHistoryDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
