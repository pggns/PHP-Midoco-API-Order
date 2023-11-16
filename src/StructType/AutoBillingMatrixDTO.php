<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoBillingMatrixDTO StructType
 * @subpackage Structs
 */
class AutoBillingMatrixDTO extends AbstractStructBase
{
    /**
     * The crsName
     * @var string|null
     */
    protected ?string $crsName = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The deliveryType
     * @var string|null
     */
    protected ?string $deliveryType = null;
    /**
     * The isFeeRequired
     * @var bool|null
     */
    protected ?bool $isFeeRequired = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * Constructor method for AutoBillingMatrixDTO
     * @uses AutoBillingMatrixDTO::setCrsName()
     * @uses AutoBillingMatrixDTO::setCustomerId()
     * @uses AutoBillingMatrixDTO::setDeliveryType()
     * @uses AutoBillingMatrixDTO::setIsFeeRequired()
     * @uses AutoBillingMatrixDTO::setTravelType()
     * @param string $crsName
     * @param int $customerId
     * @param string $deliveryType
     * @param bool $isFeeRequired
     * @param string $travelType
     */
    public function __construct(?string $crsName = null, ?int $customerId = null, ?string $deliveryType = null, ?bool $isFeeRequired = null, ?string $travelType = null)
    {
        $this
            ->setCrsName($crsName)
            ->setCustomerId($customerId)
            ->setDeliveryType($deliveryType)
            ->setIsFeeRequired($isFeeRequired)
            ->setTravelType($travelType);
    }
    /**
     * Get crsName value
     * @return string|null
     */
    public function getCrsName(): ?string
    {
        return $this->crsName;
    }
    /**
     * Set crsName value
     * @param string $crsName
     * @return \Pggns\MidocoApi\Order\StructType\AutoBillingMatrixDTO
     */
    public function setCrsName(?string $crsName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsName) && !is_string($crsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsName, true), gettype($crsName)), __LINE__);
        }
        $this->crsName = $crsName;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\AutoBillingMatrixDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @param string $deliveryType
     * @return \Pggns\MidocoApi\Order\StructType\AutoBillingMatrixDTO
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        
        return $this;
    }
    /**
     * Get isFeeRequired value
     * @return bool|null
     */
    public function getIsFeeRequired(): ?bool
    {
        return $this->isFeeRequired;
    }
    /**
     * Set isFeeRequired value
     * @param bool $isFeeRequired
     * @return \Pggns\MidocoApi\Order\StructType\AutoBillingMatrixDTO
     */
    public function setIsFeeRequired(?bool $isFeeRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFeeRequired) && !is_bool($isFeeRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFeeRequired, true), gettype($isFeeRequired)), __LINE__);
        }
        $this->isFeeRequired = $isFeeRequired;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\AutoBillingMatrixDTO
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
}
