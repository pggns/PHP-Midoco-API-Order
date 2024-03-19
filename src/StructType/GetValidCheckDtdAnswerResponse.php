<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValidCheckDtdAnswerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetValidCheckDtdAnswerResponse extends AbstractStructBase
{
    /**
     * The MidocoCheckDtdAnswer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCheckDtdAnswer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[]
     */
    protected ?array $MidocoCheckDtdAnswer = null;
    /**
     * Constructor method for GetValidCheckDtdAnswerResponse
     * @uses GetValidCheckDtdAnswerResponse::setMidocoCheckDtdAnswer()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[] $midocoCheckDtdAnswer
     */
    public function __construct(?array $midocoCheckDtdAnswer = null)
    {
        $this
            ->setMidocoCheckDtdAnswer($midocoCheckDtdAnswer);
    }
    /**
     * Get MidocoCheckDtdAnswer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer[]
     */
    public function getMidocoCheckDtdAnswer(): ?array
    {
        return $this->MidocoCheckDtdAnswer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCheckDtdAnswer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCheckDtdAnswer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCheckDtdAnswerForArrayConstraintFromSetMidocoCheckDtdAnswer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getValidCheckDtdAnswerResponseMidocoCheckDtdAnswerItem) {
            // validation for constraint: itemType
            if (!$getValidCheckDtdAnswerResponseMidocoCheckDtdAnswerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer) {
                $invalidValues[] = is_object($getValidCheckDtdAnswerResponseMidocoCheckDtdAnswerItem) ? get_class($getValidCheckDtdAnswerResponseMidocoCheckDtdAnswerItem) : sprintf('%s(%s)', gettype($getValidCheckDtdAnswerResponseMidocoCheckDtdAnswerItem), var_export($getValidCheckDtdAnswerResponseMidocoCheckDtdAnswerItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetValidCheckDtdAnswerResponse
     */
    public function setMidocoCheckDtdAnswer(?array $midocoCheckDtdAnswer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCheckDtdAnswerArrayErrorMessage = self::validateMidocoCheckDtdAnswerForArrayConstraintFromSetMidocoCheckDtdAnswer($midocoCheckDtdAnswer))) {
            throw new InvalidArgumentException($midocoCheckDtdAnswerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCheckDtdAnswer = $midocoCheckDtdAnswer;
        
        return $this;
    }
    /**
     * Add item to MidocoCheckDtdAnswer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCheckDtdAnswer $item
     * @return \Pggns\MidocoApi\Order\StructType\GetValidCheckDtdAnswerResponse
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
