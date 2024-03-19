<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPayByLinkTransaction StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPayByLinkTransaction extends OnlinePaymentTransactionDTO
{
    /**
     * The requestedAmount
     * @var float|null
     */
    protected ?float $requestedAmount = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The lastStatusDate
     * @var string|null
     */
    protected ?string $lastStatusDate = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * Constructor method for MidocoPayByLinkTransaction
     * @uses MidocoPayByLinkTransaction::setRequestedAmount()
     * @uses MidocoPayByLinkTransaction::setPaidAmount()
     * @uses MidocoPayByLinkTransaction::setLastStatusDate()
     * @uses MidocoPayByLinkTransaction::setLink()
     * @param float $requestedAmount
     * @param float $paidAmount
     * @param string $lastStatusDate
     * @param string $link
     */
    public function __construct(?float $requestedAmount = null, ?float $paidAmount = null, ?string $lastStatusDate = null, ?string $link = null)
    {
        $this
            ->setRequestedAmount($requestedAmount)
            ->setPaidAmount($paidAmount)
            ->setLastStatusDate($lastStatusDate)
            ->setLink($link);
    }
    /**
     * Get requestedAmount value
     * @return float|null
     */
    public function getRequestedAmount(): ?float
    {
        return $this->requestedAmount;
    }
    /**
     * Set requestedAmount value
     * @param float $requestedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction
     */
    public function setRequestedAmount(?float $requestedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($requestedAmount) && !(is_float($requestedAmount) || is_numeric($requestedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($requestedAmount, true), gettype($requestedAmount)), __LINE__);
        }
        $this->requestedAmount = $requestedAmount;
        
        return $this;
    }
    /**
     * Get paidAmount value
     * @return float|null
     */
    public function getPaidAmount(): ?float
    {
        return $this->paidAmount;
    }
    /**
     * Set paidAmount value
     * @param float $paidAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction
     */
    public function setPaidAmount(?float $paidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmount) && !(is_float($paidAmount) || is_numeric($paidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmount, true), gettype($paidAmount)), __LINE__);
        }
        $this->paidAmount = $paidAmount;
        
        return $this;
    }
    /**
     * Get lastStatusDate value
     * @return string|null
     */
    public function getLastStatusDate(): ?string
    {
        return $this->lastStatusDate;
    }
    /**
     * Set lastStatusDate value
     * @param string $lastStatusDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction
     */
    public function setLastStatusDate(?string $lastStatusDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastStatusDate) && !is_string($lastStatusDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastStatusDate, true), gettype($lastStatusDate)), __LINE__);
        }
        $this->lastStatusDate = $lastStatusDate;
        
        return $this;
    }
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
}
