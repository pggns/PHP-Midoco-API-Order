<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberAutoRemarksResponse StructType
 * @subpackage Structs
 */
class GetTravelNumberAutoRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNumberAutoRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNumberAutoRemark
     * @var \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO[]
     */
    protected array $MidocoTravelNumberAutoRemark = [];
    /**
     * Constructor method for GetTravelNumberAutoRemarksResponse
     * @uses GetTravelNumberAutoRemarksResponse::setMidocoTravelNumberAutoRemark()
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO[] $midocoTravelNumberAutoRemark
     */
    public function __construct(array $midocoTravelNumberAutoRemark = [])
    {
        $this
            ->setMidocoTravelNumberAutoRemark($midocoTravelNumberAutoRemark);
    }
    /**
     * Get MidocoTravelNumberAutoRemark value
     * @return \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO[]
     */
    public function getMidocoTravelNumberAutoRemark(): array
    {
        return $this->MidocoTravelNumberAutoRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNumberAutoRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNumberAutoRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNumberAutoRemarkForArrayConstraintsFromSetMidocoTravelNumberAutoRemark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNumberAutoRemarksResponseMidocoTravelNumberAutoRemarkItem) {
            // validation for constraint: itemType
            if (!$getTravelNumberAutoRemarksResponseMidocoTravelNumberAutoRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO) {
                $invalidValues[] = is_object($getTravelNumberAutoRemarksResponseMidocoTravelNumberAutoRemarkItem) ? get_class($getTravelNumberAutoRemarksResponseMidocoTravelNumberAutoRemarkItem) : sprintf('%s(%s)', gettype($getTravelNumberAutoRemarksResponseMidocoTravelNumberAutoRemarkItem), var_export($getTravelNumberAutoRemarksResponseMidocoTravelNumberAutoRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNumberAutoRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNumberAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO[] $midocoTravelNumberAutoRemark
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberAutoRemarksResponse
     */
    public function setMidocoTravelNumberAutoRemark(array $midocoTravelNumberAutoRemark = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNumberAutoRemarkArrayErrorMessage = self::validateMidocoTravelNumberAutoRemarkForArrayConstraintsFromSetMidocoTravelNumberAutoRemark($midocoTravelNumberAutoRemark))) {
            throw new InvalidArgumentException($midocoTravelNumberAutoRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNumberAutoRemark = $midocoTravelNumberAutoRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNumberAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberAutoRemarksResponse
     */
    public function addToMidocoTravelNumberAutoRemark(\Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNumberAutoRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\TravelNumberAutoRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNumberAutoRemark[] = $item;
        
        return $this;
    }
}
