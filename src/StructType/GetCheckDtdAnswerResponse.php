<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCheckDtdAnswerResponse StructType
 * @subpackage Structs
 */
class GetCheckDtdAnswerResponse extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[]
     */
    protected array $MidocoCheckDtdAnswer = [];
    /**
     * Constructor method for GetCheckDtdAnswerResponse
     * @uses GetCheckDtdAnswerResponse::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[] $midocoCheckDtdAnswer
     */
    public function __construct(array $midocoCheckDtdAnswer = [])
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[]
     */
    public function getMidocoCheckDtdAnswer(): array
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCheckDtdAnswer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCheckDtdAnswer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCheckDtdAnswerForArrayConstraintsFromSetMidocoCheckDtdAnswer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCheckDtdAnswerResponseMidocoCheckDtdAnswerItem) {
            // validation for constraint: itemType
            if (!$getCheckDtdAnswerResponseMidocoCheckDtdAnswerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer) {
                $invalidValues[] = is_object($getCheckDtdAnswerResponseMidocoCheckDtdAnswerItem) ? get_class($getCheckDtdAnswerResponseMidocoCheckDtdAnswerItem) : sprintf('%s(%s)', gettype($getCheckDtdAnswerResponseMidocoCheckDtdAnswerItem), var_export($getCheckDtdAnswerResponseMidocoCheckDtdAnswerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCheckDtdAnswer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCheckDtdAnswer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[] $midocoCheckDtdAnswer
     * @return \Pggns\MidocoApi\Order\StructType\GetCheckDtdAnswerResponse
     */
    public function setMidocoCheckDtdAnswer(array $midocoCheckDtdAnswer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCheckDtdAnswerArrayErrorMessage = self::validateMidocoCheckDtdAnswerForArrayConstraintsFromSetMidocoCheckDtdAnswer($midocoCheckDtdAnswer))) {
            throw new InvalidArgumentException($midocoCheckDtdAnswerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
    /**
     * Add item to MidocoCheckDtdAnswer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCheckDtdAnswerResponse
     */
    public function addToMidocoCheckDtdAnswer(\Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer) {
            throw new InvalidArgumentException(sprintf('The MidocoCheckDtdAnswer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCheckDtdAnswer[] = $item;
        
        return $this;
    }
}
