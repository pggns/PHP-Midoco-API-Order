<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SepaMandateDTO StructType
 * @subpackage Structs
 */
class SepaMandateDTO extends AbstractStructBase
{
    /**
     * The bic
     * @var string|null
     */
    protected ?string $bic = null;
    /**
     * The companyName
     * @var string|null
     */
    protected ?string $companyName = null;
    /**
     * The createdBy
     * @var int|null
     */
    protected ?int $createdBy = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debteeId
     * @var string|null
     */
    protected ?string $debteeId = null;
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The lastUsed
     * @var string|null
     */
    protected ?string $lastUsed = null;
    /**
     * The mandateId
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The mandateType
     * @var string|null
     */
    protected ?string $mandateType = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The placeOfIssue
     * @var string|null
     */
    protected ?string $placeOfIssue = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The usedCount
     * @var int|null
     */
    protected ?int $usedCount = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for SepaMandateDTO
     * @uses SepaMandateDTO::setBic()
     * @uses SepaMandateDTO::setCompanyName()
     * @uses SepaMandateDTO::setCreatedBy()
     * @uses SepaMandateDTO::setCreationDate()
     * @uses SepaMandateDTO::setCustomerId()
     * @uses SepaMandateDTO::setDebteeId()
     * @uses SepaMandateDTO::setDocumentExportDate()
     * @uses SepaMandateDTO::setDocumentId()
     * @uses SepaMandateDTO::setForename()
     * @uses SepaMandateDTO::setIban()
     * @uses SepaMandateDTO::setIsActive()
     * @uses SepaMandateDTO::setIsDocumentExported()
     * @uses SepaMandateDTO::setLanguage()
     * @uses SepaMandateDTO::setLastUsed()
     * @uses SepaMandateDTO::setMandateId()
     * @uses SepaMandateDTO::setMandateReference()
     * @uses SepaMandateDTO::setMandateType()
     * @uses SepaMandateDTO::setName()
     * @uses SepaMandateDTO::setOrderId()
     * @uses SepaMandateDTO::setPlaceOfIssue()
     * @uses SepaMandateDTO::setReceiptId()
     * @uses SepaMandateDTO::setRepositoryId()
     * @uses SepaMandateDTO::setUnitName()
     * @uses SepaMandateDTO::setUsedCount()
     * @uses SepaMandateDTO::setValidFrom()
     * @uses SepaMandateDTO::setValidUntil()
     * @param string $bic
     * @param string $companyName
     * @param int $createdBy
     * @param string $creationDate
     * @param int $customerId
     * @param string $debteeId
     * @param string $documentExportDate
     * @param int $documentId
     * @param string $forename
     * @param string $iban
     * @param bool $isActive
     * @param bool $isDocumentExported
     * @param string $language
     * @param string $lastUsed
     * @param int $mandateId
     * @param string $mandateReference
     * @param string $mandateType
     * @param string $name
     * @param int $orderId
     * @param string $placeOfIssue
     * @param int $receiptId
     * @param int $repositoryId
     * @param string $unitName
     * @param int $usedCount
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $bic = null, ?string $companyName = null, ?int $createdBy = null, ?string $creationDate = null, ?int $customerId = null, ?string $debteeId = null, ?string $documentExportDate = null, ?int $documentId = null, ?string $forename = null, ?string $iban = null, ?bool $isActive = null, ?bool $isDocumentExported = null, ?string $language = null, ?string $lastUsed = null, ?int $mandateId = null, ?string $mandateReference = null, ?string $mandateType = null, ?string $name = null, ?int $orderId = null, ?string $placeOfIssue = null, ?int $receiptId = null, ?int $repositoryId = null, ?string $unitName = null, ?int $usedCount = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setBic($bic)
            ->setCompanyName($companyName)
            ->setCreatedBy($createdBy)
            ->setCreationDate($creationDate)
            ->setCustomerId($customerId)
            ->setDebteeId($debteeId)
            ->setDocumentExportDate($documentExportDate)
            ->setDocumentId($documentId)
            ->setForename($forename)
            ->setIban($iban)
            ->setIsActive($isActive)
            ->setIsDocumentExported($isDocumentExported)
            ->setLanguage($language)
            ->setLastUsed($lastUsed)
            ->setMandateId($mandateId)
            ->setMandateReference($mandateReference)
            ->setMandateType($mandateType)
            ->setName($name)
            ->setOrderId($orderId)
            ->setPlaceOfIssue($placeOfIssue)
            ->setReceiptId($receiptId)
            ->setRepositoryId($repositoryId)
            ->setUnitName($unitName)
            ->setUsedCount($usedCount)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setBic(?string $bic = null): self
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic, true), gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        
        return $this;
    }
    /**
     * Get companyName value
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     * Set companyName value
     * @param string $companyName
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setCompanyName(?string $companyName = null): self
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyName, true), gettype($companyName)), __LINE__);
        }
        $this->companyName = $companyName;
        
        return $this;
    }
    /**
     * Get createdBy value
     * @return int|null
     */
    public function getCreatedBy(): ?int
    {
        return $this->createdBy;
    }
    /**
     * Set createdBy value
     * @param int $createdBy
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setCreatedBy(?int $createdBy = null): self
    {
        // validation for constraint: int
        if (!is_null($createdBy) && !(is_int($createdBy) || ctype_digit($createdBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->createdBy = $createdBy;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
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
     * Get debteeId value
     * @return string|null
     */
    public function getDebteeId(): ?string
    {
        return $this->debteeId;
    }
    /**
     * Set debteeId value
     * @param string $debteeId
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setDebteeId(?string $debteeId = null): self
    {
        // validation for constraint: string
        if (!is_null($debteeId) && !is_string($debteeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debteeId, true), gettype($debteeId)), __LINE__);
        }
        $this->debteeId = $debteeId;
        
        return $this;
    }
    /**
     * Get documentExportDate value
     * @return string|null
     */
    public function getDocumentExportDate(): ?string
    {
        return $this->documentExportDate;
    }
    /**
     * Set documentExportDate value
     * @param string $documentExportDate
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setDocumentExportDate(?string $documentExportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentExportDate) && !is_string($documentExportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentExportDate, true), gettype($documentExportDate)), __LINE__);
        }
        $this->documentExportDate = $documentExportDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
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
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get isDocumentExported value
     * @return bool|null
     */
    public function getIsDocumentExported(): ?bool
    {
        return $this->isDocumentExported;
    }
    /**
     * Set isDocumentExported value
     * @param bool $isDocumentExported
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setIsDocumentExported(?bool $isDocumentExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDocumentExported) && !is_bool($isDocumentExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDocumentExported, true), gettype($isDocumentExported)), __LINE__);
        }
        $this->isDocumentExported = $isDocumentExported;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get lastUsed value
     * @return string|null
     */
    public function getLastUsed(): ?string
    {
        return $this->lastUsed;
    }
    /**
     * Set lastUsed value
     * @param string $lastUsed
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setLastUsed(?string $lastUsed = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUsed) && !is_string($lastUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUsed, true), gettype($lastUsed)), __LINE__);
        }
        $this->lastUsed = $lastUsed;
        
        return $this;
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get mandateType value
     * @return string|null
     */
    public function getMandateType(): ?string
    {
        return $this->mandateType;
    }
    /**
     * Set mandateType value
     * @param string $mandateType
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setMandateType(?string $mandateType = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateType) && !is_string($mandateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateType, true), gettype($mandateType)), __LINE__);
        }
        $this->mandateType = $mandateType;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
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
     * Get placeOfIssue value
     * @return string|null
     */
    public function getPlaceOfIssue(): ?string
    {
        return $this->placeOfIssue;
    }
    /**
     * Set placeOfIssue value
     * @param string $placeOfIssue
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setPlaceOfIssue(?string $placeOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($placeOfIssue) && !is_string($placeOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placeOfIssue, true), gettype($placeOfIssue)), __LINE__);
        }
        $this->placeOfIssue = $placeOfIssue;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
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
     * Get usedCount value
     * @return int|null
     */
    public function getUsedCount(): ?int
    {
        return $this->usedCount;
    }
    /**
     * Set usedCount value
     * @param int $usedCount
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setUsedCount(?int $usedCount = null): self
    {
        // validation for constraint: int
        if (!is_null($usedCount) && !(is_int($usedCount) || ctype_digit($usedCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($usedCount, true), gettype($usedCount)), __LINE__);
        }
        $this->usedCount = $usedCount;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\SepaMandateDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
