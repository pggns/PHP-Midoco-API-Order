<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelOsstInsuranceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelOsstInsuranceRequest extends AbstractStructBase
{
    /**
     * The osstInsuranceId
     * @var int|null
     */
    protected ?int $osstInsuranceId = null;
    /**
     * The reason
     * @var string|null
     */
    protected ?string $reason = null;
    /**
     * Constructor method for CancelOsstInsuranceRequest
     * @uses CancelOsstInsuranceRequest::setOsstInsuranceId()
     * @uses CancelOsstInsuranceRequest::setReason()
     * @param int $osstInsuranceId
     * @param string $reason
     */
    public function __construct(?int $osstInsuranceId = null, ?string $reason = null)
    {
        $this
            ->setOsstInsuranceId($osstInsuranceId)
            ->setReason($reason);
    }
    /**
     * Get osstInsuranceId value
     * @return int|null
     */
    public function getOsstInsuranceId(): ?int
    {
        return $this->osstInsuranceId;
    }
    /**
     * Set osstInsuranceId value
     * @param int $osstInsuranceId
     * @return \Pggns\MidocoApi\Order\StructType\CancelOsstInsuranceRequest
     */
    public function setOsstInsuranceId(?int $osstInsuranceId = null): self
    {
        // validation for constraint: int
        if (!is_null($osstInsuranceId) && !(is_int($osstInsuranceId) || ctype_digit($osstInsuranceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($osstInsuranceId, true), gettype($osstInsuranceId)), __LINE__);
        }
        $this->osstInsuranceId = $osstInsuranceId;
        
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Pggns\MidocoApi\Order\StructType\CancelOsstInsuranceRequest
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
        return $this;
    }
}
