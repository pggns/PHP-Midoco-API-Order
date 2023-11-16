<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Check2FaRequest StructType
 * @subpackage Structs
 */
class Check2FaRequest extends AbstractStructBase
{
    /**
     * The authCode
     * @var string|null
     */
    protected ?string $authCode = null;
    /**
     * Constructor method for Check2FaRequest
     * @uses Check2FaRequest::setAuthCode()
     * @param string $authCode
     */
    public function __construct(?string $authCode = null)
    {
        $this
            ->setAuthCode($authCode);
    }
    /**
     * Get authCode value
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     * Set authCode value
     * @param string $authCode
     * @return \Pggns\MidocoApi\Order\StructType\Check2FaRequest
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        $this->authCode = $authCode;
        
        return $this;
    }
}
