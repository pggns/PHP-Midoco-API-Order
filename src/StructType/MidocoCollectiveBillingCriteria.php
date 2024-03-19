<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCollectiveBillingCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCollectiveBillingCriteria extends AbstractStructBase
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
     * The surname
     * @var string|null
     */
    protected ?string $surname = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The createdDate
     * @var string|null
     */
    protected ?string $createdDate = null;
    /**
     * The printDate
     * @var string|null
     */
    protected ?string $printDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The printingUser
     * @var int|null
     */
    protected ?int $printingUser = null;
    /**
     * Constructor method for MidocoCollectiveBillingCriteria
     * @uses MidocoCollectiveBillingCriteria::setCustomerId()
     * @uses MidocoCollectiveBillingCriteria::setDebitorNo()
     * @uses MidocoCollectiveBillingCriteria::setSurname()
     * @uses MidocoCollectiveBillingCriteria::setForename()
     * @uses MidocoCollectiveBillingCriteria::setDocumentId()
     * @uses MidocoCollectiveBillingCriteria::setDocumentNo()
     * @uses MidocoCollectiveBillingCriteria::setTravelDate()
     * @uses MidocoCollectiveBillingCriteria::setCreatedDate()
     * @uses MidocoCollectiveBillingCriteria::setPrintDate()
     * @uses MidocoCollectiveBillingCriteria::setOrderNo()
     * @uses MidocoCollectiveBillingCriteria::setOrgUnit()
     * @uses MidocoCollectiveBillingCriteria::setDocumentType()
     * @uses MidocoCollectiveBillingCriteria::setCreationUser()
     * @uses MidocoCollectiveBillingCriteria::setPrintingUser()
     * @param int $customerId
     * @param string $debitorNo
     * @param string $surname
     * @param string $forename
     * @param int $documentId
     * @param int $documentNo
     * @param string $travelDate
     * @param string $createdDate
     * @param string $printDate
     * @param int $orderNo
     * @param string $orgUnit
     * @param string $documentType
     * @param int $creationUser
     * @param int $printingUser
     */
    public function __construct(?int $customerId = null, ?string $debitorNo = null, ?string $surname = null, ?string $forename = null, ?int $documentId = null, ?int $documentNo = null, ?string $travelDate = null, ?string $createdDate = null, ?string $printDate = null, ?int $orderNo = null, ?string $orgUnit = null, ?string $documentType = null, ?int $creationUser = null, ?int $printingUser = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setSurname($surname)
            ->setForename($forename)
            ->setDocumentId($documentId)
            ->setDocumentNo($documentNo)
            ->setTravelDate($travelDate)
            ->setCreatedDate($createdDate)
            ->setPrintDate($printDate)
            ->setOrderNo($orderNo)
            ->setOrgUnit($orgUnit)
            ->setDocumentType($documentType)
            ->setCreationUser($creationUser)
            ->setPrintingUser($printingUser);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
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
     * Get surname value
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    /**
     * Set surname value
     * @param string $surname
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setSurname(?string $surname = null): self
    {
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surname, true), gettype($surname)), __LINE__);
        }
        $this->surname = $surname;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
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
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
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
     * Get createdDate value
     * @return string|null
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }
    /**
     * Set createdDate value
     * @param string $createdDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setCreatedDate(?string $createdDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->createdDate = $createdDate;
        
        return $this;
    }
    /**
     * Get printDate value
     * @return string|null
     */
    public function getPrintDate(): ?string
    {
        return $this->printDate;
    }
    /**
     * Set printDate value
     * @param string $printDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setPrintDate(?string $printDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printDate) && !is_string($printDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDate, true), gettype($printDate)), __LINE__);
        }
        $this->printDate = $printDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
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
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get printingUser value
     * @return int|null
     */
    public function getPrintingUser(): ?int
    {
        return $this->printingUser;
    }
    /**
     * Set printingUser value
     * @param int $printingUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBillingCriteria
     */
    public function setPrintingUser(?int $printingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($printingUser) && !(is_int($printingUser) || ctype_digit($printingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printingUser, true), gettype($printingUser)), __LINE__);
        }
        $this->printingUser = $printingUser;
        
        return $this;
    }
}
