<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitNeighbourDTO StructType
 * @subpackage Structs
 */
class OrgunitNeighbourDTO extends AbstractStructBase
{
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The neighbourUnitName
     * @var string|null
     */
    protected ?string $neighbourUnitName = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrgunitNeighbourDTO
     * @uses OrgunitNeighbourDTO::setCreationTime()
     * @uses OrgunitNeighbourDTO::setCreationUserId()
     * @uses OrgunitNeighbourDTO::setNeighbourUnitName()
     * @uses OrgunitNeighbourDTO::setUnitName()
     * @param string $creationTime
     * @param int $creationUserId
     * @param string $neighbourUnitName
     * @param string $unitName
     */
    public function __construct(?string $creationTime = null, ?int $creationUserId = null, ?string $neighbourUnitName = null, ?string $unitName = null)
    {
        $this
            ->setCreationTime($creationTime)
            ->setCreationUserId($creationUserId)
            ->setNeighbourUnitName($neighbourUnitName)
            ->setUnitName($unitName);
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitNeighbourDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitNeighbourDTO
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get neighbourUnitName value
     * @return string|null
     */
    public function getNeighbourUnitName(): ?string
    {
        return $this->neighbourUnitName;
    }
    /**
     * Set neighbourUnitName value
     * @param string $neighbourUnitName
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitNeighbourDTO
     */
    public function setNeighbourUnitName(?string $neighbourUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($neighbourUnitName) && !is_string($neighbourUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($neighbourUnitName, true), gettype($neighbourUnitName)), __LINE__);
        }
        $this->neighbourUnitName = $neighbourUnitName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitNeighbourDTO
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
