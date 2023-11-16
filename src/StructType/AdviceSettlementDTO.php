<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdviceSettlementDTO StructType
 * @subpackage Structs
 */
class AdviceSettlementDTO extends AbstractStructBase
{
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
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentExportDate
     * @var string|null
     */
    protected ?string $documentExportDate = null;
    /**
     * The invoiceCustomerId
     * @var int|null
     */
    protected ?int $invoiceCustomerId = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isCommissionOnly
     * @var bool|null
     */
    protected ?bool $isCommissionOnly = null;
    /**
     * The isDocumentExported
     * @var bool|null
     */
    protected ?bool $isDocumentExported = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The sumCommission
     * @var float|null
     */
    protected ?float $sumCommission = null;
    /**
     * The sumControl
     * @var float|null
     */
    protected ?float $sumControl = null;
    /**
     * The sumDiAmount
     * @var float|null
     */
    protected ?float $sumDiAmount = null;
    /**
     * The sumTravelPrice
     * @var float|null
     */
    protected ?float $sumTravelPrice = null;
    /**
     * The sumVatAmount
     * @var float|null
     */
    protected ?float $sumVatAmount = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AdviceSettlementDTO
     * @uses AdviceSettlementDTO::setCreationDate()
     * @uses AdviceSettlementDTO::setCreationUser()
     * @uses AdviceSettlementDTO::setDescription()
     * @uses AdviceSettlementDTO::setDocumentExportDate()
     * @uses AdviceSettlementDTO::setInvoiceCustomerId()
     * @uses AdviceSettlementDTO::setInvoiceDate()
     * @uses AdviceSettlementDTO::setInvoiceNo()
     * @uses AdviceSettlementDTO::setIsActive()
     * @uses AdviceSettlementDTO::setIsCommissionOnly()
     * @uses AdviceSettlementDTO::setIsDocumentExported()
     * @uses AdviceSettlementDTO::setRepositoryId()
     * @uses AdviceSettlementDTO::setSettlementId()
     * @uses AdviceSettlementDTO::setSumCommission()
     * @uses AdviceSettlementDTO::setSumControl()
     * @uses AdviceSettlementDTO::setSumDiAmount()
     * @uses AdviceSettlementDTO::setSumTravelPrice()
     * @uses AdviceSettlementDTO::setSumVatAmount()
     * @uses AdviceSettlementDTO::setUnitName()
     * @param string $creationDate
     * @param int $creationUser
     * @param string $description
     * @param string $documentExportDate
     * @param int $invoiceCustomerId
     * @param string $invoiceDate
     * @param string $invoiceNo
     * @param bool $isActive
     * @param bool $isCommissionOnly
     * @param bool $isDocumentExported
     * @param int $repositoryId
     * @param int $settlementId
     * @param float $sumCommission
     * @param float $sumControl
     * @param float $sumDiAmount
     * @param float $sumTravelPrice
     * @param float $sumVatAmount
     * @param string $unitName
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?string $description = null, ?string $documentExportDate = null, ?int $invoiceCustomerId = null, ?string $invoiceDate = null, ?string $invoiceNo = null, ?bool $isActive = null, ?bool $isCommissionOnly = null, ?bool $isDocumentExported = null, ?int $repositoryId = null, ?int $settlementId = null, ?float $sumCommission = null, ?float $sumControl = null, ?float $sumDiAmount = null, ?float $sumTravelPrice = null, ?float $sumVatAmount = null, ?string $unitName = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setDocumentExportDate($documentExportDate)
            ->setInvoiceCustomerId($invoiceCustomerId)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceNo($invoiceNo)
            ->setIsActive($isActive)
            ->setIsCommissionOnly($isCommissionOnly)
            ->setIsDocumentExported($isDocumentExported)
            ->setRepositoryId($repositoryId)
            ->setSettlementId($settlementId)
            ->setSumCommission($sumCommission)
            ->setSumControl($sumControl)
            ->setSumDiAmount($sumDiAmount)
            ->setSumTravelPrice($sumTravelPrice)
            ->setSumVatAmount($sumVatAmount)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * Get invoiceCustomerId value
     * @return int|null
     */
    public function getInvoiceCustomerId(): ?int
    {
        return $this->invoiceCustomerId;
    }
    /**
     * Set invoiceCustomerId value
     * @param int $invoiceCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setInvoiceCustomerId(?int $invoiceCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceCustomerId) && !(is_int($invoiceCustomerId) || ctype_digit($invoiceCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceCustomerId, true), gettype($invoiceCustomerId)), __LINE__);
        }
        $this->invoiceCustomerId = $invoiceCustomerId;
        
        return $this;
    }
    /**
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * Get isCommissionOnly value
     * @return bool|null
     */
    public function getIsCommissionOnly(): ?bool
    {
        return $this->isCommissionOnly;
    }
    /**
     * Set isCommissionOnly value
     * @param bool $isCommissionOnly
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setIsCommissionOnly(?bool $isCommissionOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCommissionOnly) && !is_bool($isCommissionOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCommissionOnly, true), gettype($isCommissionOnly)), __LINE__);
        }
        $this->isCommissionOnly = $isCommissionOnly;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get sumCommission value
     * @return float|null
     */
    public function getSumCommission(): ?float
    {
        return $this->sumCommission;
    }
    /**
     * Set sumCommission value
     * @param float $sumCommission
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setSumCommission(?float $sumCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($sumCommission) && !(is_float($sumCommission) || is_numeric($sumCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumCommission, true), gettype($sumCommission)), __LINE__);
        }
        $this->sumCommission = $sumCommission;
        
        return $this;
    }
    /**
     * Get sumControl value
     * @return float|null
     */
    public function getSumControl(): ?float
    {
        return $this->sumControl;
    }
    /**
     * Set sumControl value
     * @param float $sumControl
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setSumControl(?float $sumControl = null): self
    {
        // validation for constraint: float
        if (!is_null($sumControl) && !(is_float($sumControl) || is_numeric($sumControl))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumControl, true), gettype($sumControl)), __LINE__);
        }
        $this->sumControl = $sumControl;
        
        return $this;
    }
    /**
     * Get sumDiAmount value
     * @return float|null
     */
    public function getSumDiAmount(): ?float
    {
        return $this->sumDiAmount;
    }
    /**
     * Set sumDiAmount value
     * @param float $sumDiAmount
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setSumDiAmount(?float $sumDiAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($sumDiAmount) && !(is_float($sumDiAmount) || is_numeric($sumDiAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumDiAmount, true), gettype($sumDiAmount)), __LINE__);
        }
        $this->sumDiAmount = $sumDiAmount;
        
        return $this;
    }
    /**
     * Get sumTravelPrice value
     * @return float|null
     */
    public function getSumTravelPrice(): ?float
    {
        return $this->sumTravelPrice;
    }
    /**
     * Set sumTravelPrice value
     * @param float $sumTravelPrice
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setSumTravelPrice(?float $sumTravelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($sumTravelPrice) && !(is_float($sumTravelPrice) || is_numeric($sumTravelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumTravelPrice, true), gettype($sumTravelPrice)), __LINE__);
        }
        $this->sumTravelPrice = $sumTravelPrice;
        
        return $this;
    }
    /**
     * Get sumVatAmount value
     * @return float|null
     */
    public function getSumVatAmount(): ?float
    {
        return $this->sumVatAmount;
    }
    /**
     * Set sumVatAmount value
     * @param float $sumVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
     */
    public function setSumVatAmount(?float $sumVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($sumVatAmount) && !(is_float($sumVatAmount) || is_numeric($sumVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumVatAmount, true), gettype($sumVatAmount)), __LINE__);
        }
        $this->sumVatAmount = $sumVatAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDTO
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
}
