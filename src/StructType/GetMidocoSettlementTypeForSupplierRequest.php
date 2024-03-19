<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSettlementTypeForSupplierRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSettlementTypeForSupplierRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for GetMidocoSettlementTypeForSupplierRequest
     * @uses GetMidocoSettlementTypeForSupplierRequest::setSupplierId()
     * @param string $supplierId
     */
    public function __construct(?string $supplierId = null)
    {
        $this
            ->setSupplierId($supplierId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoSettlementTypeForSupplierRequest
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
