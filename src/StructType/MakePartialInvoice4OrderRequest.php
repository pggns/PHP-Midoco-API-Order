<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakePartialInvoice4OrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakePartialInvoice4OrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $MidocoOrderCustomer = null;
    /**
     * The partialInvoiceAmount
     * @var float|null
     */
    protected ?float $partialInvoiceAmount = null;
    /**
     * The onlyVoid
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyVoid = null;
    /**
     * Constructor method for MakePartialInvoice4OrderRequest
     * @uses MakePartialInvoice4OrderRequest::setOrderId()
     * @uses MakePartialInvoice4OrderRequest::setMidocoOrderCustomer()
     * @uses MakePartialInvoice4OrderRequest::setPartialInvoiceAmount()
     * @uses MakePartialInvoice4OrderRequest::setOnlyVoid()
     * @param int $orderId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @param float $partialInvoiceAmount
     * @param bool $onlyVoid
     */
    public function __construct(int $orderId, ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null, ?float $partialInvoiceAmount = null, ?bool $onlyVoid = false)
    {
        $this
            ->setOrderId($orderId)
            ->setMidocoOrderCustomer($midocoOrderCustomer)
            ->setPartialInvoiceAmount($partialInvoiceAmount)
            ->setOnlyVoid($onlyVoid);
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    public function getMidocoOrderCustomer(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * Set MidocoOrderCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest
     */
    public function setMidocoOrderCustomer(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null): self
    {
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Get partialInvoiceAmount value
     * @return float|null
     */
    public function getPartialInvoiceAmount(): ?float
    {
        return $this->partialInvoiceAmount;
    }
    /**
     * Set partialInvoiceAmount value
     * @param float $partialInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest
     */
    public function setPartialInvoiceAmount(?float $partialInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($partialInvoiceAmount) && !(is_float($partialInvoiceAmount) || is_numeric($partialInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($partialInvoiceAmount, true), gettype($partialInvoiceAmount)), __LINE__);
        }
        $this->partialInvoiceAmount = $partialInvoiceAmount;
        
        return $this;
    }
    /**
     * Get onlyVoid value
     * @return bool|null
     */
    public function getOnlyVoid(): ?bool
    {
        return $this->onlyVoid;
    }
    /**
     * Set onlyVoid value
     * @param bool $onlyVoid
     * @return \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest
     */
    public function setOnlyVoid(?bool $onlyVoid = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyVoid) && !is_bool($onlyVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyVoid, true), gettype($onlyVoid)), __LINE__);
        }
        $this->onlyVoid = $onlyVoid;
        
        return $this;
    }
}
