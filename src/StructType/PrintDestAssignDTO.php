<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintDestAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintDestAssignDTO extends AbstractStructBase
{
    /**
     * The printDestId
     * @var string|null
     */
    protected ?string $printDestId = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for PrintDestAssignDTO
     * @uses PrintDestAssignDTO::setPrintDestId()
     * @uses PrintDestAssignDTO::setTypeId()
     * @uses PrintDestAssignDTO::setUnitName()
     * @param string $printDestId
     * @param string $typeId
     * @param string $unitName
     */
    public function __construct(?string $printDestId = null, ?string $typeId = null, ?string $unitName = null)
    {
        $this
            ->setPrintDestId($printDestId)
            ->setTypeId($typeId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintDestAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintDestAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintDestAssignDTO
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
