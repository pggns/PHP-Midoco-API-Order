<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteOrderRulesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteOrderRulesResponse extends AbstractStructBase
{
    /**
     * The responseObj
     * @var string|null
     */
    protected ?string $responseObj = null;
    /**
     * Constructor method for ExecuteOrderRulesResponse
     * @uses ExecuteOrderRulesResponse::setResponseObj()
     * @param string $responseObj
     */
    public function __construct(?string $responseObj = null)
    {
        $this
            ->setResponseObj($responseObj);
    }
    /**
     * Get responseObj value
     * @return string|null
     */
    public function getResponseObj(): ?string
    {
        return $this->responseObj;
    }
    /**
     * Set responseObj value
     * @param string $responseObj
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesResponse
     */
    public function setResponseObj(?string $responseObj = null): self
    {
        // validation for constraint: string
        if (!is_null($responseObj) && !is_string($responseObj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseObj, true), gettype($responseObj)), __LINE__);
        }
        $this->responseObj = $responseObj;
        
        return $this;
    }
}
