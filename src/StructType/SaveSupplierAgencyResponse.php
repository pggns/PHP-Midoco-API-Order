<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAgencyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAgencyResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgency
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgency
     * @var \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $MidocoSupplierAgency = null;
    /**
     * Constructor method for SaveSupplierAgencyResponse
     * @uses SaveSupplierAgencyResponse::setMidocoSupplierAgency()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $midocoSupplierAgency
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $midocoSupplierAgency = null)
    {
        $this
            ->setMidocoSupplierAgency($midocoSupplierAgency);
    }
    /**
     * Get MidocoSupplierAgency value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO|null
     */
    public function getMidocoSupplierAgency(): ?\Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO
    {
        return $this->MidocoSupplierAgency;
    }
    /**
     * Set MidocoSupplierAgency value
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $midocoSupplierAgency
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierAgencyResponse
     */
    public function setMidocoSupplierAgency(?\Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $midocoSupplierAgency = null): self
    {
        $this->MidocoSupplierAgency = $midocoSupplierAgency;
        
        return $this;
    }
}
