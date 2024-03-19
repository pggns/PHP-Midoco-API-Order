<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorBillingDetailsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMediatorBillingDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorBillingDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorBillingDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail[]
     */
    protected ?array $MidocoMediatorBillingDetail = null;
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
     * Constructor method for GetMediatorBillingDetailsResponse
     * @uses GetMediatorBillingDetailsResponse::setMidocoMediatorBillingDetail()
     * @uses GetMediatorBillingDetailsResponse::setMidocoMediatorCharge()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail[] $midocoMediatorBillingDetail
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     */
    public function __construct(?array $midocoMediatorBillingDetail = null, ?array $midocoMediatorCharge = null)
    {
        $this
            ->setMidocoMediatorBillingDetail($midocoMediatorBillingDetail)
            ->setMidocoMediatorCharge($midocoMediatorCharge);
    }
    /**
     * Get MidocoMediatorBillingDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail[]
     */
    public function getMidocoMediatorBillingDetail(): ?array
    {
        return $this->MidocoMediatorBillingDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorBillingDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorBillingDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorBillingDetailForArrayConstraintFromSetMidocoMediatorBillingDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMediatorBillingDetailsResponseMidocoMediatorBillingDetailItem) {
            // validation for constraint: itemType
            if (!$getMediatorBillingDetailsResponseMidocoMediatorBillingDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail) {
                $invalidValues[] = is_object($getMediatorBillingDetailsResponseMidocoMediatorBillingDetailItem) ? get_class($getMediatorBillingDetailsResponseMidocoMediatorBillingDetailItem) : sprintf('%s(%s)', gettype($getMediatorBillingDetailsResponseMidocoMediatorBillingDetailItem), var_export($getMediatorBillingDetailsResponseMidocoMediatorBillingDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorBillingDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorBillingDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail[] $midocoMediatorBillingDetail
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorBillingDetailsResponse
     */
    public function setMidocoMediatorBillingDetail(?array $midocoMediatorBillingDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorBillingDetailArrayErrorMessage = self::validateMidocoMediatorBillingDetailForArrayConstraintFromSetMidocoMediatorBillingDetail($midocoMediatorBillingDetail))) {
            throw new InvalidArgumentException($midocoMediatorBillingDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorBillingDetail = $midocoMediatorBillingDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorBillingDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorBillingDetailsResponse
     */
    public function addToMidocoMediatorBillingDetail(\Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorBillingDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMediatorBillingDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorBillingDetail[] = $item;
        
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
        foreach ($values as $getMediatorBillingDetailsResponseMidocoMediatorChargeItem) {
            // validation for constraint: itemType
            if (!$getMediatorBillingDetailsResponseMidocoMediatorChargeItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
                $invalidValues[] = is_object($getMediatorBillingDetailsResponseMidocoMediatorChargeItem) ? get_class($getMediatorBillingDetailsResponseMidocoMediatorChargeItem) : sprintf('%s(%s)', gettype($getMediatorBillingDetailsResponseMidocoMediatorChargeItem), var_export($getMediatorBillingDetailsResponseMidocoMediatorChargeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorBillingDetailsResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorBillingDetailsResponse
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
