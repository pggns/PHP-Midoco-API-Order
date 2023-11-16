<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportMessageDTO StructType
 * @subpackage Structs
 */
class ExportMessageDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The messageId
     * @var int|null
     */
    protected ?int $messageId = null;
    /**
     * The messageType
     * @var string|null
     */
    protected ?string $messageType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for ExportMessageDTO
     * @uses ExportMessageDTO::setCreationDate()
     * @uses ExportMessageDTO::setMessageId()
     * @uses ExportMessageDTO::setMessageType()
     * @uses ExportMessageDTO::setOrderId()
     * @uses ExportMessageDTO::setText()
     * @param string $creationDate
     * @param int $messageId
     * @param string $messageType
     * @param int $orderId
     * @param string $text
     */
    public function __construct(?string $creationDate = null, ?int $messageId = null, ?string $messageType = null, ?int $orderId = null, ?string $text = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setMessageId($messageId)
            ->setMessageType($messageType)
            ->setOrderId($orderId)
            ->setText($text);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\ExportMessageDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get messageId value
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }
    /**
     * Set messageId value
     * @param int $messageId
     * @return \Pggns\MidocoApi\Order\StructType\ExportMessageDTO
     */
    public function setMessageId(?int $messageId = null): self
    {
        // validation for constraint: int
        if (!is_null($messageId) && !(is_int($messageId) || ctype_digit($messageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageId, true), gettype($messageId)), __LINE__);
        }
        $this->messageId = $messageId;
        
        return $this;
    }
    /**
     * Get messageType value
     * @return string|null
     */
    public function getMessageType(): ?string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \Pggns\MidocoApi\Order\StructType\ExportMessageDTO
     */
    public function setMessageType(?string $messageType = null): self
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageType, true), gettype($messageType)), __LINE__);
        }
        $this->messageType = $messageType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportMessageDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportMessageDTO
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
