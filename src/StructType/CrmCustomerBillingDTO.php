<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCustomerBillingDTO StructType
 * @subpackage Structs
 */
class CrmCustomerBillingDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentUnitName
     * @var string|null
     */
    protected ?string $documentUnitName = null;
    /**
     * The isCollective
     * @var bool|null
     */
    protected ?bool $isCollective = null;
    /**
     * Constructor method for CrmCustomerBillingDTO
     * @uses CrmCustomerBillingDTO::setCustomerId()
     * @uses CrmCustomerBillingDTO::setDocumentId()
     * @uses CrmCustomerBillingDTO::setDocumentUnitName()
     * @uses CrmCustomerBillingDTO::setIsCollective()
     * @param int $customerId
     * @param int $documentId
     * @param string $documentUnitName
     * @param bool $isCollective
     */
    public function __construct(?int $customerId = null, ?int $documentId = null, ?string $documentUnitName = null, ?bool $isCollective = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDocumentId($documentId)
            ->setDocumentUnitName($documentUnitName)
            ->setIsCollective($isCollective);
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerBillingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerBillingDTO
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
    /**
     * Get documentUnitName value
     * @return string|null
     */
    public function getDocumentUnitName(): ?string
    {
        return $this->documentUnitName;
    }
    /**
     * Set documentUnitName value
     * @param string $documentUnitName
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerBillingDTO
     */
    public function setDocumentUnitName(?string $documentUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentUnitName) && !is_string($documentUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentUnitName, true), gettype($documentUnitName)), __LINE__);
        }
        $this->documentUnitName = $documentUnitName;
        
        return $this;
    }
    /**
     * Get isCollective value
     * @return bool|null
     */
    public function getIsCollective(): ?bool
    {
        return $this->isCollective;
    }
    /**
     * Set isCollective value
     * @param bool $isCollective
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerBillingDTO
     */
    public function setIsCollective(?bool $isCollective = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCollective) && !is_bool($isCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCollective, true), gettype($isCollective)), __LINE__);
        }
        $this->isCollective = $isCollective;
        
        return $this;
    }
}
