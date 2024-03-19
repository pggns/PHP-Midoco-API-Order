<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryTokenDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CountryTokenDTO extends AbstractStructBase
{
    /**
     * The crsConstraint
     * @var string|null
     */
    protected ?string $crsConstraint = null;
    /**
     * The forLocalization
     * @var string|null
     */
    protected ?string $forLocalization = null;
    /**
     * The iso2
     * @var string|null
     */
    protected ?string $iso2 = null;
    /**
     * The token
     * @var string|null
     */
    protected ?string $token = null;
    /**
     * Constructor method for CountryTokenDTO
     * @uses CountryTokenDTO::setCrsConstraint()
     * @uses CountryTokenDTO::setForLocalization()
     * @uses CountryTokenDTO::setIso2()
     * @uses CountryTokenDTO::setToken()
     * @param string $crsConstraint
     * @param string $forLocalization
     * @param string $iso2
     * @param string $token
     */
    public function __construct(?string $crsConstraint = null, ?string $forLocalization = null, ?string $iso2 = null, ?string $token = null)
    {
        $this
            ->setCrsConstraint($crsConstraint)
            ->setForLocalization($forLocalization)
            ->setIso2($iso2)
            ->setToken($token);
    }
    /**
     * Get crsConstraint value
     * @return string|null
     */
    public function getCrsConstraint(): ?string
    {
        return $this->crsConstraint;
    }
    /**
     * Set crsConstraint value
     * @param string $crsConstraint
     * @return \Pggns\MidocoApi\Order\StructType\CountryTokenDTO
     */
    public function setCrsConstraint(?string $crsConstraint = null): self
    {
        // validation for constraint: string
        if (!is_null($crsConstraint) && !is_string($crsConstraint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsConstraint, true), gettype($crsConstraint)), __LINE__);
        }
        $this->crsConstraint = $crsConstraint;
        
        return $this;
    }
    /**
     * Get forLocalization value
     * @return string|null
     */
    public function getForLocalization(): ?string
    {
        return $this->forLocalization;
    }
    /**
     * Set forLocalization value
     * @param string $forLocalization
     * @return \Pggns\MidocoApi\Order\StructType\CountryTokenDTO
     */
    public function setForLocalization(?string $forLocalization = null): self
    {
        // validation for constraint: string
        if (!is_null($forLocalization) && !is_string($forLocalization)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forLocalization, true), gettype($forLocalization)), __LINE__);
        }
        $this->forLocalization = $forLocalization;
        
        return $this;
    }
    /**
     * Get iso2 value
     * @return string|null
     */
    public function getIso2(): ?string
    {
        return $this->iso2;
    }
    /**
     * Set iso2 value
     * @param string $iso2
     * @return \Pggns\MidocoApi\Order\StructType\CountryTokenDTO
     */
    public function setIso2(?string $iso2 = null): self
    {
        // validation for constraint: string
        if (!is_null($iso2) && !is_string($iso2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iso2, true), gettype($iso2)), __LINE__);
        }
        $this->iso2 = $iso2;
        
        return $this;
    }
    /**
     * Get token value
     * @return string|null
     */
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     * Set token value
     * @param string $token
     * @return \Pggns\MidocoApi\Order\StructType\CountryTokenDTO
     */
    public function setToken(?string $token = null): self
    {
        // validation for constraint: string
        if (!is_null($token) && !is_string($token)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($token, true), gettype($token)), __LINE__);
        }
        $this->token = $token;
        
        return $this;
    }
}
