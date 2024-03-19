<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEmailType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoEmailType extends AbstractStructBase
{
    /**
     * The fullName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $fullName;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $email;
    /**
     * Constructor method for MidocoEmailType
     * @uses MidocoEmailType::setFullName()
     * @uses MidocoEmailType::setEmail()
     * @param string $fullName
     * @param string $email
     */
    public function __construct(string $fullName, string $email)
    {
        $this
            ->setFullName($fullName)
            ->setEmail($email);
    }
    /**
     * Get fullName value
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }
    /**
     * Set fullName value
     * @param string $fullName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailType
     */
    public function setFullName(string $fullName): self
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailType
     */
    public function setEmail(string $email): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
