<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAgencySettlementRequest StructType
 * @subpackage Structs
 */
class DeleteSupplierAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The settlementIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $settlementIds = [];
    /**
     * Constructor method for DeleteSupplierAgencySettlementRequest
     * @uses DeleteSupplierAgencySettlementRequest::setSettlementIds()
     * @param int[] $settlementIds
     */
    public function __construct(array $settlementIds = [])
    {
        $this
            ->setSettlementIds($settlementIds);
    }
    /**
     * Get settlementIds value
     * @return int[]
     */
    public function getSettlementIds(): array
    {
        return $this->settlementIds;
    }
    /**
     * This method is responsible for validating the values passed to the setSettlementIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSettlementIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSettlementIdsForArrayConstraintsFromSetSettlementIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteSupplierAgencySettlementRequestSettlementIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteSupplierAgencySettlementRequestSettlementIdsItem) || ctype_digit($deleteSupplierAgencySettlementRequestSettlementIdsItem))) {
                $invalidValues[] = is_object($deleteSupplierAgencySettlementRequestSettlementIdsItem) ? get_class($deleteSupplierAgencySettlementRequestSettlementIdsItem) : sprintf('%s(%s)', gettype($deleteSupplierAgencySettlementRequestSettlementIdsItem), var_export($deleteSupplierAgencySettlementRequestSettlementIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The settlementIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set settlementIds value
     * @throws InvalidArgumentException
     * @param int[] $settlementIds
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementRequest
     */
    public function setSettlementIds(array $settlementIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($settlementIdsArrayErrorMessage = self::validateSettlementIdsForArrayConstraintsFromSetSettlementIds($settlementIds))) {
            throw new InvalidArgumentException($settlementIdsArrayErrorMessage, __LINE__);
        }
        $this->settlementIds = $settlementIds;
        
        return $this;
    }
    /**
     * Add item to settlementIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementRequest
     */
    public function addToSettlementIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The settlementIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->settlementIds[] = $item;
        
        return $this;
    }
}
