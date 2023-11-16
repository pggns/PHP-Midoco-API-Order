<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatastoreAssignDTO StructType
 * @subpackage Structs
 */
class DatastoreAssignDTO extends AbstractStructBase
{
    /**
     * The datastoreId
     * @var string|null
     */
    protected ?string $datastoreId = null;
    /**
     * The datastoreTypeId
     * @var string|null
     */
    protected ?string $datastoreTypeId = null;
    /**
     * The hierarchical
     * @var bool|null
     */
    protected ?bool $hierarchical = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DatastoreAssignDTO
     * @uses DatastoreAssignDTO::setDatastoreId()
     * @uses DatastoreAssignDTO::setDatastoreTypeId()
     * @uses DatastoreAssignDTO::setHierarchical()
     * @uses DatastoreAssignDTO::setUnitName()
     * @param string $datastoreId
     * @param string $datastoreTypeId
     * @param bool $hierarchical
     * @param string $unitName
     */
    public function __construct(?string $datastoreId = null, ?string $datastoreTypeId = null, ?bool $hierarchical = null, ?string $unitName = null)
    {
        $this
            ->setDatastoreId($datastoreId)
            ->setDatastoreTypeId($datastoreTypeId)
            ->setHierarchical($hierarchical)
            ->setUnitName($unitName);
    }
    /**
     * Get datastoreId value
     * @return string|null
     */
    public function getDatastoreId(): ?string
    {
        return $this->datastoreId;
    }
    /**
     * Set datastoreId value
     * @param string $datastoreId
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO
     */
    public function setDatastoreId(?string $datastoreId = null): self
    {
        // validation for constraint: string
        if (!is_null($datastoreId) && !is_string($datastoreId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreId, true), gettype($datastoreId)), __LINE__);
        }
        $this->datastoreId = $datastoreId;
        
        return $this;
    }
    /**
     * Get datastoreTypeId value
     * @return string|null
     */
    public function getDatastoreTypeId(): ?string
    {
        return $this->datastoreTypeId;
    }
    /**
     * Set datastoreTypeId value
     * @param string $datastoreTypeId
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO
     */
    public function setDatastoreTypeId(?string $datastoreTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($datastoreTypeId) && !is_string($datastoreTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreTypeId, true), gettype($datastoreTypeId)), __LINE__);
        }
        $this->datastoreTypeId = $datastoreTypeId;
        
        return $this;
    }
    /**
     * Get hierarchical value
     * @return bool|null
     */
    public function getHierarchical(): ?bool
    {
        return $this->hierarchical;
    }
    /**
     * Set hierarchical value
     * @param bool $hierarchical
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO
     */
    public function setHierarchical(?bool $hierarchical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hierarchical) && !is_bool($hierarchical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hierarchical, true), gettype($hierarchical)), __LINE__);
        }
        $this->hierarchical = $hierarchical;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DatastoreAssignDTO
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
