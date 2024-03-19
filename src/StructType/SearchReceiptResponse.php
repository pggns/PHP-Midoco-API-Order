<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchReceiptResponse extends AbstractStructBase
{
    /**
     * The MidocoReceiptShortInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoReceiptShortInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo[]
     */
    protected ?array $MidocoReceiptShortInfo = null;
    /**
     * Constructor method for SearchReceiptResponse
     * @uses SearchReceiptResponse::setMidocoReceiptShortInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo[] $midocoReceiptShortInfo
     */
    public function __construct(?array $midocoReceiptShortInfo = null)
    {
        $this
            ->setMidocoReceiptShortInfo($midocoReceiptShortInfo);
    }
    /**
     * Get MidocoReceiptShortInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo[]
     */
    public function getMidocoReceiptShortInfo(): ?array
    {
        return $this->MidocoReceiptShortInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoReceiptShortInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoReceiptShortInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoReceiptShortInfoForArrayConstraintFromSetMidocoReceiptShortInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchReceiptResponseMidocoReceiptShortInfoItem) {
            // validation for constraint: itemType
            if (!$searchReceiptResponseMidocoReceiptShortInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo) {
                $invalidValues[] = is_object($searchReceiptResponseMidocoReceiptShortInfoItem) ? get_class($searchReceiptResponseMidocoReceiptShortInfoItem) : sprintf('%s(%s)', gettype($searchReceiptResponseMidocoReceiptShortInfoItem), var_export($searchReceiptResponseMidocoReceiptShortInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoReceiptShortInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoReceiptShortInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo[] $midocoReceiptShortInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptResponse
     */
    public function setMidocoReceiptShortInfo(?array $midocoReceiptShortInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoReceiptShortInfoArrayErrorMessage = self::validateMidocoReceiptShortInfoForArrayConstraintFromSetMidocoReceiptShortInfo($midocoReceiptShortInfo))) {
            throw new InvalidArgumentException($midocoReceiptShortInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoReceiptShortInfo = $midocoReceiptShortInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoReceiptShortInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptResponse
     */
    public function addToMidocoReceiptShortInfo(\Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoReceiptShortInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoReceiptShortInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoReceiptShortInfo[] = $item;
        
        return $this;
    }
}
