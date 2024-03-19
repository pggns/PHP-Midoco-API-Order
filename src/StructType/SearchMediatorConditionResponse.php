<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorConditionResponse extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo[]
     */
    protected ?array $MediatorConditionInfo = null;
    /**
     * Constructor method for SearchMediatorConditionResponse
     * @uses SearchMediatorConditionResponse::setMediatorConditionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo[] $mediatorConditionInfo
     */
    public function __construct(?array $mediatorConditionInfo = null)
    {
        $this
            ->setMediatorConditionInfo($mediatorConditionInfo);
    }
    /**
     * Get MediatorConditionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo[]
     */
    public function getMediatorConditionInfo(): ?array
    {
        return $this->MediatorConditionInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMediatorConditionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorConditionInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorConditionInfoForArrayConstraintFromSetMediatorConditionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorConditionResponseMediatorConditionInfoItem) {
            // validation for constraint: itemType
            if (!$searchMediatorConditionResponseMediatorConditionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo) {
                $invalidValues[] = is_object($searchMediatorConditionResponseMediatorConditionInfoItem) ? get_class($searchMediatorConditionResponseMediatorConditionInfoItem) : sprintf('%s(%s)', gettype($searchMediatorConditionResponseMediatorConditionInfoItem), var_export($searchMediatorConditionResponseMediatorConditionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorConditionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorConditionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo[] $mediatorConditionInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorConditionResponse
     */
    public function setMediatorConditionInfo(?array $mediatorConditionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorConditionInfoArrayErrorMessage = self::validateMediatorConditionInfoForArrayConstraintFromSetMediatorConditionInfo($mediatorConditionInfo))) {
            throw new InvalidArgumentException($mediatorConditionInfoArrayErrorMessage, __LINE__);
        }
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
    /**
     * Add item to MediatorConditionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorConditionResponse
     */
    public function addToMediatorConditionInfo(\Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo) {
            throw new InvalidArgumentException(sprintf('The MediatorConditionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorConditionInfo[] = $item;
        
        return $this;
    }
}
