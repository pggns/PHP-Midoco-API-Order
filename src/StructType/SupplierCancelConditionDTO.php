<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierCancelConditionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierCancelConditionDTO extends AbstractStructBase
{
    /**
     * The daysBeforeTravel
     * @var int|null
     */
    protected ?int $daysBeforeTravel = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The feeCode
     * @var string|null
     */
    protected ?string $feeCode = null;
    /**
     * The feeSupplier
     * @var string|null
     */
    protected ?string $feeSupplier = null;
    /**
     * The minAmount
     * @var float|null
     */
    protected ?float $minAmount = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
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
     * Constructor method for SupplierCancelConditionDTO
     * @uses SupplierCancelConditionDTO::setDaysBeforeTravel()
     * @uses SupplierCancelConditionDTO::setDestination()
     * @uses SupplierCancelConditionDTO::setFeeCode()
     * @uses SupplierCancelConditionDTO::setFeeSupplier()
     * @uses SupplierCancelConditionDTO::setMinAmount()
     * @uses SupplierCancelConditionDTO::setPercent()
     * @uses SupplierCancelConditionDTO::setSupplierId()
     * @uses SupplierCancelConditionDTO::setTraveltype()
     * @uses SupplierCancelConditionDTO::setValidFrom()
     * @param int $daysBeforeTravel
     * @param string $destination
     * @param string $feeCode
     * @param string $feeSupplier
     * @param float $minAmount
     * @param float $percent
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validFrom
     */
    public function __construct(?int $daysBeforeTravel = null, ?string $destination = null, ?string $feeCode = null, ?string $feeSupplier = null, ?float $minAmount = null, ?float $percent = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validFrom = null)
    {
        $this
            ->setDaysBeforeTravel($daysBeforeTravel)
            ->setDestination($destination)
            ->setFeeCode($feeCode)
            ->setFeeSupplier($feeSupplier)
            ->setMinAmount($minAmount)
            ->setPercent($percent)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom);
    }
    /**
     * Get daysBeforeTravel value
     * @return int|null
     */
    public function getDaysBeforeTravel(): ?int
    {
        return $this->daysBeforeTravel;
    }
    /**
     * Set daysBeforeTravel value
     * @param int $daysBeforeTravel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
     */
    public function setDaysBeforeTravel(?int $daysBeforeTravel = null): self
    {
        // validation for constraint: int
        if (!is_null($daysBeforeTravel) && !(is_int($daysBeforeTravel) || ctype_digit($daysBeforeTravel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($daysBeforeTravel, true), gettype($daysBeforeTravel)), __LINE__);
        }
        $this->daysBeforeTravel = $daysBeforeTravel;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get feeCode value
     * @return string|null
     */
    public function getFeeCode(): ?string
    {
        return $this->feeCode;
    }
    /**
     * Set feeCode value
     * @param string $feeCode
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
     */
    public function setFeeCode(?string $feeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCode, true), gettype($feeCode)), __LINE__);
        }
        $this->feeCode = $feeCode;
        
        return $this;
    }
    /**
     * Get feeSupplier value
     * @return string|null
     */
    public function getFeeSupplier(): ?string
    {
        return $this->feeSupplier;
    }
    /**
     * Set feeSupplier value
     * @param string $feeSupplier
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
     */
    public function setFeeSupplier(?string $feeSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($feeSupplier) && !is_string($feeSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeSupplier, true), gettype($feeSupplier)), __LINE__);
        }
        $this->feeSupplier = $feeSupplier;
        
        return $this;
    }
    /**
     * Get minAmount value
     * @return float|null
     */
    public function getMinAmount(): ?float
    {
        return $this->minAmount;
    }
    /**
     * Set minAmount value
     * @param float $minAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
     */
    public function setMinAmount(?float $minAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($minAmount) && !(is_float($minAmount) || is_numeric($minAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minAmount, true), gettype($minAmount)), __LINE__);
        }
        $this->minAmount = $minAmount;
        
        return $this;
    }
    /**
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCancelConditionDTO
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
