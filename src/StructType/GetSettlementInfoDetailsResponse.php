<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSettlementInfoDetailsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: retrieve the settlement info details
 * @subpackage Structs
 */
class GetSettlementInfoDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementInfoDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSettlementInfoDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail[]
     */
    protected array $MidocoSettlementInfoDetail = [];
    /**
     * The MidocoMediatorCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorCharge
     * @var \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[]
     */
    protected array $MidocoMediatorCharge = [];
    /**
     * Constructor method for GetSettlementInfoDetailsResponse
     * @uses GetSettlementInfoDetailsResponse::setMidocoSettlementInfoDetail()
     * @uses GetSettlementInfoDetailsResponse::setMidocoMediatorCharge()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail[] $midocoSettlementInfoDetail
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     */
    public function __construct(array $midocoSettlementInfoDetail = [], array $midocoMediatorCharge = [])
    {
        $this
            ->setMidocoSettlementInfoDetail($midocoSettlementInfoDetail)
            ->setMidocoMediatorCharge($midocoMediatorCharge);
    }
    /**
     * Get MidocoSettlementInfoDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail[]
     */
    public function getMidocoSettlementInfoDetail(): array
    {
        return $this->MidocoSettlementInfoDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSettlementInfoDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementInfoDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementInfoDetailForArrayConstraintsFromSetMidocoSettlementInfoDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSettlementInfoDetailsResponseMidocoSettlementInfoDetailItem) {
            // validation for constraint: itemType
            if (!$getSettlementInfoDetailsResponseMidocoSettlementInfoDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail) {
                $invalidValues[] = is_object($getSettlementInfoDetailsResponseMidocoSettlementInfoDetailItem) ? get_class($getSettlementInfoDetailsResponseMidocoSettlementInfoDetailItem) : sprintf('%s(%s)', gettype($getSettlementInfoDetailsResponseMidocoSettlementInfoDetailItem), var_export($getSettlementInfoDetailsResponseMidocoSettlementInfoDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementInfoDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementInfoDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail[] $midocoSettlementInfoDetail
     * @return \Pggns\MidocoApi\Order\StructType\GetSettlementInfoDetailsResponse
     */
    public function setMidocoSettlementInfoDetail(array $midocoSettlementInfoDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementInfoDetailArrayErrorMessage = self::validateMidocoSettlementInfoDetailForArrayConstraintsFromSetMidocoSettlementInfoDetail($midocoSettlementInfoDetail))) {
            throw new InvalidArgumentException($midocoSettlementInfoDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementInfoDetail = $midocoSettlementInfoDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementInfoDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSettlementInfoDetailsResponse
     */
    public function addToMidocoSettlementInfoDetail(\Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementInfoDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfoDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementInfoDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMediatorCharge value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[]
     */
    public function getMidocoMediatorCharge(): array
    {
        return $this->MidocoMediatorCharge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMediatorCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorChargeForArrayConstraintsFromSetMidocoMediatorCharge(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSettlementInfoDetailsResponseMidocoMediatorChargeItem) {
            // validation for constraint: itemType
            if (!$getSettlementInfoDetailsResponseMidocoMediatorChargeItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
                $invalidValues[] = is_object($getSettlementInfoDetailsResponseMidocoMediatorChargeItem) ? get_class($getSettlementInfoDetailsResponseMidocoMediatorChargeItem) : sprintf('%s(%s)', gettype($getSettlementInfoDetailsResponseMidocoMediatorChargeItem), var_export($getSettlementInfoDetailsResponseMidocoMediatorChargeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSettlementInfoDetailsResponse
     */
    public function setMidocoMediatorCharge(array $midocoMediatorCharge = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorChargeArrayErrorMessage = self::validateMidocoMediatorChargeForArrayConstraintsFromSetMidocoMediatorCharge($midocoMediatorCharge))) {
            throw new InvalidArgumentException($midocoMediatorChargeArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorCharge = $midocoMediatorCharge;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorCharge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSettlementInfoDetailsResponse
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
