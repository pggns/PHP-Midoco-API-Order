<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelDocsPrintInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTravelDocsPrintInfo extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The travelItemSupplierId
     * @var string|null
     */
    protected ?string $travelItemSupplierId = null;
    /**
     * The travelItemBookingId
     * @var string|null
     */
    protected ?string $travelItemBookingId = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * Constructor method for MidocoTravelDocsPrintInfo
     * @uses MidocoTravelDocsPrintInfo::setOrderId()
     * @uses MidocoTravelDocsPrintInfo::setOrderNo()
     * @uses MidocoTravelDocsPrintInfo::setTravelItemSupplierId()
     * @uses MidocoTravelDocsPrintInfo::setTravelItemBookingId()
     * @uses MidocoTravelDocsPrintInfo::setPrintType()
     * @uses MidocoTravelDocsPrintInfo::setSelected()
     * @param int $orderId
     * @param int $orderNo
     * @param string $travelItemSupplierId
     * @param string $travelItemBookingId
     * @param string $printType
     * @param bool $selected
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $travelItemSupplierId = null, ?string $travelItemBookingId = null, ?string $printType = null, ?bool $selected = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setTravelItemSupplierId($travelItemSupplierId)
            ->setTravelItemBookingId($travelItemBookingId)
            ->setPrintType($printType)
            ->setSelected($selected);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
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
     * Get travelItemSupplierId value
     * @return string|null
     */
    public function getTravelItemSupplierId(): ?string
    {
        return $this->travelItemSupplierId;
    }
    /**
     * Set travelItemSupplierId value
     * @param string $travelItemSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
     */
    public function setTravelItemSupplierId(?string $travelItemSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($travelItemSupplierId) && !is_string($travelItemSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelItemSupplierId, true), gettype($travelItemSupplierId)), __LINE__);
        }
        $this->travelItemSupplierId = $travelItemSupplierId;
        
        return $this;
    }
    /**
     * Get travelItemBookingId value
     * @return string|null
     */
    public function getTravelItemBookingId(): ?string
    {
        return $this->travelItemBookingId;
    }
    /**
     * Set travelItemBookingId value
     * @param string $travelItemBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
     */
    public function setTravelItemBookingId(?string $travelItemBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($travelItemBookingId) && !is_string($travelItemBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelItemBookingId, true), gettype($travelItemBookingId)), __LINE__);
        }
        $this->travelItemBookingId = $travelItemBookingId;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
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
}
