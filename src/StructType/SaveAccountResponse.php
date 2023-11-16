<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccountResponse StructType
 * @subpackage Structs
 */
class SaveAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for SaveAccountResponse
     * @uses SaveAccountResponse::setMidocoAccount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccount $midocoAccount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAccount $midocoAccount = null)
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccount|null
     */
    public function getMidocoAccount(): ?\Pggns\MidocoApi\Order\StructType\MidocoAccount
    {
        return $this->MidocoAccount;
    }
    /**
     * Set MidocoAccount value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccount $midocoAccount
     * @return \Pggns\MidocoApi\Order\StructType\SaveAccountResponse
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Order\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
