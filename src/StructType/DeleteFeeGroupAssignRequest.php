<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFeeGroupAssignRequest StructType
 * @subpackage Structs
 */
class DeleteFeeGroupAssignRequest extends AbstractStructBase
{
    /**
     * The feeAssignId
     * @var int|null
     */
    protected ?int $feeAssignId = null;
    /**
     * Constructor method for DeleteFeeGroupAssignRequest
     * @uses DeleteFeeGroupAssignRequest::setFeeAssignId()
     * @param int $feeAssignId
     */
    public function __construct(?int $feeAssignId = null)
    {
        $this
            ->setFeeAssignId($feeAssignId);
    }
    /**
     * Get feeAssignId value
     * @return int|null
     */
    public function getFeeAssignId(): ?int
    {
        return $this->feeAssignId;
    }
    /**
     * Set feeAssignId value
     * @param int $feeAssignId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteFeeGroupAssignRequest
     */
    public function setFeeAssignId(?int $feeAssignId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeAssignId) && !(is_int($feeAssignId) || ctype_digit($feeAssignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeAssignId, true), gettype($feeAssignId)), __LINE__);
        }
        $this->feeAssignId = $feeAssignId;
        
        return $this;
    }
}
