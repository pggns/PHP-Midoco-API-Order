<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationAutoRemarksResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDestinationAutoRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO[]
     */
    protected ?array $MidocoDestinationAutoRemark = null;
    /**
     * Constructor method for GetDestinationAutoRemarksResponse
     * @uses GetDestinationAutoRemarksResponse::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO[] $midocoDestinationAutoRemark
     */
    public function __construct(?array $midocoDestinationAutoRemark = null)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO[]
     */
    public function getMidocoDestinationAutoRemark(): ?array
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDestinationAutoRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDestinationAutoRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDestinationAutoRemarkForArrayConstraintFromSetMidocoDestinationAutoRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem) {
            // validation for constraint: itemType
            if (!$getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO) {
                $invalidValues[] = is_object($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem) ? get_class($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem) : sprintf('%s(%s)', gettype($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem), var_export($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDestinationAutoRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO[] $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationAutoRemarksResponse
     */
    public function setMidocoDestinationAutoRemark(?array $midocoDestinationAutoRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDestinationAutoRemarkArrayErrorMessage = self::validateMidocoDestinationAutoRemarkForArrayConstraintFromSetMidocoDestinationAutoRemark($midocoDestinationAutoRemark))) {
            throw new InvalidArgumentException($midocoDestinationAutoRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoDestinationAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationAutoRemarksResponse
     */
    public function addToMidocoDestinationAutoRemark(\Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDestinationAutoRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDestinationAutoRemark[] = $item;
        
        return $this;
    }
}
