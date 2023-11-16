<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckCreditLimitResponse StructType
 * @subpackage Structs
 */
class CheckCreditLimitResponse extends AbstractStructBase
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
     * The creditLimitWarningPercent
     * @var float|null
     */
    protected ?float $creditLimitWarningPercent = null;
    /**
     * The limitPercent
     * @var float|null
     */
    protected ?float $limitPercent = null;
    /**
     * Constructor method for CheckCreditLimitResponse
     * @uses CheckCreditLimitResponse::setDefinedLimit()
     * @uses CheckCreditLimitResponse::setUnpaidAmount()
     * @uses CheckCreditLimitResponse::setIsLimitReached()
     * @uses CheckCreditLimitResponse::setCreditLimitWarningPercent()
     * @uses CheckCreditLimitResponse::setLimitPercent()
     * @param float $definedLimit
     * @param float $unpaidAmount
     * @param bool $isLimitReached
     * @param float $creditLimitWarningPercent
     * @param float $limitPercent
     */
    public function __construct(?float $definedLimit = null, ?float $unpaidAmount = null, ?bool $isLimitReached = null, ?float $creditLimitWarningPercent = null, ?float $limitPercent = null)
    {
        $this
            ->setDefinedLimit($definedLimit)
            ->setUnpaidAmount($unpaidAmount)
            ->setIsLimitReached($isLimitReached)
            ->setCreditLimitWarningPercent($creditLimitWarningPercent)
            ->setLimitPercent($limitPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitResponse
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
    /**
     * Get creditLimitWarningPercent value
     * @return float|null
     */
    public function getCreditLimitWarningPercent(): ?float
    {
        return $this->creditLimitWarningPercent;
    }
    /**
     * Set creditLimitWarningPercent value
     * @param float $creditLimitWarningPercent
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitResponse
     */
    public function setCreditLimitWarningPercent(?float $creditLimitWarningPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($creditLimitWarningPercent) && !(is_float($creditLimitWarningPercent) || is_numeric($creditLimitWarningPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($creditLimitWarningPercent, true), gettype($creditLimitWarningPercent)), __LINE__);
        }
        $this->creditLimitWarningPercent = $creditLimitWarningPercent;
        
        return $this;
    }
    /**
     * Get limitPercent value
     * @return float|null
     */
    public function getLimitPercent(): ?float
    {
        return $this->limitPercent;
    }
    /**
     * Set limitPercent value
     * @param float $limitPercent
     * @return \Pggns\MidocoApi\Order\StructType\CheckCreditLimitResponse
     */
    public function setLimitPercent(?float $limitPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($limitPercent) && !(is_float($limitPercent) || is_numeric($limitPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitPercent, true), gettype($limitPercent)), __LINE__);
        }
        $this->limitPercent = $limitPercent;
        
        return $this;
    }
}
