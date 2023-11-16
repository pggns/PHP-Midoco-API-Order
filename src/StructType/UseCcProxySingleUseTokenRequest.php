<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UseCcProxySingleUseTokenRequest StructType
 * @subpackage Structs
 */
class UseCcProxySingleUseTokenRequest extends AbstractStructBase
{
    /**
     * The singleUseToken
     * @var string|null
     */
    protected ?string $singleUseToken = null;
    /**
     * Constructor method for UseCcProxySingleUseTokenRequest
     * @uses UseCcProxySingleUseTokenRequest::setSingleUseToken()
     * @param string $singleUseToken
     */
    public function __construct(?string $singleUseToken = null)
    {
        $this
            ->setSingleUseToken($singleUseToken);
    }
    /**
     * Get singleUseToken value
     * @return string|null
     */
    public function getSingleUseToken(): ?string
    {
        return $this->singleUseToken;
    }
    /**
     * Set singleUseToken value
     * @param string $singleUseToken
     * @return \Pggns\MidocoApi\Order\StructType\UseCcProxySingleUseTokenRequest
     */
    public function setSingleUseToken(?string $singleUseToken = null): self
    {
        // validation for constraint: string
        if (!is_null($singleUseToken) && !is_string($singleUseToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($singleUseToken, true), gettype($singleUseToken)), __LINE__);
        }
        $this->singleUseToken = $singleUseToken;
        
        return $this;
    }
}
