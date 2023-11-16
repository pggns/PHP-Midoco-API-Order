<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateHTLMForCrossSellVersRequest StructType
 * @subpackage Structs
 */
class GenerateHTLMForCrossSellVersRequest extends AbstractStructBase
{
    /**
     * The CrossSellingVersInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CrossSellingVersInfo
     * @var \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[]
     */
    protected array $CrossSellingVersInfo = [];
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The templateName
     * @var string|null
     */
    protected ?string $templateName = null;
    /**
     * Constructor method for GenerateHTLMForCrossSellVersRequest
     * @uses GenerateHTLMForCrossSellVersRequest::setCrossSellingVersInfo()
     * @uses GenerateHTLMForCrossSellVersRequest::setMidocoOrder()
     * @uses GenerateHTLMForCrossSellVersRequest::setTemplateName()
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[] $crossSellingVersInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param string $templateName
     */
    public function __construct(array $crossSellingVersInfo = [], ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?string $templateName = null)
    {
        $this
            ->setCrossSellingVersInfo($crossSellingVersInfo)
            ->setMidocoOrder($midocoOrder)
            ->setTemplateName($templateName);
    }
    /**
     * Get CrossSellingVersInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[]
     */
    public function getCrossSellingVersInfo(): array
    {
        return $this->CrossSellingVersInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCrossSellingVersInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrossSellingVersInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrossSellingVersInfoForArrayConstraintsFromSetCrossSellingVersInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $generateHTLMForCrossSellVersRequestCrossSellingVersInfoItem) {
            // validation for constraint: itemType
            if (!$generateHTLMForCrossSellVersRequestCrossSellingVersInfoItem instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo) {
                $invalidValues[] = is_object($generateHTLMForCrossSellVersRequestCrossSellingVersInfoItem) ? get_class($generateHTLMForCrossSellVersRequestCrossSellingVersInfoItem) : sprintf('%s(%s)', gettype($generateHTLMForCrossSellVersRequestCrossSellingVersInfoItem), var_export($generateHTLMForCrossSellVersRequestCrossSellingVersInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CrossSellingVersInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CrossSellingVersInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[] $crossSellingVersInfo
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellVersRequest
     */
    public function setCrossSellingVersInfo(array $crossSellingVersInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($crossSellingVersInfoArrayErrorMessage = self::validateCrossSellingVersInfoForArrayConstraintsFromSetCrossSellingVersInfo($crossSellingVersInfo))) {
            throw new InvalidArgumentException($crossSellingVersInfoArrayErrorMessage, __LINE__);
        }
        $this->CrossSellingVersInfo = $crossSellingVersInfo;
        
        return $this;
    }
    /**
     * Add item to CrossSellingVersInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellVersRequest
     */
    public function addToCrossSellingVersInfo(\Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo) {
            throw new InvalidArgumentException(sprintf('The CrossSellingVersInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CrossSellingVersInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellVersRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $templateName
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellVersRequest
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->templateName = $templateName;
        
        return $this;
    }
}
