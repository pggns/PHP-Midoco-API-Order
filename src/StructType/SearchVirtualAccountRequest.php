<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchVirtualAccountRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchVirtualAccountRequest extends AbstractStructBase
{
    /**
     * The MidocoVirtualAccount
     * Meta information extracted from the WSDL
     * - ref: MidocoVirtualAccount
     * @var \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $MidocoVirtualAccount = null;
    /**
     * Constructor method for SearchVirtualAccountRequest
     * @uses SearchVirtualAccountRequest::setMidocoVirtualAccount()
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchVirtualAccountRequest
     */
    public function setMidocoVirtualAccount(?\Pggns\MidocoApi\Order\StructType\VirtualAccountDTO $midocoVirtualAccount = null): self
    {
        $this->MidocoVirtualAccount = $midocoVirtualAccount;
        
        return $this;
    }
}
