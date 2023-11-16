<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteBillingQueryRequest StructType
 * @subpackage Structs
 */
class ExecuteBillingQueryRequest extends AbstractStructBase
{
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * Constructor method for ExecuteBillingQueryRequest
     * @uses ExecuteBillingQueryRequest::setMidocoQuery()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery = null)
    {
        $this
            ->setMidocoQuery($midocoQuery);
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Order\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBillingQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
}
