<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoSettlMdocLevelDTO StructType
 * @subpackage Structs
 */
class CrmMidocoSettlMdocLevelDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The maxLimit
     * @var int|null
     */
    protected ?int $maxLimit = null;
    /**
     * The minLimit
     * @var int|null
     */
    protected ?int $minLimit = null;
    /**
     * The settlMdocId
     * @var int|null
     */
    protected ?int $settlMdocId = null;
    /**
     * The settlMdocLevelId
     * @var int|null
     */
    protected ?int $settlMdocLevelId = null;
    /**
     * Constructor method for CrmMidocoSettlMdocLevelDTO
     * @uses CrmMidocoSettlMdocLevelDTO::setAmount()
     * @uses CrmMidocoSettlMdocLevelDTO::setMaxLimit()
     * @uses CrmMidocoSettlMdocLevelDTO::setMinLimit()
     * @uses CrmMidocoSettlMdocLevelDTO::setSettlMdocId()
     * @uses CrmMidocoSettlMdocLevelDTO::setSettlMdocLevelId()
     * @param float $amount
     * @param int $maxLimit
     * @param int $minLimit
     * @param int $settlMdocId
     * @param int $settlMdocLevelId
     */
    public function __construct(?float $amount = null, ?int $maxLimit = null, ?int $minLimit = null, ?int $settlMdocId = null, ?int $settlMdocLevelId = null)
    {
        $this
            ->setAmount($amount)
            ->setMaxLimit($maxLimit)
            ->setMinLimit($minLimit)
            ->setSettlMdocId($settlMdocId)
            ->setSettlMdocLevelId($settlMdocLevelId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO
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
     * Get maxLimit value
     * @return int|null
     */
    public function getMaxLimit(): ?int
    {
        return $this->maxLimit;
    }
    /**
     * Set maxLimit value
     * @param int $maxLimit
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO
     */
    public function setMaxLimit(?int $maxLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($maxLimit) && !(is_int($maxLimit) || ctype_digit($maxLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxLimit, true), gettype($maxLimit)), __LINE__);
        }
        $this->maxLimit = $maxLimit;
        
        return $this;
    }
    /**
     * Get minLimit value
     * @return int|null
     */
    public function getMinLimit(): ?int
    {
        return $this->minLimit;
    }
    /**
     * Set minLimit value
     * @param int $minLimit
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO
     */
    public function setMinLimit(?int $minLimit = null): self
    {
        // validation for constraint: int
        if (!is_null($minLimit) && !(is_int($minLimit) || ctype_digit($minLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minLimit, true), gettype($minLimit)), __LINE__);
        }
        $this->minLimit = $minLimit;
        
        return $this;
    }
    /**
     * Get settlMdocId value
     * @return int|null
     */
    public function getSettlMdocId(): ?int
    {
        return $this->settlMdocId;
    }
    /**
     * Set settlMdocId value
     * @param int $settlMdocId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO
     */
    public function setSettlMdocId(?int $settlMdocId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocId) && !(is_int($settlMdocId) || ctype_digit($settlMdocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocId, true), gettype($settlMdocId)), __LINE__);
        }
        $this->settlMdocId = $settlMdocId;
        
        return $this;
    }
    /**
     * Get settlMdocLevelId value
     * @return int|null
     */
    public function getSettlMdocLevelId(): ?int
    {
        return $this->settlMdocLevelId;
    }
    /**
     * Set settlMdocLevelId value
     * @param int $settlMdocLevelId
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlMdocLevelDTO
     */
    public function setSettlMdocLevelId(?int $settlMdocLevelId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocLevelId) && !(is_int($settlMdocLevelId) || ctype_digit($settlMdocLevelId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocLevelId, true), gettype($settlMdocLevelId)), __LINE__);
        }
        $this->settlMdocLevelId = $settlMdocLevelId;
        
        return $this;
    }
}
