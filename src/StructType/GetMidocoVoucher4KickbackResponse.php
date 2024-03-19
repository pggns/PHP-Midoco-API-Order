<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoVoucher4KickbackResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoVoucher4KickbackResponse extends AbstractStructBase
{
    /**
     * The MidocoVoucher4Kickback
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVoucher4Kickback
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback[]
     */
    protected ?array $MidocoVoucher4Kickback = null;
    /**
     * Constructor method for GetMidocoVoucher4KickbackResponse
     * @uses GetMidocoVoucher4KickbackResponse::setMidocoVoucher4Kickback()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback[] $midocoVoucher4Kickback
     */
    public function __construct(?array $midocoVoucher4Kickback = null)
    {
        $this
            ->setMidocoVoucher4Kickback($midocoVoucher4Kickback);
    }
    /**
     * Get MidocoVoucher4Kickback value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback[]
     */
    public function getMidocoVoucher4Kickback(): ?array
    {
        return $this->MidocoVoucher4Kickback;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVoucher4Kickback method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucher4Kickback method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucher4KickbackForArrayConstraintFromSetMidocoVoucher4Kickback(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoVoucher4KickbackResponseMidocoVoucher4KickbackItem) {
            // validation for constraint: itemType
            if (!$getMidocoVoucher4KickbackResponseMidocoVoucher4KickbackItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback) {
                $invalidValues[] = is_object($getMidocoVoucher4KickbackResponseMidocoVoucher4KickbackItem) ? get_class($getMidocoVoucher4KickbackResponseMidocoVoucher4KickbackItem) : sprintf('%s(%s)', gettype($getMidocoVoucher4KickbackResponseMidocoVoucher4KickbackItem), var_export($getMidocoVoucher4KickbackResponseMidocoVoucher4KickbackItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVoucher4Kickback property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVoucher4Kickback value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback[] $midocoVoucher4Kickback
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoVoucher4KickbackResponse
     */
    public function setMidocoVoucher4Kickback(?array $midocoVoucher4Kickback = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucher4KickbackArrayErrorMessage = self::validateMidocoVoucher4KickbackForArrayConstraintFromSetMidocoVoucher4Kickback($midocoVoucher4Kickback))) {
            throw new InvalidArgumentException($midocoVoucher4KickbackArrayErrorMessage, __LINE__);
        }
        $this->MidocoVoucher4Kickback = $midocoVoucher4Kickback;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucher4Kickback value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoVoucher4KickbackResponse
     */
    public function addToMidocoVoucher4Kickback(\Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucher4Kickback property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVoucher4Kickback[] = $item;
        
        return $this;
    }
}
