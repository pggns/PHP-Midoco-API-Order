<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellRemarksResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoSellRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[]
     */
    protected ?array $MidocoSellRemark = null;
    /**
     * Constructor method for GetSellRemarksResponse
     * @uses GetSellRemarksResponse::setMidocoSellRemark()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[] $midocoSellRemark
     */
    public function __construct(?array $midocoSellRemark = null)
    {
        $this
            ->setMidocoSellRemark($midocoSellRemark);
    }
    /**
     * Get MidocoSellRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[]
     */
    public function getMidocoSellRemark(): ?array
    {
        return $this->MidocoSellRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellRemarkForArrayConstraintFromSetMidocoSellRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellRemarksResponseMidocoSellRemarkItem) {
            // validation for constraint: itemType
            if (!$getSellRemarksResponseMidocoSellRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellRemark) {
                $invalidValues[] = is_object($getSellRemarksResponseMidocoSellRemarkItem) ? get_class($getSellRemarksResponseMidocoSellRemarkItem) : sprintf('%s(%s)', gettype($getSellRemarksResponseMidocoSellRemarkItem), var_export($getSellRemarksResponseMidocoSellRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark[] $midocoSellRemark
     * @return \Pggns\MidocoApi\Order\StructType\GetSellRemarksResponse
     */
    public function setMidocoSellRemark(?array $midocoSellRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellRemarkArrayErrorMessage = self::validateMidocoSellRemarkForArrayConstraintFromSetMidocoSellRemark($midocoSellRemark))) {
            throw new InvalidArgumentException($midocoSellRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellRemark = $midocoSellRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoSellRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellRemarksResponse
     */
    public function addToMidocoSellRemark(\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellRemark) {
            throw new InvalidArgumentException(sprintf('The MidocoSellRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellRemark[] = $item;
        
        return $this;
    }
}
