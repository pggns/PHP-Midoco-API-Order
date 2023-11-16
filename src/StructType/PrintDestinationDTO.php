<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintDestinationDTO StructType
 * @subpackage Structs
 */
class PrintDestinationDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The printDestId
     * @var string|null
     */
    protected ?string $printDestId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for PrintDestinationDTO
     * @uses PrintDestinationDTO::setDescription()
     * @uses PrintDestinationDTO::setPrintDestId()
     * @uses PrintDestinationDTO::setUnitName()
     * @param string $description
     * @param string $printDestId
     * @param string $unitName
     */
    public function __construct(?string $description = null, ?string $printDestId = null, ?string $unitName = null)
    {
        $this
            ->setDescription($description)
            ->setPrintDestId($printDestId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintDestinationDTO
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
     * Get printDestId value
     * @return string|null
     */
    public function getPrintDestId(): ?string
    {
        return $this->printDestId;
    }
    /**
     * Set printDestId value
     * @param string $printDestId
     * @return \Pggns\MidocoApi\Order\StructType\PrintDestinationDTO
     */
    public function setPrintDestId(?string $printDestId = null): self
    {
        // validation for constraint: string
        if (!is_null($printDestId) && !is_string($printDestId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDestId, true), gettype($printDestId)), __LINE__);
        }
        $this->printDestId = $printDestId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintDestinationDTO
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
