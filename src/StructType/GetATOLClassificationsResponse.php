<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetATOLClassificationsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetATOLClassificationsResponse extends AbstractStructBase
{
    /**
     * The MidocoATOLType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoATOLType
     * @var \Pggns\MidocoApi\Order\StructType\AtolTypeDTO[]
     */
    protected ?array $MidocoATOLType = null;
    /**
     * Constructor method for GetATOLClassificationsResponse
     * @uses GetATOLClassificationsResponse::setMidocoATOLType()
     * @param \Pggns\MidocoApi\Order\StructType\AtolTypeDTO[] $midocoATOLType
     */
    public function __construct(?array $midocoATOLType = null)
    {
        $this
            ->setMidocoATOLType($midocoATOLType);
    }
    /**
     * Get MidocoATOLType value
     * @return \Pggns\MidocoApi\Order\StructType\AtolTypeDTO[]
     */
    public function getMidocoATOLType(): ?array
    {
        return $this->MidocoATOLType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoATOLType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoATOLType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoATOLTypeForArrayConstraintFromSetMidocoATOLType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getATOLClassificationsResponseMidocoATOLTypeItem) {
            // validation for constraint: itemType
            if (!$getATOLClassificationsResponseMidocoATOLTypeItem instanceof \Pggns\MidocoApi\Order\StructType\AtolTypeDTO) {
                $invalidValues[] = is_object($getATOLClassificationsResponseMidocoATOLTypeItem) ? get_class($getATOLClassificationsResponseMidocoATOLTypeItem) : sprintf('%s(%s)', gettype($getATOLClassificationsResponseMidocoATOLTypeItem), var_export($getATOLClassificationsResponseMidocoATOLTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoATOLType property can only contain items of type \Pggns\MidocoApi\Order\StructType\AtolTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoATOLType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AtolTypeDTO[] $midocoATOLType
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLClassificationsResponse
     */
    public function setMidocoATOLType(?array $midocoATOLType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoATOLTypeArrayErrorMessage = self::validateMidocoATOLTypeForArrayConstraintFromSetMidocoATOLType($midocoATOLType))) {
            throw new InvalidArgumentException($midocoATOLTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoATOLType = $midocoATOLType;
        
        return $this;
    }
    /**
     * Add item to MidocoATOLType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AtolTypeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLClassificationsResponse
     */
    public function addToMidocoATOLType(\Pggns\MidocoApi\Order\StructType\AtolTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AtolTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoATOLType property can only contain items of type \Pggns\MidocoApi\Order\StructType\AtolTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoATOLType[] = $item;
        
        return $this;
    }
}
