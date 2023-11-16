<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoInvoiceConditionsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Response with available auto invoice conditions available in the org unit.
 * @subpackage Structs
 */
class GetAutoInvoiceConditionsResponse extends AbstractStructBase
{
    /**
     * The MidocoAutoInvoiceCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAutoInvoiceCondition
     * @var \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO[]
     */
    protected array $MidocoAutoInvoiceCondition = [];
    /**
     * Constructor method for GetAutoInvoiceConditionsResponse
     * @uses GetAutoInvoiceConditionsResponse::setMidocoAutoInvoiceCondition()
     * @param \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO[] $midocoAutoInvoiceCondition
     */
    public function __construct(array $midocoAutoInvoiceCondition = [])
    {
        $this
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
    }
    /**
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO[]
     */
    public function getMidocoAutoInvoiceCondition(): array
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAutoInvoiceCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAutoInvoiceCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAutoInvoiceConditionForArrayConstraintsFromSetMidocoAutoInvoiceCondition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAutoInvoiceConditionsResponseMidocoAutoInvoiceConditionItem) {
            // validation for constraint: itemType
            if (!$getAutoInvoiceConditionsResponseMidocoAutoInvoiceConditionItem instanceof \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO) {
                $invalidValues[] = is_object($getAutoInvoiceConditionsResponseMidocoAutoInvoiceConditionItem) ? get_class($getAutoInvoiceConditionsResponseMidocoAutoInvoiceConditionItem) : sprintf('%s(%s)', gettype($getAutoInvoiceConditionsResponseMidocoAutoInvoiceConditionItem), var_export($getAutoInvoiceConditionsResponseMidocoAutoInvoiceConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAutoInvoiceCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO[] $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\Order\StructType\GetAutoInvoiceConditionsResponse
     */
    public function setMidocoAutoInvoiceCondition(array $midocoAutoInvoiceCondition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAutoInvoiceConditionArrayErrorMessage = self::validateMidocoAutoInvoiceConditionForArrayConstraintsFromSetMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition))) {
            throw new InvalidArgumentException($midocoAutoInvoiceConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoAutoInvoiceCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAutoInvoiceConditionsResponse
     */
    public function addToMidocoAutoInvoiceCondition(\Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAutoInvoiceCondition property can only contain items of type \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAutoInvoiceCondition[] = $item;
        
        return $this;
    }
}
