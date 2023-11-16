<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightTimeChangeEmailType StructType
 * @subpackage Structs
 */
class MidocoFlightTimeChangeEmailType extends FlightTimeChangeEmailDTO
{
    /**
     * The MidocoFlightTimeChangeEmailDet
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightTimeChangeEmailDet
     * @var \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO[]
     */
    protected array $MidocoFlightTimeChangeEmailDet = [];
    /**
     * Constructor method for MidocoFlightTimeChangeEmailType
     * @uses MidocoFlightTimeChangeEmailType::setMidocoFlightTimeChangeEmailDet()
     * @param \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO[] $midocoFlightTimeChangeEmailDet
     */
    public function __construct(array $midocoFlightTimeChangeEmailDet = [])
    {
        $this
            ->setMidocoFlightTimeChangeEmailDet($midocoFlightTimeChangeEmailDet);
    }
    /**
     * Get MidocoFlightTimeChangeEmailDet value
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO[]
     */
    public function getMidocoFlightTimeChangeEmailDet(): array
    {
        return $this->MidocoFlightTimeChangeEmailDet;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightTimeChangeEmailDet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightTimeChangeEmailDet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightTimeChangeEmailDetForArrayConstraintsFromSetMidocoFlightTimeChangeEmailDet(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem) {
            // validation for constraint: itemType
            if (!$midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem instanceof \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO) {
                $invalidValues[] = is_object($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem) ? get_class($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem) : sprintf('%s(%s)', gettype($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem), var_export($midocoFlightTimeChangeEmailTypeMidocoFlightTimeChangeEmailDetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightTimeChangeEmailDet property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightTimeChangeEmailDet value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO[] $midocoFlightTimeChangeEmailDet
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType
     */
    public function setMidocoFlightTimeChangeEmailDet(array $midocoFlightTimeChangeEmailDet = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightTimeChangeEmailDetArrayErrorMessage = self::validateMidocoFlightTimeChangeEmailDetForArrayConstraintsFromSetMidocoFlightTimeChangeEmailDet($midocoFlightTimeChangeEmailDet))) {
            throw new InvalidArgumentException($midocoFlightTimeChangeEmailDetArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightTimeChangeEmailDet = $midocoFlightTimeChangeEmailDet;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightTimeChangeEmailDet value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChangeEmailType
     */
    public function addToMidocoFlightTimeChangeEmailDet(\Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightTimeChangeEmailDet property can only contain items of type \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDetDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightTimeChangeEmailDet[] = $item;
        
        return $this;
    }
}
