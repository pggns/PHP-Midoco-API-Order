<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentProviderSettlBookingType StructType
 * @subpackage Structs
 */
class MidocoPaymentProviderSettlBookingType extends PaymentProviderSettlBookDTO
{
    /**
     * The difference
     * @var float|null
     */
    protected ?float $difference = null;
    /**
     * The orderUnitName
     * @var string|null
     */
    protected ?string $orderUnitName = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * Constructor method for MidocoPaymentProviderSettlBookingType
     * @uses MidocoPaymentProviderSettlBookingType::setDifference()
     * @uses MidocoPaymentProviderSettlBookingType::setOrderUnitName()
     * @uses MidocoPaymentProviderSettlBookingType::setInvoiceDate()
     * @uses MidocoPaymentProviderSettlBookingType::setInvoiceNo()
     * @param float $difference
     * @param string $orderUnitName
     * @param string $invoiceDate
     * @param string $invoiceNo
     */
    public function __construct(?float $difference = null, ?string $orderUnitName = null, ?string $invoiceDate = null, ?string $invoiceNo = null)
    {
        $this
            ->setDifference($difference)
            ->setOrderUnitName($orderUnitName)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceNo($invoiceNo);
    }
    /**
     * Get difference value
     * @return float|null
     */
    public function getDifference(): ?float
    {
        return $this->difference;
    }
    /**
     * Set difference value
     * @param float $difference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType
     */
    public function setDifference(?float $difference = null): self
    {
        // validation for constraint: float
        if (!is_null($difference) && !(is_float($difference) || is_numeric($difference))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($difference, true), gettype($difference)), __LINE__);
        }
        $this->difference = $difference;
        
        return $this;
    }
    /**
     * Get orderUnitName value
     * @return string|null
     */
    public function getOrderUnitName(): ?string
    {
        return $this->orderUnitName;
    }
    /**
     * Set orderUnitName value
     * @param string $orderUnitName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType
     */
    public function setOrderUnitName(?string $orderUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orderUnitName) && !is_string($orderUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderUnitName, true), gettype($orderUnitName)), __LINE__);
        }
        $this->orderUnitName = $orderUnitName;
        
        return $this;
    }
    /**
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlBookingType
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
}
