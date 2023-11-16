<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccountRequest StructType
 * @subpackage Structs
 */
class SaveAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccount|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAccount $MidocoAccount = null;
    /**
     * Constructor method for SaveAccountRequest
     * @uses SaveAccountRequest::setMidocoAccount()
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveAccountRequest
     */
    public function setMidocoAccount(?\Pggns\MidocoApi\Order\StructType\MidocoAccount $midocoAccount = null): self
    {
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
}
