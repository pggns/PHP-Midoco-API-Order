<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightDetail StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoFlightDetail extends FlightDetailDTO
{
    /**
     * The MidocoFlightSegmentDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightSegmentDetails
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails[]
     */
    protected ?array $MidocoFlightSegmentDetails = null;
    /**
     * The route
     * @var string|null
     */
    protected ?string $route = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * Constructor method for MidocoFlightDetail
     * @uses MidocoFlightDetail::setMidocoFlightSegmentDetails()
     * @uses MidocoFlightDetail::setRoute()
     * @uses MidocoFlightDetail::setPrice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails[] $midocoFlightSegmentDetails
     * @param string $route
     * @param float $price
     */
    public function __construct(?array $midocoFlightSegmentDetails = null, ?string $route = null, ?float $price = null)
    {
        $this
            ->setMidocoFlightSegmentDetails($midocoFlightSegmentDetails)
            ->setRoute($route)
            ->setPrice($price);
    }
    /**
     * Get MidocoFlightSegmentDetails value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails[]
     */
    public function getMidocoFlightSegmentDetails(): ?array
    {
        return $this->MidocoFlightSegmentDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFlightSegmentDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightSegmentDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightSegmentDetailsForArrayConstraintFromSetMidocoFlightSegmentDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightDetailMidocoFlightSegmentDetailsItem) {
            // validation for constraint: itemType
            if (!$midocoFlightDetailMidocoFlightSegmentDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails) {
                $invalidValues[] = is_object($midocoFlightDetailMidocoFlightSegmentDetailsItem) ? get_class($midocoFlightDetailMidocoFlightSegmentDetailsItem) : sprintf('%s(%s)', gettype($midocoFlightDetailMidocoFlightSegmentDetailsItem), var_export($midocoFlightDetailMidocoFlightSegmentDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightSegmentDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightSegmentDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails[] $midocoFlightSegmentDetails
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail
     */
    public function setMidocoFlightSegmentDetails(?array $midocoFlightSegmentDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightSegmentDetailsArrayErrorMessage = self::validateMidocoFlightSegmentDetailsForArrayConstraintFromSetMidocoFlightSegmentDetails($midocoFlightSegmentDetails))) {
            throw new InvalidArgumentException($midocoFlightSegmentDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightSegmentDetails = $midocoFlightSegmentDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightSegmentDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail
     */
    public function addToMidocoFlightSegmentDetails(\Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightSegmentDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightSegmentDetails[] = $item;
        
        return $this;
    }
    /**
     * Get route value
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }
    /**
     * Set route value
     * @param string $route
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail
     */
    public function setRoute(?string $route = null): self
    {
        // validation for constraint: string
        if (!is_null($route) && !is_string($route)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($route, true), gettype($route)), __LINE__);
        }
        $this->route = $route;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
}
