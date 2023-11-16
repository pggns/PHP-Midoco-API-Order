<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSuppCancelCMappingRequest StructType
 * @subpackage Structs
 */
class GetAssignedSuppCancelCMappingRequest extends AbstractStructBase
{
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The checkHierarchicaly
     * @var bool|null
     */
    protected ?bool $checkHierarchicaly = null;
    /**
     * Constructor method for GetAssignedSuppCancelCMappingRequest
     * @uses GetAssignedSuppCancelCMappingRequest::setOrgunit()
     * @uses GetAssignedSuppCancelCMappingRequest::setSupplierId()
     * @uses GetAssignedSuppCancelCMappingRequest::setCheckHierarchicaly()
     * @param string $orgunit
     * @param string $supplierId
     * @param bool $checkHierarchicaly
     */
    public function __construct(?string $orgunit = null, ?string $supplierId = null, ?bool $checkHierarchicaly = null)
    {
        $this
            ->setOrgunit($orgunit)
            ->setSupplierId($supplierId)
            ->setCheckHierarchicaly($checkHierarchicaly);
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppCancelCMappingRequest
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppCancelCMappingRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get checkHierarchicaly value
     * @return bool|null
     */
    public function getCheckHierarchicaly(): ?bool
    {
        return $this->checkHierarchicaly;
    }
    /**
     * Set checkHierarchicaly value
     * @param bool $checkHierarchicaly
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppCancelCMappingRequest
     */
    public function setCheckHierarchicaly(?bool $checkHierarchicaly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checkHierarchicaly) && !is_bool($checkHierarchicaly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checkHierarchicaly, true), gettype($checkHierarchicaly)), __LINE__);
        }
        $this->checkHierarchicaly = $checkHierarchicaly;
        
        return $this;
    }
}
