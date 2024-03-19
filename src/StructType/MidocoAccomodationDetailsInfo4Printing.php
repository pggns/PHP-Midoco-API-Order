<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAccomodationDetailsInfo4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAccomodationDetailsInfo4Printing extends AccomodationDetailDTO
{
    /**
     * The assignedPassengers
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $assignedPassengers = null;
    /**
     * Constructor method for MidocoAccomodationDetailsInfo4Printing
     * @uses MidocoAccomodationDetailsInfo4Printing::setAssignedPassengers()
     * @param int[] $assignedPassengers
     */
    public function __construct(?array $assignedPassengers = null)
    {
        $this
            ->setAssignedPassengers($assignedPassengers);
    }
    /**
     * Get assignedPassengers value
     * @return int[]
     */
    public function getAssignedPassengers(): ?array
    {
        return $this->assignedPassengers;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAssignedPassengers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAssignedPassengers method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAssignedPassengersForArrayConstraintFromSetAssignedPassengers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem) {
            // validation for constraint: itemType
            if (!(is_int($midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem) || ctype_digit($midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem))) {
                $invalidValues[] = is_object($midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem) ? get_class($midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem) : sprintf('%s(%s)', gettype($midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem), var_export($midocoAccomodationDetailsInfo4PrintingAssignedPassengersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The assignedPassengers property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set assignedPassengers value
     * @throws InvalidArgumentException
     * @param int[] $assignedPassengers
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing
     */
    public function setAssignedPassengers(?array $assignedPassengers = null): self
    {
        // validation for constraint: array
        if ('' !== ($assignedPassengersArrayErrorMessage = self::validateAssignedPassengersForArrayConstraintFromSetAssignedPassengers($assignedPassengers))) {
            throw new InvalidArgumentException($assignedPassengersArrayErrorMessage, __LINE__);
        }
        $this->assignedPassengers = $assignedPassengers;
        
        return $this;
    }
    /**
     * Add item to assignedPassengers value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationDetailsInfo4Printing
     */
    public function addToAssignedPassengers(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The assignedPassengers property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->assignedPassengers[] = $item;
        
        return $this;
    }
}
