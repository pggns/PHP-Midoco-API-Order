<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMorePayableResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: A message to display in case crating a Miles & More transaction is not permitted.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMilesAndMorePayableResponse extends AbstractStructBase
{
    /**
     * The totalAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount payable with Miles and More miles.
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The LocalizableMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:LocalizableMessage
     * @var \Pggns\MidocoApi\Order\StructType\LocalizableMessageType[]
     */
    protected ?array $LocalizableMessage = null;
    /**
     * Constructor method for GetMilesAndMorePayableResponse
     * @uses GetMilesAndMorePayableResponse::setTotalAmount()
     * @uses GetMilesAndMorePayableResponse::setLocalizableMessage()
     * @param float $totalAmount
     * @param \Pggns\MidocoApi\Order\StructType\LocalizableMessageType[] $localizableMessage
     */
    public function __construct(?float $totalAmount = null, ?array $localizableMessage = null)
    {
        $this
            ->setTotalAmount($totalAmount)
            ->setLocalizableMessage($localizableMessage);
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePayableResponse
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get LocalizableMessage value
     * @return \Pggns\MidocoApi\Order\StructType\LocalizableMessageType[]
     */
    public function getLocalizableMessage(): ?array
    {
        return $this->LocalizableMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLocalizableMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocalizableMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocalizableMessageForArrayConstraintFromSetLocalizableMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMorePayableResponseLocalizableMessageItem) {
            // validation for constraint: itemType
            if (!$getMilesAndMorePayableResponseLocalizableMessageItem instanceof \Pggns\MidocoApi\Order\StructType\LocalizableMessageType) {
                $invalidValues[] = is_object($getMilesAndMorePayableResponseLocalizableMessageItem) ? get_class($getMilesAndMorePayableResponseLocalizableMessageItem) : sprintf('%s(%s)', gettype($getMilesAndMorePayableResponseLocalizableMessageItem), var_export($getMilesAndMorePayableResponseLocalizableMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LocalizableMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\LocalizableMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LocalizableMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\LocalizableMessageType[] $localizableMessage
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePayableResponse
     */
    public function setLocalizableMessage(?array $localizableMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($localizableMessageArrayErrorMessage = self::validateLocalizableMessageForArrayConstraintFromSetLocalizableMessage($localizableMessage))) {
            throw new InvalidArgumentException($localizableMessageArrayErrorMessage, __LINE__);
        }
        $this->LocalizableMessage = $localizableMessage;
        
        return $this;
    }
    /**
     * Add item to LocalizableMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\LocalizableMessageType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePayableResponse
     */
    public function addToLocalizableMessage(\Pggns\MidocoApi\Order\StructType\LocalizableMessageType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\LocalizableMessageType) {
            throw new InvalidArgumentException(sprintf('The LocalizableMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\LocalizableMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LocalizableMessage[] = $item;
        
        return $this;
    }
}
