<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderLockPeriodResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderLockPeriodResponse extends AbstractStructBase
{
    /**
     * The lockPeriodId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $lockPeriodId = null;
    /**
     * Constructor method for SaveOrderLockPeriodResponse
     * @uses SaveOrderLockPeriodResponse::setLockPeriodId()
     * @param int $lockPeriodId
     */
    public function __construct(?int $lockPeriodId = null)
    {
        $this
            ->setLockPeriodId($lockPeriodId);
    }
    /**
     * Get lockPeriodId value
     * @return int|null
     */
    public function getLockPeriodId(): ?int
    {
        return $this->lockPeriodId;
    }
    /**
     * Set lockPeriodId value
     * @param int $lockPeriodId
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderLockPeriodResponse
     */
    public function setLockPeriodId(?int $lockPeriodId = null): self
    {
        // validation for constraint: int
        if (!is_null($lockPeriodId) && !(is_int($lockPeriodId) || ctype_digit($lockPeriodId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockPeriodId, true), gettype($lockPeriodId)), __LINE__);
        }
        $this->lockPeriodId = $lockPeriodId;
        
        return $this;
    }
}
