<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAddressRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAddressRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $MidocoSupplierAddress = null;
    /**
     * Constructor method for SaveSupplierAddressRequest
     * @uses SaveSupplierAddressRequest::setMidocoSupplierAddress()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null)
    {
        $this
            ->setMidocoSupplierAddress($midocoSupplierAddress);
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress|null
     */
    public function getMidocoSupplierAddress(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * Set MidocoSupplierAddress value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierAddressRequest
     */
    public function setMidocoSupplierAddress(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $midocoSupplierAddress = null): self
    {
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
}
