<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CriteriaValueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CriteriaValueDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The guiPosition
     * @var int|null
     */
    protected ?int $guiPosition = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for CriteriaValueDTO
     * @uses CriteriaValueDTO::setCultureId()
     * @uses CriteriaValueDTO::setGuiPosition()
     * @uses CriteriaValueDTO::setTypeId()
     * @uses CriteriaValueDTO::setValue()
     * @param string $cultureId
     * @param int $guiPosition
     * @param string $typeId
     * @param string $value
     */
    public function __construct(?string $cultureId = null, ?int $guiPosition = null, ?string $typeId = null, ?string $value = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setGuiPosition($guiPosition)
            ->setTypeId($typeId)
            ->setValue($value);
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
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaValueDTO
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
     * Get guiPosition value
     * @return int|null
     */
    public function getGuiPosition(): ?int
    {
        return $this->guiPosition;
    }
    /**
     * Set guiPosition value
     * @param int $guiPosition
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaValueDTO
     */
    public function setGuiPosition(?int $guiPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($guiPosition) && !(is_int($guiPosition) || ctype_digit($guiPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($guiPosition, true), gettype($guiPosition)), __LINE__);
        }
        $this->guiPosition = $guiPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaValueDTO
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
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\CriteriaValueDTO
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
