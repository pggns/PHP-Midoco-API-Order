<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocumentForCustomerRequest extends AbstractStructBase
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
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The printToDate
     * @var string|null
     */
    protected ?string $printToDate = null;
    /**
     * The printFromDate
     * @var string|null
     */
    protected ?string $printFromDate = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * Constructor method for MakeBillingDocumentForCustomerRequest
     * @uses MakeBillingDocumentForCustomerRequest::setDocumentInternalVersion()
     * @uses MakeBillingDocumentForCustomerRequest::setDocumentId()
     * @uses MakeBillingDocumentForCustomerRequest::setCustomerId()
     * @uses MakeBillingDocumentForCustomerRequest::setOrgUnit()
     * @uses MakeBillingDocumentForCustomerRequest::setPrintToDate()
     * @uses MakeBillingDocumentForCustomerRequest::setPrintFromDate()
     * @uses MakeBillingDocumentForCustomerRequest::setDebitorNo()
     * @uses MakeBillingDocumentForCustomerRequest::setReceiptDate()
     * @param int $documentInternalVersion
     * @param int $documentId
     * @param int $customerId
     * @param string $orgUnit
     * @param string $printToDate
     * @param string $printFromDate
     * @param string $debitorNo
     * @param string $receiptDate
     */
    public function __construct(?int $documentInternalVersion = null, ?int $documentId = null, ?int $customerId = null, ?string $orgUnit = null, ?string $printToDate = null, ?string $printFromDate = null, ?string $debitorNo = null, ?string $receiptDate = null)
    {
        $this
            ->setDocumentInternalVersion($documentInternalVersion)
            ->setDocumentId($documentId)
            ->setCustomerId($customerId)
            ->setOrgUnit($orgUnit)
            ->setPrintToDate($printToDate)
            ->setPrintFromDate($printFromDate)
            ->setDebitorNo($debitorNo)
            ->setReceiptDate($receiptDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
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
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
}
