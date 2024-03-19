<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDetailedBillingPositionInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDetailedBillingPositionInfo extends BillingPositionDTO
{
    /**
     * The MidocoDetailedBillingPositionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDetailedBillingPositionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[]
     */
    protected ?array $MidocoDetailedBillingPositionInfo = null;
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * The referencedDocumentNo
     * Meta information extracted from the WSDL
     * - documentation: referenced documentNo and billing recipient of referenced Billing Document
     * @var string|null
     */
    protected ?string $referencedDocumentNo = null;
    /**
     * The isBillingPosSelected
     * Meta information extracted from the WSDL
     * - documentation: mark BillingPosition as selected for Create/Print of Billing Document
     * @var bool|null
     */
    protected ?bool $isBillingPosSelected = null;
    /**
     * The isSplitAllowed
     * Meta information extracted from the WSDL
     * - documentation: mark BillingPosition as allowed for split
     * @var bool|null
     */
    protected ?bool $isSplitAllowed = null;
    /**
     * The isViewOnly
     * Meta information extracted from the WSDL
     * - documentation: mark BillingPosition is auto created in gui only for view
     * - default: false
     * @var bool|null
     */
    protected ?bool $isViewOnly = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The confirmationGroup
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The isCollectiveInvoice
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isCollectiveInvoice = null;
    /**
     * Constructor method for MidocoDetailedBillingPositionInfo
     * @uses MidocoDetailedBillingPositionInfo::setMidocoDetailedBillingPositionInfo()
     * @uses MidocoDetailedBillingPositionInfo::setMidocoSellPassenger()
     * @uses MidocoDetailedBillingPositionInfo::setReferencedDocumentNo()
     * @uses MidocoDetailedBillingPositionInfo::setIsBillingPosSelected()
     * @uses MidocoDetailedBillingPositionInfo::setIsSplitAllowed()
     * @uses MidocoDetailedBillingPositionInfo::setIsViewOnly()
     * @uses MidocoDetailedBillingPositionInfo::setOrderNo()
     * @uses MidocoDetailedBillingPositionInfo::setSupplierId()
     * @uses MidocoDetailedBillingPositionInfo::setBookingId()
     * @uses MidocoDetailedBillingPositionInfo::setConfirmationGroup()
     * @uses MidocoDetailedBillingPositionInfo::setIsCollectiveInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[] $midocoDetailedBillingPositionInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param string $referencedDocumentNo
     * @param bool $isBillingPosSelected
     * @param bool $isSplitAllowed
     * @param bool $isViewOnly
     * @param int $orderNo
     * @param string $supplierId
     * @param string $bookingId
     * @param string $confirmationGroup
     * @param bool $isCollectiveInvoice
     */
    public function __construct(?array $midocoDetailedBillingPositionInfo = null, ?array $midocoSellPassenger = null, ?string $referencedDocumentNo = null, ?bool $isBillingPosSelected = null, ?bool $isSplitAllowed = null, ?bool $isViewOnly = false, ?int $orderNo = null, ?string $supplierId = null, ?string $bookingId = null, ?string $confirmationGroup = null, ?bool $isCollectiveInvoice = false)
    {
        $this
            ->setMidocoDetailedBillingPositionInfo($midocoDetailedBillingPositionInfo)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setReferencedDocumentNo($referencedDocumentNo)
            ->setIsBillingPosSelected($isBillingPosSelected)
            ->setIsSplitAllowed($isSplitAllowed)
            ->setIsViewOnly($isViewOnly)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setConfirmationGroup($confirmationGroup)
            ->setIsCollectiveInvoice($isCollectiveInvoice);
    }
    /**
     * Get MidocoDetailedBillingPositionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[]
     */
    public function getMidocoDetailedBillingPositionInfo(): ?array
    {
        return $this->MidocoDetailedBillingPositionInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDetailedBillingPositionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDetailedBillingPositionInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDetailedBillingPositionInfoForArrayConstraintFromSetMidocoDetailedBillingPositionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDetailedBillingPositionInfoMidocoDetailedBillingPositionInfoItem) {
            // validation for constraint: itemType
            if (!$midocoDetailedBillingPositionInfoMidocoDetailedBillingPositionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo) {
                $invalidValues[] = is_object($midocoDetailedBillingPositionInfoMidocoDetailedBillingPositionInfoItem) ? get_class($midocoDetailedBillingPositionInfoMidocoDetailedBillingPositionInfoItem) : sprintf('%s(%s)', gettype($midocoDetailedBillingPositionInfoMidocoDetailedBillingPositionInfoItem), var_export($midocoDetailedBillingPositionInfoMidocoDetailedBillingPositionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDetailedBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDetailedBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[] $midocoDetailedBillingPositionInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setMidocoDetailedBillingPositionInfo(?array $midocoDetailedBillingPositionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDetailedBillingPositionInfoArrayErrorMessage = self::validateMidocoDetailedBillingPositionInfoForArrayConstraintFromSetMidocoDetailedBillingPositionInfo($midocoDetailedBillingPositionInfo))) {
            throw new InvalidArgumentException($midocoDetailedBillingPositionInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoDetailedBillingPositionInfo = $midocoDetailedBillingPositionInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoDetailedBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function addToMidocoDetailedBillingPositionInfo(\Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoDetailedBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDetailedBillingPositionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDetailedBillingPositionInfoMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoDetailedBillingPositionInfoMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($midocoDetailedBillingPositionInfoMidocoSellPassengerItem) ? get_class($midocoDetailedBillingPositionInfoMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($midocoDetailedBillingPositionInfoMidocoSellPassengerItem), var_export($midocoDetailedBillingPositionInfoMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get referencedDocumentNo value
     * @return string|null
     */
    public function getReferencedDocumentNo(): ?string
    {
        return $this->referencedDocumentNo;
    }
    /**
     * Set referencedDocumentNo value
     * @param string $referencedDocumentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setReferencedDocumentNo(?string $referencedDocumentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referencedDocumentNo) && !is_string($referencedDocumentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencedDocumentNo, true), gettype($referencedDocumentNo)), __LINE__);
        }
        $this->referencedDocumentNo = $referencedDocumentNo;
        
        return $this;
    }
    /**
     * Get isBillingPosSelected value
     * @return bool|null
     */
    public function getIsBillingPosSelected(): ?bool
    {
        return $this->isBillingPosSelected;
    }
    /**
     * Set isBillingPosSelected value
     * @param bool $isBillingPosSelected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setIsBillingPosSelected(?bool $isBillingPosSelected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isBillingPosSelected) && !is_bool($isBillingPosSelected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBillingPosSelected, true), gettype($isBillingPosSelected)), __LINE__);
        }
        $this->isBillingPosSelected = $isBillingPosSelected;
        
        return $this;
    }
    /**
     * Get isSplitAllowed value
     * @return bool|null
     */
    public function getIsSplitAllowed(): ?bool
    {
        return $this->isSplitAllowed;
    }
    /**
     * Set isSplitAllowed value
     * @param bool $isSplitAllowed
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setIsSplitAllowed(?bool $isSplitAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSplitAllowed) && !is_bool($isSplitAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSplitAllowed, true), gettype($isSplitAllowed)), __LINE__);
        }
        $this->isSplitAllowed = $isSplitAllowed;
        
        return $this;
    }
    /**
     * Get isViewOnly value
     * @return bool|null
     */
    public function getIsViewOnly(): ?bool
    {
        return $this->isViewOnly;
    }
    /**
     * Set isViewOnly value
     * @param bool $isViewOnly
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setIsViewOnly(?bool $isViewOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isViewOnly) && !is_bool($isViewOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isViewOnly, true), gettype($isViewOnly)), __LINE__);
        }
        $this->isViewOnly = $isViewOnly;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
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
     * Get isCollectiveInvoice value
     * @return bool|null
     */
    public function getIsCollectiveInvoice(): ?bool
    {
        return $this->isCollectiveInvoice;
    }
    /**
     * Set isCollectiveInvoice value
     * @param bool $isCollectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo
     */
    public function setIsCollectiveInvoice(?bool $isCollectiveInvoice = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isCollectiveInvoice) && !is_bool($isCollectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCollectiveInvoice, true), gettype($isCollectiveInvoice)), __LINE__);
        }
        $this->isCollectiveInvoice = $isCollectiveInvoice;
        
        return $this;
    }
}
