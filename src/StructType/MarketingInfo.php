<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for marketingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: This is customer specific marketing information used for reporting (some fields specific for some backoffice systems using the VERK standard protocol)
 * @subpackage Structs
 */
class MarketingInfo extends AbstractStructBase
{
    /**
     * The areaCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $areaCode = null;
    /**
     * The travelDuration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelDuration = null;
    /**
     * The season
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $season = null;
    /**
     * The travelType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The transportation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transportation = null;
    /**
     * The personCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $personCount = null;
    /**
     * The searchCriteria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SearchCriteria $searchCriteria = null;
    /**
     * The attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Attribute[]
     */
    protected array $attribute = [];
    /**
     * Constructor method for marketingInfo
     * @uses MarketingInfo::setAreaCode()
     * @uses MarketingInfo::setTravelDuration()
     * @uses MarketingInfo::setSeason()
     * @uses MarketingInfo::setTravelType()
     * @uses MarketingInfo::setTransportation()
     * @uses MarketingInfo::setPersonCount()
     * @uses MarketingInfo::setSearchCriteria()
     * @uses MarketingInfo::setAttribute()
     * @param string $areaCode
     * @param string $travelDuration
     * @param string $season
     * @param string $travelType
     * @param string $transportation
     * @param string $personCount
     * @param \Pggns\MidocoApi\Order\StructType\SearchCriteria $searchCriteria
     * @param \Pggns\MidocoApi\Order\StructType\Attribute[] $attribute
     */
    public function __construct(?string $areaCode = null, ?string $travelDuration = null, ?string $season = null, ?string $travelType = null, ?string $transportation = null, ?string $personCount = null, ?\Pggns\MidocoApi\Order\StructType\SearchCriteria $searchCriteria = null, array $attribute = [])
    {
        $this
            ->setAreaCode($areaCode)
            ->setTravelDuration($travelDuration)
            ->setSeason($season)
            ->setTravelType($travelType)
            ->setTransportation($transportation)
            ->setPersonCount($personCount)
            ->setSearchCriteria($searchCriteria)
            ->setAttribute($attribute);
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $areaCode
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        
        return $this;
    }
    /**
     * Get travelDuration value
     * @return string|null
     */
    public function getTravelDuration(): ?string
    {
        return $this->travelDuration;
    }
    /**
     * Set travelDuration value
     * @param string $travelDuration
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setTravelDuration(?string $travelDuration = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDuration) && !is_string($travelDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDuration, true), gettype($travelDuration)), __LINE__);
        }
        $this->travelDuration = $travelDuration;
        
        return $this;
    }
    /**
     * Get season value
     * @return string|null
     */
    public function getSeason(): ?string
    {
        return $this->season;
    }
    /**
     * Set season value
     * @param string $season
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setSeason(?string $season = null): self
    {
        // validation for constraint: string
        if (!is_null($season) && !is_string($season)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($season, true), gettype($season)), __LINE__);
        }
        $this->season = $season;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
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
    /**
     * Get transportation value
     * @return string|null
     */
    public function getTransportation(): ?string
    {
        return $this->transportation;
    }
    /**
     * Set transportation value
     * @param string $transportation
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setTransportation(?string $transportation = null): self
    {
        // validation for constraint: string
        if (!is_null($transportation) && !is_string($transportation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportation, true), gettype($transportation)), __LINE__);
        }
        $this->transportation = $transportation;
        
        return $this;
    }
    /**
     * Get personCount value
     * @return string|null
     */
    public function getPersonCount(): ?string
    {
        return $this->personCount;
    }
    /**
     * Set personCount value
     * @param string $personCount
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setPersonCount(?string $personCount = null): self
    {
        // validation for constraint: string
        if (!is_null($personCount) && !is_string($personCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personCount, true), gettype($personCount)), __LINE__);
        }
        $this->personCount = $personCount;
        
        return $this;
    }
    /**
     * Get searchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\SearchCriteria|null
     */
    public function getSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\SearchCriteria
    {
        return $this->searchCriteria;
    }
    /**
     * Set searchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\SearchCriteria $searchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setSearchCriteria(?\Pggns\MidocoApi\Order\StructType\SearchCriteria $searchCriteria = null): self
    {
        $this->searchCriteria = $searchCriteria;
        
        return $this;
    }
    /**
     * Get attribute value
     * @return \Pggns\MidocoApi\Order\StructType\Attribute[]
     */
    public function getAttribute(): array
    {
        return $this->attribute;
    }
    /**
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $marketingInfoAttributeItem) {
            // validation for constraint: itemType
            if (!$marketingInfoAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\Attribute) {
                $invalidValues[] = is_object($marketingInfoAttributeItem) ? get_class($marketingInfoAttributeItem) : sprintf('%s(%s)', gettype($marketingInfoAttributeItem), var_export($marketingInfoAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute[] $attribute
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function setAttribute(array $attribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute $item
     * @return \Pggns\MidocoApi\Order\StructType\MarketingInfo
     */
    public function addToAttribute(\Pggns\MidocoApi\Order\StructType\Attribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Attribute) {
            throw new InvalidArgumentException(sprintf('The attribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attribute[] = $item;
        
        return $this;
    }
}
