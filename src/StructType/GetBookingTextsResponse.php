<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingTextsResponse StructType
 * @subpackage Structs
 */
class GetBookingTextsResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingText
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingText
     * @var \Pggns\MidocoApi\Order\StructType\BookingTextDTO[]
     */
    protected array $MidocoBookingText = [];
    /**
     * Constructor method for GetBookingTextsResponse
     * @uses GetBookingTextsResponse::setMidocoBookingText()
     * @param \Pggns\MidocoApi\Order\StructType\BookingTextDTO[] $midocoBookingText
     */
    public function __construct(array $midocoBookingText = [])
    {
        $this
            ->setMidocoBookingText($midocoBookingText);
    }
    /**
     * Get MidocoBookingText value
     * @return \Pggns\MidocoApi\Order\StructType\BookingTextDTO[]
     */
    public function getMidocoBookingText(): array
    {
        return $this->MidocoBookingText;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBookingText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingTextForArrayConstraintsFromSetMidocoBookingText(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingTextsResponseMidocoBookingTextItem) {
            // validation for constraint: itemType
            if (!$getBookingTextsResponseMidocoBookingTextItem instanceof \Pggns\MidocoApi\Order\StructType\BookingTextDTO) {
                $invalidValues[] = is_object($getBookingTextsResponseMidocoBookingTextItem) ? get_class($getBookingTextsResponseMidocoBookingTextItem) : sprintf('%s(%s)', gettype($getBookingTextsResponseMidocoBookingTextItem), var_export($getBookingTextsResponseMidocoBookingTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingText property can only contain items of type \Pggns\MidocoApi\Order\StructType\BookingTextDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingText value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BookingTextDTO[] $midocoBookingText
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingTextsResponse
     */
    public function setMidocoBookingText(array $midocoBookingText = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingTextArrayErrorMessage = self::validateMidocoBookingTextForArrayConstraintsFromSetMidocoBookingText($midocoBookingText))) {
            throw new InvalidArgumentException($midocoBookingTextArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingText = $midocoBookingText;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingText value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BookingTextDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingTextsResponse
     */
    public function addToMidocoBookingText(\Pggns\MidocoApi\Order\StructType\BookingTextDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BookingTextDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingText property can only contain items of type \Pggns\MidocoApi\Order\StructType\BookingTextDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingText[] = $item;
        
        return $this;
    }
}
