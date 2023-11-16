<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformIrisPlusLoginResponse StructType
 * @subpackage Structs
 */
class PerformIrisPlusLoginResponse extends AbstractStructBase
{
    /**
     * The startUrl
     * @var string|null
     */
    protected ?string $startUrl = null;
    /**
     * Constructor method for PerformIrisPlusLoginResponse
     * @uses PerformIrisPlusLoginResponse::setStartUrl()
     * @param string $startUrl
     */
    public function __construct(?string $startUrl = null)
    {
        $this
            ->setStartUrl($startUrl);
    }
    /**
     * Get startUrl value
     * @return string|null
     */
    public function getStartUrl(): ?string
    {
        return $this->startUrl;
    }
    /**
     * Set startUrl value
     * @param string $startUrl
     * @return \Pggns\MidocoApi\Order\StructType\PerformIrisPlusLoginResponse
     */
    public function setStartUrl(?string $startUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($startUrl) && !is_string($startUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startUrl, true), gettype($startUrl)), __LINE__);
        }
        $this->startUrl = $startUrl;
        
        return $this;
    }
}
