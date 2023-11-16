<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderPaymentPaycodesResponse StructType
 * @subpackage Structs
 */
class GetOrderPaymentPaycodesResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderPaymentPaycode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderPaymentPaycode
     * @var \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO[]
     */
    protected array $MidocoOrderPaymentPaycode = [];
    /**
     * Constructor method for GetOrderPaymentPaycodesResponse
     * @uses GetOrderPaymentPaycodesResponse::setMidocoOrderPaymentPaycode()
     * @param \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO[] $midocoOrderPaymentPaycode
     */
    public function __construct(array $midocoOrderPaymentPaycode = [])
    {
        $this
            ->setMidocoOrderPaymentPaycode($midocoOrderPaymentPaycode);
    }
    /**
     * Get MidocoOrderPaymentPaycode value
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO[]
     */
    public function getMidocoOrderPaymentPaycode(): array
    {
        return $this->MidocoOrderPaymentPaycode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderPaymentPaycode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderPaymentPaycode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderPaymentPaycodeForArrayConstraintsFromSetMidocoOrderPaymentPaycode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderPaymentPaycodesResponseMidocoOrderPaymentPaycodeItem) {
            // validation for constraint: itemType
            if (!$getOrderPaymentPaycodesResponseMidocoOrderPaymentPaycodeItem instanceof \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO) {
                $invalidValues[] = is_object($getOrderPaymentPaycodesResponseMidocoOrderPaymentPaycodeItem) ? get_class($getOrderPaymentPaycodesResponseMidocoOrderPaymentPaycodeItem) : sprintf('%s(%s)', gettype($getOrderPaymentPaycodesResponseMidocoOrderPaymentPaycodeItem), var_export($getOrderPaymentPaycodesResponseMidocoOrderPaymentPaycodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderPaymentPaycode property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderPaymentPaycode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO[] $midocoOrderPaymentPaycode
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentPaycodesResponse
     */
    public function setMidocoOrderPaymentPaycode(array $midocoOrderPaymentPaycode = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderPaymentPaycodeArrayErrorMessage = self::validateMidocoOrderPaymentPaycodeForArrayConstraintsFromSetMidocoOrderPaymentPaycode($midocoOrderPaymentPaycode))) {
            throw new InvalidArgumentException($midocoOrderPaymentPaycodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderPaymentPaycode = $midocoOrderPaymentPaycode;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderPaymentPaycode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPaymentPaycodesResponse
     */
    public function addToMidocoOrderPaymentPaycode(\Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderPaymentPaycode property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderPaymentPaycode[] = $item;
        
        return $this;
    }
}
