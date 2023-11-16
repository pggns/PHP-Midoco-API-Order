<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateHTLMForCrossSellCarRequest StructType
 * @subpackage Structs
 */
class GenerateHTLMForCrossSellCarRequest extends AbstractStructBase
{
    /**
     * The CrossSellingCarInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CrossSellingCarInfo
     * @var \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[]
     */
    protected array $CrossSellingCarInfo = [];
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
     * Constructor method for GenerateHTLMForCrossSellCarRequest
     * @uses GenerateHTLMForCrossSellCarRequest::setCrossSellingCarInfo()
     * @uses GenerateHTLMForCrossSellCarRequest::setMidocoOrder()
     * @uses GenerateHTLMForCrossSellCarRequest::setTemplateName()
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[] $crossSellingCarInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param string $templateName
     */
    public function __construct(array $crossSellingCarInfo = [], ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?string $templateName = null)
    {
        $this
            ->setCrossSellingCarInfo($crossSellingCarInfo)
            ->setMidocoOrder($midocoOrder)
            ->setTemplateName($templateName);
    }
    /**
     * Get CrossSellingCarInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[]
     */
    public function getCrossSellingCarInfo(): array
    {
        return $this->CrossSellingCarInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCrossSellingCarInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrossSellingCarInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrossSellingCarInfoForArrayConstraintsFromSetCrossSellingCarInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $generateHTLMForCrossSellCarRequestCrossSellingCarInfoItem) {
            // validation for constraint: itemType
            if (!$generateHTLMForCrossSellCarRequestCrossSellingCarInfoItem instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo) {
                $invalidValues[] = is_object($generateHTLMForCrossSellCarRequestCrossSellingCarInfoItem) ? get_class($generateHTLMForCrossSellCarRequestCrossSellingCarInfoItem) : sprintf('%s(%s)', gettype($generateHTLMForCrossSellCarRequestCrossSellingCarInfoItem), var_export($generateHTLMForCrossSellCarRequestCrossSellingCarInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CrossSellingCarInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CrossSellingCarInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[] $crossSellingCarInfo
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellCarRequest
     */
    public function setCrossSellingCarInfo(array $crossSellingCarInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($crossSellingCarInfoArrayErrorMessage = self::validateCrossSellingCarInfoForArrayConstraintsFromSetCrossSellingCarInfo($crossSellingCarInfo))) {
            throw new InvalidArgumentException($crossSellingCarInfoArrayErrorMessage, __LINE__);
        }
        $this->CrossSellingCarInfo = $crossSellingCarInfo;
        
        return $this;
    }
    /**
     * Add item to CrossSellingCarInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellCarRequest
     */
    public function addToCrossSellingCarInfo(\Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo) {
            throw new InvalidArgumentException(sprintf('The CrossSellingCarInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CrossSellingCarInfo[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellCarRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GenerateHTLMForCrossSellCarRequest
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
