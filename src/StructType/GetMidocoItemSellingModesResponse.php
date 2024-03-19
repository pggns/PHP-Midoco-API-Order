<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoItemSellingModesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoItemSellingModesResponse extends AbstractStructBase
{
    /**
     * The MidocoItemSellingMode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoItemSellingMode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[]
     */
    protected ?array $MidocoItemSellingMode = null;
    /**
     * Constructor method for GetMidocoItemSellingModesResponse
     * @uses GetMidocoItemSellingModesResponse::setMidocoItemSellingMode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[] $midocoItemSellingMode
     */
    public function __construct(?array $midocoItemSellingMode = null)
    {
        $this
            ->setMidocoItemSellingMode($midocoItemSellingMode);
    }
    /**
     * Get MidocoItemSellingMode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[]
     */
    public function getMidocoItemSellingMode(): ?array
    {
        return $this->MidocoItemSellingMode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoItemSellingMode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoItemSellingMode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoItemSellingModeForArrayConstraintFromSetMidocoItemSellingMode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoItemSellingModesResponseMidocoItemSellingModeItem) {
            // validation for constraint: itemType
            if (!$getMidocoItemSellingModesResponseMidocoItemSellingModeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode) {
                $invalidValues[] = is_object($getMidocoItemSellingModesResponseMidocoItemSellingModeItem) ? get_class($getMidocoItemSellingModesResponseMidocoItemSellingModeItem) : sprintf('%s(%s)', gettype($getMidocoItemSellingModesResponseMidocoItemSellingModeItem), var_export($getMidocoItemSellingModesResponseMidocoItemSellingModeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoItemSellingMode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoItemSellingMode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[] $midocoItemSellingMode
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoItemSellingModesResponse
     */
    public function setMidocoItemSellingMode(?array $midocoItemSellingMode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoItemSellingModeArrayErrorMessage = self::validateMidocoItemSellingModeForArrayConstraintFromSetMidocoItemSellingMode($midocoItemSellingMode))) {
            throw new InvalidArgumentException($midocoItemSellingModeArrayErrorMessage, __LINE__);
        }
        $this->MidocoItemSellingMode = $midocoItemSellingMode;
        
        return $this;
    }
    /**
     * Add item to MidocoItemSellingMode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoItemSellingModesResponse
     */
    public function addToMidocoItemSellingMode(\Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode) {
            throw new InvalidArgumentException(sprintf('The MidocoItemSellingMode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoItemSellingMode[] = $item;
        
        return $this;
    }
}
