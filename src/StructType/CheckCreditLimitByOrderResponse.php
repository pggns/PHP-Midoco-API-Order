<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckCreditLimitByOrderResponse StructType
 * @subpackage Structs
 */
class CheckCreditLimitByOrderResponse extends AbstractStructBase
{
    /**
     * The definedLimit
     * @var float|null
     */
    protected ?float $definedLimit = null;
    /**
     * The unpaidAmount
     * @var float|null
     */
    protected ?float $unpaidAmount = null;
    /**
     * The isLimitReached
     * @var bool|null
     */
    protected ?bool $isLimitReached = null;
    /**
     * Constructor method for CheckCreditLimitByOrderResponse
     * @uses CheckCreditLimitByOrderResponse::setDefinedLimit()
     * @uses CheckCreditLimitByOrderResponse::setUnpaidAmount()
     * @uses CheckCreditLimitByOrderResponse::setIsLimitReached()
     * @param float $definedLimit
     * @param float $unpaidAmount
     * @param bool $isLimitReached
     */
    public function __construct(?float $definedLimit = null, ?float $unpaidAmount = null, ?bool $isLimitReached = null)
    {
        $this
            ->setDefinedLimit($definedLimit)
            ->setUnpaidAmount($unpaidAmount)
            ->setIsLimitReached($isLimitReached);
    }
    /**
     * Get definedLimit value
     * @return float|null
     */
    public function getDefinedLimit(): ?float
    {
        return $this->definedLimit;
    }
    /**
     * Set definedLimit value
     * @param float $definedLimit
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitByOrderResponse
     */
    public function setDefinedLimit(?float $definedLimit = null): self
    {
        // validation for constraint: float
        if (!is_null($definedLimit) && !(is_float($definedLimit) || is_numeric($definedLimit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($definedLimit, true), gettype($definedLimit)), __LINE__);
        }
        $this->definedLimit = $definedLimit;
        
        return $this;
    }
    /**
     * Get unpaidAmount value
     * @return float|null
     */
    public function getUnpaidAmount(): ?float
    {
        return $this->unpaidAmount;
    }
    /**
     * Set unpaidAmount value
     * @param float $unpaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitByOrderResponse
     */
    public function setUnpaidAmount(?float $unpaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($unpaidAmount) && !(is_float($unpaidAmount) || is_numeric($unpaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unpaidAmount, true), gettype($unpaidAmount)), __LINE__);
        }
        $this->unpaidAmount = $unpaidAmount;
        
        return $this;
    }
    /**
     * Get isLimitReached value
     * @return bool|null
     */
    public function getIsLimitReached(): ?bool
    {
        return $this->isLimitReached;
    }
    /**
     * Set isLimitReached value
     * @param bool $isLimitReached
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitByOrderResponse
     */
    public function setIsLimitReached(?bool $isLimitReached = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLimitReached) && !is_bool($isLimitReached)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLimitReached, true), gettype($isLimitReached)), __LINE__);
        }
        $this->isLimitReached = $isLimitReached;
        
        return $this;
    }
}
