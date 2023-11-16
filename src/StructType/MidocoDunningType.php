<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDunningType StructType
 * @subpackage Structs
 */
class MidocoDunningType extends DunningDTO
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
     * The isStornoOrder
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isStornoOrder = null;
    /**
     * The excUserName
     * @var string|null
     */
    protected ?string $excUserName = null;
    /**
     * The storeUntil
     * @var string|null
     */
    protected ?string $storeUntil = null;
    /**
     * Constructor method for MidocoDunningType
     * @uses MidocoDunningType::setDunningDate()
     * @uses MidocoDunningType::setTravelDate()
     * @uses MidocoDunningType::setIsStornoOrder()
     * @uses MidocoDunningType::setExcUserName()
     * @uses MidocoDunningType::setStoreUntil()
     * @param string $dunningDate
     * @param string $travelDate
     * @param bool $isStornoOrder
     * @param string $excUserName
     * @param string $storeUntil
     */
    public function __construct(?string $dunningDate = null, ?string $travelDate = null, ?bool $isStornoOrder = true, ?string $excUserName = null, ?string $storeUntil = null)
    {
        $this
            ->setDunningDate($dunningDate)
            ->setTravelDate($travelDate)
            ->setIsStornoOrder($isStornoOrder)
            ->setExcUserName($excUserName)
            ->setStoreUntil($storeUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningType
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
}
