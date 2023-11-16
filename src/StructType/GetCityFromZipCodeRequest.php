<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCityFromZipCodeRequest StructType
 * @subpackage Structs
 */
class GetCityFromZipCodeRequest extends AbstractStructBase
{
    /**
     * The zipCode
     * @var string|null
     */
    protected ?string $zipCode = null;
    /**
     * Constructor method for GetCityFromZipCodeRequest
     * @uses GetCityFromZipCodeRequest::setZipCode()
     * @param string $zipCode
     */
    public function __construct(?string $zipCode = null)
    {
        $this
            ->setZipCode($zipCode);
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Pggns\MidocoApi\Order\StructType\GetCityFromZipCodeRequest
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        
        return $this;
    }
}
