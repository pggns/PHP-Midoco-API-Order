<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedAdaptersResponse StructType
 * @subpackage Structs
 */
class AssignedAdaptersResponse extends AbstractStructBase
{
    /**
     * The MidocoAdapter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdapter
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[]
     */
    protected array $MidocoAdapter = [];
    /**
     * Constructor method for AssignedAdaptersResponse
     * @uses AssignedAdaptersResponse::setMidocoAdapter()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[] $midocoAdapter
     */
    public function __construct(array $midocoAdapter = [])
    {
        $this
            ->setMidocoAdapter($midocoAdapter);
    }
    /**
     * Get MidocoAdapter value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdapterType[]
     */
    public function getMidocoAdapter(): array
    {
        return $this->MidocoAdapter;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdapter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdapter method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $assignedAdaptersResponseMidocoAdapterItem) {
            // validation for constraint: itemType
            if (!$assignedAdaptersResponseMidocoAdapterItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdapterType) {
                $invalidValues[] = is_object($assignedAdaptersResponseMidocoAdapterItem) ? get_class($assignedAdaptersResponseMidocoAdapterItem) : sprintf('%s(%s)', gettype($assignedAdaptersResponseMidocoAdapterItem), var_export($assignedAdaptersResponseMidocoAdapterItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedAdaptersResponse
     */
    public function setMidocoAdapter(array $midocoAdapter = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdapterArrayErrorMessage = self::validateMidocoAdapterForArrayConstraintsFromSetMidocoAdapter($midocoAdapter))) {
            throw new InvalidArgumentException($midocoAdapterArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdapter = $midocoAdapter;
        
        return $this;
    }
    /**
     * Add item to MidocoAdapter value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdapterType $item
     * @return \Pggns\MidocoApi\Order\StructType\AssignedAdaptersResponse
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
}
