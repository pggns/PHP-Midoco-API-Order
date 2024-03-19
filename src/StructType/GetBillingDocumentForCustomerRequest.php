<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingDocumentForCustomerRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The toDate
     * @var string|null
     */
    protected ?string $toDate = null;
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * Constructor method for GetBillingDocumentForCustomerRequest
     * @uses GetBillingDocumentForCustomerRequest::setCustomerId()
     * @uses GetBillingDocumentForCustomerRequest::setDebitorNo()
     * @uses GetBillingDocumentForCustomerRequest::setToDate()
     * @uses GetBillingDocumentForCustomerRequest::setFromDate()
     * @param int $customerId
     * @param string $debitorNo
     * @param string $toDate
     * @param string $fromDate
     */
    public function __construct(?int $customerId = null, ?string $debitorNo = null, ?string $toDate = null, ?string $fromDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setToDate($toDate)
            ->setFromDate($fromDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerRequest
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
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerRequest
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get toDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerRequest
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        
        return $this;
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForCustomerRequest
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
}
