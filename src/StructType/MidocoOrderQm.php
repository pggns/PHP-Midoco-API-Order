<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderQm StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderQm extends OrderQmDTO
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoQuestion
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQuestion|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQuestion $MidocoQuestion = null;
    /**
     * The MidocoOrderQmAnswerDTO
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO[]
     */
    protected ?array $MidocoOrderQmAnswerDTO = null;
    /**
     * Constructor method for MidocoOrderQm
     * @uses MidocoOrderQm::setMidocoQuestion()
     * @uses MidocoOrderQm::setMidocoOrderQmAnswerDTO()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion
     * @param \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO[] $midocoOrderQmAnswerDTO
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion = null, ?array $midocoOrderQmAnswerDTO = null)
    {
        $this
            ->setMidocoQuestion($midocoQuestion)
            ->setMidocoOrderQmAnswerDTO($midocoOrderQmAnswerDTO);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuestion|null
     */
    public function getMidocoQuestion(): ?\Pggns\MidocoApi\Order\StructType\MidocoQuestion
    {
        return $this->MidocoQuestion;
    }
    /**
     * Set MidocoQuestion value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderQm
     */
    public function setMidocoQuestion(?\Pggns\MidocoApi\Order\StructType\MidocoQuestion $midocoQuestion = null): self
    {
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
    /**
     * Get MidocoOrderQmAnswerDTO value
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO[]
     */
    public function getMidocoOrderQmAnswerDTO(): ?array
    {
        return $this->MidocoOrderQmAnswerDTO;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderQmAnswerDTO method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderQmAnswerDTO method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderQmAnswerDTOForArrayConstraintFromSetMidocoOrderQmAnswerDTO(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderQmMidocoOrderQmAnswerDTOItem) {
            // validation for constraint: itemType
            if (!$midocoOrderQmMidocoOrderQmAnswerDTOItem instanceof \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO) {
                $invalidValues[] = is_object($midocoOrderQmMidocoOrderQmAnswerDTOItem) ? get_class($midocoOrderQmMidocoOrderQmAnswerDTOItem) : sprintf('%s(%s)', gettype($midocoOrderQmMidocoOrderQmAnswerDTOItem), var_export($midocoOrderQmMidocoOrderQmAnswerDTOItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderQmAnswerDTO property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderQmAnswerDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO[] $midocoOrderQmAnswerDTO
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderQm
     */
    public function setMidocoOrderQmAnswerDTO(?array $midocoOrderQmAnswerDTO = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderQmAnswerDTOArrayErrorMessage = self::validateMidocoOrderQmAnswerDTOForArrayConstraintFromSetMidocoOrderQmAnswerDTO($midocoOrderQmAnswerDTO))) {
            throw new InvalidArgumentException($midocoOrderQmAnswerDTOArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderQmAnswerDTO = $midocoOrderQmAnswerDTO;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderQmAnswerDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderQm
     */
    public function addToMidocoOrderQmAnswerDTO(\Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderQmAnswerDTO property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderQmAnswerDTO[] = $item;
        
        return $this;
    }
}
