<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableQueryCriteriaOpsResponse StructType
 * @subpackage Structs
 */
class GetAvailableQueryCriteriaOpsResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryCriteriaOp
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryCriteriaOp
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp[]
     */
    protected array $MidocoQueryCriteriaOp = [];
    /**
     * Constructor method for GetAvailableQueryCriteriaOpsResponse
     * @uses GetAvailableQueryCriteriaOpsResponse::setMidocoQueryCriteriaOp()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp[] $midocoQueryCriteriaOp
     */
    public function __construct(array $midocoQueryCriteriaOp = [])
    {
        $this
            ->setMidocoQueryCriteriaOp($midocoQueryCriteriaOp);
    }
    /**
     * Get MidocoQueryCriteriaOp value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp[]
     */
    public function getMidocoQueryCriteriaOp(): array
    {
        return $this->MidocoQueryCriteriaOp;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryCriteriaOp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryCriteriaOp method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryCriteriaOpForArrayConstraintsFromSetMidocoQueryCriteriaOp(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableQueryCriteriaOpsResponseMidocoQueryCriteriaOpItem) {
            // validation for constraint: itemType
            if (!$getAvailableQueryCriteriaOpsResponseMidocoQueryCriteriaOpItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp) {
                $invalidValues[] = is_object($getAvailableQueryCriteriaOpsResponseMidocoQueryCriteriaOpItem) ? get_class($getAvailableQueryCriteriaOpsResponseMidocoQueryCriteriaOpItem) : sprintf('%s(%s)', gettype($getAvailableQueryCriteriaOpsResponseMidocoQueryCriteriaOpItem), var_export($getAvailableQueryCriteriaOpsResponseMidocoQueryCriteriaOpItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryCriteriaOp property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryCriteriaOp value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp[] $midocoQueryCriteriaOp
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableQueryCriteriaOpsResponse
     */
    public function setMidocoQueryCriteriaOp(array $midocoQueryCriteriaOp = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryCriteriaOpArrayErrorMessage = self::validateMidocoQueryCriteriaOpForArrayConstraintsFromSetMidocoQueryCriteriaOp($midocoQueryCriteriaOp))) {
            throw new InvalidArgumentException($midocoQueryCriteriaOpArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryCriteriaOp = $midocoQueryCriteriaOp;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryCriteriaOp value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableQueryCriteriaOpsResponse
     */
    public function addToMidocoQueryCriteriaOp(\Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryCriteriaOp property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaOp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryCriteriaOp[] = $item;
        
        return $this;
    }
}
