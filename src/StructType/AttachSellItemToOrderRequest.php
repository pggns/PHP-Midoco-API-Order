<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachSellItemToOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttachSellItemToOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoSellItemId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[]
     */
    protected ?array $MidocoSellItemId = null;
    /**
     * The MidocoOrderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderId|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderId $MidocoOrderId = null;
    /**
     * The adoptNotes
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $adoptNotes = null;
    /**
     * The adoptAttributes
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $adoptAttributes = null;
    /**
     * The adoptAddtlSellData
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $adoptAddtlSellData = null;
    /**
     * The adoptRemarks
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $adoptRemarks = null;
    /**
     * The adoptConfirmationGroup
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $adoptConfirmationGroup = null;
    /**
     * The adoptSellingMode
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $adoptSellingMode = null;
    /**
     * The checkTravelDateRight
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $checkTravelDateRight = null;
    /**
     * Constructor method for AttachSellItemToOrderRequest
     * @uses AttachSellItemToOrderRequest::setMidocoSellItemId()
     * @uses AttachSellItemToOrderRequest::setMidocoOrderId()
     * @uses AttachSellItemToOrderRequest::setAdoptNotes()
     * @uses AttachSellItemToOrderRequest::setAdoptAttributes()
     * @uses AttachSellItemToOrderRequest::setAdoptAddtlSellData()
     * @uses AttachSellItemToOrderRequest::setAdoptRemarks()
     * @uses AttachSellItemToOrderRequest::setAdoptConfirmationGroup()
     * @uses AttachSellItemToOrderRequest::setAdoptSellingMode()
     * @uses AttachSellItemToOrderRequest::setCheckTravelDateRight()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[] $midocoSellItemId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId
     * @param bool $adoptNotes
     * @param bool $adoptAttributes
     * @param bool $adoptAddtlSellData
     * @param bool $adoptRemarks
     * @param bool $adoptConfirmationGroup
     * @param bool $adoptSellingMode
     * @param bool $checkTravelDateRight
     */
    public function __construct(?array $midocoSellItemId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId = null, ?bool $adoptNotes = true, ?bool $adoptAttributes = true, ?bool $adoptAddtlSellData = true, ?bool $adoptRemarks = true, ?bool $adoptConfirmationGroup = true, ?bool $adoptSellingMode = true, ?bool $checkTravelDateRight = true)
    {
        $this
            ->setMidocoSellItemId($midocoSellItemId)
            ->setMidocoOrderId($midocoOrderId)
            ->setAdoptNotes($adoptNotes)
            ->setAdoptAttributes($adoptAttributes)
            ->setAdoptAddtlSellData($adoptAddtlSellData)
            ->setAdoptRemarks($adoptRemarks)
            ->setAdoptConfirmationGroup($adoptConfirmationGroup)
            ->setAdoptSellingMode($adoptSellingMode)
            ->setCheckTravelDateRight($checkTravelDateRight);
    }
    /**
     * Get MidocoSellItemId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[]
     */
    public function getMidocoSellItemId(): ?array
    {
        return $this->MidocoSellItemId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemIdForArrayConstraintFromSetMidocoSellItemId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $attachSellItemToOrderRequestMidocoSellItemIdItem) {
            // validation for constraint: itemType
            if (!$attachSellItemToOrderRequestMidocoSellItemIdItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemId) {
                $invalidValues[] = is_object($attachSellItemToOrderRequestMidocoSellItemIdItem) ? get_class($attachSellItemToOrderRequestMidocoSellItemIdItem) : sprintf('%s(%s)', gettype($attachSellItemToOrderRequestMidocoSellItemIdItem), var_export($attachSellItemToOrderRequestMidocoSellItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemId, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[] $midocoSellItemId
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setMidocoSellItemId(?array $midocoSellItemId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemIdArrayErrorMessage = self::validateMidocoSellItemIdForArrayConstraintFromSetMidocoSellItemId($midocoSellItemId))) {
            throw new InvalidArgumentException($midocoSellItemIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemId = $midocoSellItemId;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId $item
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function addToMidocoSellItemId(\Pggns\MidocoApi\Order\StructType\MidocoSellItemId $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemId) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemId, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemId[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderId|null
     */
    public function getMidocoOrderId(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderId
    {
        return $this->MidocoOrderId;
    }
    /**
     * Set MidocoOrderId value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setMidocoOrderId(?\Pggns\MidocoApi\Order\StructType\MidocoOrderId $midocoOrderId = null): self
    {
        $this->MidocoOrderId = $midocoOrderId;
        
        return $this;
    }
    /**
     * Get adoptNotes value
     * @return bool|null
     */
    public function getAdoptNotes(): ?bool
    {
        return $this->adoptNotes;
    }
    /**
     * Set adoptNotes value
     * @param bool $adoptNotes
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setAdoptNotes(?bool $adoptNotes = true): self
    {
        // validation for constraint: boolean
        if (!is_null($adoptNotes) && !is_bool($adoptNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adoptNotes, true), gettype($adoptNotes)), __LINE__);
        }
        $this->adoptNotes = $adoptNotes;
        
        return $this;
    }
    /**
     * Get adoptAttributes value
     * @return bool|null
     */
    public function getAdoptAttributes(): ?bool
    {
        return $this->adoptAttributes;
    }
    /**
     * Set adoptAttributes value
     * @param bool $adoptAttributes
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setAdoptAttributes(?bool $adoptAttributes = true): self
    {
        // validation for constraint: boolean
        if (!is_null($adoptAttributes) && !is_bool($adoptAttributes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adoptAttributes, true), gettype($adoptAttributes)), __LINE__);
        }
        $this->adoptAttributes = $adoptAttributes;
        
        return $this;
    }
    /**
     * Get adoptAddtlSellData value
     * @return bool|null
     */
    public function getAdoptAddtlSellData(): ?bool
    {
        return $this->adoptAddtlSellData;
    }
    /**
     * Set adoptAddtlSellData value
     * @param bool $adoptAddtlSellData
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setAdoptAddtlSellData(?bool $adoptAddtlSellData = true): self
    {
        // validation for constraint: boolean
        if (!is_null($adoptAddtlSellData) && !is_bool($adoptAddtlSellData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adoptAddtlSellData, true), gettype($adoptAddtlSellData)), __LINE__);
        }
        $this->adoptAddtlSellData = $adoptAddtlSellData;
        
        return $this;
    }
    /**
     * Get adoptRemarks value
     * @return bool|null
     */
    public function getAdoptRemarks(): ?bool
    {
        return $this->adoptRemarks;
    }
    /**
     * Set adoptRemarks value
     * @param bool $adoptRemarks
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setAdoptRemarks(?bool $adoptRemarks = true): self
    {
        // validation for constraint: boolean
        if (!is_null($adoptRemarks) && !is_bool($adoptRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adoptRemarks, true), gettype($adoptRemarks)), __LINE__);
        }
        $this->adoptRemarks = $adoptRemarks;
        
        return $this;
    }
    /**
     * Get adoptConfirmationGroup value
     * @return bool|null
     */
    public function getAdoptConfirmationGroup(): ?bool
    {
        return $this->adoptConfirmationGroup;
    }
    /**
     * Set adoptConfirmationGroup value
     * @param bool $adoptConfirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setAdoptConfirmationGroup(?bool $adoptConfirmationGroup = true): self
    {
        // validation for constraint: boolean
        if (!is_null($adoptConfirmationGroup) && !is_bool($adoptConfirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adoptConfirmationGroup, true), gettype($adoptConfirmationGroup)), __LINE__);
        }
        $this->adoptConfirmationGroup = $adoptConfirmationGroup;
        
        return $this;
    }
    /**
     * Get adoptSellingMode value
     * @return bool|null
     */
    public function getAdoptSellingMode(): ?bool
    {
        return $this->adoptSellingMode;
    }
    /**
     * Set adoptSellingMode value
     * @param bool $adoptSellingMode
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setAdoptSellingMode(?bool $adoptSellingMode = true): self
    {
        // validation for constraint: boolean
        if (!is_null($adoptSellingMode) && !is_bool($adoptSellingMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adoptSellingMode, true), gettype($adoptSellingMode)), __LINE__);
        }
        $this->adoptSellingMode = $adoptSellingMode;
        
        return $this;
    }
    /**
     * Get checkTravelDateRight value
     * @return bool|null
     */
    public function getCheckTravelDateRight(): ?bool
    {
        return $this->checkTravelDateRight;
    }
    /**
     * Set checkTravelDateRight value
     * @param bool $checkTravelDateRight
     * @return \Pggns\MidocoApi\Order\StructType\AttachSellItemToOrderRequest
     */
    public function setCheckTravelDateRight(?bool $checkTravelDateRight = true): self
    {
        // validation for constraint: boolean
        if (!is_null($checkTravelDateRight) && !is_bool($checkTravelDateRight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkTravelDateRight, true), gettype($checkTravelDateRight)), __LINE__);
        }
        $this->checkTravelDateRight = $checkTravelDateRight;
        
        return $this;
    }
}
