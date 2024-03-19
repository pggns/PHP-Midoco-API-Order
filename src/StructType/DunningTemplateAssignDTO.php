<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DunningTemplateAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DunningTemplateAssignDTO extends AbstractStructBase
{
    /**
     * The dunningTemplateId
     * @var int|null
     */
    protected ?int $dunningTemplateId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DunningTemplateAssignDTO
     * @uses DunningTemplateAssignDTO::setDunningTemplateId()
     * @uses DunningTemplateAssignDTO::setUnitName()
     * @param int $dunningTemplateId
     * @param string $unitName
     */
    public function __construct(?int $dunningTemplateId = null, ?string $unitName = null)
    {
        $this
            ->setDunningTemplateId($dunningTemplateId)
            ->setUnitName($unitName);
    }
    /**
     * Get dunningTemplateId value
     * @return int|null
     */
    public function getDunningTemplateId(): ?int
    {
        return $this->dunningTemplateId;
    }
    /**
     * Set dunningTemplateId value
     * @param int $dunningTemplateId
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO
     */
    public function setDunningTemplateId(?int $dunningTemplateId = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningTemplateId) && !(is_int($dunningTemplateId) || ctype_digit($dunningTemplateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningTemplateId, true), gettype($dunningTemplateId)), __LINE__);
        }
        $this->dunningTemplateId = $dunningTemplateId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
