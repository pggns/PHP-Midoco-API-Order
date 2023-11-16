<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashbookSumType StructType
 * @subpackage Structs
 */
class CashbookSumType extends AbstractStructBase
{
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The sum
     * @var float|null
     */
    protected ?float $sum = null;
    /**
     * Constructor method for CashbookSumType
     * @uses CashbookSumType::setPaymentType()
     * @uses CashbookSumType::setCardType()
     * @uses CashbookSumType::setSum()
     * @param string $paymentType
     * @param string $cardType
     * @param float $sum
     */
    public function __construct(?string $paymentType = null, ?string $cardType = null, ?float $sum = null)
    {
        $this
            ->setPaymentType($paymentType)
            ->setCardType($cardType)
            ->setSum($sum);
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSumType
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSumType
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get sum value
     * @return float|null
     */
    public function getSum(): ?float
    {
        return $this->sum;
    }
    /**
     * Set sum value
     * @param float $sum
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSumType
     */
    public function setSum(?float $sum = null): self
    {
        // validation for constraint: float
        if (!is_null($sum) && !(is_float($sum) || is_numeric($sum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sum, true), gettype($sum)), __LINE__);
        }
        $this->sum = $sum;
        
        return $this;
    }
}
