<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDisabledUnitsRequest StructType
 * @subpackage Structs
 */
class GetSupplierDisabledUnitsRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $supplierId;
    /**
     * Constructor method for GetSupplierDisabledUnitsRequest
     * @uses GetSupplierDisabledUnitsRequest::setSupplierId()
     * @param string $supplierId
     */
    public function __construct(string $supplierId)
    {
        $this
            ->setSupplierId($supplierId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierDisabledUnitsRequest
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
}
