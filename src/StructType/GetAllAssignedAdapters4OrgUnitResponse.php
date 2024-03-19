<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllAssignedAdapters4OrgUnitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAllAssignedAdapters4OrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoAdapter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapter
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[]
     */
    protected ?array $MidocoAdapter = null;
    /**
     * The MidocoAdapterAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapterAssign
     * @var \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO[]
     */
    protected ?array $MidocoAdapterAssign = null;
    /**
     * Constructor method for GetAllAssignedAdapters4OrgUnitResponse
     * @uses GetAllAssignedAdapters4OrgUnitResponse::setMidocoAdapter()
     * @uses GetAllAssignedAdapters4OrgUnitResponse::setMidocoAdapterAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[] $midocoAdapter
     * @param \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO[] $midocoAdapterAssign
     */
    public function __construct(?array $midocoAdapter = null, ?array $midocoAdapterAssign = null)
    {
        $this
            ->setMidocoAdapter($midocoAdapter)
            ->setMidocoAdapterAssign($midocoAdapterAssign);
    }
    /**
     * Get MidocoAdapter value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[]
     */
    public function getMidocoAdapter(): ?array
    {
        return $this->MidocoAdapter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdapter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterForArrayConstraintFromSetMidocoAdapter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem) {
            // validation for constraint: itemType
            if (!$getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdapterType) {
                $invalidValues[] = is_object($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem) ? get_class($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem) : sprintf('%s(%s)', gettype($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem), var_export($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdapterType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[] $midocoAdapter
     * @return \Pggns\MidocoApi\Order\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function setMidocoAdapter(?array $midocoAdapter = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterArrayErrorMessage = self::validateMidocoAdapterForArrayConstraintFromSetMidocoAdapter($midocoAdapter))) {
            throw new InvalidArgumentException($midocoAdapterArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapter = $midocoAdapter;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdapterType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function addToMidocoAdapter(\Pggns\MidocoApi\Order\StructType\MidocoAdapterType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdapterType) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapter property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdapterType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapter[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAdapterAssign value
     * @return \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO[]
     */
    public function getMidocoAdapterAssign(): ?array
    {
        return $this->MidocoAdapterAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdapterAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapterAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterAssignForArrayConstraintFromSetMidocoAdapterAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem) {
            // validation for constraint: itemType
            if (!$getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem instanceof \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO) {
                $invalidValues[] = is_object($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem) ? get_class($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem) : sprintf('%s(%s)', gettype($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem), var_export($getAllAssignedAdapters4OrgUnitResponseMidocoAdapterAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdapterAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdapterAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO[] $midocoAdapterAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function setMidocoAdapterAssign(?array $midocoAdapterAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterAssignArrayErrorMessage = self::validateMidocoAdapterAssignForArrayConstraintFromSetMidocoAdapterAssign($midocoAdapterAssign))) {
            throw new InvalidArgumentException($midocoAdapterAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapterAssign = $midocoAdapterAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapterAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAllAssignedAdapters4OrgUnitResponse
     */
    public function addToMidocoAdapterAssign(\Pggns\MidocoApi\Order\StructType\AdapterAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAdapterAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdapterAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdapterAssign[] = $item;
        
        return $this;
    }
}
