<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfDefResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfDefResponse extends AbstractStructBase
{
    /**
     * The MidocoMfDef
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMfDef
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMfDef[]
     */
    protected ?array $MidocoMfDef = null;
    /**
     * Constructor method for GetMfDefResponse
     * @uses GetMfDefResponse::setMidocoMfDef()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfDef[] $midocoMfDef
     */
    public function __construct(?array $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMfDef[]
     */
    public function getMidocoMfDef(): ?array
    {
        return $this->MidocoMfDef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMfDef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMfDef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfDefForArrayConstraintFromSetMidocoMfDef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfDefResponseMidocoMfDefItem) {
            // validation for constraint: itemType
            if (!$getMfDefResponseMidocoMfDefItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfDef) {
                $invalidValues[] = is_object($getMfDefResponseMidocoMfDefItem) ? get_class($getMfDefResponseMidocoMfDefItem) : sprintf('%s(%s)', gettype($getMfDefResponseMidocoMfDefItem), var_export($getMfDefResponseMidocoMfDefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMfDef property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfDef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMfDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfDef[] $midocoMfDef
     * @return \Pggns\MidocoApi\Order\StructType\GetMfDefResponse
     */
    public function setMidocoMfDef(?array $midocoMfDef = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfDefArrayErrorMessage = self::validateMidocoMfDefForArrayConstraintFromSetMidocoMfDef($midocoMfDef))) {
            throw new InvalidArgumentException($midocoMfDefArrayErrorMessage, __LINE__);
        }
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
    /**
     * Add item to MidocoMfDef value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfDef $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfDefResponse
     */
    public function addToMidocoMfDef(\Pggns\MidocoApi\Order\StructType\MidocoMfDef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfDef) {
            throw new InvalidArgumentException(sprintf('The MidocoMfDef property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfDef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMfDef[] = $item;
        
        return $this;
    }
}
