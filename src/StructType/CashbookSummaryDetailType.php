<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashbookSummaryDetailType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashbookSummaryDetailType extends AbstractStructBase
{
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The printingDate
     * @var string|null
     */
    protected ?string $printingDate = null;
    /**
     * Constructor method for CashbookSummaryDetailType
     * @uses CashbookSummaryDetailType::setDocumentNo()
     * @uses CashbookSummaryDetailType::setCustomerName()
     * @uses CashbookSummaryDetailType::setTotalPrice()
     * @uses CashbookSummaryDetailType::setCreationDate()
     * @uses CashbookSummaryDetailType::setPrintingDate()
     * @param int $documentNo
     * @param string $customerName
     * @param float $totalPrice
     * @param string $creationDate
     * @param string $printingDate
     */
    public function __construct(?int $documentNo = null, ?string $customerName = null, ?float $totalPrice = null, ?string $creationDate = null, ?string $printingDate = null)
    {
        $this
            ->setDocumentNo($documentNo)
            ->setCustomerName($customerName)
            ->setTotalPrice($totalPrice)
            ->setCreationDate($creationDate)
            ->setPrintingDate($printingDate);
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get printingDate value
     * @return string|null
     */
    public function getPrintingDate(): ?string
    {
        return $this->printingDate;
    }
    /**
     * Set printingDate value
     * @param string $printingDate
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryDetailType
     */
    public function setPrintingDate(?string $printingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDate) && !is_string($printingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDate, true), gettype($printingDate)), __LINE__);
        }
        $this->printingDate = $printingDate;
        
        return $this;
    }
}
