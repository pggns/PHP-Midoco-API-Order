<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcProxyEmailDataDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcProxyEmailDataDTO extends AbstractStructBase
{
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The topic
     * @var string|null
     */
    protected ?string $topic = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for CcProxyEmailDataDTO
     * @uses CcProxyEmailDataDTO::setEmail()
     * @uses CcProxyEmailDataDTO::setTopic()
     * @uses CcProxyEmailDataDTO::setText()
     * @param string $email
     * @param string $topic
     * @param string $text
     */
    public function __construct(?string $email = null, ?string $topic = null, ?string $text = null)
    {
        $this
            ->setEmail($email)
            ->setTopic($topic)
            ->setText($text);
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
     * @return \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO
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
     * Get topic value
     * @return string|null
     */
    public function getTopic(): ?string
    {
        return $this->topic;
    }
    /**
     * Set topic value
     * @param string $topic
     * @return \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO
     */
    public function setTopic(?string $topic = null): self
    {
        // validation for constraint: string
        if (!is_null($topic) && !is_string($topic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($topic, true), gettype($topic)), __LINE__);
        }
        $this->topic = $topic;
        
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\CcProxyEmailDataDTO
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
}
