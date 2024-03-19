<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSavedTemplatesQueriesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListSavedTemplatesQueriesResponse extends AbstractStructBase
{
    /**
     * The MidocoUserQueryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUserQueryInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo[]
     */
    protected ?array $MidocoUserQueryInfo = null;
    /**
     * Constructor method for ListSavedTemplatesQueriesResponse
     * @uses ListSavedTemplatesQueriesResponse::setMidocoUserQueryInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo[] $midocoUserQueryInfo
     */
    public function __construct(?array $midocoUserQueryInfo = null)
    {
        $this
            ->setMidocoUserQueryInfo($midocoUserQueryInfo);
    }
    /**
     * Get MidocoUserQueryInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo[]
     */
    public function getMidocoUserQueryInfo(): ?array
    {
        return $this->MidocoUserQueryInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUserQueryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUserQueryInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserQueryInfoForArrayConstraintFromSetMidocoUserQueryInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSavedTemplatesQueriesResponseMidocoUserQueryInfoItem) {
            // validation for constraint: itemType
            if (!$listSavedTemplatesQueriesResponseMidocoUserQueryInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo) {
                $invalidValues[] = is_object($listSavedTemplatesQueriesResponseMidocoUserQueryInfoItem) ? get_class($listSavedTemplatesQueriesResponseMidocoUserQueryInfoItem) : sprintf('%s(%s)', gettype($listSavedTemplatesQueriesResponseMidocoUserQueryInfoItem), var_export($listSavedTemplatesQueriesResponseMidocoUserQueryInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUserQueryInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUserQueryInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo[] $midocoUserQueryInfo
     * @return \Pggns\MidocoApi\Order\StructType\ListSavedTemplatesQueriesResponse
     */
    public function setMidocoUserQueryInfo(?array $midocoUserQueryInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserQueryInfoArrayErrorMessage = self::validateMidocoUserQueryInfoForArrayConstraintFromSetMidocoUserQueryInfo($midocoUserQueryInfo))) {
            throw new InvalidArgumentException($midocoUserQueryInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoUserQueryInfo = $midocoUserQueryInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoUserQueryInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\ListSavedTemplatesQueriesResponse
     */
    public function addToMidocoUserQueryInfo(\Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoUserQueryInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUserQueryInfo[] = $item;
        
        return $this;
    }
}
