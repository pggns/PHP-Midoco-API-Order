<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckLockedUserByMailResponse StructType
 * @subpackage Structs
 */
class CheckLockedUserByMailResponse extends AbstractStructBase
{
    /**
     * The lockedByMail
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $lockedByMail;
    /**
     * The lockedCustId
     * @var int|null
     */
    protected ?int $lockedCustId = null;
    /**
     * Constructor method for CheckLockedUserByMailResponse
     * @uses CheckLockedUserByMailResponse::setLockedByMail()
     * @uses CheckLockedUserByMailResponse::setLockedCustId()
     * @param bool $lockedByMail
     * @param int $lockedCustId
     */
    public function __construct(bool $lockedByMail, ?int $lockedCustId = null)
    {
        $this
            ->setLockedByMail($lockedByMail)
            ->setLockedCustId($lockedCustId);
    }
    /**
     * Get lockedByMail value
     * @return bool
     */
    public function getLockedByMail(): bool
    {
        return $this->lockedByMail;
    }
    /**
     * Set lockedByMail value
     * @param bool $lockedByMail
     * @return \Pggns\MidocoApi\Order\StructType\CheckLockedUserByMailResponse
     */
    public function setLockedByMail(bool $lockedByMail): self
    {
        // validation for constraint: boolean
        if (!is_null($lockedByMail) && !is_bool($lockedByMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockedByMail, true), gettype($lockedByMail)), __LINE__);
        }
        $this->lockedByMail = $lockedByMail;
        
        return $this;
    }
    /**
     * Get lockedCustId value
     * @return int|null
     */
    public function getLockedCustId(): ?int
    {
        return $this->lockedCustId;
    }
    /**
     * Set lockedCustId value
     * @param int $lockedCustId
     * @return \Pggns\MidocoApi\Order\StructType\CheckLockedUserByMailResponse
     */
    public function setLockedCustId(?int $lockedCustId = null): self
    {
        // validation for constraint: int
        if (!is_null($lockedCustId) && !(is_int($lockedCustId) || ctype_digit($lockedCustId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockedCustId, true), gettype($lockedCustId)), __LINE__);
        }
        $this->lockedCustId = $lockedCustId;
        
        return $this;
    }
}
