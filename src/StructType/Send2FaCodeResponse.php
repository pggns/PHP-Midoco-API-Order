<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Send2FaCodeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Send2FaCodeResponse extends AbstractStructBase
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - documentation: the mail address (masked) where the auth token was sent to
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for Send2FaCodeResponse
     * @uses Send2FaCodeResponse::setEmail()
     * @param string $email
     */
    public function __construct(?string $email = null)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\Send2FaCodeResponse
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
