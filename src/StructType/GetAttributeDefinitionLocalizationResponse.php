<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAttributeDefinitionLocalizationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAttributeDefinitionLocalizationResponse extends AbstractStructBase
{
    /**
     * The localization
     * @var string|null
     */
    protected ?string $localization = null;
    /**
     * Constructor method for GetAttributeDefinitionLocalizationResponse
     * @uses GetAttributeDefinitionLocalizationResponse::setLocalization()
     * @param string $localization
     */
    public function __construct(?string $localization = null)
    {
        $this
            ->setLocalization($localization);
    }
    /**
     * Get localization value
     * @return string|null
     */
    public function getLocalization(): ?string
    {
        return $this->localization;
    }
    /**
     * Set localization value
     * @param string $localization
     * @return \Pggns\MidocoApi\Order\StructType\GetAttributeDefinitionLocalizationResponse
     */
    public function setLocalization(?string $localization = null): self
    {
        // validation for constraint: string
        if (!is_null($localization) && !is_string($localization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localization, true), gettype($localization)), __LINE__);
        }
        $this->localization = $localization;
        
        return $this;
    }
}
