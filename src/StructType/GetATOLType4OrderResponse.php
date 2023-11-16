<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetATOLType4OrderResponse StructType
 * @subpackage Structs
 */
class GetATOLType4OrderResponse extends AbstractStructBase
{
    /**
     * The MidocoItemSellingMode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoItemSellingMode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[]
     */
    protected array $MidocoItemSellingMode = [];
    /**
     * Constructor method for GetATOLType4OrderResponse
     * @uses GetATOLType4OrderResponse::setMidocoItemSellingMode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[] $midocoItemSellingMode
     */
    public function __construct(array $midocoItemSellingMode = [])
    {
        $this
            ->setMidocoItemSellingMode($midocoItemSellingMode);
    }
    /**
     * Get MidocoItemSellingMode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[]
     */
    public function getMidocoItemSellingMode(): array
    {
        return $this->MidocoItemSellingMode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoItemSellingMode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoItemSellingMode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoItemSellingModeForArrayConstraintsFromSetMidocoItemSellingMode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getATOLType4OrderResponseMidocoItemSellingModeItem) {
            // validation for constraint: itemType
            if (!$getATOLType4OrderResponseMidocoItemSellingModeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode) {
                $invalidValues[] = is_object($getATOLType4OrderResponseMidocoItemSellingModeItem) ? get_class($getATOLType4OrderResponseMidocoItemSellingModeItem) : sprintf('%s(%s)', gettype($getATOLType4OrderResponseMidocoItemSellingModeItem), var_export($getATOLType4OrderResponseMidocoItemSellingModeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLType4OrderResponse
     */
    public function setMidocoItemSellingMode(array $midocoItemSellingMode = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoItemSellingModeArrayErrorMessage = self::validateMidocoItemSellingModeForArrayConstraintsFromSetMidocoItemSellingMode($midocoItemSellingMode))) {
            throw new InvalidArgumentException($midocoItemSellingModeArrayErrorMessage, __LINE__);
        }
        $this->MidocoItemSellingMode = $midocoItemSellingMode;
        
        return $this;
    }
    /**
     * Add item to MidocoItemSellingMode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode $item
     * @return \Pggns\MidocoApi\Order\StructType\GetATOLType4OrderResponse
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
