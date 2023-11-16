<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentForOrderRequest StructType
 * @subpackage Structs
 */
class GetBillingDocumentForOrderRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The onlyAutomaticCreated
     * @var bool|null
     */
    protected ?bool $onlyAutomaticCreated = null;
    /**
     * The includeCollectiveInvoiceDocs
     * @var bool|null
     */
    protected ?bool $includeCollectiveInvoiceDocs = null;
    /**
     * Constructor method for GetBillingDocumentForOrderRequest
     * @uses GetBillingDocumentForOrderRequest::setOrderId()
     * @uses GetBillingDocumentForOrderRequest::setOnlyAutomaticCreated()
     * @uses GetBillingDocumentForOrderRequest::setIncludeCollectiveInvoiceDocs()
     * @param int $orderId
     * @param bool $onlyAutomaticCreated
     * @param bool $includeCollectiveInvoiceDocs
     */
    public function __construct(?int $orderId = null, ?bool $onlyAutomaticCreated = null, ?bool $includeCollectiveInvoiceDocs = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOnlyAutomaticCreated($onlyAutomaticCreated)
            ->setIncludeCollectiveInvoiceDocs($includeCollectiveInvoiceDocs);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForOrderRequest
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
     * Get onlyAutomaticCreated value
     * @return bool|null
     */
    public function getOnlyAutomaticCreated(): ?bool
    {
        return $this->onlyAutomaticCreated;
    }
    /**
     * Set onlyAutomaticCreated value
     * @param bool $onlyAutomaticCreated
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForOrderRequest
     */
    public function setOnlyAutomaticCreated(?bool $onlyAutomaticCreated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyAutomaticCreated) && !is_bool($onlyAutomaticCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyAutomaticCreated, true), gettype($onlyAutomaticCreated)), __LINE__);
        }
        $this->onlyAutomaticCreated = $onlyAutomaticCreated;
        
        return $this;
    }
    /**
     * Get includeCollectiveInvoiceDocs value
     * @return bool|null
     */
    public function getIncludeCollectiveInvoiceDocs(): ?bool
    {
        return $this->includeCollectiveInvoiceDocs;
    }
    /**
     * Set includeCollectiveInvoiceDocs value
     * @param bool $includeCollectiveInvoiceDocs
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForOrderRequest
     */
    public function setIncludeCollectiveInvoiceDocs(?bool $includeCollectiveInvoiceDocs = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeCollectiveInvoiceDocs) && !is_bool($includeCollectiveInvoiceDocs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCollectiveInvoiceDocs, true), gettype($includeCollectiveInvoiceDocs)), __LINE__);
        }
        $this->includeCollectiveInvoiceDocs = $includeCollectiveInvoiceDocs;
        
        return $this;
    }
}
