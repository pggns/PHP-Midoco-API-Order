<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemExportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellItemExportDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The finalPaymentType
     * @var string|null
     */
    protected ?string $finalPaymentType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The originalBookingId
     * @var string|null
     */
    protected ?string $originalBookingId = null;
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
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SellItemExportDTO
     * @uses SellItemExportDTO::setAccountId()
     * @uses SellItemExportDTO::setBookingId()
     * @uses SellItemExportDTO::setCostCentre()
     * @uses SellItemExportDTO::setExportId()
     * @uses SellItemExportDTO::setExportTimestamp()
     * @uses SellItemExportDTO::setFinalPaymentType()
     * @uses SellItemExportDTO::setItemId()
     * @uses SellItemExportDTO::setItemPrice()
     * @uses SellItemExportDTO::setOrderNo()
     * @uses SellItemExportDTO::setOriginalBookingId()
     * @uses SellItemExportDTO::setStatus()
     * @uses SellItemExportDTO::setSupplierId()
     * @uses SellItemExportDTO::setTravelDate()
     * @uses SellItemExportDTO::setUnitName()
     * @param string $accountId
     * @param string $bookingId
     * @param string $costCentre
     * @param int $exportId
     * @param string $exportTimestamp
     * @param string $finalPaymentType
     * @param int $itemId
     * @param float $itemPrice
     * @param int $orderNo
     * @param string $originalBookingId
     * @param string $status
     * @param string $supplierId
     * @param string $travelDate
     * @param string $unitName
     */
    public function __construct(?string $accountId = null, ?string $bookingId = null, ?string $costCentre = null, ?int $exportId = null, ?string $exportTimestamp = null, ?string $finalPaymentType = null, ?int $itemId = null, ?float $itemPrice = null, ?int $orderNo = null, ?string $originalBookingId = null, ?string $status = null, ?string $supplierId = null, ?string $travelDate = null, ?string $unitName = null)
    {
        $this
            ->setAccountId($accountId)
            ->setBookingId($bookingId)
            ->setCostCentre($costCentre)
            ->setExportId($exportId)
            ->setExportTimestamp($exportTimestamp)
            ->setFinalPaymentType($finalPaymentType)
            ->setItemId($itemId)
            ->setItemPrice($itemPrice)
            ->setOrderNo($orderNo)
            ->setOriginalBookingId($originalBookingId)
            ->setStatus($status)
            ->setSupplierId($supplierId)
            ->setTravelDate($travelDate)
            ->setUnitName($unitName);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
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
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
    /**
     * Get finalPaymentType value
     * @return string|null
     */
    public function getFinalPaymentType(): ?string
    {
        return $this->finalPaymentType;
    }
    /**
     * Set finalPaymentType value
     * @param string $finalPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setFinalPaymentType(?string $finalPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentType) && !is_string($finalPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentType, true), gettype($finalPaymentType)), __LINE__);
        }
        $this->finalPaymentType = $finalPaymentType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
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
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
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
     * Get originalBookingId value
     * @return string|null
     */
    public function getOriginalBookingId(): ?string
    {
        return $this->originalBookingId;
    }
    /**
     * Set originalBookingId value
     * @param string $originalBookingId
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setOriginalBookingId(?string $originalBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($originalBookingId) && !is_string($originalBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBookingId, true), gettype($originalBookingId)), __LINE__);
        }
        $this->originalBookingId = $originalBookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
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
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
