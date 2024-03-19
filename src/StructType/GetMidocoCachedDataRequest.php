<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCachedDataRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCachedDataRequest extends AbstractStructBase
{
    /**
     * The loaderKey
     * @var string|null
     */
    protected ?string $loaderKey = null;
    /**
     * The forceRefresh
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $forceRefresh = null;
    /**
     * Constructor method for GetMidocoCachedDataRequest
     * @uses GetMidocoCachedDataRequest::setLoaderKey()
     * @uses GetMidocoCachedDataRequest::setForceRefresh()
     * @param string $loaderKey
     * @param bool $forceRefresh
     */
    public function __construct(?string $loaderKey = null, ?bool $forceRefresh = null)
    {
        $this
            ->setLoaderKey($loaderKey)
            ->setForceRefresh($forceRefresh);
    }
    /**
     * Get loaderKey value
     * @return string|null
     */
    public function getLoaderKey(): ?string
    {
        return $this->loaderKey;
    }
    /**
     * Set loaderKey value
     * @param string $loaderKey
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCachedDataRequest
     */
    public function setLoaderKey(?string $loaderKey = null): self
    {
        // validation for constraint: string
        if (!is_null($loaderKey) && !is_string($loaderKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loaderKey, true), gettype($loaderKey)), __LINE__);
        }
        $this->loaderKey = $loaderKey;
        
        return $this;
    }
    /**
     * Get forceRefresh value
     * @return bool|null
     */
    public function getForceRefresh(): ?bool
    {
        return $this->forceRefresh;
    }
    /**
     * Set forceRefresh value
     * @param bool $forceRefresh
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCachedDataRequest
     */
    public function setForceRefresh(?bool $forceRefresh = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forceRefresh) && !is_bool($forceRefresh)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceRefresh, true), gettype($forceRefresh)), __LINE__);
        }
        $this->forceRefresh = $forceRefresh;
        
        return $this;
    }
}
