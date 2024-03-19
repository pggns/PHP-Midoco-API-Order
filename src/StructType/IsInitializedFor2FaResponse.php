<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsInitializedFor2FaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsInitializedFor2FaResponse extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - documentation: INITIALIZED or NOMFA
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - documentation: AUTH for token or EMAIL
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - documentation: the mail address (masked) for sending the auth token
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for IsInitializedFor2FaResponse
     * @uses IsInitializedFor2FaResponse::setStatus()
     * @uses IsInitializedFor2FaResponse::setMedia()
     * @uses IsInitializedFor2FaResponse::setEmail()
     * @param string $status
     * @param string $media
     * @param string $email
     */
    public function __construct(?string $status = null, ?string $media = null, ?string $email = null)
    {
        $this
            ->setStatus($status)
            ->setMedia($media)
            ->setEmail($email);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\IsInitializedFor2FaResponse
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\IsInitializedFor2FaResponse
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\IsInitializedFor2FaResponse
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
