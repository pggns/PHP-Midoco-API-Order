<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CateringDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CateringDescriptionDTO extends AbstractStructBase
{
    /**
     * The cateringCode
     * @var string|null
     */
    protected ?string $cateringCode = null;
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
     * Constructor method for CateringDescriptionDTO
     * @uses CateringDescriptionDTO::setCateringCode()
     * @uses CateringDescriptionDTO::setCultureId()
     * @uses CateringDescriptionDTO::setDescription()
     * @param string $cateringCode
     * @param string $cultureId
     * @param string $description
     */
    public function __construct(?string $cateringCode = null, ?string $cultureId = null, ?string $description = null)
    {
        $this
            ->setCateringCode($cateringCode)
            ->setCultureId($cultureId)
            ->setDescription($description);
    }
    /**
     * Get cateringCode value
     * @return string|null
     */
    public function getCateringCode(): ?string
    {
        return $this->cateringCode;
    }
    /**
     * Set cateringCode value
     * @param string $cateringCode
     * @return \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO
     */
    public function setCateringCode(?string $cateringCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cateringCode) && !is_string($cateringCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cateringCode, true), gettype($cateringCode)), __LINE__);
        }
        $this->cateringCode = $cateringCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CateringDescriptionDTO
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
