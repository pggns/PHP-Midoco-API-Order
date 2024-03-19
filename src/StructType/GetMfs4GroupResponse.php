<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfs4GroupResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfs4GroupResponse extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMf[]
     */
    protected ?array $MidocoMf = null;
    /**
     * Constructor method for GetMfs4GroupResponse
     * @uses GetMfs4GroupResponse::setMidocoMf()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMf[] $midocoMf
     */
    public function __construct(?array $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMf[]
     */
    public function getMidocoMf(): ?array
    {
        return $this->MidocoMf;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMf method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMfForArrayConstraintFromSetMidocoMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMfs4GroupResponseMidocoMfItem) {
            // validation for constraint: itemType
            if (!$getMfs4GroupResponseMidocoMfItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMf) {
                $invalidValues[] = is_object($getMfs4GroupResponseMidocoMfItem) ? get_class($getMfs4GroupResponseMidocoMfItem) : sprintf('%s(%s)', gettype($getMfs4GroupResponseMidocoMfItem), var_export($getMfs4GroupResponseMidocoMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMf property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMf, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMf[] $midocoMf
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupResponse
     */
    public function setMidocoMf(?array $midocoMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMfArrayErrorMessage = self::validateMidocoMfForArrayConstraintFromSetMidocoMf($midocoMf))) {
            throw new InvalidArgumentException($midocoMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
    /**
     * Add item to MidocoMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMf $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMfs4GroupResponse
     */
    public function addToMidocoMf(\Pggns\MidocoApi\Order\StructType\MidocoMf $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMf) {
            throw new InvalidArgumentException(sprintf('The MidocoMf property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMf, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMf[] = $item;
        
        return $this;
    }
}
