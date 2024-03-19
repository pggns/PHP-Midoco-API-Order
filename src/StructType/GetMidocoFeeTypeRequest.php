<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoFeeTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoFeeTypeRequest extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $code;
    /**
     * Constructor method for GetMidocoFeeTypeRequest
     * @uses GetMidocoFeeTypeRequest::setCode()
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoFeeTypeRequest
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
