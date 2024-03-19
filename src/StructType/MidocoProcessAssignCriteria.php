<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProcessAssignCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoProcessAssignCriteria extends AbstractStructBase
{
    /**
     * The applicationId
     * @var string|null
     */
    protected ?string $applicationId = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for MidocoProcessAssignCriteria
     * @uses MidocoProcessAssignCriteria::setApplicationId()
     * @uses MidocoProcessAssignCriteria::setOrgunit()
     * @param string $applicationId
     * @param string $orgunit
     */
    public function __construct(?string $applicationId = null, ?string $orgunit = null)
    {
        $this
            ->setApplicationId($applicationId)
            ->setOrgunit($orgunit);
    }
    /**
     * Get applicationId value
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }
    /**
     * Set applicationId value
     * @param string $applicationId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProcessAssignCriteria
     */
    public function setApplicationId(?string $applicationId = null): self
    {
        // validation for constraint: string
        if (!is_null($applicationId) && !is_string($applicationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationId, true), gettype($applicationId)), __LINE__);
        }
        $this->applicationId = $applicationId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoProcessAssignCriteria
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
}
