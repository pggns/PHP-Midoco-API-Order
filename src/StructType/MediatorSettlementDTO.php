<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorSettlementDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MediatorSettlementDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The addlDocumentId
     * @var int|null
     */
    protected ?int $addlDocumentId = null;
    /**
     * The created
     * @var string|null
     */
    protected ?string $created = null;
    /**
     * The creatingUser
     * @var int|null
     */
    protected ?int $creatingUser = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isPreview
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The mediatorCurrency
     * @var string|null
     */
    protected ?string $mediatorCurrency = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The paidAmountMediatorCurrency
     * @var float|null
     */
    protected ?float $paidAmountMediatorCurrency = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for MediatorSettlementDTO
     * @uses MediatorSettlementDTO::setAccountId()
     * @uses MediatorSettlementDTO::setAddlDocumentId()
     * @uses MediatorSettlementDTO::setCreated()
     * @uses MediatorSettlementDTO::setCreatingUser()
     * @uses MediatorSettlementDTO::setDocumentId()
     * @uses MediatorSettlementDTO::setId()
     * @uses MediatorSettlementDTO::setIsPreview()
     * @uses MediatorSettlementDTO::setMediatorCurrency()
     * @uses MediatorSettlementDTO::setMediatorId()
     * @uses MediatorSettlementDTO::setPaidAmount()
     * @uses MediatorSettlementDTO::setPaidAmountMediatorCurrency()
     * @uses MediatorSettlementDTO::setPlanId()
     * @uses MediatorSettlementDTO::setTravelNo()
     * @uses MediatorSettlementDTO::setUnitName()
     * @uses MediatorSettlementDTO::setVatAmount()
     * @uses MediatorSettlementDTO::setVatCode()
     * @param string $accountId
     * @param int $addlDocumentId
     * @param string $created
     * @param int $creatingUser
     * @param int $documentId
     * @param int $id
     * @param bool $isPreview
     * @param string $mediatorCurrency
     * @param string $mediatorId
     * @param float $paidAmount
     * @param float $paidAmountMediatorCurrency
     * @param string $planId
     * @param string $travelNo
     * @param string $unitName
     * @param float $vatAmount
     * @param string $vatCode
     */
    public function __construct(?string $accountId = null, ?int $addlDocumentId = null, ?string $created = null, ?int $creatingUser = null, ?int $documentId = null, ?int $id = null, ?bool $isPreview = null, ?string $mediatorCurrency = null, ?string $mediatorId = null, ?float $paidAmount = null, ?float $paidAmountMediatorCurrency = null, ?string $planId = null, ?string $travelNo = null, ?string $unitName = null, ?float $vatAmount = null, ?string $vatCode = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAddlDocumentId($addlDocumentId)
            ->setCreated($created)
            ->setCreatingUser($creatingUser)
            ->setDocumentId($documentId)
            ->setId($id)
            ->setIsPreview($isPreview)
            ->setMediatorCurrency($mediatorCurrency)
            ->setMediatorId($mediatorId)
            ->setPaidAmount($paidAmount)
            ->setPaidAmountMediatorCurrency($paidAmountMediatorCurrency)
            ->setPlanId($planId)
            ->setTravelNo($travelNo)
            ->setUnitName($unitName)
            ->setVatAmount($vatAmount)
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
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
     * Get addlDocumentId value
     * @return int|null
     */
    public function getAddlDocumentId(): ?int
    {
        return $this->addlDocumentId;
    }
    /**
     * Set addlDocumentId value
     * @param int $addlDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setAddlDocumentId(?int $addlDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($addlDocumentId) && !(is_int($addlDocumentId) || ctype_digit($addlDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addlDocumentId, true), gettype($addlDocumentId)), __LINE__);
        }
        $this->addlDocumentId = $addlDocumentId;
        
        return $this;
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
        
        return $this;
    }
    /**
     * Get creatingUser value
     * @return int|null
     */
    public function getCreatingUser(): ?int
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param int $creatingUser
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setCreatingUser(?int $creatingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creatingUser) && !(is_int($creatingUser) || ctype_digit($creatingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
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
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setIsPreview(?bool $isPreview = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get mediatorCurrency value
     * @return string|null
     */
    public function getMediatorCurrency(): ?string
    {
        return $this->mediatorCurrency;
    }
    /**
     * Set mediatorCurrency value
     * @param string $mediatorCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setMediatorCurrency(?string $mediatorCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorCurrency) && !is_string($mediatorCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorCurrency, true), gettype($mediatorCurrency)), __LINE__);
        }
        $this->mediatorCurrency = $mediatorCurrency;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
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
     * Get paidAmountMediatorCurrency value
     * @return float|null
     */
    public function getPaidAmountMediatorCurrency(): ?float
    {
        return $this->paidAmountMediatorCurrency;
    }
    /**
     * Set paidAmountMediatorCurrency value
     * @param float $paidAmountMediatorCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setPaidAmountMediatorCurrency(?float $paidAmountMediatorCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmountMediatorCurrency) && !(is_float($paidAmountMediatorCurrency) || is_numeric($paidAmountMediatorCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmountMediatorCurrency, true), gettype($paidAmountMediatorCurrency)), __LINE__);
        }
        $this->paidAmountMediatorCurrency = $paidAmountMediatorCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
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
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
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
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementDTO
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
