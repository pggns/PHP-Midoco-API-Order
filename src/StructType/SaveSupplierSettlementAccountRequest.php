<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierSettlementAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierSettlementAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierSettlementAccount
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount $MidocoSupplierSettlementAccount = null;
    /**
     * Constructor method for SaveSupplierSettlementAccountRequest
     * @uses SaveSupplierSettlementAccountRequest::setMidocoSupplierSettlementAccount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null)
    {
        $this
            ->setMidocoSupplierSettlementAccount($midocoSupplierSettlementAccount);
    }
    /**
     * Get MidocoSupplierSettlementAccount value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount|null
     */
    public function getMidocoSupplierSettlementAccount(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount
    {
        return $this->MidocoSupplierSettlementAccount;
    }
    /**
     * Set MidocoSupplierSettlementAccount value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierSettlementAccountRequest
     */
    public function setMidocoSupplierSettlementAccount(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlementAccount $midocoSupplierSettlementAccount = null): self
    {
        $this->MidocoSupplierSettlementAccount = $midocoSupplierSettlementAccount;
        
        return $this;
    }
}
