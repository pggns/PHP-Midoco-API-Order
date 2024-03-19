<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeographicalCategoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetGeographicalCategoryRequest extends AbstractStructBase
{
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $countryCode = null;
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * Constructor method for GetGeographicalCategoryRequest
     * @uses GetGeographicalCategoryRequest::setCountryCode()
     * @uses GetGeographicalCategoryRequest::setTravelDate()
     * @param string[] $countryCode
     * @param string $travelDate
     */
    public function __construct(?array $countryCode = null, ?string $travelDate = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setTravelDate($travelDate);
    }
    /**
     * Get countryCode value
     * @return string[]
     */
    public function getCountryCode(): ?array
    {
        return $this->countryCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCountryCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryCodeForArrayConstraintFromSetCountryCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getGeographicalCategoryRequestCountryCodeItem) {
            // validation for constraint: itemType
            if (!is_string($getGeographicalCategoryRequestCountryCodeItem)) {
                $invalidValues[] = is_object($getGeographicalCategoryRequestCountryCodeItem) ? get_class($getGeographicalCategoryRequestCountryCodeItem) : sprintf('%s(%s)', gettype($getGeographicalCategoryRequestCountryCodeItem), var_export($getGeographicalCategoryRequestCountryCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The countryCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set countryCode value
     * @throws InvalidArgumentException
     * @param string[] $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\GetGeographicalCategoryRequest
     */
    public function setCountryCode(?array $countryCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($countryCodeArrayErrorMessage = self::validateCountryCodeForArrayConstraintFromSetCountryCode($countryCode))) {
            throw new InvalidArgumentException($countryCodeArrayErrorMessage, __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Add item to countryCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetGeographicalCategoryRequest
     */
    public function addToCountryCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The countryCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->countryCode[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetGeographicalCategoryRequest
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
}
