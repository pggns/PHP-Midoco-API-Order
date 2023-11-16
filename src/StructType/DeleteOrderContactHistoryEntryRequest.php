<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderContactHistoryEntryRequest StructType
 * @subpackage Structs
 */
class DeleteOrderContactHistoryEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $MidocoOrderContactHistory = null;
    /**
     * Constructor method for DeleteOrderContactHistoryEntryRequest
     * @uses DeleteOrderContactHistoryEntryRequest::setMidocoOrderContactHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory = null)
    {
        $this
            ->setMidocoOrderContactHistory($midocoOrderContactHistory);
    }
    /**
     * Get MidocoOrderContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory|null
     */
    public function getMidocoOrderContactHistory(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory
    {
        return $this->MidocoOrderContactHistory;
    }
    /**
     * Set MidocoOrderContactHistory value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderContactHistoryEntryRequest
     */
    public function setMidocoOrderContactHistory(?\Pggns\MidocoApi\Order\StructType\MidocoOrderContactHistory $midocoOrderContactHistory = null): self
    {
        $this->MidocoOrderContactHistory = $midocoOrderContactHistory;
        
        return $this;
    }
}
