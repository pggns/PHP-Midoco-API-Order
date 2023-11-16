<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParkAeroImportStatus StructType
 * @subpackage Structs
 */
class ParkAeroImportStatus extends ImportHandlerResponseType
{
    /**
     * The uid
     * @var int|null
     */
    protected ?int $uid = null;
    /**
     * Constructor method for ParkAeroImportStatus
     * @uses ParkAeroImportStatus::setUid()
     * @param int $uid
     */
    public function __construct(?int $uid = null)
    {
        $this
            ->setUid($uid);
    }
    /**
     * Get uid value
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }
    /**
     * Set uid value
     * @param int $uid
     * @return \Pggns\MidocoApi\Order\StructType\ParkAeroImportStatus
     */
    public function setUid(?int $uid = null): self
    {
        // validation for constraint: int
        if (!is_null($uid) && !(is_int($uid) || ctype_digit($uid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uid, true), gettype($uid)), __LINE__);
        }
        $this->uid = $uid;
        
        return $this;
    }
}
