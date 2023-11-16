<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelDocsPrintInfoResponse StructType
 * @subpackage Structs
 */
class GetTravelDocsPrintInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelDocsPrintInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelDocsPrintInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo[]
     */
    protected array $MidocoTravelDocsPrintInfo = [];
    /**
     * Constructor method for GetTravelDocsPrintInfoResponse
     * @uses GetTravelDocsPrintInfoResponse::setMidocoTravelDocsPrintInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo[] $midocoTravelDocsPrintInfo
     */
    public function __construct(array $midocoTravelDocsPrintInfo = [])
    {
        $this
            ->setMidocoTravelDocsPrintInfo($midocoTravelDocsPrintInfo);
    }
    /**
     * Get MidocoTravelDocsPrintInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo[]
     */
    public function getMidocoTravelDocsPrintInfo(): array
    {
        return $this->MidocoTravelDocsPrintInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelDocsPrintInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelDocsPrintInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelDocsPrintInfoForArrayConstraintsFromSetMidocoTravelDocsPrintInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelDocsPrintInfoResponseMidocoTravelDocsPrintInfoItem) {
            // validation for constraint: itemType
            if (!$getTravelDocsPrintInfoResponseMidocoTravelDocsPrintInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo) {
                $invalidValues[] = is_object($getTravelDocsPrintInfoResponseMidocoTravelDocsPrintInfoItem) ? get_class($getTravelDocsPrintInfoResponseMidocoTravelDocsPrintInfoItem) : sprintf('%s(%s)', gettype($getTravelDocsPrintInfoResponseMidocoTravelDocsPrintInfoItem), var_export($getTravelDocsPrintInfoResponseMidocoTravelDocsPrintInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelDocsPrintInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelDocsPrintInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo[] $midocoTravelDocsPrintInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoResponse
     */
    public function setMidocoTravelDocsPrintInfo(array $midocoTravelDocsPrintInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelDocsPrintInfoArrayErrorMessage = self::validateMidocoTravelDocsPrintInfoForArrayConstraintsFromSetMidocoTravelDocsPrintInfo($midocoTravelDocsPrintInfo))) {
            throw new InvalidArgumentException($midocoTravelDocsPrintInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelDocsPrintInfo = $midocoTravelDocsPrintInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelDocsPrintInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelDocsPrintInfoResponse
     */
    public function addToMidocoTravelDocsPrintInfo(\Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelDocsPrintInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelDocsPrintInfo[] = $item;
        
        return $this;
    }
}
