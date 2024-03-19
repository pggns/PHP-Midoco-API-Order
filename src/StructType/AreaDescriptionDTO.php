<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AreaDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AreaDescriptionDTO extends AbstractStructBase
{
    /**
     * The areaCode
     * @var string|null
     */
    protected ?string $areaCode = null;
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
     * Constructor method for AreaDescriptionDTO
     * @uses AreaDescriptionDTO::setAreaCode()
     * @uses AreaDescriptionDTO::setCultureId()
     * @uses AreaDescriptionDTO::setDescription()
     * @param string $areaCode
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?string $areaCode = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setAreaCode($areaCode)
            ->setCultureId($cultureId)
            ->setDescription($description);
    }
    /**
     * Get areaCode value
     * @return string|null
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }
    /**
     * Set areaCode value
     * @param string $areaCode
     * @return \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO
     */
    public function setAreaCode(?string $areaCode = null): self
    {
        // validation for constraint: string
        if (!is_null($areaCode) && !is_string($areaCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaCode, true), gettype($areaCode)), __LINE__);
        }
        $this->areaCode = $areaCode;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AreaDescriptionDTO
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
}
