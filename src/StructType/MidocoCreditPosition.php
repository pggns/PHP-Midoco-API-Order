<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCreditPosition StructType
 * @subpackage Structs
 */
class MidocoCreditPosition extends AbstractStructBase
{
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The onlinePaymentRestAmount
     * @var float|null
     */
    protected ?float $onlinePaymentRestAmount = null;
    /**
     * Constructor method for MidocoCreditPosition
     * @uses MidocoCreditPosition::setReceiptId()
     * @uses MidocoCreditPosition::setOnlinePaymentRestAmount()
     * @param int $receiptId
     * @param float $onlinePaymentRestAmount
     */
    public function __construct(?int $receiptId = null, ?float $onlinePaymentRestAmount = null)
    {
        $this
            ->setReceiptId($receiptId)
            ->setOnlinePaymentRestAmount($onlinePaymentRestAmount);
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get onlinePaymentRestAmount value
     * @return float|null
     */
    public function getOnlinePaymentRestAmount(): ?float
    {
        return $this->onlinePaymentRestAmount;
    }
    /**
     * Set onlinePaymentRestAmount value
     * @param float $onlinePaymentRestAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition
     */
    public function setOnlinePaymentRestAmount(?float $onlinePaymentRestAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($onlinePaymentRestAmount) && !(is_float($onlinePaymentRestAmount) || is_numeric($onlinePaymentRestAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($onlinePaymentRestAmount, true), gettype($onlinePaymentRestAmount)), __LINE__);
        }
        $this->onlinePaymentRestAmount = $onlinePaymentRestAmount;
        
        return $this;
    }
}
