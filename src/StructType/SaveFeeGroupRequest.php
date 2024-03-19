<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFeeGroupRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveFeeGroupRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroup
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $MidocoFeeGroup = null;
    /**
     * The feeGroupToCopyAssignmentsFrom
     * @var string|null
     */
    protected ?string $feeGroupToCopyAssignmentsFrom = null;
    /**
     * The deleteExistingAssignments
     * @var bool|null
     */
    protected ?bool $deleteExistingAssignments = null;
    /**
     * Constructor method for SaveFeeGroupRequest
     * @uses SaveFeeGroupRequest::setMidocoFeeGroup()
     * @uses SaveFeeGroupRequest::setFeeGroupToCopyAssignmentsFrom()
     * @uses SaveFeeGroupRequest::setDeleteExistingAssignments()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $midocoFeeGroup
     * @param string $feeGroupToCopyAssignmentsFrom
     * @param bool $deleteExistingAssignments
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $midocoFeeGroup = null, ?string $feeGroupToCopyAssignmentsFrom = null, ?bool $deleteExistingAssignments = null)
    {
        $this
            ->setMidocoFeeGroup($midocoFeeGroup)
            ->setFeeGroupToCopyAssignmentsFrom($feeGroupToCopyAssignmentsFrom)
            ->setDeleteExistingAssignments($deleteExistingAssignments);
    }
    /**
     * Get MidocoFeeGroup value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup|null
     */
    public function getMidocoFeeGroup(): ?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroup
    {
        return $this->MidocoFeeGroup;
    }
    /**
     * Set MidocoFeeGroup value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $midocoFeeGroup
     * @return \Pggns\MidocoApi\Order\StructType\SaveFeeGroupRequest
     */
    public function setMidocoFeeGroup(?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroup $midocoFeeGroup = null): self
    {
        $this->MidocoFeeGroup = $midocoFeeGroup;
        
        return $this;
    }
    /**
     * Get feeGroupToCopyAssignmentsFrom value
     * @return string|null
     */
    public function getFeeGroupToCopyAssignmentsFrom(): ?string
    {
        return $this->feeGroupToCopyAssignmentsFrom;
    }
    /**
     * Set feeGroupToCopyAssignmentsFrom value
     * @param string $feeGroupToCopyAssignmentsFrom
     * @return \Pggns\MidocoApi\Order\StructType\SaveFeeGroupRequest
     */
    public function setFeeGroupToCopyAssignmentsFrom(?string $feeGroupToCopyAssignmentsFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($feeGroupToCopyAssignmentsFrom) && !is_string($feeGroupToCopyAssignmentsFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeGroupToCopyAssignmentsFrom, true), gettype($feeGroupToCopyAssignmentsFrom)), __LINE__);
        }
        $this->feeGroupToCopyAssignmentsFrom = $feeGroupToCopyAssignmentsFrom;
        
        return $this;
    }
    /**
     * Get deleteExistingAssignments value
     * @return bool|null
     */
    public function getDeleteExistingAssignments(): ?bool
    {
        return $this->deleteExistingAssignments;
    }
    /**
     * Set deleteExistingAssignments value
     * @param bool $deleteExistingAssignments
     * @return \Pggns\MidocoApi\Order\StructType\SaveFeeGroupRequest
     */
    public function setDeleteExistingAssignments(?bool $deleteExistingAssignments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteExistingAssignments) && !is_bool($deleteExistingAssignments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteExistingAssignments, true), gettype($deleteExistingAssignments)), __LINE__);
        }
        $this->deleteExistingAssignments = $deleteExistingAssignments;
        
        return $this;
    }
}
