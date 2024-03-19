<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTempPrintjobInfosForUserIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTempPrintjobInfosForUserIdResponse extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjobInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTempPrintjobInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo[]
     */
    protected ?array $MidocoTempPrintjobInfo = null;
    /**
     * Constructor method for GetTempPrintjobInfosForUserIdResponse
     * @uses GetTempPrintjobInfosForUserIdResponse::setMidocoTempPrintjobInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo[] $midocoTempPrintjobInfo
     */
    public function __construct(?array $midocoTempPrintjobInfo = null)
    {
        $this
            ->setMidocoTempPrintjobInfo($midocoTempPrintjobInfo);
    }
    /**
     * Get MidocoTempPrintjobInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo[]
     */
    public function getMidocoTempPrintjobInfo(): ?array
    {
        return $this->MidocoTempPrintjobInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTempPrintjobInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTempPrintjobInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTempPrintjobInfoForArrayConstraintFromSetMidocoTempPrintjobInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem) {
            // validation for constraint: itemType
            if (!$getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo) {
                $invalidValues[] = is_object($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem) ? get_class($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem) : sprintf('%s(%s)', gettype($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem), var_export($getTempPrintjobInfosForUserIdResponseMidocoTempPrintjobInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTempPrintjobInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTempPrintjobInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo[] $midocoTempPrintjobInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetTempPrintjobInfosForUserIdResponse
     */
    public function setMidocoTempPrintjobInfo(?array $midocoTempPrintjobInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTempPrintjobInfoArrayErrorMessage = self::validateMidocoTempPrintjobInfoForArrayConstraintFromSetMidocoTempPrintjobInfo($midocoTempPrintjobInfo))) {
            throw new InvalidArgumentException($midocoTempPrintjobInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoTempPrintjobInfo = $midocoTempPrintjobInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoTempPrintjobInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTempPrintjobInfosForUserIdResponse
     */
    public function addToMidocoTempPrintjobInfo(\Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoTempPrintjobInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTempPrintjobInfo[] = $item;
        
        return $this;
    }
}
