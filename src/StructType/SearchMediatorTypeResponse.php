<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorTypeResponse extends AbstractStructBase
{
    /**
     * The MediatorTypeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MediatorTypeInfo
     * @var \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO[]
     */
    protected ?array $MediatorTypeInfo = null;
    /**
     * Constructor method for SearchMediatorTypeResponse
     * @uses SearchMediatorTypeResponse::setMediatorTypeInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO[] $mediatorTypeInfo
     */
    public function __construct(?array $mediatorTypeInfo = null)
    {
        $this
            ->setMediatorTypeInfo($mediatorTypeInfo);
    }
    /**
     * Get MediatorTypeInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO[]
     */
    public function getMediatorTypeInfo(): ?array
    {
        return $this->MediatorTypeInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMediatorTypeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorTypeInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorTypeInfoForArrayConstraintFromSetMediatorTypeInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorTypeResponseMediatorTypeInfoItem) {
            // validation for constraint: itemType
            if (!$searchMediatorTypeResponseMediatorTypeInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO) {
                $invalidValues[] = is_object($searchMediatorTypeResponseMediatorTypeInfoItem) ? get_class($searchMediatorTypeResponseMediatorTypeInfoItem) : sprintf('%s(%s)', gettype($searchMediatorTypeResponseMediatorTypeInfoItem), var_export($searchMediatorTypeResponseMediatorTypeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorTypeInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO[] $mediatorTypeInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorTypeResponse
     */
    public function setMediatorTypeInfo(?array $mediatorTypeInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorTypeInfoArrayErrorMessage = self::validateMediatorTypeInfoForArrayConstraintFromSetMediatorTypeInfo($mediatorTypeInfo))) {
            throw new InvalidArgumentException($mediatorTypeInfoArrayErrorMessage, __LINE__);
        }
        $this->MediatorTypeInfo = $mediatorTypeInfo;
        
        return $this;
    }
    /**
     * Add item to MediatorTypeInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorTypeResponse
     */
    public function addToMediatorTypeInfo(\Pggns\MidocoApi\Order\StructType\MediatorTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MediatorTypeInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorTypeInfo[] = $item;
        
        return $this;
    }
}
