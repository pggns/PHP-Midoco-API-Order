<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorSettlementInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorSettlementInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSettlementInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[]
     */
    protected ?array $MidocoSettlementInfo = null;
    /**
     * Constructor method for SearchMediatorSettlementInfoResponse
     * @uses SearchMediatorSettlementInfoResponse::setMidocoSettlementInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[] $midocoSettlementInfo
     */
    public function __construct(?array $midocoSettlementInfo = null)
    {
        $this
            ->setMidocoSettlementInfo($midocoSettlementInfo);
    }
    /**
     * Get MidocoSettlementInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[]
     */
    public function getMidocoSettlementInfo(): ?array
    {
        return $this->MidocoSettlementInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSettlementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementInfoForArrayConstraintFromSetMidocoSettlementInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorSettlementInfoResponseMidocoSettlementInfoItem) {
            // validation for constraint: itemType
            if (!$searchMediatorSettlementInfoResponseMidocoSettlementInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo) {
                $invalidValues[] = is_object($searchMediatorSettlementInfoResponseMidocoSettlementInfoItem) ? get_class($searchMediatorSettlementInfoResponseMidocoSettlementInfoItem) : sprintf('%s(%s)', gettype($searchMediatorSettlementInfoResponseMidocoSettlementInfoItem), var_export($searchMediatorSettlementInfoResponseMidocoSettlementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[] $midocoSettlementInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoResponse
     */
    public function setMidocoSettlementInfo(?array $midocoSettlementInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementInfoArrayErrorMessage = self::validateMidocoSettlementInfoForArrayConstraintFromSetMidocoSettlementInfo($midocoSettlementInfo))) {
            throw new InvalidArgumentException($midocoSettlementInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementInfo = $midocoSettlementInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoResponse
     */
    public function addToMidocoSettlementInfo(\Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementInfo[] = $item;
        
        return $this;
    }
}
