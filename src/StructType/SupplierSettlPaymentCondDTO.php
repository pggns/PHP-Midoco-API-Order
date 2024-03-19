<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierSettlPaymentCondDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierSettlPaymentCondDTO extends AbstractStructBase
{
    /**
     * The depositDays
     * @var int|null
     */
    protected ?int $depositDays = null;
    /**
     * The depositMinAmount
     * @var float|null
     */
    protected ?float $depositMinAmount = null;
    /**
     * The depositPercent
     * @var float|null
     */
    protected ?float $depositPercent = null;
    /**
     * The finalPaymentDays
     * @var int|null
     */
    protected ?int $finalPaymentDays = null;
    /**
     * The maxDepositAmount
     * @var float|null
     */
    protected ?float $maxDepositAmount = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierSettlPaymentCondDTO
     * @uses SupplierSettlPaymentCondDTO::setDepositDays()
     * @uses SupplierSettlPaymentCondDTO::setDepositMinAmount()
     * @uses SupplierSettlPaymentCondDTO::setDepositPercent()
     * @uses SupplierSettlPaymentCondDTO::setFinalPaymentDays()
     * @uses SupplierSettlPaymentCondDTO::setMaxDepositAmount()
     * @uses SupplierSettlPaymentCondDTO::setSettlementType()
     * @uses SupplierSettlPaymentCondDTO::setSupplierId()
     * @uses SupplierSettlPaymentCondDTO::setTraveltype()
     * @uses SupplierSettlPaymentCondDTO::setValidFrom()
     * @param int $depositDays
     * @param float $depositMinAmount
     * @param float $depositPercent
     * @param int $finalPaymentDays
     * @param float $maxDepositAmount
     * @param string $settlementType
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validFrom
     */
    public function __construct(?int $depositDays = null, ?float $depositMinAmount = null, ?float $depositPercent = null, ?int $finalPaymentDays = null, ?float $maxDepositAmount = null, ?string $settlementType = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validFrom = null)
    {
        $this
            ->setDepositDays($depositDays)
            ->setDepositMinAmount($depositMinAmount)
            ->setDepositPercent($depositPercent)
            ->setFinalPaymentDays($finalPaymentDays)
            ->setMaxDepositAmount($maxDepositAmount)
            ->setSettlementType($settlementType)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom);
    }
    /**
     * Get depositDays value
     * @return int|null
     */
    public function getDepositDays(): ?int
    {
        return $this->depositDays;
    }
    /**
     * Set depositDays value
     * @param int $depositDays
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setDepositDays(?int $depositDays = null): self
    {
        // validation for constraint: int
        if (!is_null($depositDays) && !(is_int($depositDays) || ctype_digit($depositDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depositDays, true), gettype($depositDays)), __LINE__);
        }
        $this->depositDays = $depositDays;
        
        return $this;
    }
    /**
     * Get depositMinAmount value
     * @return float|null
     */
    public function getDepositMinAmount(): ?float
    {
        return $this->depositMinAmount;
    }
    /**
     * Set depositMinAmount value
     * @param float $depositMinAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setDepositMinAmount(?float $depositMinAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($depositMinAmount) && !(is_float($depositMinAmount) || is_numeric($depositMinAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositMinAmount, true), gettype($depositMinAmount)), __LINE__);
        }
        $this->depositMinAmount = $depositMinAmount;
        
        return $this;
    }
    /**
     * Get depositPercent value
     * @return float|null
     */
    public function getDepositPercent(): ?float
    {
        return $this->depositPercent;
    }
    /**
     * Set depositPercent value
     * @param float $depositPercent
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setDepositPercent(?float $depositPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($depositPercent) && !(is_float($depositPercent) || is_numeric($depositPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($depositPercent, true), gettype($depositPercent)), __LINE__);
        }
        $this->depositPercent = $depositPercent;
        
        return $this;
    }
    /**
     * Get finalPaymentDays value
     * @return int|null
     */
    public function getFinalPaymentDays(): ?int
    {
        return $this->finalPaymentDays;
    }
    /**
     * Set finalPaymentDays value
     * @param int $finalPaymentDays
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setFinalPaymentDays(?int $finalPaymentDays = null): self
    {
        // validation for constraint: int
        if (!is_null($finalPaymentDays) && !(is_int($finalPaymentDays) || ctype_digit($finalPaymentDays))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finalPaymentDays, true), gettype($finalPaymentDays)), __LINE__);
        }
        $this->finalPaymentDays = $finalPaymentDays;
        
        return $this;
    }
    /**
     * Get maxDepositAmount value
     * @return float|null
     */
    public function getMaxDepositAmount(): ?float
    {
        return $this->maxDepositAmount;
    }
    /**
     * Set maxDepositAmount value
     * @param float $maxDepositAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setMaxDepositAmount(?float $maxDepositAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($maxDepositAmount) && !(is_float($maxDepositAmount) || is_numeric($maxDepositAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxDepositAmount, true), gettype($maxDepositAmount)), __LINE__);
        }
        $this->maxDepositAmount = $maxDepositAmount;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlPaymentCondDTO
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
}
