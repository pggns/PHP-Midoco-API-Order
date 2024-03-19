<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccountResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: get a bank account
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoBankAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBankAccount
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBankAccount|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBankAccount $MidocoBankAccount = null;
    /**
     * Constructor method for GetBankAccountResponse
     * @uses GetBankAccountResponse::setMidocoBankAccount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBankAccount $midocoBankAccount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBankAccount $midocoBankAccount = null)
    {
        $this
            ->setMidocoBankAccount($midocoBankAccount);
    }
    /**
     * Get MidocoBankAccount value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBankAccount|null
     */
    public function getMidocoBankAccount(): ?\Pggns\MidocoApi\Order\StructType\MidocoBankAccount
    {
        return $this->MidocoBankAccount;
    }
    /**
     * Set MidocoBankAccount value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBankAccount $midocoBankAccount
     * @return \Pggns\MidocoApi\Order\StructType\GetBankAccountResponse
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Order\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
