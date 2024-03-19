<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierVatDivisionTemplDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierVatDivisionTemplDTO extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The vatDivTemplId
     * @var int|null
     */
    protected ?int $vatDivTemplId = null;
    /**
     * Constructor method for SupplierVatDivisionTemplDTO
     * @uses SupplierVatDivisionTemplDTO::setSupplierId()
     * @uses SupplierVatDivisionTemplDTO::setVatDivTemplId()
     * @param string $supplierId
     * @param int $vatDivTemplId
     */
    public function __construct(?string $supplierId = null, ?int $vatDivTemplId = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setVatDivTemplId($vatDivTemplId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatDivisionTemplDTO
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
     * Get vatDivTemplId value
     * @return int|null
     */
    public function getVatDivTemplId(): ?int
    {
        return $this->vatDivTemplId;
    }
    /**
     * Set vatDivTemplId value
     * @param int $vatDivTemplId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierVatDivisionTemplDTO
     */
    public function setVatDivTemplId(?int $vatDivTemplId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplId) && !(is_int($vatDivTemplId) || ctype_digit($vatDivTemplId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplId, true), gettype($vatDivTemplId)), __LINE__);
        }
        $this->vatDivTemplId = $vatDivTemplId;
        
        return $this;
    }
}
