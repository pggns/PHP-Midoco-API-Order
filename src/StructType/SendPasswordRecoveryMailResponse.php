<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendPasswordRecoveryMailResponse StructType
 * @subpackage Structs
 */
class SendPasswordRecoveryMailResponse extends AbstractStructBase
{
    /**
     * The oneTimeCode
     * @var string|null
     */
    protected ?string $oneTimeCode = null;
    /**
     * Constructor method for SendPasswordRecoveryMailResponse
     * @uses SendPasswordRecoveryMailResponse::setOneTimeCode()
     * @param string $oneTimeCode
     */
    public function __construct(?string $oneTimeCode = null)
    {
        $this
            ->setOneTimeCode($oneTimeCode);
    }
    /**
     * Get oneTimeCode value
     * @return string|null
     */
    public function getOneTimeCode(): ?string
    {
        return $this->oneTimeCode;
    }
    /**
     * Set oneTimeCode value
     * @param string $oneTimeCode
     * @return \Pggns\MidocoApi\Order\StructType\SendPasswordRecoveryMailResponse
     */
    public function setOneTimeCode(?string $oneTimeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($oneTimeCode) && !is_string($oneTimeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oneTimeCode, true), gettype($oneTimeCode)), __LINE__);
        }
        $this->oneTimeCode = $oneTimeCode;
        
        return $this;
    }
}
