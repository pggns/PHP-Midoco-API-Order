<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoQuestionResponse StructType
 * @subpackage Structs
 */
class ListMidocoQuestionResponse extends AbstractStructBase
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQuestion
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQuestion[]
     */
    protected array $MidocoQuestion = [];
    /**
     * Constructor method for ListMidocoQuestionResponse
     * @uses ListMidocoQuestionResponse::setMidocoQuestion()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion[] $midocoQuestion
     */
    public function __construct(array $midocoQuestion = [])
    {
        $this
            ->setMidocoQuestion($midocoQuestion);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuestion[]
     */
    public function getMidocoQuestion(): array
    {
        return $this->MidocoQuestion;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQuestion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQuestion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQuestionForArrayConstraintsFromSetMidocoQuestion(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoQuestionResponseMidocoQuestionItem) {
            // validation for constraint: itemType
            if (!$listMidocoQuestionResponseMidocoQuestionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQuestion) {
                $invalidValues[] = is_object($listMidocoQuestionResponseMidocoQuestionItem) ? get_class($listMidocoQuestionResponseMidocoQuestionItem) : sprintf('%s(%s)', gettype($listMidocoQuestionResponseMidocoQuestionItem), var_export($listMidocoQuestionResponseMidocoQuestionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQuestion property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQuestion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQuestion value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion[] $midocoQuestion
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoQuestionResponse
     */
    public function setMidocoQuestion(array $midocoQuestion = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQuestionArrayErrorMessage = self::validateMidocoQuestionForArrayConstraintsFromSetMidocoQuestion($midocoQuestion))) {
            throw new InvalidArgumentException($midocoQuestionArrayErrorMessage, __LINE__);
        }
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
    /**
     * Add item to MidocoQuestion value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion $item
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoQuestionResponse
     */
    public function addToMidocoQuestion(\Pggns\MidocoApi\Order\StructType\MidocoQuestion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQuestion) {
            throw new InvalidArgumentException(sprintf('The MidocoQuestion property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQuestion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQuestion[] = $item;
        
        return $this;
    }
}
