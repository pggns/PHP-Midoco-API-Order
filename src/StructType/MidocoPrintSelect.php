<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPrintSelect StructType
 * @subpackage Structs
 */
class MidocoPrintSelect extends AbstractStructBase
{
    /**
     * The printTypeId
     * @var string|null
     */
    protected ?string $printTypeId = null;
    /**
     * The desciption
     * @var string|null
     */
    protected ?string $desciption = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * The handler
     * @var string|null
     */
    protected ?string $handler = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $itemId = [];
    /**
     * The channel
     * @var int|null
     */
    protected ?int $channel = null;
    /**
     * The orderHistoryRefId
     * @var string|null
     */
    protected ?string $orderHistoryRefId = null;
    /**
     * The selectOwnResponsibility
     * @var bool|null
     */
    protected ?bool $selectOwnResponsibility = null;
    /**
     * The selectNoInsurance
     * @var bool|null
     */
    protected ?bool $selectNoInsurance = null;
    /**
     * The isItemSelectionSupported
     * @var bool|null
     */
    protected ?bool $isItemSelectionSupported = null;
    /**
     * Constructor method for MidocoPrintSelect
     * @uses MidocoPrintSelect::setPrintTypeId()
     * @uses MidocoPrintSelect::setDesciption()
     * @uses MidocoPrintSelect::setSelected()
     * @uses MidocoPrintSelect::setHandler()
     * @uses MidocoPrintSelect::setPosition()
     * @uses MidocoPrintSelect::setItemId()
     * @uses MidocoPrintSelect::setChannel()
     * @uses MidocoPrintSelect::setOrderHistoryRefId()
     * @uses MidocoPrintSelect::setSelectOwnResponsibility()
     * @uses MidocoPrintSelect::setSelectNoInsurance()
     * @uses MidocoPrintSelect::setIsItemSelectionSupported()
     * @param string $printTypeId
     * @param string $desciption
     * @param bool $selected
     * @param string $handler
     * @param int $position
     * @param int[] $itemId
     * @param int $channel
     * @param string $orderHistoryRefId
     * @param bool $selectOwnResponsibility
     * @param bool $selectNoInsurance
     * @param bool $isItemSelectionSupported
     */
    public function __construct(?string $printTypeId = null, ?string $desciption = null, ?bool $selected = null, ?string $handler = null, ?int $position = null, array $itemId = [], ?int $channel = null, ?string $orderHistoryRefId = null, ?bool $selectOwnResponsibility = null, ?bool $selectNoInsurance = null, ?bool $isItemSelectionSupported = null)
    {
        $this
            ->setPrintTypeId($printTypeId)
            ->setDesciption($desciption)
            ->setSelected($selected)
            ->setHandler($handler)
            ->setPosition($position)
            ->setItemId($itemId)
            ->setChannel($channel)
            ->setOrderHistoryRefId($orderHistoryRefId)
            ->setSelectOwnResponsibility($selectOwnResponsibility)
            ->setSelectNoInsurance($selectNoInsurance)
            ->setIsItemSelectionSupported($isItemSelectionSupported);
    }
    /**
     * Get printTypeId value
     * @return string|null
     */
    public function getPrintTypeId(): ?string
    {
        return $this->printTypeId;
    }
    /**
     * Set printTypeId value
     * @param string $printTypeId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setPrintTypeId(?string $printTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($printTypeId) && !is_string($printTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTypeId, true), gettype($printTypeId)), __LINE__);
        }
        $this->printTypeId = $printTypeId;
        
        return $this;
    }
    /**
     * Get desciption value
     * @return string|null
     */
    public function getDesciption(): ?string
    {
        return $this->desciption;
    }
    /**
     * Set desciption value
     * @param string $desciption
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setDesciption(?string $desciption = null): self
    {
        // validation for constraint: string
        if (!is_null($desciption) && !is_string($desciption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desciption, true), gettype($desciption)), __LINE__);
        }
        $this->desciption = $desciption;
        
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
    /**
     * Get handler value
     * @return string|null
     */
    public function getHandler(): ?string
    {
        return $this->handler;
    }
    /**
     * Set handler value
     * @param string $handler
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setHandler(?string $handler = null): self
    {
        // validation for constraint: string
        if (!is_null($handler) && !is_string($handler)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handler, true), gettype($handler)), __LINE__);
        }
        $this->handler = $handler;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int[]
     */
    public function getItemId(): array
    {
        return $this->itemId;
    }
    /**
     * This method is responsible for validating the values passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdForArrayConstraintsFromSetItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoPrintSelectItemIdItem) {
            // validation for constraint: itemType
            if (!(is_int($midocoPrintSelectItemIdItem) || ctype_digit($midocoPrintSelectItemIdItem))) {
                $invalidValues[] = is_object($midocoPrintSelectItemIdItem) ? get_class($midocoPrintSelectItemIdItem) : sprintf('%s(%s)', gettype($midocoPrintSelectItemIdItem), var_export($midocoPrintSelectItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The itemId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set itemId value
     * @throws InvalidArgumentException
     * @param int[] $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setItemId(array $itemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Add item to itemId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function addToItemId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The itemId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->itemId[] = $item;
        
        return $this;
    }
    /**
     * Get channel value
     * @return int|null
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @param int $channel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setChannel(?int $channel = null): self
    {
        // validation for constraint: int
        if (!is_null($channel) && !(is_int($channel) || ctype_digit($channel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($channel, true), gettype($channel)), __LINE__);
        }
        $this->channel = $channel;
        
        return $this;
    }
    /**
     * Get orderHistoryRefId value
     * @return string|null
     */
    public function getOrderHistoryRefId(): ?string
    {
        return $this->orderHistoryRefId;
    }
    /**
     * Set orderHistoryRefId value
     * @param string $orderHistoryRefId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setOrderHistoryRefId(?string $orderHistoryRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderHistoryRefId) && !is_string($orderHistoryRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderHistoryRefId, true), gettype($orderHistoryRefId)), __LINE__);
        }
        $this->orderHistoryRefId = $orderHistoryRefId;
        
        return $this;
    }
    /**
     * Get selectOwnResponsibility value
     * @return bool|null
     */
    public function getSelectOwnResponsibility(): ?bool
    {
        return $this->selectOwnResponsibility;
    }
    /**
     * Set selectOwnResponsibility value
     * @param bool $selectOwnResponsibility
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setSelectOwnResponsibility(?bool $selectOwnResponsibility = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selectOwnResponsibility) && !is_bool($selectOwnResponsibility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selectOwnResponsibility, true), gettype($selectOwnResponsibility)), __LINE__);
        }
        $this->selectOwnResponsibility = $selectOwnResponsibility;
        
        return $this;
    }
    /**
     * Get selectNoInsurance value
     * @return bool|null
     */
    public function getSelectNoInsurance(): ?bool
    {
        return $this->selectNoInsurance;
    }
    /**
     * Set selectNoInsurance value
     * @param bool $selectNoInsurance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setSelectNoInsurance(?bool $selectNoInsurance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selectNoInsurance) && !is_bool($selectNoInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selectNoInsurance, true), gettype($selectNoInsurance)), __LINE__);
        }
        $this->selectNoInsurance = $selectNoInsurance;
        
        return $this;
    }
    /**
     * Get isItemSelectionSupported value
     * @return bool|null
     */
    public function getIsItemSelectionSupported(): ?bool
    {
        return $this->isItemSelectionSupported;
    }
    /**
     * Set isItemSelectionSupported value
     * @param bool $isItemSelectionSupported
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect
     */
    public function setIsItemSelectionSupported(?bool $isItemSelectionSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isItemSelectionSupported) && !is_bool($isItemSelectionSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isItemSelectionSupported, true), gettype($isItemSelectionSupported)), __LINE__);
        }
        $this->isItemSelectionSupported = $isItemSelectionSupported;
        
        return $this;
    }
}
