<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorProductSettlementDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorProductSettlementDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorProductSettlementDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorProductSettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail[]
     */
    protected ?array $MidocoMediatorProductSettlementDetail = null;
    /**
     * The MidocoMediatorCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorCharge
     * @var \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[]
     */
    protected ?array $MidocoMediatorCharge = null;
    /**
     * Constructor method for GetMediatorProductSettlementDetailsResponse
     * @uses GetMediatorProductSettlementDetailsResponse::setMidocoMediatorProductSettlementDetail()
     * @uses GetMediatorProductSettlementDetailsResponse::setMidocoMediatorCharge()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail[] $midocoMediatorProductSettlementDetail
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     */
    public function __construct(?array $midocoMediatorProductSettlementDetail = null, ?array $midocoMediatorCharge = null)
    {
        $this
            ->setMidocoMediatorProductSettlementDetail($midocoMediatorProductSettlementDetail)
            ->setMidocoMediatorCharge($midocoMediatorCharge);
    }
    /**
     * Get MidocoMediatorProductSettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail[]
     */
    public function getMidocoMediatorProductSettlementDetail(): ?array
    {
        return $this->MidocoMediatorProductSettlementDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorProductSettlementDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorProductSettlementDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorProductSettlementDetailForArrayConstraintFromSetMidocoMediatorProductSettlementDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediatorProductSettlementDetailsResponseMidocoMediatorProductSettlementDetailItem) {
            // validation for constraint: itemType
            if (!$getMediatorProductSettlementDetailsResponseMidocoMediatorProductSettlementDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail) {
                $invalidValues[] = is_object($getMediatorProductSettlementDetailsResponseMidocoMediatorProductSettlementDetailItem) ? get_class($getMediatorProductSettlementDetailsResponseMidocoMediatorProductSettlementDetailItem) : sprintf('%s(%s)', gettype($getMediatorProductSettlementDetailsResponseMidocoMediatorProductSettlementDetailItem), var_export($getMediatorProductSettlementDetailsResponseMidocoMediatorProductSettlementDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorProductSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorProductSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail[] $midocoMediatorProductSettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorProductSettlementDetailsResponse
     */
    public function setMidocoMediatorProductSettlementDetail(?array $midocoMediatorProductSettlementDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorProductSettlementDetailArrayErrorMessage = self::validateMidocoMediatorProductSettlementDetailForArrayConstraintFromSetMidocoMediatorProductSettlementDetail($midocoMediatorProductSettlementDetail))) {
            throw new InvalidArgumentException($midocoMediatorProductSettlementDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorProductSettlementDetail = $midocoMediatorProductSettlementDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorProductSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorProductSettlementDetailsResponse
     */
    public function addToMidocoMediatorProductSettlementDetail(\Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorProductSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorProductSettlementDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMediatorCharge value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[]
     */
    public function getMidocoMediatorCharge(): ?array
    {
        return $this->MidocoMediatorCharge;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorCharge method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorChargeForArrayConstraintFromSetMidocoMediatorCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediatorProductSettlementDetailsResponseMidocoMediatorChargeItem) {
            // validation for constraint: itemType
            if (!$getMediatorProductSettlementDetailsResponseMidocoMediatorChargeItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
                $invalidValues[] = is_object($getMediatorProductSettlementDetailsResponseMidocoMediatorChargeItem) ? get_class($getMediatorProductSettlementDetailsResponseMidocoMediatorChargeItem) : sprintf('%s(%s)', gettype($getMediatorProductSettlementDetailsResponseMidocoMediatorChargeItem), var_export($getMediatorProductSettlementDetailsResponseMidocoMediatorChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorProductSettlementDetailsResponse
     */
    public function setMidocoMediatorCharge(?array $midocoMediatorCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorChargeArrayErrorMessage = self::validateMidocoMediatorChargeForArrayConstraintFromSetMidocoMediatorCharge($midocoMediatorCharge))) {
            throw new InvalidArgumentException($midocoMediatorChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorCharge = $midocoMediatorCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorProductSettlementDetailsResponse
     */
    public function addToMidocoMediatorCharge(\Pggns\MidocoApi\Order\StructType\MediatorChargeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorCharge property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorCharge[] = $item;
        
        return $this;
    }
}
