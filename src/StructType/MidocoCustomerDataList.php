<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerDataList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerDataList extends AbstractStructBase
{
    /**
     * The MidocoCustomerData
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerData
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCustomerData[]
     */
    protected ?array $MidocoCustomerData = null;
    /**
     * Constructor method for MidocoCustomerDataList
     * @uses MidocoCustomerDataList::setMidocoCustomerData()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerData[] $midocoCustomerData
     */
    public function __construct(?array $midocoCustomerData = null)
    {
        $this
            ->setMidocoCustomerData($midocoCustomerData);
    }
    /**
     * Get MidocoCustomerData value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerData[]
     */
    public function getMidocoCustomerData(): ?array
    {
        return $this->MidocoCustomerData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerDataForArrayConstraintFromSetMidocoCustomerData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerDataListMidocoCustomerDataItem) {
            // validation for constraint: itemType
            if (!$midocoCustomerDataListMidocoCustomerDataItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCustomerData) {
                $invalidValues[] = is_object($midocoCustomerDataListMidocoCustomerDataItem) ? get_class($midocoCustomerDataListMidocoCustomerDataItem) : sprintf('%s(%s)', gettype($midocoCustomerDataListMidocoCustomerDataItem), var_export($midocoCustomerDataListMidocoCustomerDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerData property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCustomerData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerData[] $midocoCustomerData
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerDataList
     */
    public function setMidocoCustomerData(?array $midocoCustomerData = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerDataArrayErrorMessage = self::validateMidocoCustomerDataForArrayConstraintFromSetMidocoCustomerData($midocoCustomerData))) {
            throw new InvalidArgumentException($midocoCustomerDataArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerData = $midocoCustomerData;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerData $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerDataList
     */
    public function addToMidocoCustomerData(\Pggns\MidocoApi\Order\StructType\MidocoCustomerData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCustomerData) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerData property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCustomerData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerData[] = $item;
        
        return $this;
    }
}
