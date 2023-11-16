<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuppCancelCMappingDTO StructType
 * @subpackage Structs
 */
class SuppCancelCMappingDTO extends AbstractStructBase
{
    /**
     * The mainSupplierId
     * @var string|null
     */
    protected ?string $mainSupplierId = null;
    /**
     * The suppCancelCMappingId
     * @var int|null
     */
    protected ?int $suppCancelCMappingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SuppCancelCMappingDTO
     * @uses SuppCancelCMappingDTO::setMainSupplierId()
     * @uses SuppCancelCMappingDTO::setSuppCancelCMappingId()
     * @uses SuppCancelCMappingDTO::setSupplierId()
     * @param string $mainSupplierId
     * @param int $suppCancelCMappingId
     * @param string $supplierId
     */
    public function __construct(?string $mainSupplierId = null, ?int $suppCancelCMappingId = null, ?string $supplierId = null)
    {
        $this
            ->setMainSupplierId($mainSupplierId)
            ->setSuppCancelCMappingId($suppCancelCMappingId)
            ->setSupplierId($supplierId);
    }
    /**
     * Get mainSupplierId value
     * @return string|null
     */
    public function getMainSupplierId(): ?string
    {
        return $this->mainSupplierId;
    }
    /**
     * Set mainSupplierId value
     * @param string $mainSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCMappingDTO
     */
    public function setMainSupplierId(?string $mainSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($mainSupplierId) && !is_string($mainSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mainSupplierId, true), gettype($mainSupplierId)), __LINE__);
        }
        $this->mainSupplierId = $mainSupplierId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCMappingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SuppCancelCMappingDTO
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
}
