<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVirtualAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVirtualAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualAccount
     * @var \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $MidocoVirtualAccount = null;
    /**
     * Constructor method for DeleteVirtualAccountRequest
     * @uses DeleteVirtualAccountRequest::setMidocoVirtualAccount()
     * @param \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $midocoVirtualAccount
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $midocoVirtualAccount = null)
    {
        $this
            ->setMidocoVirtualAccount($midocoVirtualAccount);
    }
    /**
     * Get MidocoVirtualAccount value
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO|null
     */
    public function getMidocoVirtualAccount(): ?\Pggns\MidocoApi\Order\StructType\VirtualAccountDTO
    {
        return $this->MidocoVirtualAccount;
    }
    /**
     * Set MidocoVirtualAccount value
     * @param \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $midocoVirtualAccount
     * @return \Pggns\MidocoApi\Order\StructType\DeleteVirtualAccountRequest
     */
    public function setMidocoVirtualAccount(?\Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $midocoVirtualAccount = null): self
    {
        $this->MidocoVirtualAccount = $midocoVirtualAccount;
        
        return $this;
    }
}
