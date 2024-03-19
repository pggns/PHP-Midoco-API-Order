<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAccountResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAccountResponse extends AbstractStructBase
{
    /**
     * The isAccountUsed
     * @var bool|null
     */
    protected ?bool $isAccountUsed = null;
    /**
     * Constructor method for DeleteAccountResponse
     * @uses DeleteAccountResponse::setIsAccountUsed()
     * @param bool $isAccountUsed
     */
    public function __construct(?bool $isAccountUsed = null)
    {
        $this
            ->setIsAccountUsed($isAccountUsed);
    }
    /**
     * Get isAccountUsed value
     * @return bool|null
     */
    public function getIsAccountUsed(): ?bool
    {
        return $this->isAccountUsed;
    }
    /**
     * Set isAccountUsed value
     * @param bool $isAccountUsed
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAccountResponse
     */
    public function setIsAccountUsed(?bool $isAccountUsed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAccountUsed) && !is_bool($isAccountUsed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAccountUsed, true), gettype($isAccountUsed)), __LINE__);
        }
        $this->isAccountUsed = $isAccountUsed;
        
        return $this;
    }
}
