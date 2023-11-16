<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookNextPageDTO StructType
 * @subpackage Structs
 */
class CashBookNextPageDTO extends AbstractStructBase
{
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The nextPrintingPage
     * @var int|null
     */
    protected ?int $nextPrintingPage = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * Constructor method for CashBookNextPageDTO
     * @uses CashBookNextPageDTO::setCashBookId()
     * @uses CashBookNextPageDTO::setNextPrintingPage()
     * @uses CashBookNextPageDTO::setPaymentType()
     * @param int $cashBookId
     * @param int $nextPrintingPage
     * @param string $paymentType
     */
    public function __construct(?int $cashBookId = null, ?int $nextPrintingPage = null, ?string $paymentType = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setNextPrintingPage($nextPrintingPage)
            ->setPaymentType($paymentType);
    }
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookNextPageDTO
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get nextPrintingPage value
     * @return int|null
     */
    public function getNextPrintingPage(): ?int
    {
        return $this->nextPrintingPage;
    }
    /**
     * Set nextPrintingPage value
     * @param int $nextPrintingPage
     * @return \Pggns\MidocoApi\Order\StructType\CashBookNextPageDTO
     */
    public function setNextPrintingPage(?int $nextPrintingPage = null): self
    {
        // validation for constraint: int
        if (!is_null($nextPrintingPage) && !(is_int($nextPrintingPage) || ctype_digit($nextPrintingPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nextPrintingPage, true), gettype($nextPrintingPage)), __LINE__);
        }
        $this->nextPrintingPage = $nextPrintingPage;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookNextPageDTO
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
}
