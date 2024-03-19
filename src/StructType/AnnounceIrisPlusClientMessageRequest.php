<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceIrisPlusClientMessageRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceIrisPlusClientMessageRequest extends AbstractStructBase
{
    /**
     * The IrisPlusClientMessage
     * @var string|null
     */
    protected ?string $IrisPlusClientMessage = null;
    /**
     * The encoding
     * Meta information extracted from the WSDL
     * - default: UTF-8
     * @var string|null
     */
    protected ?string $encoding = null;
    /**
     * Constructor method for AnnounceIrisPlusClientMessageRequest
     * @uses AnnounceIrisPlusClientMessageRequest::setIrisPlusClientMessage()
     * @uses AnnounceIrisPlusClientMessageRequest::setEncoding()
     * @param string $irisPlusClientMessage
     * @param string $encoding
     */
    public function __construct(?string $irisPlusClientMessage = null, ?string $encoding = 'UTF-8')
    {
        $this
            ->setIrisPlusClientMessage($irisPlusClientMessage)
            ->setEncoding($encoding);
    }
    /**
     * Get IrisPlusClientMessage value
     * @return string|null
     */
    public function getIrisPlusClientMessage(): ?string
    {
        return $this->IrisPlusClientMessage;
    }
    /**
     * Set IrisPlusClientMessage value
     * @param string $irisPlusClientMessage
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceIrisPlusClientMessageRequest
     */
    public function setIrisPlusClientMessage(?string $irisPlusClientMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($irisPlusClientMessage) && !is_string($irisPlusClientMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($irisPlusClientMessage, true), gettype($irisPlusClientMessage)), __LINE__);
        }
        $this->IrisPlusClientMessage = $irisPlusClientMessage;
        
        return $this;
    }
    /**
     * Get encoding value
     * @return string|null
     */
    public function getEncoding(): ?string
    {
        return $this->encoding;
    }
    /**
     * Set encoding value
     * @param string $encoding
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceIrisPlusClientMessageRequest
     */
    public function setEncoding(?string $encoding = 'UTF-8'): self
    {
        // validation for constraint: string
        if (!is_null($encoding) && !is_string($encoding)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encoding, true), gettype($encoding)), __LINE__);
        }
        $this->encoding = $encoding;
        
        return $this;
    }
}
