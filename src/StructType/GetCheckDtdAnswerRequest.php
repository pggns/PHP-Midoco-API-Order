<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCheckDtdAnswerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCheckDtdAnswerRequest extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $MidocoCheckDtdAnswer = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - documentation: While MidocoCheckDtdAnswer contains only one category, you can supply several categories to include in the response here. MidocoCheckDtdAnswer takes precedence.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $category = null;
    /**
     * Constructor method for GetCheckDtdAnswerRequest
     * @uses GetCheckDtdAnswerRequest::setMidocoCheckDtdAnswer()
     * @uses GetCheckDtdAnswerRequest::setCategory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @param string[] $category
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer = null, ?array $category = null)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer)
            ->setCategory($category);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer|null
     */
    public function getMidocoCheckDtdAnswer(): ?\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Order\StructType\GetCheckDtdAnswerRequest
     */
    public function setMidocoCheckDtdAnswer(?\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $midocoCheckDtdAnswer = null): self
    {
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
    /**
     * Get category value
     * @return string[]
     */
    public function getCategory(): ?array
    {
        return $this->category;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCategory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCategoryForArrayConstraintFromSetCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCheckDtdAnswerRequestCategoryItem) {
            // validation for constraint: itemType
            if (!is_string($getCheckDtdAnswerRequestCategoryItem)) {
                $invalidValues[] = is_object($getCheckDtdAnswerRequestCategoryItem) ? get_class($getCheckDtdAnswerRequestCategoryItem) : sprintf('%s(%s)', gettype($getCheckDtdAnswerRequestCategoryItem), var_export($getCheckDtdAnswerRequestCategoryItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetCheckDtdAnswerRequest
     */
    public function setCategory(?array $category = null): self
    {
        // validation for constraint: array
        if ('' !== ($categoryArrayErrorMessage = self::validateCategoryForArrayConstraintFromSetCategory($category))) {
            throw new InvalidArgumentException($categoryArrayErrorMessage, __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Add item to category value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCheckDtdAnswerRequest
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
