<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveOrdCriteriaTypesFromCategoryRequest StructType
 * @subpackage Structs
 */
class RemoveOrdCriteriaTypesFromCategoryRequest extends AbstractStructBase
{
    /**
     * The categoryId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $categoryId;
    /**
     * The MidocoOrdCriteriaTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaTypeId
     * @var string[]
     */
    protected array $MidocoOrdCriteriaTypeId = [];
    /**
     * Constructor method for RemoveOrdCriteriaTypesFromCategoryRequest
     * @uses RemoveOrdCriteriaTypesFromCategoryRequest::setCategoryId()
     * @uses RemoveOrdCriteriaTypesFromCategoryRequest::setMidocoOrdCriteriaTypeId()
     * @param int $categoryId
     * @param string[] $midocoOrdCriteriaTypeId
     */
    public function __construct(int $categoryId, array $midocoOrdCriteriaTypeId = [])
    {
        $this
            ->setCategoryId($categoryId)
            ->setMidocoOrdCriteriaTypeId($midocoOrdCriteriaTypeId);
    }
    /**
     * Get categoryId value
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
    /**
     * Set categoryId value
     * @param int $categoryId
     * @return \Pggns\MidocoApi\Order\StructType\RemoveOrdCriteriaTypesFromCategoryRequest
     */
    public function setCategoryId(int $categoryId): self
    {
        // validation for constraint: int
        if (!is_null($categoryId) && !(is_int($categoryId) || ctype_digit($categoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryId, true), gettype($categoryId)), __LINE__);
        }
        $this->categoryId = $categoryId;
        
        return $this;
    }
    /**
     * Get MidocoOrdCriteriaTypeId value
     * @return string[]
     */
    public function getMidocoOrdCriteriaTypeId(): array
    {
        return $this->MidocoOrdCriteriaTypeId;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaTypeId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeIdForArrayConstraintsFromSetMidocoOrdCriteriaTypeId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $removeOrdCriteriaTypesFromCategoryRequestMidocoOrdCriteriaTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($removeOrdCriteriaTypesFromCategoryRequestMidocoOrdCriteriaTypeIdItem)) {
                $invalidValues[] = is_object($removeOrdCriteriaTypesFromCategoryRequestMidocoOrdCriteriaTypeIdItem) ? get_class($removeOrdCriteriaTypesFromCategoryRequestMidocoOrdCriteriaTypeIdItem) : sprintf('%s(%s)', gettype($removeOrdCriteriaTypesFromCategoryRequestMidocoOrdCriteriaTypeIdItem), var_export($removeOrdCriteriaTypesFromCategoryRequestMidocoOrdCriteriaTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaTypeId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaTypeId value
     * @throws InvalidArgumentException
     * @param string[] $midocoOrdCriteriaTypeId
     * @return \Pggns\MidocoApi\Order\StructType\RemoveOrdCriteriaTypesFromCategoryRequest
     */
    public function setMidocoOrdCriteriaTypeId(array $midocoOrdCriteriaTypeId = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeIdArrayErrorMessage = self::validateMidocoOrdCriteriaTypeIdForArrayConstraintsFromSetMidocoOrdCriteriaTypeId($midocoOrdCriteriaTypeId))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaTypeId = $midocoOrdCriteriaTypeId;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaTypeId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\RemoveOrdCriteriaTypesFromCategoryRequest
     */
    public function addToMidocoOrdCriteriaTypeId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaTypeId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaTypeId[] = $item;
        
        return $this;
    }
}
