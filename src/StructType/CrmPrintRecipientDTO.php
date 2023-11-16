<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmPrintRecipientDTO StructType
 * @subpackage Structs
 */
class CrmPrintRecipientDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The isOriginalPrint
     * @var bool|null
     */
    protected ?bool $isOriginalPrint = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The recipient
     * @var string|null
     */
    protected ?string $recipient = null;
    /**
     * The recipientId
     * @var int|null
     */
    protected ?int $recipientId = null;
    /**
     * Constructor method for CrmPrintRecipientDTO
     * @uses CrmPrintRecipientDTO::setCustomerId()
     * @uses CrmPrintRecipientDTO::setIsOriginalPrint()
     * @uses CrmPrintRecipientDTO::setPrintType()
     * @uses CrmPrintRecipientDTO::setRecipient()
     * @uses CrmPrintRecipientDTO::setRecipientId()
     * @param int $customerId
     * @param bool $isOriginalPrint
     * @param string $printType
     * @param string $recipient
     * @param int $recipientId
     */
    public function __construct(?int $customerId = null, ?bool $isOriginalPrint = null, ?string $printType = null, ?string $recipient = null, ?int $recipientId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setIsOriginalPrint($isOriginalPrint)
            ->setPrintType($printType)
            ->setRecipient($recipient)
            ->setRecipientId($recipientId);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintRecipientDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get isOriginalPrint value
     * @return bool|null
     */
    public function getIsOriginalPrint(): ?bool
    {
        return $this->isOriginalPrint;
    }
    /**
     * Set isOriginalPrint value
     * @param bool $isOriginalPrint
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintRecipientDTO
     */
    public function setIsOriginalPrint(?bool $isOriginalPrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOriginalPrint) && !is_bool($isOriginalPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOriginalPrint, true), gettype($isOriginalPrint)), __LINE__);
        }
        $this->isOriginalPrint = $isOriginalPrint;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintRecipientDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get recipient value
     * @return string|null
     */
    public function getRecipient(): ?string
    {
        return $this->recipient;
    }
    /**
     * Set recipient value
     * @param string $recipient
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintRecipientDTO
     */
    public function setRecipient(?string $recipient = null): self
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipient, true), gettype($recipient)), __LINE__);
        }
        $this->recipient = $recipient;
        
        return $this;
    }
    /**
     * Get recipientId value
     * @return int|null
     */
    public function getRecipientId(): ?int
    {
        return $this->recipientId;
    }
    /**
     * Set recipientId value
     * @param int $recipientId
     * @return \Pggns\MidocoApi\Order\StructType\CrmPrintRecipientDTO
     */
    public function setRecipientId(?int $recipientId = null): self
    {
        // validation for constraint: int
        if (!is_null($recipientId) && !(is_int($recipientId) || ctype_digit($recipientId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recipientId, true), gettype($recipientId)), __LINE__);
        }
        $this->recipientId = $recipientId;
        
        return $this;
    }
}
