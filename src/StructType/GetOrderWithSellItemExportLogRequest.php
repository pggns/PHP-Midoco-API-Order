<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderWithSellItemExportLogRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderWithSellItemExportLogRequest extends AbstractStructBase
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The maskCcNo
     * @var bool|null
     */
    protected ?bool $maskCcNo = null;
    /**
     * Constructor method for GetOrderWithSellItemExportLogRequest
     * @uses GetOrderWithSellItemExportLogRequest::setOrderNo()
     * @uses GetOrderWithSellItemExportLogRequest::setOrderId()
     * @uses GetOrderWithSellItemExportLogRequest::setInternalVersion()
     * @uses GetOrderWithSellItemExportLogRequest::setMaskCcNo()
     * @param int $orderNo
     * @param int $orderId
     * @param int $internalVersion
     * @param bool $maskCcNo
     */
    public function __construct(?int $orderNo = null, ?int $orderId = null, ?int $internalVersion = null, ?bool $maskCcNo = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setInternalVersion($internalVersion)
            ->setMaskCcNo($maskCcNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogRequest
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get maskCcNo value
     * @return bool|null
     */
    public function getMaskCcNo(): ?bool
    {
        return $this->maskCcNo;
    }
    /**
     * Set maskCcNo value
     * @param bool $maskCcNo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogRequest
     */
    public function setMaskCcNo(?bool $maskCcNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($maskCcNo) && !is_bool($maskCcNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($maskCcNo, true), gettype($maskCcNo)), __LINE__);
        }
        $this->maskCcNo = $maskCcNo;
        
        return $this;
    }
}
