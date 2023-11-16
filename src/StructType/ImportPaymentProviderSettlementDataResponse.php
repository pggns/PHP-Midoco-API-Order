<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportPaymentProviderSettlementDataResponse StructType
 * @subpackage Structs
 */
class ImportPaymentProviderSettlementDataResponse extends AbstractStructBase
{
    /**
     * The settlementId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $settlementId = [];
    /**
     * The MidocoFault
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoFault
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    protected array $MidocoFault = [];
    /**
     * Constructor method for ImportPaymentProviderSettlementDataResponse
     * @uses ImportPaymentProviderSettlementDataResponse::setSettlementId()
     * @uses ImportPaymentProviderSettlementDataResponse::setMidocoFault()
     * @param int[] $settlementId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     */
    public function __construct(array $settlementId = [], array $midocoFault = [])
    {
        $this
            ->setSettlementId($settlementId)
            ->setMidocoFault($midocoFault);
    }
    /**
     * Get settlementId value
     * @return int[]
     */
    public function getSettlementId(): array
    {
        return $this->settlementId;
    }
    /**
     * This method is responsible for validating the values passed to the setSettlementId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSettlementId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSettlementIdForArrayConstraintsFromSetSettlementId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importPaymentProviderSettlementDataResponseSettlementIdItem) {
            // validation for constraint: itemType
            if (!(is_int($importPaymentProviderSettlementDataResponseSettlementIdItem) || ctype_digit($importPaymentProviderSettlementDataResponseSettlementIdItem))) {
                $invalidValues[] = is_object($importPaymentProviderSettlementDataResponseSettlementIdItem) ? get_class($importPaymentProviderSettlementDataResponseSettlementIdItem) : sprintf('%s(%s)', gettype($importPaymentProviderSettlementDataResponseSettlementIdItem), var_export($importPaymentProviderSettlementDataResponseSettlementIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The settlementId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set settlementId value
     * @throws InvalidArgumentException
     * @param int[] $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse
     */
    public function setSettlementId(array $settlementId = []): self
    {
        // validation for constraint: array
        if ('' !== ($settlementIdArrayErrorMessage = self::validateSettlementIdForArrayConstraintsFromSetSettlementId($settlementId))) {
            throw new InvalidArgumentException($settlementIdArrayErrorMessage, __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Add item to settlementId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse
     */
    public function addToSettlementId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The settlementId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->settlementId[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoFault value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    public function getMidocoFault(): array
    {
        return $this->MidocoFault;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFault method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFault method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFaultForArrayConstraintsFromSetMidocoFault(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importPaymentProviderSettlementDataResponseMidocoFaultItem) {
            // validation for constraint: itemType
            if (!$importPaymentProviderSettlementDataResponseMidocoFaultItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
                $invalidValues[] = is_object($importPaymentProviderSettlementDataResponseMidocoFaultItem) ? get_class($importPaymentProviderSettlementDataResponseMidocoFaultItem) : sprintf('%s(%s)', gettype($importPaymentProviderSettlementDataResponseMidocoFaultItem), var_export($importPaymentProviderSettlementDataResponseMidocoFaultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFaultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse
     */
    public function setMidocoFault(array $midocoFault = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFaultArrayErrorMessage = self::validateMidocoFaultForArrayConstraintsFromSetMidocoFault($midocoFault))) {
            throw new InvalidArgumentException($midocoFaultArrayErrorMessage, __LINE__);
        }
        $this->MidocoFault = $midocoFault;
        
        return $this;
    }
    /**
     * Add item to MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse
     */
    public function addToMidocoFault(\Pggns\MidocoApi\Order\StructType\MidocoFaultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
            throw new InvalidArgumentException(sprintf('The MidocoFault property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFaultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFault[] = $item;
        
        return $this;
    }
}
