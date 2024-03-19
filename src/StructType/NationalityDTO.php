<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NationalityDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NationalityDTO extends AbstractStructBase
{
    /**
     * The nationalityCode
     * @var string|null
     */
    protected ?string $nationalityCode = null;
    /**
     * The shortDescription
     * @var string|null
     */
    protected ?string $shortDescription = null;
    /**
     * Constructor method for NationalityDTO
     * @uses NationalityDTO::setNationalityCode()
     * @uses NationalityDTO::setShortDescription()
     * @param string $nationalityCode
     * @param string $shortDescription
     */
    public function __construct(?string $nationalityCode = null, ?string $shortDescription = null)
    {
        $this
            ->setNationalityCode($nationalityCode)
            ->setShortDescription($shortDescription);
    }
    /**
     * Get nationalityCode value
     * @return string|null
     */
    public function getNationalityCode(): ?string
    {
        return $this->nationalityCode;
    }
    /**
     * Set nationalityCode value
     * @param string $nationalityCode
     * @return \Pggns\MidocoApi\Order\StructType\NationalityDTO
     */
    public function setNationalityCode(?string $nationalityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($nationalityCode) && !is_string($nationalityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalityCode, true), gettype($nationalityCode)), __LINE__);
        }
        $this->nationalityCode = $nationalityCode;
        
        return $this;
    }
    /**
     * Get shortDescription value
     * @return string|null
     */
    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }
    /**
     * Set shortDescription value
     * @param string $shortDescription
     * @return \Pggns\MidocoApi\Order\StructType\NationalityDTO
     */
    public function setShortDescription(?string $shortDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($shortDescription) && !is_string($shortDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortDescription, true), gettype($shortDescription)), __LINE__);
        }
        $this->shortDescription = $shortDescription;
        
        return $this;
    }
}
