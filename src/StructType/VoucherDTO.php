<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoucherDTO extends AbstractStructBase
{
    /**
     * The created
     * @var string|null
     */
    protected ?string $created = null;
    /**
     * The creator
     * @var int|null
     */
    protected ?int $creator = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The expirationModifyComment
     * @var string|null
     */
    protected ?string $expirationModifyComment = null;
    /**
     * The expirationModifyDate
     * @var string|null
     */
    protected ?string $expirationModifyDate = null;
    /**
     * The expirationModifyUser
     * @var int|null
     */
    protected ?int $expirationModifyUser = null;
    /**
     * The expiryDate
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The originalValue
     * @var float|null
     */
    protected ?float $originalValue = null;
    /**
     * The receiver
     * @var string|null
     */
    protected ?string $receiver = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The sender
     * @var string|null
     */
    protected ?string $sender = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The voucherTypeId
     * @var string|null
     */
    protected ?string $voucherTypeId = null;
    /**
     * The voucherValue
     * @var float|null
     */
    protected ?float $voucherValue = null;
    /**
     * Constructor method for VoucherDTO
     * @uses VoucherDTO::setCreated()
     * @uses VoucherDTO::setCreator()
     * @uses VoucherDTO::setDocumentId()
     * @uses VoucherDTO::setExpirationModifyComment()
     * @uses VoucherDTO::setExpirationModifyDate()
     * @uses VoucherDTO::setExpirationModifyUser()
     * @uses VoucherDTO::setExpiryDate()
     * @uses VoucherDTO::setIsStorno()
     * @uses VoucherDTO::setOriginalValue()
     * @uses VoucherDTO::setReceiver()
     * @uses VoucherDTO::setSecurityCode()
     * @uses VoucherDTO::setSellItemId()
     * @uses VoucherDTO::setSender()
     * @uses VoucherDTO::setUnitName()
     * @uses VoucherDTO::setVatCode()
     * @uses VoucherDTO::setVoucherId()
     * @uses VoucherDTO::setVoucherNo()
     * @uses VoucherDTO::setVoucherTypeId()
     * @uses VoucherDTO::setVoucherValue()
     * @param string $created
     * @param int $creator
     * @param int $documentId
     * @param string $expirationModifyComment
     * @param string $expirationModifyDate
     * @param int $expirationModifyUser
     * @param string $expiryDate
     * @param bool $isStorno
     * @param float $originalValue
     * @param string $receiver
     * @param string $securityCode
     * @param int $sellItemId
     * @param string $sender
     * @param string $unitName
     * @param string $vatCode
     * @param int $voucherId
     * @param string $voucherNo
     * @param string $voucherTypeId
     * @param float $voucherValue
     */
    public function __construct(?string $created = null, ?int $creator = null, ?int $documentId = null, ?string $expirationModifyComment = null, ?string $expirationModifyDate = null, ?int $expirationModifyUser = null, ?string $expiryDate = null, ?bool $isStorno = null, ?float $originalValue = null, ?string $receiver = null, ?string $securityCode = null, ?int $sellItemId = null, ?string $sender = null, ?string $unitName = null, ?string $vatCode = null, ?int $voucherId = null, ?string $voucherNo = null, ?string $voucherTypeId = null, ?float $voucherValue = null)
    {
        $this
            ->setCreated($created)
            ->setCreator($creator)
            ->setDocumentId($documentId)
            ->setExpirationModifyComment($expirationModifyComment)
            ->setExpirationModifyDate($expirationModifyDate)
            ->setExpirationModifyUser($expirationModifyUser)
            ->setExpiryDate($expiryDate)
            ->setIsStorno($isStorno)
            ->setOriginalValue($originalValue)
            ->setReceiver($receiver)
            ->setSecurityCode($securityCode)
            ->setSellItemId($sellItemId)
            ->setSender($sender)
            ->setUnitName($unitName)
            ->setVatCode($vatCode)
            ->setVoucherId($voucherId)
            ->setVoucherNo($voucherNo)
            ->setVoucherTypeId($voucherTypeId)
            ->setVoucherValue($voucherValue);
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setCreated(?string $created = null): self
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($created, true), gettype($created)), __LINE__);
        }
        $this->created = $created;
        
        return $this;
    }
    /**
     * Get creator value
     * @return int|null
     */
    public function getCreator(): ?int
    {
        return $this->creator;
    }
    /**
     * Set creator value
     * @param int $creator
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setCreator(?int $creator = null): self
    {
        // validation for constraint: int
        if (!is_null($creator) && !(is_int($creator) || ctype_digit($creator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creator, true), gettype($creator)), __LINE__);
        }
        $this->creator = $creator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
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
     * Get expirationModifyComment value
     * @return string|null
     */
    public function getExpirationModifyComment(): ?string
    {
        return $this->expirationModifyComment;
    }
    /**
     * Set expirationModifyComment value
     * @param string $expirationModifyComment
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setExpirationModifyComment(?string $expirationModifyComment = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationModifyComment) && !is_string($expirationModifyComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationModifyComment, true), gettype($expirationModifyComment)), __LINE__);
        }
        $this->expirationModifyComment = $expirationModifyComment;
        
        return $this;
    }
    /**
     * Get expirationModifyDate value
     * @return string|null
     */
    public function getExpirationModifyDate(): ?string
    {
        return $this->expirationModifyDate;
    }
    /**
     * Set expirationModifyDate value
     * @param string $expirationModifyDate
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setExpirationModifyDate(?string $expirationModifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationModifyDate) && !is_string($expirationModifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationModifyDate, true), gettype($expirationModifyDate)), __LINE__);
        }
        $this->expirationModifyDate = $expirationModifyDate;
        
        return $this;
    }
    /**
     * Get expirationModifyUser value
     * @return int|null
     */
    public function getExpirationModifyUser(): ?int
    {
        return $this->expirationModifyUser;
    }
    /**
     * Set expirationModifyUser value
     * @param int $expirationModifyUser
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setExpirationModifyUser(?int $expirationModifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($expirationModifyUser) && !(is_int($expirationModifyUser) || ctype_digit($expirationModifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expirationModifyUser, true), gettype($expirationModifyUser)), __LINE__);
        }
        $this->expirationModifyUser = $expirationModifyUser;
        
        return $this;
    }
    /**
     * Get expiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }
    /**
     * Set expiryDate value
     * @param string $expiryDate
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->expiryDate = $expiryDate;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get originalValue value
     * @return float|null
     */
    public function getOriginalValue(): ?float
    {
        return $this->originalValue;
    }
    /**
     * Set originalValue value
     * @param float $originalValue
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setOriginalValue(?float $originalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalValue) && !(is_float($originalValue) || is_numeric($originalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalValue, true), gettype($originalValue)), __LINE__);
        }
        $this->originalValue = $originalValue;
        
        return $this;
    }
    /**
     * Get receiver value
     * @return string|null
     */
    public function getReceiver(): ?string
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param string $receiver
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setReceiver(?string $receiver = null): self
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver, true), gettype($receiver)), __LINE__);
        }
        $this->receiver = $receiver;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender(): ?string
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setSender(?string $sender = null): self
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sender, true), gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get voucherId value
     * @return int|null
     */
    public function getVoucherId(): ?int
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param int $voucherId
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setVoucherId(?int $voucherId = null): self
    {
        // validation for constraint: int
        if (!is_null($voucherId) && !(is_int($voucherId) || ctype_digit($voucherId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
        return $this;
    }
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
    /**
     * Get voucherTypeId value
     * @return string|null
     */
    public function getVoucherTypeId(): ?string
    {
        return $this->voucherTypeId;
    }
    /**
     * Set voucherTypeId value
     * @param string $voucherTypeId
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setVoucherTypeId(?string $voucherTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherTypeId) && !is_string($voucherTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherTypeId, true), gettype($voucherTypeId)), __LINE__);
        }
        $this->voucherTypeId = $voucherTypeId;
        
        return $this;
    }
    /**
     * Get voucherValue value
     * @return float|null
     */
    public function getVoucherValue(): ?float
    {
        return $this->voucherValue;
    }
    /**
     * Set voucherValue value
     * @param float $voucherValue
     * @return \Pggns\MidocoApi\Order\StructType\VoucherDTO
     */
    public function setVoucherValue(?float $voucherValue = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherValue) && !(is_float($voucherValue) || is_numeric($voucherValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherValue, true), gettype($voucherValue)), __LINE__);
        }
        $this->voucherValue = $voucherValue;
        
        return $this;
    }
}
