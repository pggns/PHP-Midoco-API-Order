<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoItemSellingModesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoItemSellingModesRequest extends AbstractStructBase
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for SaveMidocoItemSellingModesRequest
     * @uses SaveMidocoItemSellingModesRequest::setMidocoItemSellingMode()
     * @uses SaveMidocoItemSellingModesRequest::setOrderId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode[] $midocoItemSellingMode
     * @param int $orderId
     */
    public function __construct(?array $midocoItemSellingMode = null, ?int $orderId = null)
    {
        $this
            ->setMidocoItemSellingMode($midocoItemSellingMode)
            ->setOrderId($orderId);
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
        foreach ($values as $saveMidocoItemSellingModesRequestMidocoItemSellingModeItem) {
            // validation for constraint: itemType
            if (!$saveMidocoItemSellingModesRequestMidocoItemSellingModeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode) {
                $invalidValues[] = is_object($saveMidocoItemSellingModesRequestMidocoItemSellingModeItem) ? get_class($saveMidocoItemSellingModesRequestMidocoItemSellingModeItem) : sprintf('%s(%s)', gettype($saveMidocoItemSellingModesRequestMidocoItemSellingModeItem), var_export($saveMidocoItemSellingModesRequestMidocoItemSellingModeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoItemSellingModesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoItemSellingModesRequest
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
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoItemSellingModesRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
}
