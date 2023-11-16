<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsValidCcProxySingleUseTokenResponse StructType
 * @subpackage Structs
 */
class IsValidCcProxySingleUseTokenResponse extends AbstractStructBase
{
    /**
     * The valid
     * @var bool|null
     */
    protected ?bool $valid = null;
    /**
     * Constructor method for IsValidCcProxySingleUseTokenResponse
     * @uses IsValidCcProxySingleUseTokenResponse::setValid()
     * @param bool $valid
     */
    public function __construct(?bool $valid = null)
    {
        $this
            ->setValid($valid);
    }
    /**
     * Get valid value
     * @return bool|null
     */
    public function getValid(): ?bool
    {
        return $this->valid;
    }
    /**
     * Set valid value
     * @param bool $valid
     * @return \Pggns\MidocoApi\Order\StructType\IsValidCcProxySingleUseTokenResponse
     */
    public function setValid(?bool $valid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($valid) && !is_bool($valid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valid, true), gettype($valid)), __LINE__);
        }
        $this->valid = $valid;
        
        return $this;
    }
}
