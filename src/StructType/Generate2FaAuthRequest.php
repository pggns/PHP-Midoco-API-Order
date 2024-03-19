<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Generate2FaAuthRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Generate2FaAuthRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * Constructor method for Generate2FaAuthRequest
     * @uses Generate2FaAuthRequest::setUserId()
     * @uses Generate2FaAuthRequest::setMedia()
     * @uses Generate2FaAuthRequest::setEmail()
     * @uses Generate2FaAuthRequest::setPhone()
     * @param int $userId
     * @param string $media
     * @param string $email
     * @param string $phone
     */
    public function __construct(?int $userId = null, ?string $media = null, ?string $email = null, ?string $phone = null)
    {
        $this
            ->setUserId($userId)
            ->setMedia($media)
            ->setEmail($email)
            ->setPhone($phone);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\Generate2FaAuthRequest
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Generate2FaAuthRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\Generate2FaAuthRequest
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
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Order\StructType\Generate2FaAuthRequest
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
}
