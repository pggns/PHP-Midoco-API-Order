<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingEinvoice StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingEinvoice extends BillingEinvoiceDTO
{
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The routingIdRequired
     * Meta information extracted from the WSDL
     * - documentation: Temporary copy of CrmCustomerEinvoiceDTO/isRoutingIdRequired
     * - default: true
     * @var bool|null
     */
    protected ?bool $routingIdRequired = null;
    /**
     * The supplierNoRequired
     * Meta information extracted from the WSDL
     * - documentation: Temporary copy of CrmCustomerEinvoiceDTO/isSupplierNoRequired
     * - default: true
     * @var bool|null
     */
    protected ?bool $supplierNoRequired = null;
    /**
     * The orderRefRequired
     * Meta information extracted from the WSDL
     * - documentation: Temporary copy of CrmCustomerEinvoiceDTO/isOrderRefRequired
     * - default: false
     * @var bool|null
     */
    protected ?bool $orderRefRequired = null;
    /**
     * Constructor method for MidocoBillingEinvoice
     * @uses MidocoBillingEinvoice::setType()
     * @uses MidocoBillingEinvoice::setCustomerId()
     * @uses MidocoBillingEinvoice::setRoutingIdRequired()
     * @uses MidocoBillingEinvoice::setSupplierNoRequired()
     * @uses MidocoBillingEinvoice::setOrderRefRequired()
     * @param string $type
     * @param int $customerId
     * @param bool $routingIdRequired
     * @param bool $supplierNoRequired
     * @param bool $orderRefRequired
     */
    public function __construct(?string $type = null, ?int $customerId = null, ?bool $routingIdRequired = true, ?bool $supplierNoRequired = true, ?bool $orderRefRequired = false)
    {
        $this
            ->setType($type)
            ->setCustomerId($customerId)
            ->setRoutingIdRequired($routingIdRequired)
            ->setSupplierNoRequired($supplierNoRequired)
            ->setOrderRefRequired($orderRefRequired);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice
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
     * Get routingIdRequired value
     * @return bool|null
     */
    public function getRoutingIdRequired(): ?bool
    {
        return $this->routingIdRequired;
    }
    /**
     * Set routingIdRequired value
     * @param bool $routingIdRequired
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice
     */
    public function setRoutingIdRequired(?bool $routingIdRequired = true): self
    {
        // validation for constraint: boolean
        if (!is_null($routingIdRequired) && !is_bool($routingIdRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($routingIdRequired, true), gettype($routingIdRequired)), __LINE__);
        }
        $this->routingIdRequired = $routingIdRequired;
        
        return $this;
    }
    /**
     * Get supplierNoRequired value
     * @return bool|null
     */
    public function getSupplierNoRequired(): ?bool
    {
        return $this->supplierNoRequired;
    }
    /**
     * Set supplierNoRequired value
     * @param bool $supplierNoRequired
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice
     */
    public function setSupplierNoRequired(?bool $supplierNoRequired = true): self
    {
        // validation for constraint: boolean
        if (!is_null($supplierNoRequired) && !is_bool($supplierNoRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supplierNoRequired, true), gettype($supplierNoRequired)), __LINE__);
        }
        $this->supplierNoRequired = $supplierNoRequired;
        
        return $this;
    }
    /**
     * Get orderRefRequired value
     * @return bool|null
     */
    public function getOrderRefRequired(): ?bool
    {
        return $this->orderRefRequired;
    }
    /**
     * Set orderRefRequired value
     * @param bool $orderRefRequired
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingEinvoice
     */
    public function setOrderRefRequired(?bool $orderRefRequired = false): self
    {
        // validation for constraint: boolean
        if (!is_null($orderRefRequired) && !is_bool($orderRefRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($orderRefRequired, true), gettype($orderRefRequired)), __LINE__);
        }
        $this->orderRefRequired = $orderRefRequired;
        
        return $this;
    }
}
