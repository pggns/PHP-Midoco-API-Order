<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierShipNameRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierShipNameRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierShipName
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierShipName
     * @var \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $MidocoSupplierShipName = null;
    /**
     * Constructor method for DeleteSupplierShipNameRequest
     * @uses DeleteSupplierShipNameRequest::setMidocoSupplierShipName()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $midocoSupplierShipName
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $midocoSupplierShipName = null)
    {
        $this
            ->setMidocoSupplierShipName($midocoSupplierShipName);
    }
    /**
     * Get MidocoSupplierShipName value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO|null
     */
    public function getMidocoSupplierShipName(): ?\Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO
    {
        return $this->MidocoSupplierShipName;
    }
    /**
     * Set MidocoSupplierShipName value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $midocoSupplierShipName
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierShipNameRequest
     */
    public function setMidocoSupplierShipName(?\Pggns\MidocoApi\Order\StructType\SupplierShipNameDTO $midocoSupplierShipName = null): self
    {
        $this->MidocoSupplierShipName = $midocoSupplierShipName;
        
        return $this;
    }
}
