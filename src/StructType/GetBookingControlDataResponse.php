<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingControlDataResponse StructType
 * @subpackage Structs
 */
class GetBookingControlDataResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingControl
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingControl
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingControl[]
     */
    protected array $MidocoBookingControl = [];
    /**
     * Constructor method for GetBookingControlDataResponse
     * @uses GetBookingControlDataResponse::setMidocoBookingControl()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingControl[] $midocoBookingControl
     */
    public function __construct(array $midocoBookingControl = [])
    {
        $this
            ->setMidocoBookingControl($midocoBookingControl);
    }
    /**
     * Get MidocoBookingControl value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingControl[]
     */
    public function getMidocoBookingControl(): array
    {
        return $this->MidocoBookingControl;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBookingControl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingControl method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingControlForArrayConstraintsFromSetMidocoBookingControl(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingControlDataResponseMidocoBookingControlItem) {
            // validation for constraint: itemType
            if (!$getBookingControlDataResponseMidocoBookingControlItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingControl) {
                $invalidValues[] = is_object($getBookingControlDataResponseMidocoBookingControlItem) ? get_class($getBookingControlDataResponseMidocoBookingControlItem) : sprintf('%s(%s)', gettype($getBookingControlDataResponseMidocoBookingControlItem), var_export($getBookingControlDataResponseMidocoBookingControlItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingControl property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingControl, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingControl value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingControl[] $midocoBookingControl
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingControlDataResponse
     */
    public function setMidocoBookingControl(array $midocoBookingControl = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingControlArrayErrorMessage = self::validateMidocoBookingControlForArrayConstraintsFromSetMidocoBookingControl($midocoBookingControl))) {
            throw new InvalidArgumentException($midocoBookingControlArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingControl = $midocoBookingControl;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingControl value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingControl $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingControlDataResponse
     */
    public function addToMidocoBookingControl(\Pggns\MidocoApi\Order\StructType\MidocoBookingControl $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingControl) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingControl property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingControl, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingControl[] = $item;
        
        return $this;
    }
}
