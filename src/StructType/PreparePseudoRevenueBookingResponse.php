<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreparePseudoRevenueBookingResponse StructType
 * @subpackage Structs
 */
class PreparePseudoRevenueBookingResponse extends AbstractStructBase
{
    /**
     * The PseudoRevenueBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: PseudoRevenueBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo[]
     */
    protected array $PseudoRevenueBookingInfo = [];
    /**
     * Constructor method for PreparePseudoRevenueBookingResponse
     * @uses PreparePseudoRevenueBookingResponse::setPseudoRevenueBookingInfo()
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo[] $pseudoRevenueBookingInfo
     */
    public function __construct(array $pseudoRevenueBookingInfo = [])
    {
        $this
            ->setPseudoRevenueBookingInfo($pseudoRevenueBookingInfo);
    }
    /**
     * Get PseudoRevenueBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo[]
     */
    public function getPseudoRevenueBookingInfo(): array
    {
        return $this->PseudoRevenueBookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setPseudoRevenueBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPseudoRevenueBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePseudoRevenueBookingInfoForArrayConstraintsFromSetPseudoRevenueBookingInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $preparePseudoRevenueBookingResponsePseudoRevenueBookingInfoItem) {
            // validation for constraint: itemType
            if (!$preparePseudoRevenueBookingResponsePseudoRevenueBookingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo) {
                $invalidValues[] = is_object($preparePseudoRevenueBookingResponsePseudoRevenueBookingInfoItem) ? get_class($preparePseudoRevenueBookingResponsePseudoRevenueBookingInfoItem) : sprintf('%s(%s)', gettype($preparePseudoRevenueBookingResponsePseudoRevenueBookingInfoItem), var_export($preparePseudoRevenueBookingResponsePseudoRevenueBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PseudoRevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PseudoRevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo[] $pseudoRevenueBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingResponse
     */
    public function setPseudoRevenueBookingInfo(array $pseudoRevenueBookingInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($pseudoRevenueBookingInfoArrayErrorMessage = self::validatePseudoRevenueBookingInfoForArrayConstraintsFromSetPseudoRevenueBookingInfo($pseudoRevenueBookingInfo))) {
            throw new InvalidArgumentException($pseudoRevenueBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->PseudoRevenueBookingInfo = $pseudoRevenueBookingInfo;
        
        return $this;
    }
    /**
     * Add item to PseudoRevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\PreparePseudoRevenueBookingResponse
     */
    public function addToPseudoRevenueBookingInfo(\Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo) {
            throw new InvalidArgumentException(sprintf('The PseudoRevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\PseudoRevenueBookingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PseudoRevenueBookingInfo[] = $item;
        
        return $this;
    }
}
