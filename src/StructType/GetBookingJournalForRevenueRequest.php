<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingJournalForRevenueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingJournalForRevenueRequest extends AbstractStructBase
{
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * Constructor method for GetBookingJournalForRevenueRequest
     * @uses GetBookingJournalForRevenueRequest::setRevenueId()
     * @param int $revenueId
     */
    public function __construct(?int $revenueId = null)
    {
        $this
            ->setRevenueId($revenueId);
    }
    /**
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalForRevenueRequest
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
}
