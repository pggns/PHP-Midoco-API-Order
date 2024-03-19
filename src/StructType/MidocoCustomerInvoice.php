<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerInvoice StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerInvoice extends CrmCustomerBillingDTO
{
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The documentRefNo
     * @var int|null
     */
    protected ?int $documentRefNo = null;
    /**
     * The noOfPositions
     * @var int|null
     */
    protected ?int $noOfPositions = null;
    /**
     * The invoicedAmount
     * @var float|null
     */
    protected ?float $invoicedAmount = null;
    /**
     * The calculatedPrintDate
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The deliveryReceipt
     * @var bool|null
     */
    protected ?bool $deliveryReceipt = null;
    /**
     * Constructor method for MidocoCustomerInvoice
     * @uses MidocoCustomerInvoice::setItemType()
     * @uses MidocoCustomerInvoice::setDocumentRefNo()
     * @uses MidocoCustomerInvoice::setNoOfPositions()
     * @uses MidocoCustomerInvoice::setInvoicedAmount()
     * @uses MidocoCustomerInvoice::setCalculatedPrintDate()
     * @uses MidocoCustomerInvoice::setDeliveryReceipt()
     * @param string $itemType
     * @param int $documentRefNo
     * @param int $noOfPositions
     * @param float $invoicedAmount
     * @param string $calculatedPrintDate
     * @param bool $deliveryReceipt
     */
    public function __construct(?string $itemType = null, ?int $documentRefNo = null, ?int $noOfPositions = null, ?float $invoicedAmount = null, ?string $calculatedPrintDate = null, ?bool $deliveryReceipt = null)
    {
        $this
            ->setItemType($itemType)
            ->setDocumentRefNo($documentRefNo)
            ->setNoOfPositions($noOfPositions)
            ->setInvoicedAmount($invoicedAmount)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setDeliveryReceipt($deliveryReceipt);
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInvoice
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get documentRefNo value
     * @return int|null
     */
    public function getDocumentRefNo(): ?int
    {
        return $this->documentRefNo;
    }
    /**
     * Set documentRefNo value
     * @param int $documentRefNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInvoice
     */
    public function setDocumentRefNo(?int $documentRefNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentRefNo) && !(is_int($documentRefNo) || ctype_digit($documentRefNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentRefNo, true), gettype($documentRefNo)), __LINE__);
        }
        $this->documentRefNo = $documentRefNo;
        
        return $this;
    }
    /**
     * Get noOfPositions value
     * @return int|null
     */
    public function getNoOfPositions(): ?int
    {
        return $this->noOfPositions;
    }
    /**
     * Set noOfPositions value
     * @param int $noOfPositions
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInvoice
     */
    public function setNoOfPositions(?int $noOfPositions = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPositions) && !(is_int($noOfPositions) || ctype_digit($noOfPositions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPositions, true), gettype($noOfPositions)), __LINE__);
        }
        $this->noOfPositions = $noOfPositions;
        
        return $this;
    }
    /**
     * Get invoicedAmount value
     * @return float|null
     */
    public function getInvoicedAmount(): ?float
    {
        return $this->invoicedAmount;
    }
    /**
     * Set invoicedAmount value
     * @param float $invoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInvoice
     */
    public function setInvoicedAmount(?float $invoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoicedAmount) && !(is_float($invoicedAmount) || is_numeric($invoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoicedAmount, true), gettype($invoicedAmount)), __LINE__);
        }
        $this->invoicedAmount = $invoicedAmount;
        
        return $this;
    }
    /**
     * Get calculatedPrintDate value
     * @return string|null
     */
    public function getCalculatedPrintDate(): ?string
    {
        return $this->calculatedPrintDate;
    }
    /**
     * Set calculatedPrintDate value
     * @param string $calculatedPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInvoice
     */
    public function setCalculatedPrintDate(?string $calculatedPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedPrintDate) && !is_string($calculatedPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedPrintDate, true), gettype($calculatedPrintDate)), __LINE__);
        }
        $this->calculatedPrintDate = $calculatedPrintDate;
        
        return $this;
    }
    /**
     * Get deliveryReceipt value
     * @return bool|null
     */
    public function getDeliveryReceipt(): ?bool
    {
        return $this->deliveryReceipt;
    }
    /**
     * Set deliveryReceipt value
     * @param bool $deliveryReceipt
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerInvoice
     */
    public function setDeliveryReceipt(?bool $deliveryReceipt = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deliveryReceipt) && !is_bool($deliveryReceipt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deliveryReceipt, true), gettype($deliveryReceipt)), __LINE__);
        }
        $this->deliveryReceipt = $deliveryReceipt;
        
        return $this;
    }
}
