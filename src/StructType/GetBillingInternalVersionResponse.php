<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingInternalVersionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingInternalVersionResponse extends AbstractStructBase
{
    /**
     * The billingId
     * @var int|null
     */
    protected ?int $billingId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for GetBillingInternalVersionResponse
     * @uses GetBillingInternalVersionResponse::setBillingId()
     * @uses GetBillingInternalVersionResponse::setInternalVersion()
     * @param int $billingId
     * @param int $internalVersion
     */
    public function __construct(?int $billingId = null, ?int $internalVersion = null)
    {
        $this
            ->setBillingId($billingId)
            ->setInternalVersion($internalVersion);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingInternalVersionResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingInternalVersionResponse
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
}
