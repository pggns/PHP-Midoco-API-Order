<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemPrintSelect StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemPrintSelect extends AbstractStructBase
{
    /**
     * The childrenIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $childrenIds = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * The needsInvoicePrint
     * @var bool|null
     */
    protected ?bool $needsInvoicePrint = null;
    /**
     * The editable
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $editable = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The sellingMode
     * @var int|null
     */
    protected ?int $sellingMode = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The atolIndex
     * @var int|null
     */
    protected ?int $atolIndex = null;
    /**
     * The abtaSection
     * @var string|null
     */
    protected ?string $abtaSection = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The parentId
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * Constructor method for SellItemPrintSelect
     * @uses SellItemPrintSelect::setChildrenIds()
     * @uses SellItemPrintSelect::setConfirmationGroup()
     * @uses SellItemPrintSelect::setSelected()
     * @uses SellItemPrintSelect::setNeedsInvoicePrint()
     * @uses SellItemPrintSelect::setEditable()
     * @uses SellItemPrintSelect::setItemId()
     * @uses SellItemPrintSelect::setType()
     * @uses SellItemPrintSelect::setSellingMode()
     * @uses SellItemPrintSelect::setStatus()
     * @uses SellItemPrintSelect::setSupplierId()
     * @uses SellItemPrintSelect::setAtolIndex()
     * @uses SellItemPrintSelect::setAbtaSection()
     * @uses SellItemPrintSelect::setBookingId()
     * @uses SellItemPrintSelect::setTotalPrice()
     * @uses SellItemPrintSelect::setParentId()
     * @param int[] $childrenIds
     * @param string $confirmationGroup
     * @param bool $selected
     * @param bool $needsInvoicePrint
     * @param bool $editable
     * @param int $itemId
     * @param string $type
     * @param int $sellingMode
     * @param string $status
     * @param string $supplierId
     * @param int $atolIndex
     * @param string $abtaSection
     * @param string $bookingId
     * @param float $totalPrice
     * @param int $parentId
     */
    public function __construct(?array $childrenIds = null, ?string $confirmationGroup = null, ?bool $selected = null, ?bool $needsInvoicePrint = null, ?bool $editable = true, ?int $itemId = null, ?string $type = null, ?int $sellingMode = null, ?string $status = null, ?string $supplierId = null, ?int $atolIndex = null, ?string $abtaSection = null, ?string $bookingId = null, ?float $totalPrice = null, ?int $parentId = null)
    {
        $this
            ->setChildrenIds($childrenIds)
            ->setConfirmationGroup($confirmationGroup)
            ->setSelected($selected)
            ->setNeedsInvoicePrint($needsInvoicePrint)
            ->setEditable($editable)
            ->setItemId($itemId)
            ->setType($type)
            ->setSellingMode($sellingMode)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setAtolIndex($atolIndex)
            ->setAbtaSection($abtaSection)
            ->setBookingId($bookingId)
            ->setTotalPrice($totalPrice)
            ->setParentId($parentId);
    }
    /**
     * Get childrenIds value
     * @return int[]
     */
    public function getChildrenIds(): ?array
    {
        return $this->childrenIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setChildrenIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChildrenIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChildrenIdsForArrayConstraintFromSetChildrenIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $sellItemPrintSelectChildrenIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($sellItemPrintSelectChildrenIdsItem) || ctype_digit($sellItemPrintSelectChildrenIdsItem))) {
                $invalidValues[] = is_object($sellItemPrintSelectChildrenIdsItem) ? get_class($sellItemPrintSelectChildrenIdsItem) : sprintf('%s(%s)', gettype($sellItemPrintSelectChildrenIdsItem), var_export($sellItemPrintSelectChildrenIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The childrenIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set childrenIds value
     * @throws InvalidArgumentException
     * @param int[] $childrenIds
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setChildrenIds(?array $childrenIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($childrenIdsArrayErrorMessage = self::validateChildrenIdsForArrayConstraintFromSetChildrenIds($childrenIds))) {
            throw new InvalidArgumentException($childrenIdsArrayErrorMessage, __LINE__);
        }
        $this->childrenIds = $childrenIds;
        
        return $this;
    }
    /**
     * Add item to childrenIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function addToChildrenIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The childrenIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->childrenIds[] = $item;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
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
     * Get needsInvoicePrint value
     * @return bool|null
     */
    public function getNeedsInvoicePrint(): ?bool
    {
        return $this->needsInvoicePrint;
    }
    /**
     * Set needsInvoicePrint value
     * @param bool $needsInvoicePrint
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setNeedsInvoicePrint(?bool $needsInvoicePrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsInvoicePrint) && !is_bool($needsInvoicePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsInvoicePrint, true), gettype($needsInvoicePrint)), __LINE__);
        }
        $this->needsInvoicePrint = $needsInvoicePrint;
        
        return $this;
    }
    /**
     * Get editable value
     * @return bool|null
     */
    public function getEditable(): ?bool
    {
        return $this->editable;
    }
    /**
     * Set editable value
     * @param bool $editable
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setEditable(?bool $editable = true): self
    {
        // validation for constraint: boolean
        if (!is_null($editable) && !is_bool($editable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($editable, true), gettype($editable)), __LINE__);
        }
        $this->editable = $editable;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get sellingMode value
     * @return int|null
     */
    public function getSellingMode(): ?int
    {
        return $this->sellingMode;
    }
    /**
     * Set sellingMode value
     * @param int $sellingMode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setSellingMode(?int $sellingMode = null): self
    {
        // validation for constraint: int
        if (!is_null($sellingMode) && !(is_int($sellingMode) || ctype_digit($sellingMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellingMode, true), gettype($sellingMode)), __LINE__);
        }
        $this->sellingMode = $sellingMode;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get atolIndex value
     * @return int|null
     */
    public function getAtolIndex(): ?int
    {
        return $this->atolIndex;
    }
    /**
     * Set atolIndex value
     * @param int $atolIndex
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setAtolIndex(?int $atolIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($atolIndex) && !(is_int($atolIndex) || ctype_digit($atolIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolIndex, true), gettype($atolIndex)), __LINE__);
        }
        $this->atolIndex = $atolIndex;
        
        return $this;
    }
    /**
     * Get abtaSection value
     * @return string|null
     */
    public function getAbtaSection(): ?string
    {
        return $this->abtaSection;
    }
    /**
     * Set abtaSection value
     * @param string $abtaSection
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setAbtaSection(?string $abtaSection = null): self
    {
        // validation for constraint: string
        if (!is_null($abtaSection) && !is_string($abtaSection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abtaSection, true), gettype($abtaSection)), __LINE__);
        }
        $this->abtaSection = $abtaSection;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get parentId value
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Set parentId value
     * @param int $parentId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemPrintSelect
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        $this->parentId = $parentId;
        
        return $this;
    }
}
