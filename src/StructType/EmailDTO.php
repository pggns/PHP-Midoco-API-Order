<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EmailDTO extends AbstractStructBase
{
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
    /**
     * The emailSender
     * @var string|null
     */
    protected ?string $emailSender = null;
    /**
     * The payloadOption
     * @var string|null
     */
    protected ?string $payloadOption = null;
    /**
     * Constructor method for EmailDTO
     * @uses EmailDTO::setContentType()
     * @uses EmailDTO::setEmailSender()
     * @uses EmailDTO::setPayloadOption()
     * @param string $contentType
     * @param string $emailSender
     * @param string $payloadOption
     */
    public function __construct(?string $contentType = null, ?string $emailSender = null, ?string $payloadOption = null)
    {
        $this
            ->setContentType($contentType)
            ->setEmailSender($emailSender)
            ->setPayloadOption($payloadOption);
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\Order\StructType\EmailDTO
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
        return $this;
    }
    /**
     * Get emailSender value
     * @return string|null
     */
    public function getEmailSender(): ?string
    {
        return $this->emailSender;
    }
    /**
     * Set emailSender value
     * @param string $emailSender
     * @return \Pggns\MidocoApi\Order\StructType\EmailDTO
     */
    public function setEmailSender(?string $emailSender = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSender) && !is_string($emailSender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSender, true), gettype($emailSender)), __LINE__);
        }
        $this->emailSender = $emailSender;
        
        return $this;
    }
    /**
     * Get payloadOption value
     * @return string|null
     */
    public function getPayloadOption(): ?string
    {
        return $this->payloadOption;
    }
    /**
     * Set payloadOption value
     * @param string $payloadOption
     * @return \Pggns\MidocoApi\Order\StructType\EmailDTO
     */
    public function setPayloadOption(?string $payloadOption = null): self
    {
        // validation for constraint: string
        if (!is_null($payloadOption) && !is_string($payloadOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payloadOption, true), gettype($payloadOption)), __LINE__);
        }
        $this->payloadOption = $payloadOption;
        
        return $this;
    }
}
