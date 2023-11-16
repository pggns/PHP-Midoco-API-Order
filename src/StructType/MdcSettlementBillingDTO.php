<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MdcSettlementBillingDTO StructType
 * @subpackage Structs
 */
class MdcSettlementBillingDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The mdcSettlementBillingId
     * @var int|null
     */
    protected ?int $mdcSettlementBillingId = null;
    /**
     * The mdocAccountId
     * @var string|null
     */
    protected ?string $mdocAccountId = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The paidAmountMdocs
     * @var float|null
     */
    protected ?float $paidAmountMdocs = null;
    /**
     * The parentSettlementBillingId
     * @var int|null
     */
    protected ?int $parentSettlementBillingId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * The settlementType
     * @var int|null
     */
    protected ?int $settlementType = null;
    /**
     * The totalChargesAmount
     * @var float|null
     */
    protected ?float $totalChargesAmount = null;
    /**
     * The totalDetailsCount
     * @var int|null
     */
    protected ?int $totalDetailsCount = null;
    /**
     * The totalDetailsValue
     * @var float|null
     */
    protected ?float $totalDetailsValue = null;
    /**
     * The totalMdocsCount
     * @var int|null
     */
    protected ?int $totalMdocsCount = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for MdcSettlementBillingDTO
     * @uses MdcSettlementBillingDTO::setAccountId()
     * @uses MdcSettlementBillingDTO::setCreationDate()
     * @uses MdcSettlementBillingDTO::setCreationUser()
     * @uses MdcSettlementBillingDTO::setCustomerId()
     * @uses MdcSettlementBillingDTO::setDescription()
     * @uses MdcSettlementBillingDTO::setDocumentId()
     * @uses MdcSettlementBillingDTO::setMdcSettlementBillingId()
     * @uses MdcSettlementBillingDTO::setMdocAccountId()
     * @uses MdcSettlementBillingDTO::setPaidAmount()
     * @uses MdcSettlementBillingDTO::setPaidAmountMdocs()
     * @uses MdcSettlementBillingDTO::setParentSettlementBillingId()
     * @uses MdcSettlementBillingDTO::setPlanId()
     * @uses MdcSettlementBillingDTO::setSettlementMonth()
     * @uses MdcSettlementBillingDTO::setSettlementType()
     * @uses MdcSettlementBillingDTO::setTotalChargesAmount()
     * @uses MdcSettlementBillingDTO::setTotalDetailsCount()
     * @uses MdcSettlementBillingDTO::setTotalDetailsValue()
     * @uses MdcSettlementBillingDTO::setTotalMdocsCount()
     * @uses MdcSettlementBillingDTO::setUnitName()
     * @uses MdcSettlementBillingDTO::setVatCode()
     * @param string $accountId
     * @param string $creationDate
     * @param int $creationUser
     * @param int $customerId
     * @param string $description
     * @param int $documentId
     * @param int $mdcSettlementBillingId
     * @param string $mdocAccountId
     * @param float $paidAmount
     * @param float $paidAmountMdocs
     * @param int $parentSettlementBillingId
     * @param string $planId
     * @param string $settlementMonth
     * @param int $settlementType
     * @param float $totalChargesAmount
     * @param int $totalDetailsCount
     * @param float $totalDetailsValue
     * @param int $totalMdocsCount
     * @param string $unitName
     * @param string $vatCode
     */
    public function __construct(?string $accountId = null, ?string $creationDate = null, ?int $creationUser = null, ?int $customerId = null, ?string $description = null, ?int $documentId = null, ?int $mdcSettlementBillingId = null, ?string $mdocAccountId = null, ?float $paidAmount = null, ?float $paidAmountMdocs = null, ?int $parentSettlementBillingId = null, ?string $planId = null, ?string $settlementMonth = null, ?int $settlementType = null, ?float $totalChargesAmount = null, ?int $totalDetailsCount = null, ?float $totalDetailsValue = null, ?int $totalMdocsCount = null, ?string $unitName = null, ?string $vatCode = null)
    {
        $this
            ->setAccountId($accountId)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setDocumentId($documentId)
            ->setMdcSettlementBillingId($mdcSettlementBillingId)
            ->setMdocAccountId($mdocAccountId)
            ->setPaidAmount($paidAmount)
            ->setPaidAmountMdocs($paidAmountMdocs)
            ->setParentSettlementBillingId($parentSettlementBillingId)
            ->setPlanId($planId)
            ->setSettlementMonth($settlementMonth)
            ->setSettlementType($settlementType)
            ->setTotalChargesAmount($totalChargesAmount)
            ->setTotalDetailsCount($totalDetailsCount)
            ->setTotalDetailsValue($totalDetailsValue)
            ->setTotalMdocsCount($totalMdocsCount)
            ->setUnitName($unitName)
            ->setVatCode($vatCode);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
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
     * Get mdcSettlementBillingId value
     * @return int|null
     */
    public function getMdcSettlementBillingId(): ?int
    {
        return $this->mdcSettlementBillingId;
    }
    /**
     * Set mdcSettlementBillingId value
     * @param int $mdcSettlementBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setMdcSettlementBillingId(?int $mdcSettlementBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mdcSettlementBillingId) && !(is_int($mdcSettlementBillingId) || ctype_digit($mdcSettlementBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mdcSettlementBillingId, true), gettype($mdcSettlementBillingId)), __LINE__);
        }
        $this->mdcSettlementBillingId = $mdcSettlementBillingId;
        
        return $this;
    }
    /**
     * Get mdocAccountId value
     * @return string|null
     */
    public function getMdocAccountId(): ?string
    {
        return $this->mdocAccountId;
    }
    /**
     * Set mdocAccountId value
     * @param string $mdocAccountId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setMdocAccountId(?string $mdocAccountId = null): self
    {
        // validation for constraint: string
        if (!is_null($mdocAccountId) && !is_string($mdocAccountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdocAccountId, true), gettype($mdocAccountId)), __LINE__);
        }
        $this->mdocAccountId = $mdocAccountId;
        
        return $this;
    }
    /**
     * Get paidAmount value
     * @return float|null
     */
    public function getPaidAmount(): ?float
    {
        return $this->paidAmount;
    }
    /**
     * Set paidAmount value
     * @param float $paidAmount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setPaidAmount(?float $paidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmount) && !(is_float($paidAmount) || is_numeric($paidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmount, true), gettype($paidAmount)), __LINE__);
        }
        $this->paidAmount = $paidAmount;
        
        return $this;
    }
    /**
     * Get paidAmountMdocs value
     * @return float|null
     */
    public function getPaidAmountMdocs(): ?float
    {
        return $this->paidAmountMdocs;
    }
    /**
     * Set paidAmountMdocs value
     * @param float $paidAmountMdocs
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setPaidAmountMdocs(?float $paidAmountMdocs = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmountMdocs) && !(is_float($paidAmountMdocs) || is_numeric($paidAmountMdocs))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmountMdocs, true), gettype($paidAmountMdocs)), __LINE__);
        }
        $this->paidAmountMdocs = $paidAmountMdocs;
        
        return $this;
    }
    /**
     * Get parentSettlementBillingId value
     * @return int|null
     */
    public function getParentSettlementBillingId(): ?int
    {
        return $this->parentSettlementBillingId;
    }
    /**
     * Set parentSettlementBillingId value
     * @param int $parentSettlementBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setParentSettlementBillingId(?int $parentSettlementBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentSettlementBillingId) && !(is_int($parentSettlementBillingId) || ctype_digit($parentSettlementBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentSettlementBillingId, true), gettype($parentSettlementBillingId)), __LINE__);
        }
        $this->parentSettlementBillingId = $parentSettlementBillingId;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get settlementMonth value
     * @return string|null
     */
    public function getSettlementMonth(): ?string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setSettlementMonth(?string $settlementMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return int|null
     */
    public function getSettlementType(): ?int
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param int $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setSettlementType(?int $settlementType = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementType) && !(is_int($settlementType) || ctype_digit($settlementType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get totalChargesAmount value
     * @return float|null
     */
    public function getTotalChargesAmount(): ?float
    {
        return $this->totalChargesAmount;
    }
    /**
     * Set totalChargesAmount value
     * @param float $totalChargesAmount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setTotalChargesAmount(?float $totalChargesAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalChargesAmount) && !(is_float($totalChargesAmount) || is_numeric($totalChargesAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalChargesAmount, true), gettype($totalChargesAmount)), __LINE__);
        }
        $this->totalChargesAmount = $totalChargesAmount;
        
        return $this;
    }
    /**
     * Get totalDetailsCount value
     * @return int|null
     */
    public function getTotalDetailsCount(): ?int
    {
        return $this->totalDetailsCount;
    }
    /**
     * Set totalDetailsCount value
     * @param int $totalDetailsCount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setTotalDetailsCount(?int $totalDetailsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalDetailsCount) && !(is_int($totalDetailsCount) || ctype_digit($totalDetailsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalDetailsCount, true), gettype($totalDetailsCount)), __LINE__);
        }
        $this->totalDetailsCount = $totalDetailsCount;
        
        return $this;
    }
    /**
     * Get totalDetailsValue value
     * @return float|null
     */
    public function getTotalDetailsValue(): ?float
    {
        return $this->totalDetailsValue;
    }
    /**
     * Set totalDetailsValue value
     * @param float $totalDetailsValue
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setTotalDetailsValue(?float $totalDetailsValue = null): self
    {
        // validation for constraint: float
        if (!is_null($totalDetailsValue) && !(is_float($totalDetailsValue) || is_numeric($totalDetailsValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalDetailsValue, true), gettype($totalDetailsValue)), __LINE__);
        }
        $this->totalDetailsValue = $totalDetailsValue;
        
        return $this;
    }
    /**
     * Get totalMdocsCount value
     * @return int|null
     */
    public function getTotalMdocsCount(): ?int
    {
        return $this->totalMdocsCount;
    }
    /**
     * Set totalMdocsCount value
     * @param int $totalMdocsCount
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setTotalMdocsCount(?int $totalMdocsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalMdocsCount) && !(is_int($totalMdocsCount) || ctype_digit($totalMdocsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalMdocsCount, true), gettype($totalMdocsCount)), __LINE__);
        }
        $this->totalMdocsCount = $totalMdocsCount;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
}
