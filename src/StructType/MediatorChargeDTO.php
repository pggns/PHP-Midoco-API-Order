<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorChargeDTO StructType
 * @subpackage Structs
 */
class MediatorChargeDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
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
     * The externalDocName
     * @var string|null
     */
    protected ?string $externalDocName = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isCredit
     * @var bool|null
     */
    protected ?bool $isCredit = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The medStlmntProdId
     * @var int|null
     */
    protected ?int $medStlmntProdId = null;
    /**
     * The mediatorBillingId
     * @var int|null
     */
    protected ?int $mediatorBillingId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorSettlementId
     * @var int|null
     */
    protected ?int $mediatorSettlementId = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
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
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for MediatorChargeDTO
     * @uses MediatorChargeDTO::setAccountId()
     * @uses MediatorChargeDTO::setChargeId()
     * @uses MediatorChargeDTO::setCostCentre()
     * @uses MediatorChargeDTO::setCreationDate()
     * @uses MediatorChargeDTO::setCreationUser()
     * @uses MediatorChargeDTO::setDescription()
     * @uses MediatorChargeDTO::setExternalDocName()
     * @uses MediatorChargeDTO::setId()
     * @uses MediatorChargeDTO::setIsCredit()
     * @uses MediatorChargeDTO::setItemId()
     * @uses MediatorChargeDTO::setMedStlmntProdId()
     * @uses MediatorChargeDTO::setMediatorBillingId()
     * @uses MediatorChargeDTO::setMediatorId()
     * @uses MediatorChargeDTO::setMediatorSettlementId()
     * @uses MediatorChargeDTO::setNettoAmount()
     * @uses MediatorChargeDTO::setPlanId()
     * @uses MediatorChargeDTO::setSettlementMonth()
     * @uses MediatorChargeDTO::setUnitName()
     * @uses MediatorChargeDTO::setVatAmount()
     * @uses MediatorChargeDTO::setVatCode()
     * @uses MediatorChargeDTO::setVatPercent()
     * @param string $accountId
     * @param int $chargeId
     * @param string $costCentre
     * @param string $creationDate
     * @param int $creationUser
     * @param string $description
     * @param string $externalDocName
     * @param int $id
     * @param bool $isCredit
     * @param int $itemId
     * @param int $medStlmntProdId
     * @param int $mediatorBillingId
     * @param string $mediatorId
     * @param int $mediatorSettlementId
     * @param float $nettoAmount
     * @param string $planId
     * @param string $settlementMonth
     * @param string $unitName
     * @param float $vatAmount
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?string $accountId = null, ?int $chargeId = null, ?string $costCentre = null, ?string $creationDate = null, ?int $creationUser = null, ?string $description = null, ?string $externalDocName = null, ?int $id = null, ?bool $isCredit = null, ?int $itemId = null, ?int $medStlmntProdId = null, ?int $mediatorBillingId = null, ?string $mediatorId = null, ?int $mediatorSettlementId = null, ?float $nettoAmount = null, ?string $planId = null, ?string $settlementMonth = null, ?string $unitName = null, ?float $vatAmount = null, ?string $vatCode = null, ?float $vatPercent = null)
    {
        $this
            ->setAccountId($accountId)
            ->setChargeId($chargeId)
            ->setCostCentre($costCentre)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setExternalDocName($externalDocName)
            ->setId($id)
            ->setIsCredit($isCredit)
            ->setItemId($itemId)
            ->setMedStlmntProdId($medStlmntProdId)
            ->setMediatorBillingId($mediatorBillingId)
            ->setMediatorId($mediatorId)
            ->setMediatorSettlementId($mediatorSettlementId)
            ->setNettoAmount($nettoAmount)
            ->setPlanId($planId)
            ->setSettlementMonth($settlementMonth)
            ->setUnitName($unitName)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * Get chargeId value
     * @return int|null
     */
    public function getChargeId(): ?int
    {
        return $this->chargeId;
    }
    /**
     * Set chargeId value
     * @param int $chargeId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setChargeId(?int $chargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($chargeId) && !(is_int($chargeId) || ctype_digit($chargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeId, true), gettype($chargeId)), __LINE__);
        }
        $this->chargeId = $chargeId;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * Get externalDocName value
     * @return string|null
     */
    public function getExternalDocName(): ?string
    {
        return $this->externalDocName;
    }
    /**
     * Set externalDocName value
     * @param string $externalDocName
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setExternalDocName(?string $externalDocName = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDocName) && !is_string($externalDocName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDocName, true), gettype($externalDocName)), __LINE__);
        }
        $this->externalDocName = $externalDocName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * Get isCredit value
     * @return bool|null
     */
    public function getIsCredit(): ?bool
    {
        return $this->isCredit;
    }
    /**
     * Set isCredit value
     * @param bool $isCredit
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setIsCredit(?bool $isCredit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCredit) && !is_bool($isCredit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCredit, true), gettype($isCredit)), __LINE__);
        }
        $this->isCredit = $isCredit;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * Get mediatorBillingId value
     * @return int|null
     */
    public function getMediatorBillingId(): ?int
    {
        return $this->mediatorBillingId;
    }
    /**
     * Set mediatorBillingId value
     * @param int $mediatorBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setMediatorBillingId(?int $mediatorBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorBillingId) && !(is_int($mediatorBillingId) || ctype_digit($mediatorBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorBillingId, true), gettype($mediatorBillingId)), __LINE__);
        }
        $this->mediatorBillingId = $mediatorBillingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * Get mediatorSettlementId value
     * @return int|null
     */
    public function getMediatorSettlementId(): ?int
    {
        return $this->mediatorSettlementId;
    }
    /**
     * Set mediatorSettlementId value
     * @param int $mediatorSettlementId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setMediatorSettlementId(?int $mediatorSettlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorSettlementId) && !(is_int($mediatorSettlementId) || ctype_digit($mediatorSettlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorSettlementId, true), gettype($mediatorSettlementId)), __LINE__);
        }
        $this->mediatorSettlementId = $mediatorSettlementId;
        
        return $this;
    }
    /**
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
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
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
