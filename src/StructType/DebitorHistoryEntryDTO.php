<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorHistoryEntryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DebitorHistoryEntryDTO extends AbstractStructBase
{
    /**
     * The entryId
     * @var int|null
     */
    protected ?int $entryId = null;
    /**
     * The entryName
     * @var string|null
     */
    protected ?string $entryName = null;
    /**
     * The entryValue
     * @var string|null
     */
    protected ?string $entryValue = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * Constructor method for DebitorHistoryEntryDTO
     * @uses DebitorHistoryEntryDTO::setEntryId()
     * @uses DebitorHistoryEntryDTO::setEntryName()
     * @uses DebitorHistoryEntryDTO::setEntryValue()
     * @uses DebitorHistoryEntryDTO::setHistoryId()
     * @param int $entryId
     * @param string $entryName
     * @param string $entryValue
     * @param int $historyId
     */
    public function __construct(?int $entryId = null, ?string $entryName = null, ?string $entryValue = null, ?int $historyId = null)
    {
        $this
            ->setEntryId($entryId)
            ->setEntryName($entryName)
            ->setEntryValue($entryValue)
            ->setHistoryId($historyId);
    }
    /**
     * Get entryId value
     * @return int|null
     */
    public function getEntryId(): ?int
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param int $entryId
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryEntryDTO
     */
    public function setEntryId(?int $entryId = null): self
    {
        // validation for constraint: int
        if (!is_null($entryId) && !(is_int($entryId) || ctype_digit($entryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get entryName value
     * @return string|null
     */
    public function getEntryName(): ?string
    {
        return $this->entryName;
    }
    /**
     * Set entryName value
     * @param string $entryName
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryEntryDTO
     */
    public function setEntryName(?string $entryName = null): self
    {
        // validation for constraint: string
        if (!is_null($entryName) && !is_string($entryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryName, true), gettype($entryName)), __LINE__);
        }
        $this->entryName = $entryName;
        
        return $this;
    }
    /**
     * Get entryValue value
     * @return string|null
     */
    public function getEntryValue(): ?string
    {
        return $this->entryValue;
    }
    /**
     * Set entryValue value
     * @param string $entryValue
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryEntryDTO
     */
    public function setEntryValue(?string $entryValue = null): self
    {
        // validation for constraint: string
        if (!is_null($entryValue) && !is_string($entryValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryValue, true), gettype($entryValue)), __LINE__);
        }
        $this->entryValue = $entryValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryEntryDTO
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
}
