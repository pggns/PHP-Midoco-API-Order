<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSuppCancelCMappingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSuppCancelCMappingRequest extends AbstractStructBase
{
    /**
     * The suppCancelCMappingId
     * @var int|null
     */
    protected ?int $suppCancelCMappingId = null;
    /**
     * Constructor method for GetSuppCancelCMappingRequest
     * @uses GetSuppCancelCMappingRequest::setSuppCancelCMappingId()
     * @param int $suppCancelCMappingId
     */
    public function __construct(?int $suppCancelCMappingId = null)
    {
        $this
            ->setSuppCancelCMappingId($suppCancelCMappingId);
    }
    /**
     * Get suppCancelCMappingId value
     * @return int|null
     */
    public function getSuppCancelCMappingId(): ?int
    {
        return $this->suppCancelCMappingId;
    }
    /**
     * Set suppCancelCMappingId value
     * @param int $suppCancelCMappingId
     * @return \Pggns\MidocoApi\Order\StructType\GetSuppCancelCMappingRequest
     */
    public function setSuppCancelCMappingId(?int $suppCancelCMappingId = null): self
    {
        // validation for constraint: int
        if (!is_null($suppCancelCMappingId) && !(is_int($suppCancelCMappingId) || ctype_digit($suppCancelCMappingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppCancelCMappingId, true), gettype($suppCancelCMappingId)), __LINE__);
        }
        $this->suppCancelCMappingId = $suppCancelCMappingId;
        
        return $this;
    }
}
