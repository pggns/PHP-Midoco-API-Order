<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisDimensionDTO StructType
 * @subpackage Structs
 */
class MisDimensionDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The dimensionName
     * @var string|null
     */
    protected ?string $dimensionName = null;
    /**
     * Constructor method for MisDimensionDTO
     * @uses MisDimensionDTO::setDescription()
     * @uses MisDimensionDTO::setDimensionName()
     * @param string $description
     * @param string $dimensionName
     */
    public function __construct(?string $description = null, ?string $dimensionName = null)
    {
        $this
            ->setDescription($description)
            ->setDimensionName($dimensionName);
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
     * @return \Pggns\MidocoApi\Order\StructType\MisDimensionDTO
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
     * Get dimensionName value
     * @return string|null
     */
    public function getDimensionName(): ?string
    {
        return $this->dimensionName;
    }
    /**
     * Set dimensionName value
     * @param string $dimensionName
     * @return \Pggns\MidocoApi\Order\StructType\MisDimensionDTO
     */
    public function setDimensionName(?string $dimensionName = null): self
    {
        // validation for constraint: string
        if (!is_null($dimensionName) && !is_string($dimensionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimensionName, true), gettype($dimensionName)), __LINE__);
        }
        $this->dimensionName = $dimensionName;
        
        return $this;
    }
}
