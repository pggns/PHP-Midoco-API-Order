<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingInfo4KickbackResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingInfo4KickbackResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingInfo4Kickback
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingInfo4Kickback
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback[]
     */
    protected ?array $MidocoBookingInfo4Kickback = null;
    /**
     * Constructor method for GetBookingInfo4KickbackResponse
     * @uses GetBookingInfo4KickbackResponse::setMidocoBookingInfo4Kickback()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback[] $midocoBookingInfo4Kickback
     */
    public function __construct(?array $midocoBookingInfo4Kickback = null)
    {
        $this
            ->setMidocoBookingInfo4Kickback($midocoBookingInfo4Kickback);
    }
    /**
     * Get MidocoBookingInfo4Kickback value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback[]
     */
    public function getMidocoBookingInfo4Kickback(): ?array
    {
        return $this->MidocoBookingInfo4Kickback;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingInfo4Kickback method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingInfo4Kickback method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingInfo4KickbackForArrayConstraintFromSetMidocoBookingInfo4Kickback(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingInfo4KickbackResponseMidocoBookingInfo4KickbackItem) {
            // validation for constraint: itemType
            if (!$getBookingInfo4KickbackResponseMidocoBookingInfo4KickbackItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback) {
                $invalidValues[] = is_object($getBookingInfo4KickbackResponseMidocoBookingInfo4KickbackItem) ? get_class($getBookingInfo4KickbackResponseMidocoBookingInfo4KickbackItem) : sprintf('%s(%s)', gettype($getBookingInfo4KickbackResponseMidocoBookingInfo4KickbackItem), var_export($getBookingInfo4KickbackResponseMidocoBookingInfo4KickbackItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingInfo4Kickback property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingInfo4Kickback value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback[] $midocoBookingInfo4Kickback
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingInfo4KickbackResponse
     */
    public function setMidocoBookingInfo4Kickback(?array $midocoBookingInfo4Kickback = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingInfo4KickbackArrayErrorMessage = self::validateMidocoBookingInfo4KickbackForArrayConstraintFromSetMidocoBookingInfo4Kickback($midocoBookingInfo4Kickback))) {
            throw new InvalidArgumentException($midocoBookingInfo4KickbackArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingInfo4Kickback = $midocoBookingInfo4Kickback;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingInfo4Kickback value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingInfo4KickbackResponse
     */
    public function addToMidocoBookingInfo4Kickback(\Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingInfo4Kickback property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfo4Kickback, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingInfo4Kickback[] = $item;
        
        return $this;
    }
}
