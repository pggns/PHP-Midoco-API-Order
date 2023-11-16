<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSettlementChargesForOrgUnitResponse StructType
 * @subpackage Structs
 */
class ListSettlementChargesForOrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSettlementCharge
     * @var \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[]
     */
    protected array $MidocoSettlementCharge = [];
    /**
     * Constructor method for ListSettlementChargesForOrgUnitResponse
     * @uses ListSettlementChargesForOrgUnitResponse::setMidocoSettlementCharge()
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[] $midocoSettlementCharge
     */
    public function __construct(array $midocoSettlementCharge = [])
    {
        $this
            ->setMidocoSettlementCharge($midocoSettlementCharge);
    }
    /**
     * Get MidocoSettlementCharge value
     * @return \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[]
     */
    public function getMidocoSettlementCharge(): array
    {
        return $this->MidocoSettlementCharge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSettlementCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementChargeForArrayConstraintsFromSetMidocoSettlementCharge(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSettlementChargesForOrgUnitResponseMidocoSettlementChargeItem) {
            // validation for constraint: itemType
            if (!$listSettlementChargesForOrgUnitResponseMidocoSettlementChargeItem instanceof \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO) {
                $invalidValues[] = is_object($listSettlementChargesForOrgUnitResponseMidocoSettlementChargeItem) ? get_class($listSettlementChargesForOrgUnitResponseMidocoSettlementChargeItem) : sprintf('%s(%s)', gettype($listSettlementChargesForOrgUnitResponseMidocoSettlementChargeItem), var_export($listSettlementChargesForOrgUnitResponseMidocoSettlementChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO[] $midocoSettlementCharge
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesForOrgUnitResponse
     */
    public function setMidocoSettlementCharge(array $midocoSettlementCharge = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementChargeArrayErrorMessage = self::validateMidocoSettlementChargeForArrayConstraintsFromSetMidocoSettlementCharge($midocoSettlementCharge))) {
            throw new InvalidArgumentException($midocoSettlementChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementCharge = $midocoSettlementCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesForOrgUnitResponse
     */
    public function addToMidocoSettlementCharge(\Pggns\MidocoApi\Order\StructType\SettlementChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\SettlementChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementCharge[] = $item;
        
        return $this;
    }
}
