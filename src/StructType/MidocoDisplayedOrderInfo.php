<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDisplayedOrderInfo StructType
 * @subpackage Structs
 */
class MidocoDisplayedOrderInfo extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The invoiceCustomerName
     * @var string|null
     */
    protected ?string $invoiceCustomerName = null;
    /**
     * Constructor method for MidocoDisplayedOrderInfo
     * @uses MidocoDisplayedOrderInfo::setOrderId()
     * @uses MidocoDisplayedOrderInfo::setOrderNo()
     * @uses MidocoDisplayedOrderInfo::setPrice()
     * @uses MidocoDisplayedOrderInfo::setTravelDate()
     * @uses MidocoDisplayedOrderInfo::setSupplierId()
     * @uses MidocoDisplayedOrderInfo::setCustomerId()
     * @uses MidocoDisplayedOrderInfo::setInvoiceCustomerName()
     * @param int $orderId
     * @param int $orderNo
     * @param float $price
     * @param string $travelDate
     * @param string $supplierId
     * @param int $customerId
     * @param string $invoiceCustomerName
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?float $price = null, ?string $travelDate = null, ?string $supplierId = null, ?int $customerId = null, ?string $invoiceCustomerName = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setPrice($price)
            ->setTravelDate($travelDate)
            ->setSupplierId($supplierId)
            ->setCustomerId($customerId)
            ->setInvoiceCustomerName($invoiceCustomerName);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get invoiceCustomerName value
     * @return string|null
     */
    public function getInvoiceCustomerName(): ?string
    {
        return $this->invoiceCustomerName;
    }
    /**
     * Set invoiceCustomerName value
     * @param string $invoiceCustomerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDisplayedOrderInfo
     */
    public function setInvoiceCustomerName(?string $invoiceCustomerName = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceCustomerName) && !is_string($invoiceCustomerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceCustomerName, true), gettype($invoiceCustomerName)), __LINE__);
        }
        $this->invoiceCustomerName = $invoiceCustomerName;
        
        return $this;
    }
}
