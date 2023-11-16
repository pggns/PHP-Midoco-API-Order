<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValidCheckDtdAnswerRequest StructType
 * @subpackage Structs
 */
class GetValidCheckDtdAnswerRequest extends AbstractStructBase
{
    /**
     * The supplier_travelType_combination
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination[]
     */
    protected array $supplier_travelType_combination = [];
    /**
     * The category
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $category = [];
    /**
     * Constructor method for GetValidCheckDtdAnswerRequest
     * @uses GetValidCheckDtdAnswerRequest::setSupplier_travelType_combination()
     * @uses GetValidCheckDtdAnswerRequest::setCategory()
     * @param \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination[] $supplier_travelType_combination
     * @param string[] $category
     */
    public function __construct(array $supplier_travelType_combination, array $category = [])
    {
        $this
            ->setSupplier_travelType_combination($supplier_travelType_combination)
            ->setCategory($category);
    }
    /**
     * Get supplier_travelType_combination value
     * @return \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination[]
     */
    public function getSupplier_travelType_combination(): array
    {
        return $this->{'supplier-travelType-combination'};
    }
    /**
     * This method is responsible for validating the values passed to the setSupplier_travelType_combination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplier_travelType_combination method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplier_travelType_combinationForArrayConstraintsFromSetSupplier_travelType_combination(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getValidCheckDtdAnswerRequestSupplier_travelType_combinationItem) {
            // validation for constraint: itemType
            if (!$getValidCheckDtdAnswerRequestSupplier_travelType_combinationItem instanceof \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination) {
                $invalidValues[] = is_object($getValidCheckDtdAnswerRequestSupplier_travelType_combinationItem) ? get_class($getValidCheckDtdAnswerRequestSupplier_travelType_combinationItem) : sprintf('%s(%s)', gettype($getValidCheckDtdAnswerRequestSupplier_travelType_combinationItem), var_export($getValidCheckDtdAnswerRequestSupplier_travelType_combinationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplier_travelType_combination property can only contain items of type \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplier_travelType_combination value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination[] $supplier_travelType_combination
     * @return \Pggns\MidocoApi\Order\StructType\GetValidCheckDtdAnswerRequest
     */
    public function setSupplier_travelType_combination(array $supplier_travelType_combination): self
    {
        // validation for constraint: array
        if ('' !== ($supplier_travelType_combinationArrayErrorMessage = self::validateSupplier_travelType_combinationForArrayConstraintsFromSetSupplier_travelType_combination($supplier_travelType_combination))) {
            throw new InvalidArgumentException($supplier_travelType_combinationArrayErrorMessage, __LINE__);
        }
        $this->supplier_travelType_combination = $this->{'supplier-travelType-combination'} = $supplier_travelType_combination;
        
        return $this;
    }
    /**
     * Add item to supplier_travelType_combination value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination $item
     * @return \Pggns\MidocoApi\Order\StructType\GetValidCheckDtdAnswerRequest
     */
    public function addToSupplier_travelType_combination(\Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination) {
            throw new InvalidArgumentException(sprintf('The supplier_travelType_combination property can only contain items of type \Pggns\MidocoApi\Order\StructType\Supplier_travelType_combination, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplier_travelType_combination[] = $this->{'supplier-travelType-combination'}[] = $item;
        
        return $this;
    }
    /**
     * Get category value
     * @return string[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }
    /**
     * This method is responsible for validating the values passed to the setCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryForArrayConstraintsFromSetCategory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getValidCheckDtdAnswerRequestCategoryItem) {
            // validation for constraint: itemType
            if (!is_string($getValidCheckDtdAnswerRequestCategoryItem)) {
                $invalidValues[] = is_object($getValidCheckDtdAnswerRequestCategoryItem) ? get_class($getValidCheckDtdAnswerRequestCategoryItem) : sprintf('%s(%s)', gettype($getValidCheckDtdAnswerRequestCategoryItem), var_export($getValidCheckDtdAnswerRequestCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The category property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set category value
     * @throws InvalidArgumentException
     * @param string[] $category
     * @return \Pggns\MidocoApi\Order\StructType\GetValidCheckDtdAnswerRequest
     */
    public function setCategory(array $category = []): self
    {
        // validation for constraint: array
        if ('' !== ($categoryArrayErrorMessage = self::validateCategoryForArrayConstraintsFromSetCategory($category))) {
            throw new InvalidArgumentException($categoryArrayErrorMessage, __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Add item to category value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetValidCheckDtdAnswerRequest
     */
    public function addToCategory(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The category property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->category[] = $item;
        
        return $this;
    }
}
