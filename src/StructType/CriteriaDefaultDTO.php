<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CriteriaDefaultDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CriteriaDefaultDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The defaultValue
     * @var string|null
     */
    protected ?string $defaultValue = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for CriteriaDefaultDTO
     * @uses CriteriaDefaultDTO::setCultureId()
     * @uses CriteriaDefaultDTO::setDefaultValue()
     * @uses CriteriaDefaultDTO::setTypeId()
     * @param string $cultureId
     * @param string $defaultValue
     * @param string $typeId
     */
    public function __construct(?string $cultureId = null, ?string $defaultValue = null, ?string $typeId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDefaultValue($defaultValue)
            ->setTypeId($typeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaDefaultDTO
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
     * Get defaultValue value
     * @return string|null
     */
    public function getDefaultValue(): ?string
    {
        return $this->defaultValue;
    }
    /**
     * Set defaultValue value
     * @param string $defaultValue
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaDefaultDTO
     */
    public function setDefaultValue(?string $defaultValue = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultValue) && !is_string($defaultValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultValue, true), gettype($defaultValue)), __LINE__);
        }
        $this->defaultValue = $defaultValue;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaDefaultDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
