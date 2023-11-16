<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareBillingDocumentForCustomerRequest StructType
 * @subpackage Structs
 */
class PrepareBillingDocumentForCustomerRequest extends AbstractStructBase
{
    /**
     * The documentInternalVersion
     * @var int|null
     */
    protected ?int $documentInternalVersion = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
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
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The printFromDate
     * @var string|null
     */
    protected ?string $printFromDate = null;
    /**
     * The printToDate
     * @var string|null
     */
    protected ?string $printToDate = null;
    /**
     * Constructor method for PrepareBillingDocumentForCustomerRequest
     * @uses PrepareBillingDocumentForCustomerRequest::setDocumentInternalVersion()
     * @uses PrepareBillingDocumentForCustomerRequest::setDocumentId()
     * @uses PrepareBillingDocumentForCustomerRequest::setCustomerId()
     * @uses PrepareBillingDocumentForCustomerRequest::setDebitorNo()
     * @uses PrepareBillingDocumentForCustomerRequest::setOrgUnit()
     * @uses PrepareBillingDocumentForCustomerRequest::setPrintFromDate()
     * @uses PrepareBillingDocumentForCustomerRequest::setPrintToDate()
     * @param int $documentInternalVersion
     * @param int $documentId
     * @param int $customerId
     * @param string $debitorNo
     * @param string $orgUnit
     * @param string $printFromDate
     * @param string $printToDate
     */
    public function __construct(?int $documentInternalVersion = null, ?int $documentId = null, ?int $customerId = null, ?string $debitorNo = null, ?string $orgUnit = null, ?string $printFromDate = null, ?string $printToDate = null)
    {
        $this
            ->setDocumentInternalVersion($documentInternalVersion)
            ->setDocumentId($documentId)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setOrgUnit($orgUnit)
            ->setPrintFromDate($printFromDate)
            ->setPrintToDate($printToDate);
    }
    /**
     * Get documentInternalVersion value
     * @return int|null
     */
    public function getDocumentInternalVersion(): ?int
    {
        return $this->documentInternalVersion;
    }
    /**
     * Set documentInternalVersion value
     * @param int $documentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
     */
    public function setDocumentInternalVersion(?int $documentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($documentInternalVersion) && !(is_int($documentInternalVersion) || ctype_digit($documentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentInternalVersion, true), gettype($documentInternalVersion)), __LINE__);
        }
        $this->documentInternalVersion = $documentInternalVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
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
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get printFromDate value
     * @return string|null
     */
    public function getPrintFromDate(): ?string
    {
        return $this->printFromDate;
    }
    /**
     * Set printFromDate value
     * @param string $printFromDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
     */
    public function setPrintFromDate(?string $printFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printFromDate) && !is_string($printFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printFromDate, true), gettype($printFromDate)), __LINE__);
        }
        $this->printFromDate = $printFromDate;
        
        return $this;
    }
    /**
     * Get printToDate value
     * @return string|null
     */
    public function getPrintToDate(): ?string
    {
        return $this->printToDate;
    }
    /**
     * Set printToDate value
     * @param string $printToDate
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerRequest
     */
    public function setPrintToDate(?string $printToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printToDate) && !is_string($printToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printToDate, true), gettype($printToDate)), __LINE__);
        }
        $this->printToDate = $printToDate;
        
        return $this;
    }
}
