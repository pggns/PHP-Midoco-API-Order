<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitInfoForReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitInfoForReceiptResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitInfoForReceipt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitInfoForReceipt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt[]
     */
    protected ?array $MidocoDebitInfoForReceipt = null;
    /**
     * Constructor method for GetDebitInfoForReceiptResponse
     * @uses GetDebitInfoForReceiptResponse::setMidocoDebitInfoForReceipt()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt[] $midocoDebitInfoForReceipt
     */
    public function __construct(?array $midocoDebitInfoForReceipt = null)
    {
        $this
            ->setMidocoDebitInfoForReceipt($midocoDebitInfoForReceipt);
    }
    /**
     * Get MidocoDebitInfoForReceipt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt[]
     */
    public function getMidocoDebitInfoForReceipt(): ?array
    {
        return $this->MidocoDebitInfoForReceipt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDebitInfoForReceipt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitInfoForReceipt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitInfoForReceiptForArrayConstraintFromSetMidocoDebitInfoForReceipt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitInfoForReceiptResponseMidocoDebitInfoForReceiptItem) {
            // validation for constraint: itemType
            if (!$getDebitInfoForReceiptResponseMidocoDebitInfoForReceiptItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt) {
                $invalidValues[] = is_object($getDebitInfoForReceiptResponseMidocoDebitInfoForReceiptItem) ? get_class($getDebitInfoForReceiptResponseMidocoDebitInfoForReceiptItem) : sprintf('%s(%s)', gettype($getDebitInfoForReceiptResponseMidocoDebitInfoForReceiptItem), var_export($getDebitInfoForReceiptResponseMidocoDebitInfoForReceiptItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitInfoForReceipt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitInfoForReceipt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt[] $midocoDebitInfoForReceipt
     * @return \Pggns\MidocoApi\Order\StructType\GetDebitInfoForReceiptResponse
     */
    public function setMidocoDebitInfoForReceipt(?array $midocoDebitInfoForReceipt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitInfoForReceiptArrayErrorMessage = self::validateMidocoDebitInfoForReceiptForArrayConstraintFromSetMidocoDebitInfoForReceipt($midocoDebitInfoForReceipt))) {
            throw new InvalidArgumentException($midocoDebitInfoForReceiptArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitInfoForReceipt = $midocoDebitInfoForReceipt;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitInfoForReceipt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDebitInfoForReceiptResponse
     */
    public function addToMidocoDebitInfoForReceipt(\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitInfoForReceipt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitInfoForReceipt[] = $item;
        
        return $this;
    }
}
