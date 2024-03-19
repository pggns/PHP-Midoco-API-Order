<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoExportNamesTableChooserValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoExportNamesTableChooserValue extends AbstractStructBase
{
    /**
     * The travellerIsSelected
     * @var bool|null
     */
    protected ?bool $travellerIsSelected = null;
    /**
     * The travellerName
     * @var string|null
     */
    protected ?string $travellerName = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The additionalIsSelected
     * @var bool|null
     */
    protected ?bool $additionalIsSelected = null;
    /**
     * The additionalName
     * @var string|null
     */
    protected ?string $additionalName = null;
    /**
     * Constructor method for MidocoExportNamesTableChooserValue
     * @uses MidocoExportNamesTableChooserValue::setTravellerIsSelected()
     * @uses MidocoExportNamesTableChooserValue::setTravellerName()
     * @uses MidocoExportNamesTableChooserValue::setTravellerId()
     * @uses MidocoExportNamesTableChooserValue::setAdditionalIsSelected()
     * @uses MidocoExportNamesTableChooserValue::setAdditionalName()
     * @param bool $travellerIsSelected
     * @param string $travellerName
     * @param int $travellerId
     * @param bool $additionalIsSelected
     * @param string $additionalName
     */
    public function __construct(?bool $travellerIsSelected = null, ?string $travellerName = null, ?int $travellerId = null, ?bool $additionalIsSelected = null, ?string $additionalName = null)
    {
        $this
            ->setTravellerIsSelected($travellerIsSelected)
            ->setTravellerName($travellerName)
            ->setTravellerId($travellerId)
            ->setAdditionalIsSelected($additionalIsSelected)
            ->setAdditionalName($additionalName);
    }
    /**
     * Get travellerIsSelected value
     * @return bool|null
     */
    public function getTravellerIsSelected(): ?bool
    {
        return $this->travellerIsSelected;
    }
    /**
     * Set travellerIsSelected value
     * @param bool $travellerIsSelected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExportNamesTableChooserValue
     */
    public function setTravellerIsSelected(?bool $travellerIsSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travellerIsSelected) && !is_bool($travellerIsSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travellerIsSelected, true), gettype($travellerIsSelected)), __LINE__);
        }
        $this->travellerIsSelected = $travellerIsSelected;
        
        return $this;
    }
    /**
     * Get travellerName value
     * @return string|null
     */
    public function getTravellerName(): ?string
    {
        return $this->travellerName;
    }
    /**
     * Set travellerName value
     * @param string $travellerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExportNamesTableChooserValue
     */
    public function setTravellerName(?string $travellerName = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerName) && !is_string($travellerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerName, true), gettype($travellerName)), __LINE__);
        }
        $this->travellerName = $travellerName;
        
        return $this;
    }
    /**
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExportNamesTableChooserValue
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get additionalIsSelected value
     * @return bool|null
     */
    public function getAdditionalIsSelected(): ?bool
    {
        return $this->additionalIsSelected;
    }
    /**
     * Set additionalIsSelected value
     * @param bool $additionalIsSelected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExportNamesTableChooserValue
     */
    public function setAdditionalIsSelected(?bool $additionalIsSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($additionalIsSelected) && !is_bool($additionalIsSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($additionalIsSelected, true), gettype($additionalIsSelected)), __LINE__);
        }
        $this->additionalIsSelected = $additionalIsSelected;
        
        return $this;
    }
    /**
     * Get additionalName value
     * @return string|null
     */
    public function getAdditionalName(): ?string
    {
        return $this->additionalName;
    }
    /**
     * Set additionalName value
     * @param string $additionalName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExportNamesTableChooserValue
     */
    public function setAdditionalName(?string $additionalName = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalName) && !is_string($additionalName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalName, true), gettype($additionalName)), __LINE__);
        }
        $this->additionalName = $additionalName;
        
        return $this;
    }
}
