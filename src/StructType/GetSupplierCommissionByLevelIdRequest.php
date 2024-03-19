<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCommissionByLevelIdRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierCommissionByLevelIdRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The commissionLevelId
     * @var string|null
     */
    protected ?string $commissionLevelId = null;
    /**
     * Constructor method for GetSupplierCommissionByLevelIdRequest
     * @uses GetSupplierCommissionByLevelIdRequest::setSupplierId()
     * @uses GetSupplierCommissionByLevelIdRequest::setCommissionLevelId()
     * @param string $supplierId
     * @param string $commissionLevelId
     */
    public function __construct(string $supplierId, ?string $commissionLevelId = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setCommissionLevelId($commissionLevelId);
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionByLevelIdRequest
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get commissionLevelId value
     * @return string|null
     */
    public function getCommissionLevelId(): ?string
    {
        return $this->commissionLevelId;
    }
    /**
     * Set commissionLevelId value
     * @param string $commissionLevelId
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionByLevelIdRequest
     */
    public function setCommissionLevelId(?string $commissionLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionLevelId) && !is_string($commissionLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionLevelId, true), gettype($commissionLevelId)), __LINE__);
        }
        $this->commissionLevelId = $commissionLevelId;
        
        return $this;
    }
}
