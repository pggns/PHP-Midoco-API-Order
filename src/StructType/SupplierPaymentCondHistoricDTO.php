<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierPaymentCondHistoricDTO StructType
 * @subpackage Structs
 */
class SupplierPaymentCondHistoricDTO extends AbstractStructBase
{
    /**
     * The commissionPercentEu
     * @var float|null
     */
    protected ?float $commissionPercentEu = null;
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
     * The isMaxDepositPerPerson
     * @var bool|null
     */
    protected ?bool $isMaxDepositPerPerson = null;
    /**
     * The maxDepositAmount
     * @var float|null
     */
    protected ?float $maxDepositAmount = null;
    /**
     * The provisionPercent
     * @var float|null
     */
    protected ?float $provisionPercent = null;
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
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The valueDateByInvoice
     * @var bool|null
     */
    protected ?bool $valueDateByInvoice = null;
    /**
     * Constructor method for SupplierPaymentCondHistoricDTO
     * @uses SupplierPaymentCondHistoricDTO::setCommissionPercentEu()
     * @uses SupplierPaymentCondHistoricDTO::setDepositDays()
     * @uses SupplierPaymentCondHistoricDTO::setDepositMinAmount()
     * @uses SupplierPaymentCondHistoricDTO::setDepositPercent()
     * @uses SupplierPaymentCondHistoricDTO::setFinalPaymentDays()
     * @uses SupplierPaymentCondHistoricDTO::setIsMaxDepositPerPerson()
     * @uses SupplierPaymentCondHistoricDTO::setMaxDepositAmount()
     * @uses SupplierPaymentCondHistoricDTO::setProvisionPercent()
     * @uses SupplierPaymentCondHistoricDTO::setSupplierId()
     * @uses SupplierPaymentCondHistoricDTO::setTraveltype()
     * @uses SupplierPaymentCondHistoricDTO::setValidCreationTravel()
     * @uses SupplierPaymentCondHistoricDTO::setValidDate()
     * @uses SupplierPaymentCondHistoricDTO::setValidFrom()
     * @uses SupplierPaymentCondHistoricDTO::setValueDateByInvoice()
     * @param float $commissionPercentEu
     * @param int $depositDays
     * @param float $depositMinAmount
     * @param float $depositPercent
     * @param int $finalPaymentDays
     * @param bool $isMaxDepositPerPerson
     * @param float $maxDepositAmount
     * @param float $provisionPercent
     * @param string $supplierId
     * @param string $traveltype
     * @param string $validCreationTravel
     * @param string $validDate
     * @param string $validFrom
     * @param bool $valueDateByInvoice
     */
    public function __construct(?float $commissionPercentEu = null, ?int $depositDays = null, ?float $depositMinAmount = null, ?float $depositPercent = null, ?int $finalPaymentDays = null, ?bool $isMaxDepositPerPerson = null, ?float $maxDepositAmount = null, ?float $provisionPercent = null, ?string $supplierId = null, ?string $traveltype = null, ?string $validCreationTravel = null, ?string $validDate = null, ?string $validFrom = null, ?bool $valueDateByInvoice = null)
    {
        $this
            ->setCommissionPercentEu($commissionPercentEu)
            ->setDepositDays($depositDays)
            ->setDepositMinAmount($depositMinAmount)
            ->setDepositPercent($depositPercent)
            ->setFinalPaymentDays($finalPaymentDays)
            ->setIsMaxDepositPerPerson($isMaxDepositPerPerson)
            ->setMaxDepositAmount($maxDepositAmount)
            ->setProvisionPercent($provisionPercent)
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setValidCreationTravel($validCreationTravel)
            ->setValidDate($validDate)
            ->setValidFrom($validFrom)
            ->setValueDateByInvoice($valueDateByInvoice);
    }
    /**
     * Get commissionPercentEu value
     * @return float|null
     */
    public function getCommissionPercentEu(): ?float
    {
        return $this->commissionPercentEu;
    }
    /**
     * Set commissionPercentEu value
     * @param float $commissionPercentEu
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
     */
    public function setCommissionPercentEu(?float $commissionPercentEu = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercentEu) && !(is_float($commissionPercentEu) || is_numeric($commissionPercentEu))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercentEu, true), gettype($commissionPercentEu)), __LINE__);
        }
        $this->commissionPercentEu = $commissionPercentEu;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * Get isMaxDepositPerPerson value
     * @return bool|null
     */
    public function getIsMaxDepositPerPerson(): ?bool
    {
        return $this->isMaxDepositPerPerson;
    }
    /**
     * Set isMaxDepositPerPerson value
     * @param bool $isMaxDepositPerPerson
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
     */
    public function setIsMaxDepositPerPerson(?bool $isMaxDepositPerPerson = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isMaxDepositPerPerson) && !is_bool($isMaxDepositPerPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMaxDepositPerPerson, true), gettype($isMaxDepositPerPerson)), __LINE__);
        }
        $this->isMaxDepositPerPerson = $isMaxDepositPerPerson;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * Get provisionPercent value
     * @return float|null
     */
    public function getProvisionPercent(): ?float
    {
        return $this->provisionPercent;
    }
    /**
     * Set provisionPercent value
     * @param float $provisionPercent
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
     */
    public function setProvisionPercent(?float $provisionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionPercent) && !(is_float($provisionPercent) || is_numeric($provisionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionPercent, true), gettype($provisionPercent)), __LINE__);
        }
        $this->provisionPercent = $provisionPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * Get validCreationTravel value
     * @return string|null
     */
    public function getValidCreationTravel(): ?string
    {
        return $this->validCreationTravel;
    }
    /**
     * Set validCreationTravel value
     * @param string $validCreationTravel
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
     */
    public function setValidCreationTravel(?string $validCreationTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($validCreationTravel) && !is_string($validCreationTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validCreationTravel, true), gettype($validCreationTravel)), __LINE__);
        }
        $this->validCreationTravel = $validCreationTravel;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
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
     * Get valueDateByInvoice value
     * @return bool|null
     */
    public function getValueDateByInvoice(): ?bool
    {
        return $this->valueDateByInvoice;
    }
    /**
     * Set valueDateByInvoice value
     * @param bool $valueDateByInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SupplierPaymentCondHistoricDTO
     */
    public function setValueDateByInvoice(?bool $valueDateByInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valueDateByInvoice) && !is_bool($valueDateByInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valueDateByInvoice, true), gettype($valueDateByInvoice)), __LINE__);
        }
        $this->valueDateByInvoice = $valueDateByInvoice;
        
        return $this;
    }
}
