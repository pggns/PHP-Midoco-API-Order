<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPrintsRequest StructType
 * @subpackage Structs
 */
class GetBillingPrintsRequest extends AbstractStructBase
{
    /**
     * The billingId
     * @var int|null
     */
    protected ?int $billingId = null;
    /**
     * Constructor method for GetBillingPrintsRequest
     * @uses GetBillingPrintsRequest::setBillingId()
     * @param int $billingId
     */
    public function __construct(?int $billingId = null)
    {
        $this
            ->setBillingId($billingId);
    }
    /**
     * Get billingId value
     * @return int|null
     */
    public function getBillingId(): ?int
    {
        return $this->billingId;
    }
    /**
     * Set billingId value
     * @param int $billingId
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintsRequest
     */
    public function setBillingId(?int $billingId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingId) && !(is_int($billingId) || ctype_digit($billingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingId, true), gettype($billingId)), __LINE__);
        }
        $this->billingId = $billingId;
        
        return $this;
    }
}
