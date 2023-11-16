<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMediatorAmountsRequest StructType
 * @subpackage Structs
 */
class UpdateMediatorAmountsRequest extends AbstractStructBase
{
    /**
     * The travelTypes
     * @var string|null
     */
    protected ?string $travelTypes = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The fromDate
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - pattern: dd.MM.yyyy
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - pattern: dd.MM.yyyy
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The excludedTravelTypes
     * @var string|null
     */
    protected ?string $excludedTravelTypes = null;
    /**
     * The includeSettledBookings
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $includeSettledBookings = null;
    /**
     * Constructor method for UpdateMediatorAmountsRequest
     * @uses UpdateMediatorAmountsRequest::setTravelTypes()
     * @uses UpdateMediatorAmountsRequest::setSupplierId()
     * @uses UpdateMediatorAmountsRequest::setMediatorType()
     * @uses UpdateMediatorAmountsRequest::setFromDate()
     * @uses UpdateMediatorAmountsRequest::setEndDate()
     * @uses UpdateMediatorAmountsRequest::setExcludedTravelTypes()
     * @uses UpdateMediatorAmountsRequest::setIncludeSettledBookings()
     * @param string $travelTypes
     * @param string $supplierId
     * @param string $mediatorType
     * @param string $fromDate
     * @param string $endDate
     * @param string $excludedTravelTypes
     * @param bool $includeSettledBookings
     */
    public function __construct(?string $travelTypes = null, ?string $supplierId = null, ?string $mediatorType = null, ?string $fromDate = null, ?string $endDate = null, ?string $excludedTravelTypes = null, ?bool $includeSettledBookings = false)
    {
        $this
            ->setTravelTypes($travelTypes)
            ->setSupplierId($supplierId)
            ->setMediatorType($mediatorType)
            ->setFromDate($fromDate)
            ->setEndDate($endDate)
            ->setExcludedTravelTypes($excludedTravelTypes)
            ->setIncludeSettledBookings($includeSettledBookings);
    }
    /**
     * Get travelTypes value
     * @return string|null
     */
    public function getTravelTypes(): ?string
    {
        return $this->travelTypes;
    }
    /**
     * Set travelTypes value
     * @param string $travelTypes
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
     */
    public function setTravelTypes(?string $travelTypes = null): self
    {
        // validation for constraint: string
        if (!is_null($travelTypes) && !is_string($travelTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelTypes, true), gettype($travelTypes)), __LINE__);
        }
        $this->travelTypes = $travelTypes;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
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
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        // validation for constraint: pattern(dd.MM.yyyy)
        if (!is_null($fromDate) && !preg_match('/dd.MM.yyyy/', $fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /dd.MM.yyyy/', var_export($fromDate, true)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        // validation for constraint: pattern(dd.MM.yyyy)
        if (!is_null($endDate) && !preg_match('/dd.MM.yyyy/', $endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /dd.MM.yyyy/', var_export($endDate, true)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get excludedTravelTypes value
     * @return string|null
     */
    public function getExcludedTravelTypes(): ?string
    {
        return $this->excludedTravelTypes;
    }
    /**
     * Set excludedTravelTypes value
     * @param string $excludedTravelTypes
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
     */
    public function setExcludedTravelTypes(?string $excludedTravelTypes = null): self
    {
        // validation for constraint: string
        if (!is_null($excludedTravelTypes) && !is_string($excludedTravelTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedTravelTypes, true), gettype($excludedTravelTypes)), __LINE__);
        }
        $this->excludedTravelTypes = $excludedTravelTypes;
        
        return $this;
    }
    /**
     * Get includeSettledBookings value
     * @return bool|null
     */
    public function getIncludeSettledBookings(): ?bool
    {
        return $this->includeSettledBookings;
    }
    /**
     * Set includeSettledBookings value
     * @param bool $includeSettledBookings
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest
     */
    public function setIncludeSettledBookings(?bool $includeSettledBookings = false): self
    {
        // validation for constraint: boolean
        if (!is_null($includeSettledBookings) && !is_bool($includeSettledBookings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSettledBookings, true), gettype($includeSettledBookings)), __LINE__);
        }
        $this->includeSettledBookings = $includeSettledBookings;
        
        return $this;
    }
}
