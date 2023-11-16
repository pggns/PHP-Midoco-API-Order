<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvokeProcessOrderRequest StructType
 * @subpackage Structs
 */
class InvokeProcessOrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The preventWorkflow
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventWorkflow = null;
    /**
     * The forceSameConfirmationGroupForPrintedItems
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $forceSameConfirmationGroupForPrintedItems = null;
    /**
     * The sourceOfRequest
     * @var string|null
     */
    protected ?string $sourceOfRequest = null;
    /**
     * Constructor method for InvokeProcessOrderRequest
     * @uses InvokeProcessOrderRequest::setOrderId()
     * @uses InvokeProcessOrderRequest::setPreventWorkflow()
     * @uses InvokeProcessOrderRequest::setForceSameConfirmationGroupForPrintedItems()
     * @uses InvokeProcessOrderRequest::setSourceOfRequest()
     * @param int $orderId
     * @param bool $preventWorkflow
     * @param bool $forceSameConfirmationGroupForPrintedItems
     * @param string $sourceOfRequest
     */
    public function __construct(?int $orderId = null, ?bool $preventWorkflow = false, ?bool $forceSameConfirmationGroupForPrintedItems = false, ?string $sourceOfRequest = null)
    {
        $this
            ->setOrderId($orderId)
            ->setPreventWorkflow($preventWorkflow)
            ->setForceSameConfirmationGroupForPrintedItems($forceSameConfirmationGroupForPrintedItems)
            ->setSourceOfRequest($sourceOfRequest);
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
     * @return \Pggns\MidocoApi\Order\StructType\InvokeProcessOrderRequest
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
     * Get preventWorkflow value
     * @return bool|null
     */
    public function getPreventWorkflow(): ?bool
    {
        return $this->preventWorkflow;
    }
    /**
     * Set preventWorkflow value
     * @param bool $preventWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\InvokeProcessOrderRequest
     */
    public function setPreventWorkflow(?bool $preventWorkflow = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventWorkflow) && !is_bool($preventWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventWorkflow, true), gettype($preventWorkflow)), __LINE__);
        }
        $this->preventWorkflow = $preventWorkflow;
        
        return $this;
    }
    /**
     * Get forceSameConfirmationGroupForPrintedItems value
     * @return bool|null
     */
    public function getForceSameConfirmationGroupForPrintedItems(): ?bool
    {
        return $this->forceSameConfirmationGroupForPrintedItems;
    }
    /**
     * Set forceSameConfirmationGroupForPrintedItems value
     * @param bool $forceSameConfirmationGroupForPrintedItems
     * @return \Pggns\MidocoApi\Order\StructType\InvokeProcessOrderRequest
     */
    public function setForceSameConfirmationGroupForPrintedItems(?bool $forceSameConfirmationGroupForPrintedItems = false): self
    {
        // validation for constraint: boolean
        if (!is_null($forceSameConfirmationGroupForPrintedItems) && !is_bool($forceSameConfirmationGroupForPrintedItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceSameConfirmationGroupForPrintedItems, true), gettype($forceSameConfirmationGroupForPrintedItems)), __LINE__);
        }
        $this->forceSameConfirmationGroupForPrintedItems = $forceSameConfirmationGroupForPrintedItems;
        
        return $this;
    }
    /**
     * Get sourceOfRequest value
     * @return string|null
     */
    public function getSourceOfRequest(): ?string
    {
        return $this->sourceOfRequest;
    }
    /**
     * Set sourceOfRequest value
     * @param string $sourceOfRequest
     * @return \Pggns\MidocoApi\Order\StructType\InvokeProcessOrderRequest
     */
    public function setSourceOfRequest(?string $sourceOfRequest = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceOfRequest) && !is_string($sourceOfRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceOfRequest, true), gettype($sourceOfRequest)), __LINE__);
        }
        $this->sourceOfRequest = $sourceOfRequest;
        
        return $this;
    }
}
