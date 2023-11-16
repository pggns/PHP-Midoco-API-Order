<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteOrderRulesResponse StructType
 * @subpackage Structs
 */
class ExecuteOrderRulesResponse extends AbstractStructBase
{
    /**
     * The responseObj
     * @var mixed|null
     */
    protected ?mixed $responseObj = null;
    /**
     * Constructor method for ExecuteOrderRulesResponse
     * @uses ExecuteOrderRulesResponse::setResponseObj()
     * @param mixed $responseObj
     */
    public function __construct(?mixed $responseObj = null)
    {
        $this
            ->setResponseObj($responseObj);
    }
    /**
     * Get responseObj value
     * @return mixed|null
     */
    public function getResponseObj(): ?mixed
    {
        return $this->responseObj;
    }
    /**
     * Set responseObj value
     * @param mixed $responseObj
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesResponse
     */
    public function setResponseObj(?mixed $responseObj = null): self
    {
        $this->responseObj = $responseObj;
        
        return $this;
    }
}
