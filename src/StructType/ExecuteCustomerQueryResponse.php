<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCustomerQueryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCustomerQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteCustomerQueryResponse
     * @uses ExecuteCustomerQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Order\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCustomerQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Order\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
