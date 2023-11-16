<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierAgencySettlementResponse StructType
 * @subpackage Structs
 */
class DeleteSupplierAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The errorSettlementIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $errorSettlementIds = [];
    /**
     * Constructor method for DeleteSupplierAgencySettlementResponse
     * @uses DeleteSupplierAgencySettlementResponse::setErrorSettlementIds()
     * @param int[] $errorSettlementIds
     */
    public function __construct(array $errorSettlementIds = [])
    {
        $this
            ->setErrorSettlementIds($errorSettlementIds);
    }
    /**
     * Get errorSettlementIds value
     * @return int[]
     */
    public function getErrorSettlementIds(): array
    {
        return $this->errorSettlementIds;
    }
    /**
     * This method is responsible for validating the values passed to the setErrorSettlementIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorSettlementIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorSettlementIdsForArrayConstraintsFromSetErrorSettlementIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteSupplierAgencySettlementResponseErrorSettlementIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($deleteSupplierAgencySettlementResponseErrorSettlementIdsItem) || ctype_digit($deleteSupplierAgencySettlementResponseErrorSettlementIdsItem))) {
                $invalidValues[] = is_object($deleteSupplierAgencySettlementResponseErrorSettlementIdsItem) ? get_class($deleteSupplierAgencySettlementResponseErrorSettlementIdsItem) : sprintf('%s(%s)', gettype($deleteSupplierAgencySettlementResponseErrorSettlementIdsItem), var_export($deleteSupplierAgencySettlementResponseErrorSettlementIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorSettlementIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorSettlementIds value
     * @throws InvalidArgumentException
     * @param int[] $errorSettlementIds
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementResponse
     */
    public function setErrorSettlementIds(array $errorSettlementIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($errorSettlementIdsArrayErrorMessage = self::validateErrorSettlementIdsForArrayConstraintsFromSetErrorSettlementIds($errorSettlementIds))) {
            throw new InvalidArgumentException($errorSettlementIdsArrayErrorMessage, __LINE__);
        }
        $this->errorSettlementIds = $errorSettlementIds;
        
        return $this;
    }
    /**
     * Add item to errorSettlementIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementResponse
     */
    public function addToErrorSettlementIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The errorSettlementIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorSettlementIds[] = $item;
        
        return $this;
    }
}
