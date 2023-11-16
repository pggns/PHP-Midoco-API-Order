<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderNoticeWithOrderNo StructType
 * @subpackage Structs
 */
class MidocoOrderNoticeWithOrderNo extends OrderNoticeDTO
{
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for MidocoOrderNoticeWithOrderNo
     * @uses MidocoOrderNoticeWithOrderNo::setOrderNo()
     * @param int $orderNo
     */
    public function __construct(?int $orderNo = 0)
    {
        $this
            ->setOrderNo($orderNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNoticeWithOrderNo
     */
    public function setOrderNo(?int $orderNo = 0): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
