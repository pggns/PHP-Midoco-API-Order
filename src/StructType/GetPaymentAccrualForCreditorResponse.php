<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentAccrualForCreditorResponse StructType
 * @subpackage Structs
 */
class GetPaymentAccrualForCreditorResponse extends AbstractStructBase
{
    /**
     * The MidocoCreditorPaymentAccrual
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCreditorPaymentAccrual
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual[]
     */
    protected array $MidocoCreditorPaymentAccrual = [];
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * The totalInvoicedAmount
     * @var float|null
     */
    protected ?float $totalInvoicedAmount = null;
    /**
     * The totalPaidAmount
     * @var float|null
     */
    protected ?float $totalPaidAmount = null;
    /**
     * The totalDueAmount
     * @var float|null
     */
    protected ?float $totalDueAmount = null;
    /**
     * Constructor method for GetPaymentAccrualForCreditorResponse
     * @uses GetPaymentAccrualForCreditorResponse::setMidocoCreditorPaymentAccrual()
     * @uses GetPaymentAccrualForCreditorResponse::setTotalNoOfRecords()
     * @uses GetPaymentAccrualForCreditorResponse::setTotalInvoicedAmount()
     * @uses GetPaymentAccrualForCreditorResponse::setTotalPaidAmount()
     * @uses GetPaymentAccrualForCreditorResponse::setTotalDueAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual[] $midocoCreditorPaymentAccrual
     * @param int $totalNoOfRecords
     * @param float $totalInvoicedAmount
     * @param float $totalPaidAmount
     * @param float $totalDueAmount
     */
    public function __construct(array $midocoCreditorPaymentAccrual = [], ?int $totalNoOfRecords = null, ?float $totalInvoicedAmount = null, ?float $totalPaidAmount = null, ?float $totalDueAmount = null)
    {
        $this
            ->setMidocoCreditorPaymentAccrual($midocoCreditorPaymentAccrual)
            ->setTotalNoOfRecords($totalNoOfRecords)
            ->setTotalInvoicedAmount($totalInvoicedAmount)
            ->setTotalPaidAmount($totalPaidAmount)
            ->setTotalDueAmount($totalDueAmount);
    }
    /**
     * Get MidocoCreditorPaymentAccrual value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual[]
     */
    public function getMidocoCreditorPaymentAccrual(): array
    {
        return $this->MidocoCreditorPaymentAccrual;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCreditorPaymentAccrual method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCreditorPaymentAccrual method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCreditorPaymentAccrualForArrayConstraintsFromSetMidocoCreditorPaymentAccrual(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPaymentAccrualForCreditorResponseMidocoCreditorPaymentAccrualItem) {
            // validation for constraint: itemType
            if (!$getPaymentAccrualForCreditorResponseMidocoCreditorPaymentAccrualItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual) {
                $invalidValues[] = is_object($getPaymentAccrualForCreditorResponseMidocoCreditorPaymentAccrualItem) ? get_class($getPaymentAccrualForCreditorResponseMidocoCreditorPaymentAccrualItem) : sprintf('%s(%s)', gettype($getPaymentAccrualForCreditorResponseMidocoCreditorPaymentAccrualItem), var_export($getPaymentAccrualForCreditorResponseMidocoCreditorPaymentAccrualItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCreditorPaymentAccrual property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCreditorPaymentAccrual value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual[] $midocoCreditorPaymentAccrual
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorResponse
     */
    public function setMidocoCreditorPaymentAccrual(array $midocoCreditorPaymentAccrual = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCreditorPaymentAccrualArrayErrorMessage = self::validateMidocoCreditorPaymentAccrualForArrayConstraintsFromSetMidocoCreditorPaymentAccrual($midocoCreditorPaymentAccrual))) {
            throw new InvalidArgumentException($midocoCreditorPaymentAccrualArrayErrorMessage, __LINE__);
        }
        $this->MidocoCreditorPaymentAccrual = $midocoCreditorPaymentAccrual;
        
        return $this;
    }
    /**
     * Add item to MidocoCreditorPaymentAccrual value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorResponse
     */
    public function addToMidocoCreditorPaymentAccrual(\Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual) {
            throw new InvalidArgumentException(sprintf('The MidocoCreditorPaymentAccrual property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCreditorPaymentAccrual, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCreditorPaymentAccrual[] = $item;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
    /**
     * Get totalInvoicedAmount value
     * @return float|null
     */
    public function getTotalInvoicedAmount(): ?float
    {
        return $this->totalInvoicedAmount;
    }
    /**
     * Set totalInvoicedAmount value
     * @param float $totalInvoicedAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorResponse
     */
    public function setTotalInvoicedAmount(?float $totalInvoicedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalInvoicedAmount) && !(is_float($totalInvoicedAmount) || is_numeric($totalInvoicedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalInvoicedAmount, true), gettype($totalInvoicedAmount)), __LINE__);
        }
        $this->totalInvoicedAmount = $totalInvoicedAmount;
        
        return $this;
    }
    /**
     * Get totalPaidAmount value
     * @return float|null
     */
    public function getTotalPaidAmount(): ?float
    {
        return $this->totalPaidAmount;
    }
    /**
     * Set totalPaidAmount value
     * @param float $totalPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorResponse
     */
    public function setTotalPaidAmount(?float $totalPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPaidAmount) && !(is_float($totalPaidAmount) || is_numeric($totalPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPaidAmount, true), gettype($totalPaidAmount)), __LINE__);
        }
        $this->totalPaidAmount = $totalPaidAmount;
        
        return $this;
    }
    /**
     * Get totalDueAmount value
     * @return float|null
     */
    public function getTotalDueAmount(): ?float
    {
        return $this->totalDueAmount;
    }
    /**
     * Set totalDueAmount value
     * @param float $totalDueAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentAccrualForCreditorResponse
     */
    public function setTotalDueAmount(?float $totalDueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDueAmount) && !(is_float($totalDueAmount) || is_numeric($totalDueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDueAmount, true), gettype($totalDueAmount)), __LINE__);
        }
        $this->totalDueAmount = $totalDueAmount;
        
        return $this;
    }
}
