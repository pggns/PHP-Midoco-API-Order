<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberVatDivTemplsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelNumberVatDivTemplsResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberVatDivTempl
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNumberVatDivTempl
     * @var \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO[]
     */
    protected ?array $MidocoTravelNumberVatDivTempl = null;
    /**
     * Constructor method for GetTravelNumberVatDivTemplsResponse
     * @uses GetTravelNumberVatDivTemplsResponse::setMidocoTravelNumberVatDivTempl()
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO[] $midocoTravelNumberVatDivTempl
     */
    public function __construct(?array $midocoTravelNumberVatDivTempl = null)
    {
        $this
            ->setMidocoTravelNumberVatDivTempl($midocoTravelNumberVatDivTempl);
    }
    /**
     * Get MidocoTravelNumberVatDivTempl value
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO[]
     */
    public function getMidocoTravelNumberVatDivTempl(): ?array
    {
        return $this->MidocoTravelNumberVatDivTempl;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTravelNumberVatDivTempl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNumberVatDivTempl method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNumberVatDivTemplForArrayConstraintFromSetMidocoTravelNumberVatDivTempl(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNumberVatDivTemplsResponseMidocoTravelNumberVatDivTemplItem) {
            // validation for constraint: itemType
            if (!$getTravelNumberVatDivTemplsResponseMidocoTravelNumberVatDivTemplItem instanceof \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO) {
                $invalidValues[] = is_object($getTravelNumberVatDivTemplsResponseMidocoTravelNumberVatDivTemplItem) ? get_class($getTravelNumberVatDivTemplsResponseMidocoTravelNumberVatDivTemplItem) : sprintf('%s(%s)', gettype($getTravelNumberVatDivTemplsResponseMidocoTravelNumberVatDivTemplItem), var_export($getTravelNumberVatDivTemplsResponseMidocoTravelNumberVatDivTemplItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNumberVatDivTempl property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNumberVatDivTempl value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO[] $midocoTravelNumberVatDivTempl
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberVatDivTemplsResponse
     */
    public function setMidocoTravelNumberVatDivTempl(?array $midocoTravelNumberVatDivTempl = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNumberVatDivTemplArrayErrorMessage = self::validateMidocoTravelNumberVatDivTemplForArrayConstraintFromSetMidocoTravelNumberVatDivTempl($midocoTravelNumberVatDivTempl))) {
            throw new InvalidArgumentException($midocoTravelNumberVatDivTemplArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNumberVatDivTempl = $midocoTravelNumberVatDivTempl;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNumberVatDivTempl value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberVatDivTemplsResponse
     */
    public function addToMidocoTravelNumberVatDivTempl(\Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNumberVatDivTempl property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelNumberVatDivTemplDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNumberVatDivTempl[] = $item;
        
        return $this;
    }
}
