<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TssClientMetadataDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TssClientMetadataDTO extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The tssSystem
     * @var string|null
     */
    protected ?string $tssSystem = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for TssClientMetadataDTO
     * @uses TssClientMetadataDTO::setName()
     * @uses TssClientMetadataDTO::setTssId()
     * @uses TssClientMetadataDTO::setTssSystem()
     * @uses TssClientMetadataDTO::setUnitName()
     * @uses TssClientMetadataDTO::setValue()
     * @param string $name
     * @param string $tssId
     * @param string $tssSystem
     * @param string $unitName
     * @param string $value
     */
    public function __construct(?string $name = null, ?string $tssId = null, ?string $tssSystem = null, ?string $unitName = null, ?string $value = null)
    {
        $this
            ->setName($name)
            ->setTssId($tssId)
            ->setTssSystem($tssSystem)
            ->setUnitName($unitName)
            ->setValue($value);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\TssClientMetadataDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\TssClientMetadataDTO
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
    /**
     * Get tssSystem value
     * @return string|null
     */
    public function getTssSystem(): ?string
    {
        return $this->tssSystem;
    }
    /**
     * Set tssSystem value
     * @param string $tssSystem
     * @return \Pggns\MidocoApi\Order\StructType\TssClientMetadataDTO
     */
    public function setTssSystem(?string $tssSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($tssSystem) && !is_string($tssSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssSystem, true), gettype($tssSystem)), __LINE__);
        }
        $this->tssSystem = $tssSystem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssClientMetadataDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TssClientMetadataDTO
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
