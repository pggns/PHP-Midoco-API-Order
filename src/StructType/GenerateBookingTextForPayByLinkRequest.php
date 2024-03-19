<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateBookingTextForPayByLinkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateBookingTextForPayByLinkRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The attrName
     * @var string|null
     */
    protected ?string $attrName = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The link
     * @var string|null
     */
    protected ?string $link = null;
    /**
     * The linkExpirationTimeStamp
     * @var string|null
     */
    protected ?string $linkExpirationTimeStamp = null;
    /**
     * Constructor method for GenerateBookingTextForPayByLinkRequest
     * @uses GenerateBookingTextForPayByLinkRequest::setOrderId()
     * @uses GenerateBookingTextForPayByLinkRequest::setAttrName()
     * @uses GenerateBookingTextForPayByLinkRequest::setDocumentId()
     * @uses GenerateBookingTextForPayByLinkRequest::setLink()
     * @uses GenerateBookingTextForPayByLinkRequest::setLinkExpirationTimeStamp()
     * @param int $orderId
     * @param string $attrName
     * @param int $documentId
     * @param string $link
     * @param string $linkExpirationTimeStamp
     */
    public function __construct(?int $orderId = null, ?string $attrName = null, ?int $documentId = null, ?string $link = null, ?string $linkExpirationTimeStamp = null)
    {
        $this
            ->setOrderId($orderId)
            ->setAttrName($attrName)
            ->setDocumentId($documentId)
            ->setLink($link)
            ->setLinkExpirationTimeStamp($linkExpirationTimeStamp);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get attrName value
     * @return string|null
     */
    public function getAttrName(): ?string
    {
        return $this->attrName;
    }
    /**
     * Set attrName value
     * @param string $attrName
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkRequest
     */
    public function setAttrName(?string $attrName = null): self
    {
        // validation for constraint: string
        if (!is_null($attrName) && !is_string($attrName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrName, true), gettype($attrName)), __LINE__);
        }
        $this->attrName = $attrName;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get link value
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }
    /**
     * Set link value
     * @param string $link
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkRequest
     */
    public function setLink(?string $link = null): self
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($link, true), gettype($link)), __LINE__);
        }
        $this->link = $link;
        
        return $this;
    }
    /**
     * Get linkExpirationTimeStamp value
     * @return string|null
     */
    public function getLinkExpirationTimeStamp(): ?string
    {
        return $this->linkExpirationTimeStamp;
    }
    /**
     * Set linkExpirationTimeStamp value
     * @param string $linkExpirationTimeStamp
     * @return \Pggns\MidocoApi\Order\StructType\GenerateBookingTextForPayByLinkRequest
     */
    public function setLinkExpirationTimeStamp(?string $linkExpirationTimeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($linkExpirationTimeStamp) && !is_string($linkExpirationTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkExpirationTimeStamp, true), gettype($linkExpirationTimeStamp)), __LINE__);
        }
        $this->linkExpirationTimeStamp = $linkExpirationTimeStamp;
        
        return $this;
    }
}
