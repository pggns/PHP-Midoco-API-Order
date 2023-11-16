<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarketingKeyLocalized StructType
 * @subpackage Structs
 */
class MidocoMarketingKeyLocalized extends MarketingKeyDTO
{
    /**
     * The locDescription
     * @var string|null
     */
    protected ?string $locDescription = null;
    /**
     * Constructor method for MidocoMarketingKeyLocalized
     * @uses MidocoMarketingKeyLocalized::setLocDescription()
     * @param string $locDescription
     */
    public function __construct(?string $locDescription = null)
    {
        $this
            ->setLocDescription($locDescription);
    }
    /**
     * Get locDescription value
     * @return string|null
     */
    public function getLocDescription(): ?string
    {
        return $this->locDescription;
    }
    /**
     * Set locDescription value
     * @param string $locDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized
     */
    public function setLocDescription(?string $locDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($locDescription) && !is_string($locDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locDescription, true), gettype($locDescription)), __LINE__);
        }
        $this->locDescription = $locDescription;
        
        return $this;
    }
}
