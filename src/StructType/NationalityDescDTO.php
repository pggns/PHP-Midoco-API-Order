<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NationalityDescDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NationalityDescDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The nationalityCode
     * @var string|null
     */
    protected ?string $nationalityCode = null;
    /**
     * Constructor method for NationalityDescDTO
     * @uses NationalityDescDTO::setCultureId()
     * @uses NationalityDescDTO::setDescription()
     * @uses NationalityDescDTO::setNationalityCode()
     * @param string $cultureId
     * @param string $description
     * @param string $nationalityCode
     */
    public function __construct(?string $cultureId = null, ?string $description = null, ?string $nationalityCode = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDescription($description)
            ->setNationalityCode($nationalityCode);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\NationalityDescDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\NationalityDescDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\NationalityDescDTO
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
}
