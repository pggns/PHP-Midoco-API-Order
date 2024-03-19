<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportSupplierSettlementDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportSupplierSettlementDataResponse extends AbstractStructBase
{
    /**
     * The MidocoFault
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoFault
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    protected ?array $MidocoFault = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * Constructor method for ImportSupplierSettlementDataResponse
     * @uses ImportSupplierSettlementDataResponse::setMidocoFault()
     * @uses ImportSupplierSettlementDataResponse::setSettlementId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType[] $midocoFault
     * @param int $settlementId
     */
    public function __construct(?array $midocoFault = null, ?int $settlementId = null)
    {
        $this
            ->setMidocoFault($midocoFault)
            ->setSettlementId($settlementId);
    }
    /**
     * Get MidocoFault value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFaultType[]
     */
    public function getMidocoFault(): ?array
    {
        return $this->MidocoFault;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFault method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFault method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFaultForArrayConstraintFromSetMidocoFault(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importSupplierSettlementDataResponseMidocoFaultItem) {
            // validation for constraint: itemType
            if (!$importSupplierSettlementDataResponseMidocoFaultItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFaultType) {
                $invalidValues[] = is_object($importSupplierSettlementDataResponseMidocoFaultItem) ? get_class($importSupplierSettlementDataResponseMidocoFaultItem) : sprintf('%s(%s)', gettype($importSupplierSettlementDataResponseMidocoFaultItem), var_export($importSupplierSettlementDataResponseMidocoFaultItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataResponse
     */
    public function setMidocoFault(?array $midocoFault = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFaultArrayErrorMessage = self::validateMidocoFaultForArrayConstraintFromSetMidocoFault($midocoFault))) {
            throw new InvalidArgumentException($midocoFaultArrayErrorMessage, __LINE__);
        }
        $this->MidocoFault = $midocoFault;
        
        return $this;
    }
    /**
     * Add item to MidocoFault value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFaultType $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataResponse
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
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataResponse
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
