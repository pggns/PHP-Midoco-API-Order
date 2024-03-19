<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveCustomerDocumentIntoLastOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveCustomerDocumentIntoLastOrderRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerUnitName
     * @var string|null
     */
    protected ?string $customerUnitName = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for MoveCustomerDocumentIntoLastOrderRequest
     * @uses MoveCustomerDocumentIntoLastOrderRequest::setCustomerId()
     * @uses MoveCustomerDocumentIntoLastOrderRequest::setCustomerUnitName()
     * @uses MoveCustomerDocumentIntoLastOrderRequest::setDocumentId()
     * @param int $customerId
     * @param string $customerUnitName
     * @param int $documentId
     */
    public function __construct(?int $customerId = null, ?string $customerUnitName = null, ?int $documentId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCustomerUnitName($customerUnitName)
            ->setDocumentId($documentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MoveCustomerDocumentIntoLastOrderRequest
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
     * Get customerUnitName value
     * @return string|null
     */
    public function getCustomerUnitName(): ?string
    {
        return $this->customerUnitName;
    }
    /**
     * Set customerUnitName value
     * @param string $customerUnitName
     * @return \Pggns\MidocoApi\Order\StructType\MoveCustomerDocumentIntoLastOrderRequest
     */
    public function setCustomerUnitName(?string $customerUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerUnitName) && !is_string($customerUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerUnitName, true), gettype($customerUnitName)), __LINE__);
        }
        $this->customerUnitName = $customerUnitName;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\MoveCustomerDocumentIntoLastOrderRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
}
