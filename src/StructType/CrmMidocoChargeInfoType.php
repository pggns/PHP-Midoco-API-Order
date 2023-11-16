<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoChargeInfoType StructType
 * @subpackage Structs
 */
class CrmMidocoChargeInfoType extends CrmMidocoChargeDTO
{
    /**
     * The MidocoAssignedMidocoChargeOu
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAssignedMidocoChargeOu
     * @var \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO[]
     */
    protected array $MidocoAssignedMidocoChargeOu = [];
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The isCredit
     * @var bool|null
     */
    protected ?bool $isCredit = null;
    /**
     * The isInteractive
     * @var bool|null
     */
    protected ?bool $isInteractive = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The schedulePeriod
     * @var int|null
     */
    protected ?int $schedulePeriod = null;
    /**
     * The useVat
     * @var bool|null
     */
    protected ?bool $useVat = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * Constructor method for CrmMidocoChargeInfoType
     * @uses CrmMidocoChargeInfoType::setMidocoAssignedMidocoChargeOu()
     * @uses CrmMidocoChargeInfoType::setAccountId()
     * @uses CrmMidocoChargeInfoType::setIsCredit()
     * @uses CrmMidocoChargeInfoType::setIsInteractive()
     * @uses CrmMidocoChargeInfoType::setPlanId()
     * @uses CrmMidocoChargeInfoType::setSchedulePeriod()
     * @uses CrmMidocoChargeInfoType::setUseVat()
     * @uses CrmMidocoChargeInfoType::setDescription()
     * @uses CrmMidocoChargeInfoType::setNettoAmount()
     * @param \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO[] $midocoAssignedMidocoChargeOu
     * @param string $accountId
     * @param bool $isCredit
     * @param bool $isInteractive
     * @param string $planId
     * @param int $schedulePeriod
     * @param bool $useVat
     * @param string $description
     * @param float $nettoAmount
     */
    public function __construct(array $midocoAssignedMidocoChargeOu = [], ?string $accountId = null, ?bool $isCredit = null, ?bool $isInteractive = null, ?string $planId = null, ?int $schedulePeriod = null, ?bool $useVat = null, ?string $description = null, ?float $nettoAmount = null)
    {
        $this
            ->setMidocoAssignedMidocoChargeOu($midocoAssignedMidocoChargeOu)
            ->setAccountId($accountId)
            ->setIsCredit($isCredit)
            ->setIsInteractive($isInteractive)
            ->setPlanId($planId)
            ->setSchedulePeriod($schedulePeriod)
            ->setUseVat($useVat)
            ->setDescription($description)
            ->setNettoAmount($nettoAmount);
    }
    /**
     * Get MidocoAssignedMidocoChargeOu value
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO[]
     */
    public function getMidocoAssignedMidocoChargeOu(): array
    {
        return $this->MidocoAssignedMidocoChargeOu;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAssignedMidocoChargeOu method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAssignedMidocoChargeOu method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAssignedMidocoChargeOuForArrayConstraintsFromSetMidocoAssignedMidocoChargeOu(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $crmMidocoChargeInfoTypeMidocoAssignedMidocoChargeOuItem) {
            // validation for constraint: itemType
            if (!$crmMidocoChargeInfoTypeMidocoAssignedMidocoChargeOuItem instanceof \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO) {
                $invalidValues[] = is_object($crmMidocoChargeInfoTypeMidocoAssignedMidocoChargeOuItem) ? get_class($crmMidocoChargeInfoTypeMidocoAssignedMidocoChargeOuItem) : sprintf('%s(%s)', gettype($crmMidocoChargeInfoTypeMidocoAssignedMidocoChargeOuItem), var_export($crmMidocoChargeInfoTypeMidocoAssignedMidocoChargeOuItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAssignedMidocoChargeOu property can only contain items of type \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAssignedMidocoChargeOu value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO[] $midocoAssignedMidocoChargeOu
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
     */
    public function setMidocoAssignedMidocoChargeOu(array $midocoAssignedMidocoChargeOu = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAssignedMidocoChargeOuArrayErrorMessage = self::validateMidocoAssignedMidocoChargeOuForArrayConstraintsFromSetMidocoAssignedMidocoChargeOu($midocoAssignedMidocoChargeOu))) {
            throw new InvalidArgumentException($midocoAssignedMidocoChargeOuArrayErrorMessage, __LINE__);
        }
        $this->MidocoAssignedMidocoChargeOu = $midocoAssignedMidocoChargeOu;
        
        return $this;
    }
    /**
     * Add item to MidocoAssignedMidocoChargeOu value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
     */
    public function addToMidocoAssignedMidocoChargeOu(\Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAssignedMidocoChargeOu property can only contain items of type \Pggns\MidocoApi\Order\StructType\AssignedMidocoChargeOuDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAssignedMidocoChargeOu[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
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
     * Get isInteractive value
     * @return bool|null
     */
    public function getIsInteractive(): ?bool
    {
        return $this->isInteractive;
    }
    /**
     * Set isInteractive value
     * @param bool $isInteractive
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
     */
    public function setIsInteractive(?bool $isInteractive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInteractive) && !is_bool($isInteractive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInteractive, true), gettype($isInteractive)), __LINE__);
        }
        $this->isInteractive = $isInteractive;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
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
     * Get schedulePeriod value
     * @return int|null
     */
    public function getSchedulePeriod(): ?int
    {
        return $this->schedulePeriod;
    }
    /**
     * Set schedulePeriod value
     * @param int $schedulePeriod
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
     */
    public function setSchedulePeriod(?int $schedulePeriod = null): self
    {
        // validation for constraint: int
        if (!is_null($schedulePeriod) && !(is_int($schedulePeriod) || ctype_digit($schedulePeriod))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($schedulePeriod, true), gettype($schedulePeriod)), __LINE__);
        }
        $this->schedulePeriod = $schedulePeriod;
        
        return $this;
    }
    /**
     * Get useVat value
     * @return bool|null
     */
    public function getUseVat(): ?bool
    {
        return $this->useVat;
    }
    /**
     * Set useVat value
     * @param bool $useVat
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
     */
    public function setUseVat(?bool $useVat = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useVat) && !is_bool($useVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useVat, true), gettype($useVat)), __LINE__);
        }
        $this->useVat = $useVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoChargeInfoType
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
}
