<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MedStlmntProdDTO StructType
 * @subpackage Structs
 */
class MedStlmntProdDTO extends AbstractStructBase
{
    /**
     * The addlDocumentId
     * @var int|null
     */
    protected ?int $addlDocumentId = null;
    /**
     * The calculatedRevenue
     * @var float|null
     */
    protected ?float $calculatedRevenue = null;
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
     * The fulfillAmount
     * @var float|null
     */
    protected ?float $fulfillAmount = null;
    /**
     * The fulfillPercent
     * @var float|null
     */
    protected ?float $fulfillPercent = null;
    /**
     * The isPreview
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The medStlmntProdId
     * @var int|null
     */
    protected ?int $medStlmntProdId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The nettoRevenue
     * @var float|null
     */
    protected ?float $nettoRevenue = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * The sumBookingPrice
     * @var float|null
     */
    protected ?float $sumBookingPrice = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MedStlmntProdDTO
     * @uses MedStlmntProdDTO::setAddlDocumentId()
     * @uses MedStlmntProdDTO::setCalculatedRevenue()
     * @uses MedStlmntProdDTO::setCreated()
     * @uses MedStlmntProdDTO::setCreatingUser()
     * @uses MedStlmntProdDTO::setDocumentId()
     * @uses MedStlmntProdDTO::setFulfillAmount()
     * @uses MedStlmntProdDTO::setFulfillPercent()
     * @uses MedStlmntProdDTO::setIsPreview()
     * @uses MedStlmntProdDTO::setMedStlmntProdId()
     * @uses MedStlmntProdDTO::setMediatorId()
     * @uses MedStlmntProdDTO::setNettoRevenue()
     * @uses MedStlmntProdDTO::setPaidAmount()
     * @uses MedStlmntProdDTO::setSettlementDate()
     * @uses MedStlmntProdDTO::setSumBookingPrice()
     * @uses MedStlmntProdDTO::setUnitName()
     * @param int $addlDocumentId
     * @param float $calculatedRevenue
     * @param string $created
     * @param int $creatingUser
     * @param int $documentId
     * @param float $fulfillAmount
     * @param float $fulfillPercent
     * @param bool $isPreview
     * @param int $medStlmntProdId
     * @param string $mediatorId
     * @param float $nettoRevenue
     * @param float $paidAmount
     * @param string $settlementDate
     * @param float $sumBookingPrice
     * @param string $unitName
     */
    public function __construct(?int $addlDocumentId = null, ?float $calculatedRevenue = null, ?string $created = null, ?int $creatingUser = null, ?int $documentId = null, ?float $fulfillAmount = null, ?float $fulfillPercent = null, ?bool $isPreview = null, ?int $medStlmntProdId = null, ?string $mediatorId = null, ?float $nettoRevenue = null, ?float $paidAmount = null, ?string $settlementDate = null, ?float $sumBookingPrice = null, ?string $unitName = null)
    {
        $this
            ->setAddlDocumentId($addlDocumentId)
            ->setCalculatedRevenue($calculatedRevenue)
            ->setCreated($created)
            ->setCreatingUser($creatingUser)
            ->setDocumentId($documentId)
            ->setFulfillAmount($fulfillAmount)
            ->setFulfillPercent($fulfillPercent)
            ->setIsPreview($isPreview)
            ->setMedStlmntProdId($medStlmntProdId)
            ->setMediatorId($mediatorId)
            ->setNettoRevenue($nettoRevenue)
            ->setPaidAmount($paidAmount)
            ->setSettlementDate($settlementDate)
            ->setSumBookingPrice($sumBookingPrice)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * Get calculatedRevenue value
     * @return float|null
     */
    public function getCalculatedRevenue(): ?float
    {
        return $this->calculatedRevenue;
    }
    /**
     * Set calculatedRevenue value
     * @param float $calculatedRevenue
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setCalculatedRevenue(?float $calculatedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedRevenue) && !(is_float($calculatedRevenue) || is_numeric($calculatedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedRevenue, true), gettype($calculatedRevenue)), __LINE__);
        }
        $this->calculatedRevenue = $calculatedRevenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * Get fulfillAmount value
     * @return float|null
     */
    public function getFulfillAmount(): ?float
    {
        return $this->fulfillAmount;
    }
    /**
     * Set fulfillAmount value
     * @param float $fulfillAmount
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setFulfillAmount(?float $fulfillAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($fulfillAmount) && !(is_float($fulfillAmount) || is_numeric($fulfillAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fulfillAmount, true), gettype($fulfillAmount)), __LINE__);
        }
        $this->fulfillAmount = $fulfillAmount;
        
        return $this;
    }
    /**
     * Get fulfillPercent value
     * @return float|null
     */
    public function getFulfillPercent(): ?float
    {
        return $this->fulfillPercent;
    }
    /**
     * Set fulfillPercent value
     * @param float $fulfillPercent
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setFulfillPercent(?float $fulfillPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($fulfillPercent) && !(is_float($fulfillPercent) || is_numeric($fulfillPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fulfillPercent, true), gettype($fulfillPercent)), __LINE__);
        }
        $this->fulfillPercent = $fulfillPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * Get medStlmntProdId value
     * @return int|null
     */
    public function getMedStlmntProdId(): ?int
    {
        return $this->medStlmntProdId;
    }
    /**
     * Set medStlmntProdId value
     * @param int $medStlmntProdId
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setMedStlmntProdId(?int $medStlmntProdId = null): self
    {
        // validation for constraint: int
        if (!is_null($medStlmntProdId) && !(is_int($medStlmntProdId) || ctype_digit($medStlmntProdId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($medStlmntProdId, true), gettype($medStlmntProdId)), __LINE__);
        }
        $this->medStlmntProdId = $medStlmntProdId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * Get nettoRevenue value
     * @return float|null
     */
    public function getNettoRevenue(): ?float
    {
        return $this->nettoRevenue;
    }
    /**
     * Set nettoRevenue value
     * @param float $nettoRevenue
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setNettoRevenue(?float $nettoRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoRevenue) && !(is_float($nettoRevenue) || is_numeric($nettoRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoRevenue, true), gettype($nettoRevenue)), __LINE__);
        }
        $this->nettoRevenue = $nettoRevenue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
        return $this;
    }
    /**
     * Get sumBookingPrice value
     * @return float|null
     */
    public function getSumBookingPrice(): ?float
    {
        return $this->sumBookingPrice;
    }
    /**
     * Set sumBookingPrice value
     * @param float $sumBookingPrice
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
     */
    public function setSumBookingPrice(?float $sumBookingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($sumBookingPrice) && !(is_float($sumBookingPrice) || is_numeric($sumBookingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumBookingPrice, true), gettype($sumBookingPrice)), __LINE__);
        }
        $this->sumBookingPrice = $sumBookingPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MedStlmntProdDTO
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
