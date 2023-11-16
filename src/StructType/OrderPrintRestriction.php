<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderPrintRestriction StructType
 * @subpackage Structs
 */
class OrderPrintRestriction extends AbstractStructBase
{
    /**
     * The SellItemPrintRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SellItemPrintRestriction
     * @var \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction[]
     */
    protected array $SellItemPrintRestriction = [];
    /**
     * The disableOrderInvoice
     * @var bool|null
     */
    protected ?bool $disableOrderInvoice = null;
    /**
     * The disableSelectiveInvoice
     * @var bool|null
     */
    protected ?bool $disableSelectiveInvoice = null;
    /**
     * The suggestOrderInvoice
     * @var bool|null
     */
    protected ?bool $suggestOrderInvoice = null;
    /**
     * The suggestSelectiveInvoice
     * @var bool|null
     */
    protected ?bool $suggestSelectiveInvoice = null;
    /**
     * The disableExplVoidInvoice
     * @var bool|null
     */
    protected ?bool $disableExplVoidInvoice = null;
    /**
     * The suggestExplVoidInvoice
     * @var bool|null
     */
    protected ?bool $suggestExplVoidInvoice = null;
    /**
     * Constructor method for OrderPrintRestriction
     * @uses OrderPrintRestriction::setSellItemPrintRestriction()
     * @uses OrderPrintRestriction::setDisableOrderInvoice()
     * @uses OrderPrintRestriction::setDisableSelectiveInvoice()
     * @uses OrderPrintRestriction::setSuggestOrderInvoice()
     * @uses OrderPrintRestriction::setSuggestSelectiveInvoice()
     * @uses OrderPrintRestriction::setDisableExplVoidInvoice()
     * @uses OrderPrintRestriction::setSuggestExplVoidInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction[] $sellItemPrintRestriction
     * @param bool $disableOrderInvoice
     * @param bool $disableSelectiveInvoice
     * @param bool $suggestOrderInvoice
     * @param bool $suggestSelectiveInvoice
     * @param bool $disableExplVoidInvoice
     * @param bool $suggestExplVoidInvoice
     */
    public function __construct(array $sellItemPrintRestriction = [], ?bool $disableOrderInvoice = null, ?bool $disableSelectiveInvoice = null, ?bool $suggestOrderInvoice = null, ?bool $suggestSelectiveInvoice = null, ?bool $disableExplVoidInvoice = null, ?bool $suggestExplVoidInvoice = null)
    {
        $this
            ->setSellItemPrintRestriction($sellItemPrintRestriction)
            ->setDisableOrderInvoice($disableOrderInvoice)
            ->setDisableSelectiveInvoice($disableSelectiveInvoice)
            ->setSuggestOrderInvoice($suggestOrderInvoice)
            ->setSuggestSelectiveInvoice($suggestSelectiveInvoice)
            ->setDisableExplVoidInvoice($disableExplVoidInvoice)
            ->setSuggestExplVoidInvoice($suggestExplVoidInvoice);
    }
    /**
     * Get SellItemPrintRestriction value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction[]
     */
    public function getSellItemPrintRestriction(): array
    {
        return $this->SellItemPrintRestriction;
    }
    /**
     * This method is responsible for validating the values passed to the setSellItemPrintRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellItemPrintRestriction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellItemPrintRestrictionForArrayConstraintsFromSetSellItemPrintRestriction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $orderPrintRestrictionSellItemPrintRestrictionItem) {
            // validation for constraint: itemType
            if (!$orderPrintRestrictionSellItemPrintRestrictionItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction) {
                $invalidValues[] = is_object($orderPrintRestrictionSellItemPrintRestrictionItem) ? get_class($orderPrintRestrictionSellItemPrintRestrictionItem) : sprintf('%s(%s)', gettype($orderPrintRestrictionSellItemPrintRestrictionItem), var_export($orderPrintRestrictionSellItemPrintRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellItemPrintRestriction property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellItemPrintRestriction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction[] $sellItemPrintRestriction
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setSellItemPrintRestriction(array $sellItemPrintRestriction = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellItemPrintRestrictionArrayErrorMessage = self::validateSellItemPrintRestrictionForArrayConstraintsFromSetSellItemPrintRestriction($sellItemPrintRestriction))) {
            throw new InvalidArgumentException($sellItemPrintRestrictionArrayErrorMessage, __LINE__);
        }
        $this->SellItemPrintRestriction = $sellItemPrintRestriction;
        
        return $this;
    }
    /**
     * Add item to SellItemPrintRestriction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction $item
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function addToSellItemPrintRestriction(\Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction) {
            throw new InvalidArgumentException(sprintf('The SellItemPrintRestriction property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemPrintRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellItemPrintRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get disableOrderInvoice value
     * @return bool|null
     */
    public function getDisableOrderInvoice(): ?bool
    {
        return $this->disableOrderInvoice;
    }
    /**
     * Set disableOrderInvoice value
     * @param bool $disableOrderInvoice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setDisableOrderInvoice(?bool $disableOrderInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disableOrderInvoice) && !is_bool($disableOrderInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disableOrderInvoice, true), gettype($disableOrderInvoice)), __LINE__);
        }
        $this->disableOrderInvoice = $disableOrderInvoice;
        
        return $this;
    }
    /**
     * Get disableSelectiveInvoice value
     * @return bool|null
     */
    public function getDisableSelectiveInvoice(): ?bool
    {
        return $this->disableSelectiveInvoice;
    }
    /**
     * Set disableSelectiveInvoice value
     * @param bool $disableSelectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setDisableSelectiveInvoice(?bool $disableSelectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disableSelectiveInvoice) && !is_bool($disableSelectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disableSelectiveInvoice, true), gettype($disableSelectiveInvoice)), __LINE__);
        }
        $this->disableSelectiveInvoice = $disableSelectiveInvoice;
        
        return $this;
    }
    /**
     * Get suggestOrderInvoice value
     * @return bool|null
     */
    public function getSuggestOrderInvoice(): ?bool
    {
        return $this->suggestOrderInvoice;
    }
    /**
     * Set suggestOrderInvoice value
     * @param bool $suggestOrderInvoice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setSuggestOrderInvoice(?bool $suggestOrderInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suggestOrderInvoice) && !is_bool($suggestOrderInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suggestOrderInvoice, true), gettype($suggestOrderInvoice)), __LINE__);
        }
        $this->suggestOrderInvoice = $suggestOrderInvoice;
        
        return $this;
    }
    /**
     * Get suggestSelectiveInvoice value
     * @return bool|null
     */
    public function getSuggestSelectiveInvoice(): ?bool
    {
        return $this->suggestSelectiveInvoice;
    }
    /**
     * Set suggestSelectiveInvoice value
     * @param bool $suggestSelectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setSuggestSelectiveInvoice(?bool $suggestSelectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suggestSelectiveInvoice) && !is_bool($suggestSelectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suggestSelectiveInvoice, true), gettype($suggestSelectiveInvoice)), __LINE__);
        }
        $this->suggestSelectiveInvoice = $suggestSelectiveInvoice;
        
        return $this;
    }
    /**
     * Get disableExplVoidInvoice value
     * @return bool|null
     */
    public function getDisableExplVoidInvoice(): ?bool
    {
        return $this->disableExplVoidInvoice;
    }
    /**
     * Set disableExplVoidInvoice value
     * @param bool $disableExplVoidInvoice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setDisableExplVoidInvoice(?bool $disableExplVoidInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($disableExplVoidInvoice) && !is_bool($disableExplVoidInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disableExplVoidInvoice, true), gettype($disableExplVoidInvoice)), __LINE__);
        }
        $this->disableExplVoidInvoice = $disableExplVoidInvoice;
        
        return $this;
    }
    /**
     * Get suggestExplVoidInvoice value
     * @return bool|null
     */
    public function getSuggestExplVoidInvoice(): ?bool
    {
        return $this->suggestExplVoidInvoice;
    }
    /**
     * Set suggestExplVoidInvoice value
     * @param bool $suggestExplVoidInvoice
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
     */
    public function setSuggestExplVoidInvoice(?bool $suggestExplVoidInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suggestExplVoidInvoice) && !is_bool($suggestExplVoidInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suggestExplVoidInvoice, true), gettype($suggestExplVoidInvoice)), __LINE__);
        }
        $this->suggestExplVoidInvoice = $suggestExplVoidInvoice;
        
        return $this;
    }
}
