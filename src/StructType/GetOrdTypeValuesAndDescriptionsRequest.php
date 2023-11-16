<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdTypeValuesAndDescriptionsRequest StructType
 * @subpackage Structs
 */
class GetOrdTypeValuesAndDescriptionsRequest extends AbstractStructBase
{
    /**
     * The culture
     * @var string|null
     */
    protected ?string $culture = null;
    /**
     * Constructor method for GetOrdTypeValuesAndDescriptionsRequest
     * @uses GetOrdTypeValuesAndDescriptionsRequest::setCulture()
     * @param string $culture
     */
    public function __construct(?string $culture = null)
    {
        $this
            ->setCulture($culture);
    }
    /**
     * Get culture value
     * @return string|null
     */
    public function getCulture(): ?string
    {
        return $this->culture;
    }
    /**
     * Set culture value
     * @param string $culture
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdTypeValuesAndDescriptionsRequest
     */
    public function setCulture(?string $culture = null): self
    {
        // validation for constraint: string
        if (!is_null($culture) && !is_string($culture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($culture, true), gettype($culture)), __LINE__);
        }
        $this->culture = $culture;
        
        return $this;
    }
}
