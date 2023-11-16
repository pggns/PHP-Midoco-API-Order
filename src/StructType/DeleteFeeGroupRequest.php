<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFeeGroupRequest StructType
 * @subpackage Structs
 */
class DeleteFeeGroupRequest extends AbstractStructBase
{
    /**
     * The feeGroupId
     * @var int|null
     */
    protected ?int $feeGroupId = null;
    /**
     * Constructor method for DeleteFeeGroupRequest
     * @uses DeleteFeeGroupRequest::setFeeGroupId()
     * @param int $feeGroupId
     */
    public function __construct(?int $feeGroupId = null)
    {
        $this
            ->setFeeGroupId($feeGroupId);
    }
    /**
     * Get feeGroupId value
     * @return int|null
     */
    public function getFeeGroupId(): ?int
    {
        return $this->feeGroupId;
    }
    /**
     * Set feeGroupId value
     * @param int $feeGroupId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteFeeGroupRequest
     */
    public function setFeeGroupId(?int $feeGroupId = null): self
    {
        // validation for constraint: int
        if (!is_null($feeGroupId) && !(is_int($feeGroupId) || ctype_digit($feeGroupId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($feeGroupId, true), gettype($feeGroupId)), __LINE__);
        }
        $this->feeGroupId = $feeGroupId;
        
        return $this;
    }
}
