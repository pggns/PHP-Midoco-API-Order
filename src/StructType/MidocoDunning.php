<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDunning StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDunning extends DunningDTO
{
    /**
     * The dunningDate
     * @var string|null
     */
    protected ?string $dunningDate = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The orderCreationDate
     * @var string|null
     */
    protected ?string $orderCreationDate = null;
    /**
     * The isStornoOrder
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isStornoOrder = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The dunningAmountWithoutDunningCharges
     * @var float|null
     */
    protected ?float $dunningAmountWithoutDunningCharges = null;
    /**
     * The ignoreDunning
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreDunning = null;
    /**
     * The excUserName
     * @var string|null
     */
    protected ?string $excUserName = null;
    /**
     * The isRequestOrder
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isRequestOrder = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * Constructor method for MidocoDunning
     * @uses MidocoDunning::setDunningDate()
     * @uses MidocoDunning::setTravelDate()
     * @uses MidocoDunning::setOrderCreationDate()
     * @uses MidocoDunning::setIsStornoOrder()
     * @uses MidocoDunning::setUnitName()
     * @uses MidocoDunning::setDunningAmountWithoutDunningCharges()
     * @uses MidocoDunning::setIgnoreDunning()
     * @uses MidocoDunning::setExcUserName()
     * @uses MidocoDunning::setIsRequestOrder()
     * @uses MidocoDunning::setStoreUntil()
     * @uses MidocoDunning::setPaymentType()
     * @param string $dunningDate
     * @param string $travelDate
     * @param string $orderCreationDate
     * @param bool $isStornoOrder
     * @param string $unitName
     * @param float $dunningAmountWithoutDunningCharges
     * @param bool $ignoreDunning
     * @param string $excUserName
     * @param bool $isRequestOrder
     * @param string $storeUntil
     * @param string $paymentType
     */
    public function __construct(?string $dunningDate = null, ?string $travelDate = null, ?string $orderCreationDate = null, ?bool $isStornoOrder = true, ?string $unitName = null, ?float $dunningAmountWithoutDunningCharges = null, ?bool $ignoreDunning = false, ?string $excUserName = null, ?bool $isRequestOrder = false, ?string $storeUntil = null, ?string $paymentType = null)
    {
        $this
            ->setDunningDate($dunningDate)
            ->setTravelDate($travelDate)
            ->setOrderCreationDate($orderCreationDate)
            ->setIsStornoOrder($isStornoOrder)
            ->setUnitName($unitName)
            ->setDunningAmountWithoutDunningCharges($dunningAmountWithoutDunningCharges)
            ->setIgnoreDunning($ignoreDunning)
            ->setExcUserName($excUserName)
            ->setIsRequestOrder($isRequestOrder)
            ->setStoreUntil($storeUntil)
            ->setPaymentType($paymentType);
    }
    /**
     * Get dunningDate value
     * @return string|null
     */
    public function getDunningDate(): ?string
    {
        return $this->dunningDate;
    }
    /**
     * Set dunningDate value
     * @param string $dunningDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setDunningDate(?string $dunningDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dunningDate) && !is_string($dunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunningDate, true), gettype($dunningDate)), __LINE__);
        }
        $this->dunningDate = $dunningDate;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get orderCreationDate value
     * @return string|null
     */
    public function getOrderCreationDate(): ?string
    {
        return $this->orderCreationDate;
    }
    /**
     * Set orderCreationDate value
     * @param string $orderCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setOrderCreationDate(?string $orderCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($orderCreationDate) && !is_string($orderCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderCreationDate, true), gettype($orderCreationDate)), __LINE__);
        }
        $this->orderCreationDate = $orderCreationDate;
        
        return $this;
    }
    /**
     * Get isStornoOrder value
     * @return bool|null
     */
    public function getIsStornoOrder(): ?bool
    {
        return $this->isStornoOrder;
    }
    /**
     * Set isStornoOrder value
     * @param bool $isStornoOrder
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setIsStornoOrder(?bool $isStornoOrder = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isStornoOrder) && !is_bool($isStornoOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStornoOrder, true), gettype($isStornoOrder)), __LINE__);
        }
        $this->isStornoOrder = $isStornoOrder;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
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
     * Get dunningAmountWithoutDunningCharges value
     * @return float|null
     */
    public function getDunningAmountWithoutDunningCharges(): ?float
    {
        return $this->dunningAmountWithoutDunningCharges;
    }
    /**
     * Set dunningAmountWithoutDunningCharges value
     * @param float $dunningAmountWithoutDunningCharges
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setDunningAmountWithoutDunningCharges(?float $dunningAmountWithoutDunningCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($dunningAmountWithoutDunningCharges) && !(is_float($dunningAmountWithoutDunningCharges) || is_numeric($dunningAmountWithoutDunningCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dunningAmountWithoutDunningCharges, true), gettype($dunningAmountWithoutDunningCharges)), __LINE__);
        }
        $this->dunningAmountWithoutDunningCharges = $dunningAmountWithoutDunningCharges;
        
        return $this;
    }
    /**
     * Get ignoreDunning value
     * @return bool|null
     */
    public function getIgnoreDunning(): ?bool
    {
        return $this->ignoreDunning;
    }
    /**
     * Set ignoreDunning value
     * @param bool $ignoreDunning
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setIgnoreDunning(?bool $ignoreDunning = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreDunning) && !is_bool($ignoreDunning)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreDunning, true), gettype($ignoreDunning)), __LINE__);
        }
        $this->ignoreDunning = $ignoreDunning;
        
        return $this;
    }
    /**
     * Get excUserName value
     * @return string|null
     */
    public function getExcUserName(): ?string
    {
        return $this->excUserName;
    }
    /**
     * Set excUserName value
     * @param string $excUserName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setExcUserName(?string $excUserName = null): self
    {
        // validation for constraint: string
        if (!is_null($excUserName) && !is_string($excUserName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excUserName, true), gettype($excUserName)), __LINE__);
        }
        $this->excUserName = $excUserName;
        
        return $this;
    }
    /**
     * Get isRequestOrder value
     * @return bool|null
     */
    public function getIsRequestOrder(): ?bool
    {
        return $this->isRequestOrder;
    }
    /**
     * Set isRequestOrder value
     * @param bool $isRequestOrder
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setIsRequestOrder(?bool $isRequestOrder = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isRequestOrder) && !is_bool($isRequestOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRequestOrder, true), gettype($isRequestOrder)), __LINE__);
        }
        $this->isRequestOrder = $isRequestOrder;
        
        return $this;
    }
    /**
     * Get storeUntil value
     * @return string|null
     */
    public function getStoreUntil(): ?string
    {
        return $this->storeUntil;
    }
    /**
     * Set storeUntil value
     * @param string $storeUntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setStoreUntil(?string $storeUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($storeUntil) && !is_string($storeUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeUntil, true), gettype($storeUntil)), __LINE__);
        }
        $this->storeUntil = $storeUntil;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunning
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
}
