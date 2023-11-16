<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportMediatorChargesResponse StructType
 * @subpackage Structs
 */
class ImportMediatorChargesResponse extends AbstractStructBase
{
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
     * The MediatorError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MediatorError
     * @var \Pggns\MidocoApi\Order\StructType\MediatorErrorType[]
     */
    protected array $MediatorError = [];
    /**
     * Constructor method for ImportMediatorChargesResponse
     * @uses ImportMediatorChargesResponse::setMidocoMediatorCharge()
     * @uses ImportMediatorChargesResponse::setMediatorError()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO[] $midocoMediatorCharge
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     */
    public function __construct(array $midocoMediatorCharge = [], array $mediatorError = [])
    {
        $this
            ->setMidocoMediatorCharge($midocoMediatorCharge)
            ->setMediatorError($mediatorError);
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
        foreach ($values as $importMediatorChargesResponseMidocoMediatorChargeItem) {
            // validation for constraint: itemType
            if (!$importMediatorChargesResponseMidocoMediatorChargeItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorChargeDTO) {
                $invalidValues[] = is_object($importMediatorChargesResponseMidocoMediatorChargeItem) ? get_class($importMediatorChargesResponseMidocoMediatorChargeItem) : sprintf('%s(%s)', gettype($importMediatorChargesResponseMidocoMediatorChargeItem), var_export($importMediatorChargesResponseMidocoMediatorChargeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesResponse
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
    /**
     * Get MediatorError value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorErrorType[]
     */
    public function getMediatorError(): array
    {
        return $this->MediatorError;
    }
    /**
     * This method is responsible for validating the values passed to the setMediatorError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorErrorForArrayConstraintsFromSetMediatorError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importMediatorChargesResponseMediatorErrorItem) {
            // validation for constraint: itemType
            if (!$importMediatorChargesResponseMediatorErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
                $invalidValues[] = is_object($importMediatorChargesResponseMediatorErrorItem) ? get_class($importMediatorChargesResponseMediatorErrorItem) : sprintf('%s(%s)', gettype($importMediatorChargesResponseMediatorErrorItem), var_export($importMediatorChargesResponseMediatorErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesResponse
     */
    public function setMediatorError(array $mediatorError = []): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorErrorArrayErrorMessage = self::validateMediatorErrorForArrayConstraintsFromSetMediatorError($mediatorError))) {
            throw new InvalidArgumentException($mediatorErrorArrayErrorMessage, __LINE__);
        }
        $this->MediatorError = $mediatorError;
        
        return $this;
    }
    /**
     * Add item to MediatorError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesResponse
     */
    public function addToMediatorError(\Pggns\MidocoApi\Order\StructType\MediatorErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
            throw new InvalidArgumentException(sprintf('The MediatorError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorError[] = $item;
        
        return $this;
    }
}
