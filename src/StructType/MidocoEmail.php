<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEmail StructType
 * Meta information extracted from the WSDL
 * - type: MidocoEmailType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoEmail extends AbstractStructBase
{
    /**
     * The fullName
     * @var string|null
     */
    protected ?string $fullName = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for MidocoEmail
     * @uses MidocoEmail::setFullName()
     * @uses MidocoEmail::setEmail()
     * @param string $fullName
     * @param string $email
     */
    public function __construct(?string $fullName = null, ?string $email = null)
    {
        $this
            ->setFullName($fullName)
            ->setEmail($email);
    }
    /**
     * Get fullName value
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }
    /**
     * Set fullName value
     * @param string $fullName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmail
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->fullName = $fullName;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmail
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
