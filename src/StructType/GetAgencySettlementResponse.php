<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencySettlementResponse StructType
 * @subpackage Structs
 */
class GetAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyProvisionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo[]
     */
    protected array $MidocoAgencyProvisionInfo = [];
    /**
     * Constructor method for GetAgencySettlementResponse
     * @uses GetAgencySettlementResponse::setMidocoAgencyProvisionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo[] $midocoAgencyProvisionInfo
     */
    public function __construct(array $midocoAgencyProvisionInfo = [])
    {
        $this
            ->setMidocoAgencyProvisionInfo($midocoAgencyProvisionInfo);
    }
    /**
     * Get MidocoAgencyProvisionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo[]
     */
    public function getMidocoAgencyProvisionInfo(): array
    {
        return $this->MidocoAgencyProvisionInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyProvisionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyProvisionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyProvisionInfoForArrayConstraintsFromSetMidocoAgencyProvisionInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgencySettlementResponseMidocoAgencyProvisionInfoItem) {
            // validation for constraint: itemType
            if (!$getAgencySettlementResponseMidocoAgencyProvisionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo) {
                $invalidValues[] = is_object($getAgencySettlementResponseMidocoAgencyProvisionInfoItem) ? get_class($getAgencySettlementResponseMidocoAgencyProvisionInfoItem) : sprintf('%s(%s)', gettype($getAgencySettlementResponseMidocoAgencyProvisionInfoItem), var_export($getAgencySettlementResponseMidocoAgencyProvisionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyProvisionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyProvisionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo[] $midocoAgencyProvisionInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetAgencySettlementResponse
     */
    public function setMidocoAgencyProvisionInfo(array $midocoAgencyProvisionInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyProvisionInfoArrayErrorMessage = self::validateMidocoAgencyProvisionInfoForArrayConstraintsFromSetMidocoAgencyProvisionInfo($midocoAgencyProvisionInfo))) {
            throw new InvalidArgumentException($midocoAgencyProvisionInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyProvisionInfo = $midocoAgencyProvisionInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyProvisionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAgencySettlementResponse
     */
    public function addToMidocoAgencyProvisionInfo(\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyProvisionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyProvisionInfo[] = $item;
        
        return $this;
    }
}
