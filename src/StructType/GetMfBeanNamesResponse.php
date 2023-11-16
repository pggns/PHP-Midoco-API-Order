<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfBeanNamesResponse StructType
 * @subpackage Structs
 */
class GetMfBeanNamesResponse extends AbstractStructBase
{
    /**
     * The MidocoMfBeanLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMfBeanLocal
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal[]
     */
    protected array $MidocoMfBeanLocal = [];
    /**
     * Constructor method for GetMfBeanNamesResponse
     * @uses GetMfBeanNamesResponse::setMidocoMfBeanLocal()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal[] $midocoMfBeanLocal
     */
    public function __construct(array $midocoMfBeanLocal = [])
    {
        $this
            ->setMidocoMfBeanLocal($midocoMfBeanLocal);
    }
    /**
     * Get MidocoMfBeanLocal value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal[]
     */
    public function getMidocoMfBeanLocal(): array
    {
        return $this->MidocoMfBeanLocal;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMfBeanLocal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMfBeanLocal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfBeanLocalForArrayConstraintsFromSetMidocoMfBeanLocal(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfBeanNamesResponseMidocoMfBeanLocalItem) {
            // validation for constraint: itemType
            if (!$getMfBeanNamesResponseMidocoMfBeanLocalItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal) {
                $invalidValues[] = is_object($getMfBeanNamesResponseMidocoMfBeanLocalItem) ? get_class($getMfBeanNamesResponseMidocoMfBeanLocalItem) : sprintf('%s(%s)', gettype($getMfBeanNamesResponseMidocoMfBeanLocalItem), var_export($getMfBeanNamesResponseMidocoMfBeanLocalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMfBeanLocal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMfBeanLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal[] $midocoMfBeanLocal
     * @return \Pggns\MidocoApi\Order\StructType\GetMfBeanNamesResponse
     */
    public function setMidocoMfBeanLocal(array $midocoMfBeanLocal = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfBeanLocalArrayErrorMessage = self::validateMidocoMfBeanLocalForArrayConstraintsFromSetMidocoMfBeanLocal($midocoMfBeanLocal))) {
            throw new InvalidArgumentException($midocoMfBeanLocalArrayErrorMessage, __LINE__);
        }
        $this->MidocoMfBeanLocal = $midocoMfBeanLocal;
        
        return $this;
    }
    /**
     * Add item to MidocoMfBeanLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfBeanNamesResponse
     */
    public function addToMidocoMfBeanLocal(\Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal) {
            throw new InvalidArgumentException(sprintf('The MidocoMfBeanLocal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMfBeanLocal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMfBeanLocal[] = $item;
        
        return $this;
    }
}
