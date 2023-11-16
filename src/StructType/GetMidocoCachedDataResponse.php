<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCachedDataResponse StructType
 * @subpackage Structs
 */
class GetMidocoCachedDataResponse extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    protected array $data = [];
    /**
     * Constructor method for GetMidocoCachedDataResponse
     * @uses GetMidocoCachedDataResponse::setData()
     * @param mixed[] $data
     */
    public function __construct(array $data = [])
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * @return mixed[]
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * This method is responsible for validating the values passed to the setData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataForArrayConstraintsFromSetData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoCachedDataResponseDataItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($getMidocoCachedDataResponseDataItem) ? get_class($getMidocoCachedDataResponseDataItem) : sprintf('%s(%s)', gettype($getMidocoCachedDataResponseDataItem), var_export($getMidocoCachedDataResponseDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The data property can only contain items of type mixed, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set data value
     * @throws InvalidArgumentException
     * @param mixed[] $data
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCachedDataResponse
     */
    public function setData(array $data = []): self
    {
        // validation for constraint: array
        if ('' !== ($dataArrayErrorMessage = self::validateDataForArrayConstraintsFromSetData($data))) {
            throw new InvalidArgumentException($dataArrayErrorMessage, __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Add item to data value
     * @throws InvalidArgumentException
     * @param mixed $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCachedDataResponse
     */
    public function addToData(mixed $item): self
    {
        // validation for constraint: itemType
        if (false) {
            throw new InvalidArgumentException(sprintf('The data property can only contain items of type mixed, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->data[] = $item;
        
        return $this;
    }
}
