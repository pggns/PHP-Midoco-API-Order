<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConcardisPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ConcardisPositionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The concardisLine
     * @var string|null
     */
    protected ?string $concardisLine = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for ConcardisPositionDTO
     * @uses ConcardisPositionDTO::setAmount()
     * @uses ConcardisPositionDTO::setCcType()
     * @uses ConcardisPositionDTO::setConcardisLine()
     * @uses ConcardisPositionDTO::setCreationTimestamp()
     * @uses ConcardisPositionDTO::setCurrency()
     * @uses ConcardisPositionDTO::setExportTimestamp()
     * @uses ConcardisPositionDTO::setIsExported()
     * @uses ConcardisPositionDTO::setPosition()
     * @uses ConcardisPositionDTO::setTransactionId()
     * @uses ConcardisPositionDTO::setUnitName()
     * @param float $amount
     * @param string $ccType
     * @param string $concardisLine
     * @param string $creationTimestamp
     * @param string $currency
     * @param string $exportTimestamp
     * @param bool $isExported
     * @param int $position
     * @param int $transactionId
     * @param string $unitName
     */
    public function __construct(?float $amount = null, ?string $ccType = null, ?string $concardisLine = null, ?string $creationTimestamp = null, ?string $currency = null, ?string $exportTimestamp = null, ?bool $isExported = null, ?int $position = null, ?int $transactionId = null, ?string $unitName = null)
    {
        $this
            ->setAmount($amount)
            ->setCcType($ccType)
            ->setConcardisLine($concardisLine)
            ->setCreationTimestamp($creationTimestamp)
            ->setCurrency($currency)
            ->setExportTimestamp($exportTimestamp)
            ->setIsExported($isExported)
            ->setPosition($position)
            ->setTransactionId($transactionId)
            ->setUnitName($unitName);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get concardisLine value
     * @return string|null
     */
    public function getConcardisLine(): ?string
    {
        return $this->concardisLine;
    }
    /**
     * Set concardisLine value
     * @param string $concardisLine
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setConcardisLine(?string $concardisLine = null): self
    {
        // validation for constraint: string
        if (!is_null($concardisLine) && !is_string($concardisLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($concardisLine, true), gettype($concardisLine)), __LINE__);
        }
        $this->concardisLine = $concardisLine;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
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
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ConcardisPositionDTO
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
