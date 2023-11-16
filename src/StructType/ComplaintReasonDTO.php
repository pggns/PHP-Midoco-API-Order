<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintReasonDTO StructType
 * @subpackage Structs
 */
class ComplaintReasonDTO extends AbstractStructBase
{
    /**
     * The complaintId
     * @var int|null
     */
    protected ?int $complaintId = null;
    /**
     * The reasonId
     * @var string|null
     */
    protected ?string $reasonId = null;
    /**
     * Constructor method for ComplaintReasonDTO
     * @uses ComplaintReasonDTO::setComplaintId()
     * @uses ComplaintReasonDTO::setReasonId()
     * @param int $complaintId
     * @param string $reasonId
     */
    public function __construct(?int $complaintId = null, ?string $reasonId = null)
    {
        $this
            ->setComplaintId($complaintId)
            ->setReasonId($reasonId);
    }
    /**
     * Get complaintId value
     * @return int|null
     */
    public function getComplaintId(): ?int
    {
        return $this->complaintId;
    }
    /**
     * Set complaintId value
     * @param int $complaintId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintReasonDTO
     */
    public function setComplaintId(?int $complaintId = null): self
    {
        // validation for constraint: int
        if (!is_null($complaintId) && !(is_int($complaintId) || ctype_digit($complaintId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($complaintId, true), gettype($complaintId)), __LINE__);
        }
        $this->complaintId = $complaintId;
        
        return $this;
    }
    /**
     * Get reasonId value
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param string $reasonId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintReasonDTO
     */
    public function setReasonId(?string $reasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonId) && !is_string($reasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
}
