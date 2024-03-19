<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookPrintPageDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashBookPrintPageDTO extends AbstractStructBase
{
    /**
     * The endPage
     * @var int|null
     */
    protected ?int $endPage = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The startPage
     * @var int|null
     */
    protected ?int $startPage = null;
    /**
     * Constructor method for CashBookPrintPageDTO
     * @uses CashBookPrintPageDTO::setEndPage()
     * @uses CashBookPrintPageDTO::setPaymentType()
     * @uses CashBookPrintPageDTO::setPrintId()
     * @uses CashBookPrintPageDTO::setStartPage()
     * @param int $endPage
     * @param string $paymentType
     * @param int $printId
     * @param int $startPage
     */
    public function __construct(?int $endPage = null, ?string $paymentType = null, ?int $printId = null, ?int $startPage = null)
    {
        $this
            ->setEndPage($endPage)
            ->setPaymentType($paymentType)
            ->setPrintId($printId)
            ->setStartPage($startPage);
    }
    /**
     * Get endPage value
     * @return int|null
     */
    public function getEndPage(): ?int
    {
        return $this->endPage;
    }
    /**
     * Set endPage value
     * @param int $endPage
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintPageDTO
     */
    public function setEndPage(?int $endPage = null): self
    {
        // validation for constraint: int
        if (!is_null($endPage) && !(is_int($endPage) || ctype_digit($endPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endPage, true), gettype($endPage)), __LINE__);
        }
        $this->endPage = $endPage;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintPageDTO
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
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintPageDTO
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
        return $this;
    }
    /**
     * Get startPage value
     * @return int|null
     */
    public function getStartPage(): ?int
    {
        return $this->startPage;
    }
    /**
     * Set startPage value
     * @param int $startPage
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPrintPageDTO
     */
    public function setStartPage(?int $startPage = null): self
    {
        // validation for constraint: int
        if (!is_null($startPage) && !(is_int($startPage) || ctype_digit($startPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startPage, true), gettype($startPage)), __LINE__);
        }
        $this->startPage = $startPage;
        
        return $this;
    }
}
