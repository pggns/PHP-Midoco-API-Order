<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatistikAtLoadDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class StatistikAtLoadDataRequest extends AbstractStructBase
{
    /**
     * The dataType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dataType = null;
    /**
     * The filterCityName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterCityName = null;
    /**
     * The filterPostalCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterPostalCode = null;
    /**
     * The filterRegion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterRegion = null;
    /**
     * The filterStreetName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterStreetName = null;
    /**
     * Constructor method for StatistikAtLoadDataRequest
     * @uses StatistikAtLoadDataRequest::setDataType()
     * @uses StatistikAtLoadDataRequest::setFilterCityName()
     * @uses StatistikAtLoadDataRequest::setFilterPostalCode()
     * @uses StatistikAtLoadDataRequest::setFilterRegion()
     * @uses StatistikAtLoadDataRequest::setFilterStreetName()
     * @param string $dataType
     * @param string $filterCityName
     * @param string $filterPostalCode
     * @param string $filterRegion
     * @param string $filterStreetName
     */
    public function __construct(?string $dataType = null, ?string $filterCityName = null, ?string $filterPostalCode = null, ?string $filterRegion = null, ?string $filterStreetName = null)
    {
        $this
            ->setDataType($dataType)
            ->setFilterCityName($filterCityName)
            ->setFilterPostalCode($filterPostalCode)
            ->setFilterRegion($filterRegion)
            ->setFilterStreetName($filterStreetName);
    }
    /**
     * Get dataType value
     * @return string|null
     */
    public function getDataType(): ?string
    {
        return $this->dataType;
    }
    /**
     * Set dataType value
     * @param string $dataType
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtLoadDataRequest
     */
    public function setDataType(?string $dataType = null): self
    {
        // validation for constraint: string
        if (!is_null($dataType) && !is_string($dataType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataType, true), gettype($dataType)), __LINE__);
        }
        $this->dataType = $dataType;
        
        return $this;
    }
    /**
     * Get filterCityName value
     * @return string|null
     */
    public function getFilterCityName(): ?string
    {
        return $this->filterCityName;
    }
    /**
     * Set filterCityName value
     * @param string $filterCityName
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtLoadDataRequest
     */
    public function setFilterCityName(?string $filterCityName = null): self
    {
        // validation for constraint: string
        if (!is_null($filterCityName) && !is_string($filterCityName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterCityName, true), gettype($filterCityName)), __LINE__);
        }
        $this->filterCityName = $filterCityName;
        
        return $this;
    }
    /**
     * Get filterPostalCode value
     * @return string|null
     */
    public function getFilterPostalCode(): ?string
    {
        return $this->filterPostalCode;
    }
    /**
     * Set filterPostalCode value
     * @param string $filterPostalCode
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtLoadDataRequest
     */
    public function setFilterPostalCode(?string $filterPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($filterPostalCode) && !is_string($filterPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterPostalCode, true), gettype($filterPostalCode)), __LINE__);
        }
        $this->filterPostalCode = $filterPostalCode;
        
        return $this;
    }
    /**
     * Get filterRegion value
     * @return string|null
     */
    public function getFilterRegion(): ?string
    {
        return $this->filterRegion;
    }
    /**
     * Set filterRegion value
     * @param string $filterRegion
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtLoadDataRequest
     */
    public function setFilterRegion(?string $filterRegion = null): self
    {
        // validation for constraint: string
        if (!is_null($filterRegion) && !is_string($filterRegion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterRegion, true), gettype($filterRegion)), __LINE__);
        }
        $this->filterRegion = $filterRegion;
        
        return $this;
    }
    /**
     * Get filterStreetName value
     * @return string|null
     */
    public function getFilterStreetName(): ?string
    {
        return $this->filterStreetName;
    }
    /**
     * Set filterStreetName value
     * @param string $filterStreetName
     * @return \Pggns\MidocoApi\Order\StructType\StatistikAtLoadDataRequest
     */
    public function setFilterStreetName(?string $filterStreetName = null): self
    {
        // validation for constraint: string
        if (!is_null($filterStreetName) && !is_string($filterStreetName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterStreetName, true), gettype($filterStreetName)), __LINE__);
        }
        $this->filterStreetName = $filterStreetName;
        
        return $this;
    }
}
