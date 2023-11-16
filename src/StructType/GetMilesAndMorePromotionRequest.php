<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMorePromotionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Options to filter by.
 * @subpackage Structs
 */
class GetMilesAndMorePromotionRequest extends MilesAndMorePromotionDTO
{
    /**
     * The serviceNames
     * Meta information extracted from the WSDL
     * - documentation: When requesting promotions for a sell item, all service codes of its details
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $serviceNames = [];
    /**
     * The bookingDate
     * Meta information extracted from the WSDL
     * - documentation: When requesting promotions for a sell item, the booking/creation date
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The travelDate
     * Meta information extracted from the WSDL
     * - documentation: When requesting promotions for a sell item, the travel (start) date
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * Constructor method for GetMilesAndMorePromotionRequest
     * @uses GetMilesAndMorePromotionRequest::setServiceNames()
     * @uses GetMilesAndMorePromotionRequest::setBookingDate()
     * @uses GetMilesAndMorePromotionRequest::setTravelDate()
     * @param string[] $serviceNames
     * @param string $bookingDate
     * @param string $travelDate
     */
    public function __construct(array $serviceNames = [], ?string $bookingDate = null, ?string $travelDate = null)
    {
        $this
            ->setServiceNames($serviceNames)
            ->setBookingDate($bookingDate)
            ->setTravelDate($travelDate);
    }
    /**
     * Get serviceNames value
     * @return string[]
     */
    public function getServiceNames(): array
    {
        return $this->serviceNames;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceNamesForArrayConstraintsFromSetServiceNames(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMorePromotionRequestServiceNamesItem) {
            // validation for constraint: itemType
            if (!is_string($getMilesAndMorePromotionRequestServiceNamesItem)) {
                $invalidValues[] = is_object($getMilesAndMorePromotionRequestServiceNamesItem) ? get_class($getMilesAndMorePromotionRequestServiceNamesItem) : sprintf('%s(%s)', gettype($getMilesAndMorePromotionRequestServiceNamesItem), var_export($getMilesAndMorePromotionRequestServiceNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The serviceNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set serviceNames value
     * @throws InvalidArgumentException
     * @param string[] $serviceNames
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePromotionRequest
     */
    public function setServiceNames(array $serviceNames = []): self
    {
        // validation for constraint: array
        if ('' !== ($serviceNamesArrayErrorMessage = self::validateServiceNamesForArrayConstraintsFromSetServiceNames($serviceNames))) {
            throw new InvalidArgumentException($serviceNamesArrayErrorMessage, __LINE__);
        }
        $this->serviceNames = $serviceNames;
        
        return $this;
    }
    /**
     * Add item to serviceNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePromotionRequest
     */
    public function addToServiceNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The serviceNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->serviceNames[] = $item;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePromotionRequest
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePromotionRequest
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
