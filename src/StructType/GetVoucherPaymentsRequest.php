<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVoucherPaymentsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVoucherPaymentsRequest extends AbstractStructBase
{
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * Constructor method for GetVoucherPaymentsRequest
     * @uses GetVoucherPaymentsRequest::setVoucherId()
     * @param int $voucherId
     */
    public function __construct(?int $voucherId = null)
    {
        $this
            ->setVoucherId($voucherId);
    }
    /**
     * Get voucherId value
     * @return int|null
     */
    public function getVoucherId(): ?int
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param int $voucherId
     * @return \Pggns\MidocoApi\Order\StructType\GetVoucherPaymentsRequest
     */
    public function setVoucherId(?int $voucherId = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherId) && !(is_int($voucherId) || ctype_digit($voucherId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
        return $this;
    }
}
