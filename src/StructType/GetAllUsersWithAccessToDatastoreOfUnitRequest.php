<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllUsersWithAccessToDatastoreOfUnitRequest StructType
 * @subpackage Structs
 */
class GetAllUsersWithAccessToDatastoreOfUnitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The datastoreType
     * @var string|null
     */
    protected ?string $datastoreType = null;
    /**
     * Constructor method for GetAllUsersWithAccessToDatastoreOfUnitRequest
     * @uses GetAllUsersWithAccessToDatastoreOfUnitRequest::setUnitName()
     * @uses GetAllUsersWithAccessToDatastoreOfUnitRequest::setDatastoreType()
     * @param string $unitName
     * @param string $datastoreType
     */
    public function __construct(?string $unitName = null, ?string $datastoreType = null)
    {
        $this
            ->setUnitName($unitName)
            ->setDatastoreType($datastoreType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAllUsersWithAccessToDatastoreOfUnitRequest
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
     * Get datastoreType value
     * @return string|null
     */
    public function getDatastoreType(): ?string
    {
        return $this->datastoreType;
    }
    /**
     * Set datastoreType value
     * @param string $datastoreType
     * @return \Pggns\MidocoApi\Order\StructType\GetAllUsersWithAccessToDatastoreOfUnitRequest
     */
    public function setDatastoreType(?string $datastoreType = null): self
    {
        // validation for constraint: string
        if (!is_null($datastoreType) && !is_string($datastoreType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datastoreType, true), gettype($datastoreType)), __LINE__);
        }
        $this->datastoreType = $datastoreType;
        
        return $this;
    }
}
