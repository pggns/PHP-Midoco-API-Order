<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBankAccountRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: save a bank account
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveBankAccountRequest extends AbstractStructBase
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
     * Constructor method for SaveBankAccountRequest
     * @uses SaveBankAccountRequest::setMidocoBankAccount()
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveBankAccountRequest
     */
    public function setMidocoBankAccount(?\Pggns\MidocoApi\Order\StructType\MidocoBankAccount $midocoBankAccount = null): self
    {
        $this->MidocoBankAccount = $midocoBankAccount;
        
        return $this;
    }
}
