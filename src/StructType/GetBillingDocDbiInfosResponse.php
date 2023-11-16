<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocDbiInfosResponse StructType
 * @subpackage Structs
 */
class GetBillingDocDbiInfosResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDocDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[]
     */
    protected array $MidocoBillingDocDbiInfo = [];
    /**
     * Constructor method for GetBillingDocDbiInfosResponse
     * @uses GetBillingDocDbiInfosResponse::setMidocoBillingDocDbiInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[] $midocoBillingDocDbiInfo
     */
    public function __construct(array $midocoBillingDocDbiInfo = [])
    {
        $this
            ->setMidocoBillingDocDbiInfo($midocoBillingDocDbiInfo);
    }
    /**
     * Get MidocoBillingDocDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[]
     */
    public function getMidocoBillingDocDbiInfo(): array
    {
        return $this->MidocoBillingDocDbiInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingDocDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocDbiInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDocDbiInfoForArrayConstraintsFromSetMidocoBillingDocDbiInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingDocDbiInfosResponseMidocoBillingDocDbiInfoItem) {
            // validation for constraint: itemType
            if (!$getBillingDocDbiInfosResponseMidocoBillingDocDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo) {
                $invalidValues[] = is_object($getBillingDocDbiInfosResponseMidocoBillingDocDbiInfoItem) ? get_class($getBillingDocDbiInfosResponseMidocoBillingDocDbiInfoItem) : sprintf('%s(%s)', gettype($getBillingDocDbiInfosResponseMidocoBillingDocDbiInfoItem), var_export($getBillingDocDbiInfosResponseMidocoBillingDocDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDocDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDocDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo[] $midocoBillingDocDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocDbiInfosResponse
     */
    public function setMidocoBillingDocDbiInfo(array $midocoBillingDocDbiInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDocDbiInfoArrayErrorMessage = self::validateMidocoBillingDocDbiInfoForArrayConstraintsFromSetMidocoBillingDocDbiInfo($midocoBillingDocDbiInfo))) {
            throw new InvalidArgumentException($midocoBillingDocDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDocDbiInfo = $midocoBillingDocDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDocDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocDbiInfosResponse
     */
    public function addToMidocoBillingDocDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDocDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDocDbiInfo[] = $item;
        
        return $this;
    }
}
