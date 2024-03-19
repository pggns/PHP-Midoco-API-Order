<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceGdsMessageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceGdsMessageResponse extends AbstractStructBase
{
    /**
     * The OrderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderId = null;
    /**
     * The OrderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderNo = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for AnnounceGdsMessageResponse
     * @uses AnnounceGdsMessageResponse::setOrderId()
     * @uses AnnounceGdsMessageResponse::setOrderNo()
     * @uses AnnounceGdsMessageResponse::setUnitName()
     * @param int $orderId
     * @param int $orderNo
     * @param string $unitName
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $unitName = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setUnitName($unitName);
    }
    /**
     * Get OrderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageResponse
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        
        return $this;
    }
    /**
     * Get OrderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageResponse
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->OrderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageResponse
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
