<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for marketing-info StructType
 * Meta information extracted from the WSDL
 * - documentation: This is customer specific marketing information used for reporting (some fields specific for some backoffice systems using the VERK standard protocol)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Marketing_info extends AbstractStructBase
{
    /**
     * The area_code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $area_code = null;
    /**
     * The travel_duration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travel_duration = null;
    /**
     * The season
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $season = null;
    /**
     * The travel_type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travel_type = null;
    /**
     * The transportation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transportation = null;
    /**
     * The person_count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $person_count = null;
    /**
     * The search_criteria
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Search_criteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Search_criteria $search_criteria = null;
    /**
     * The attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Attribute[]
     */
    protected ?array $attribute = null;
    /**
     * Constructor method for marketing-info
     * @uses Marketing_info::setArea_code()
     * @uses Marketing_info::setTravel_duration()
     * @uses Marketing_info::setSeason()
     * @uses Marketing_info::setTravel_type()
     * @uses Marketing_info::setTransportation()
     * @uses Marketing_info::setPerson_count()
     * @uses Marketing_info::setSearch_criteria()
     * @uses Marketing_info::setAttribute()
     * @param string $area_code
     * @param string $travel_duration
     * @param string $season
     * @param string $travel_type
     * @param string $transportation
     * @param string $person_count
     * @param \Pggns\MidocoApi\Order\StructType\Search_criteria $search_criteria
     * @param \Pggns\MidocoApi\Order\StructType\Attribute[] $attribute
     */
    public function __construct(?string $area_code = null, ?string $travel_duration = null, ?string $season = null, ?string $travel_type = null, ?string $transportation = null, ?string $person_count = null, ?\Pggns\MidocoApi\Order\StructType\Search_criteria $search_criteria = null, ?array $attribute = null)
    {
        $this
            ->setArea_code($area_code)
            ->setTravel_duration($travel_duration)
            ->setSeason($season)
            ->setTravel_type($travel_type)
            ->setTransportation($transportation)
            ->setPerson_count($person_count)
            ->setSearch_criteria($search_criteria)
            ->setAttribute($attribute);
    }
    /**
     * Get area_code value
     * @return string|null
     */
    public function getArea_code(): ?string
    {
        return $this->{'area-code'};
    }
    /**
     * Set area_code value
     * @param string $area_code
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
     */
    public function setArea_code(?string $area_code = null): self
    {
        // validation for constraint: string
        if (!is_null($area_code) && !is_string($area_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($area_code, true), gettype($area_code)), __LINE__);
        }
        $this->area_code = $this->{'area-code'} = $area_code;
        
        return $this;
    }
    /**
     * Get travel_duration value
     * @return string|null
     */
    public function getTravel_duration(): ?string
    {
        return $this->{'travel-duration'};
    }
    /**
     * Set travel_duration value
     * @param string $travel_duration
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
     */
    public function setTravel_duration(?string $travel_duration = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_duration) && !is_string($travel_duration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_duration, true), gettype($travel_duration)), __LINE__);
        }
        $this->travel_duration = $this->{'travel-duration'} = $travel_duration;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
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
     * Get travel_type value
     * @return string|null
     */
    public function getTravel_type(): ?string
    {
        return $this->{'travel-type'};
    }
    /**
     * Set travel_type value
     * @param string $travel_type
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
     */
    public function setTravel_type(?string $travel_type = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_type) && !is_string($travel_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_type, true), gettype($travel_type)), __LINE__);
        }
        $this->travel_type = $this->{'travel-type'} = $travel_type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
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
     * Get person_count value
     * @return string|null
     */
    public function getPerson_count(): ?string
    {
        return $this->{'person-count'};
    }
    /**
     * Set person_count value
     * @param string $person_count
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
     */
    public function setPerson_count(?string $person_count = null): self
    {
        // validation for constraint: string
        if (!is_null($person_count) && !is_string($person_count)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($person_count, true), gettype($person_count)), __LINE__);
        }
        $this->person_count = $this->{'person-count'} = $person_count;
        
        return $this;
    }
    /**
     * Get search_criteria value
     * @return \Pggns\MidocoApi\Order\StructType\Search_criteria|null
     */
    public function getSearch_criteria(): ?\Pggns\MidocoApi\Order\StructType\Search_criteria
    {
        return $this->{'search-criteria'};
    }
    /**
     * Set search_criteria value
     * @param \Pggns\MidocoApi\Order\StructType\Search_criteria $search_criteria
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
     */
    public function setSearch_criteria(?\Pggns\MidocoApi\Order\StructType\Search_criteria $search_criteria = null): self
    {
        $this->search_criteria = $this->{'search-criteria'} = $search_criteria;
        
        return $this;
    }
    /**
     * Get attribute value
     * @return \Pggns\MidocoApi\Order\StructType\Attribute[]
     */
    public function getAttribute(): ?array
    {
        return $this->attribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintFromSetAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $marketing_infoAttributeItem) {
            // validation for constraint: itemType
            if (!$marketing_infoAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\Attribute) {
                $invalidValues[] = is_object($marketing_infoAttributeItem) ? get_class($marketing_infoAttributeItem) : sprintf('%s(%s)', gettype($marketing_infoAttributeItem), var_export($marketing_infoAttributeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute $item
     * @return \Pggns\MidocoApi\Order\StructType\Marketing_info
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
