<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfLocalResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfLocalResponse extends AbstractStructBase
{
    /**
     * The MidocoMfLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMfLocal
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMfLocal[]
     */
    protected ?array $MidocoMfLocal = null;
    /**
     * Constructor method for GetMfLocalResponse
     * @uses GetMfLocalResponse::setMidocoMfLocal()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfLocal[] $midocoMfLocal
     */
    public function __construct(?array $midocoMfLocal = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMfLocal[]
     */
    public function getMidocoMfLocal(): ?array
    {
        return $this->MidocoMfLocal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMfLocal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMfLocal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfLocalForArrayConstraintFromSetMidocoMfLocal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfLocalResponseMidocoMfLocalItem) {
            // validation for constraint: itemType
            if (!$getMfLocalResponseMidocoMfLocalItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfLocal) {
                $invalidValues[] = is_object($getMfLocalResponseMidocoMfLocalItem) ? get_class($getMfLocalResponseMidocoMfLocalItem) : sprintf('%s(%s)', gettype($getMfLocalResponseMidocoMfLocalItem), var_export($getMfLocalResponseMidocoMfLocalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMfLocal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfLocal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMfLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfLocal[] $midocoMfLocal
     * @return \Pggns\MidocoApi\Order\StructType\GetMfLocalResponse
     */
    public function setMidocoMfLocal(?array $midocoMfLocal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfLocalArrayErrorMessage = self::validateMidocoMfLocalForArrayConstraintFromSetMidocoMfLocal($midocoMfLocal))) {
            throw new InvalidArgumentException($midocoMfLocalArrayErrorMessage, __LINE__);
        }
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
    /**
     * Add item to MidocoMfLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfLocal $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfLocalResponse
     */
    public function addToMidocoMfLocal(\Pggns\MidocoApi\Order\StructType\MidocoMfLocal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfLocal) {
            throw new InvalidArgumentException(sprintf('The MidocoMfLocal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfLocal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMfLocal[] = $item;
        
        return $this;
    }
}
