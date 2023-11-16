<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NeedsToPrintCashReceiptResponse StructType
 * @subpackage Structs
 */
class NeedsToPrintCashReceiptResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingSearchInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingSearchInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[]
     */
    protected array $MidocoBillingSearchInfo = [];
    /**
     * Constructor method for NeedsToPrintCashReceiptResponse
     * @uses NeedsToPrintCashReceiptResponse::setMidocoBillingSearchInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[] $midocoBillingSearchInfo
     */
    public function __construct(array $midocoBillingSearchInfo = [])
    {
        $this
            ->setMidocoBillingSearchInfo($midocoBillingSearchInfo);
    }
    /**
     * Get MidocoBillingSearchInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[]
     */
    public function getMidocoBillingSearchInfo(): array
    {
        return $this->MidocoBillingSearchInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingSearchInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingSearchInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingSearchInfoForArrayConstraintsFromSetMidocoBillingSearchInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $needsToPrintCashReceiptResponseMidocoBillingSearchInfoItem) {
            // validation for constraint: itemType
            if (!$needsToPrintCashReceiptResponseMidocoBillingSearchInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo) {
                $invalidValues[] = is_object($needsToPrintCashReceiptResponseMidocoBillingSearchInfoItem) ? get_class($needsToPrintCashReceiptResponseMidocoBillingSearchInfoItem) : sprintf('%s(%s)', gettype($needsToPrintCashReceiptResponseMidocoBillingSearchInfoItem), var_export($needsToPrintCashReceiptResponseMidocoBillingSearchInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingSearchInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingSearchInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[] $midocoBillingSearchInfo
     * @return \Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptResponse
     */
    public function setMidocoBillingSearchInfo(array $midocoBillingSearchInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingSearchInfoArrayErrorMessage = self::validateMidocoBillingSearchInfoForArrayConstraintsFromSetMidocoBillingSearchInfo($midocoBillingSearchInfo))) {
            throw new InvalidArgumentException($midocoBillingSearchInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingSearchInfo = $midocoBillingSearchInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingSearchInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptResponse
     */
    public function addToMidocoBillingSearchInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingSearchInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingSearchInfo[] = $item;
        
        return $this;
    }
}
