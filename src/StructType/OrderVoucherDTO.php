<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderVoucherDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderVoucherDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The client
     * @var string|null
     */
    protected ?string $client = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The payDate
     * @var string|null
     */
    protected ?string $payDate = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The usedDate
     * @var string|null
     */
    protected ?string $usedDate = null;
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * Constructor method for OrderVoucherDTO
     * @uses OrderVoucherDTO::setAmount()
     * @uses OrderVoucherDTO::setClient()
     * @uses OrderVoucherDTO::setCode()
     * @uses OrderVoucherDTO::setCreationDate()
     * @uses OrderVoucherDTO::setCreationUser()
     * @uses OrderVoucherDTO::setExtId()
     * @uses OrderVoucherDTO::setItemId()
     * @uses OrderVoucherDTO::setModifyDate()
     * @uses OrderVoucherDTO::setModifyUser()
     * @uses OrderVoucherDTO::setOrderId()
     * @uses OrderVoucherDTO::setPayDate()
     * @uses OrderVoucherDTO::setType()
     * @uses OrderVoucherDTO::setUsedDate()
     * @uses OrderVoucherDTO::setVoucherId()
     * @param float $amount
     * @param string $client
     * @param string $code
     * @param string $creationDate
     * @param int $creationUser
     * @param string $extId
     * @param int $itemId
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $orderId
     * @param string $payDate
     * @param string $type
     * @param string $usedDate
     * @param int $voucherId
     */
    public function __construct(?float $amount = null, ?string $client = null, ?string $code = null, ?string $creationDate = null, ?int $creationUser = null, ?string $extId = null, ?int $itemId = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $orderId = null, ?string $payDate = null, ?string $type = null, ?string $usedDate = null, ?int $voucherId = null)
    {
        $this
            ->setAmount($amount)
            ->setClient($client)
            ->setCode($code)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setExtId($extId)
            ->setItemId($itemId)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setPayDate($payDate)
            ->setType($type)
            ->setUsedDate($usedDate)
            ->setVoucherId($voucherId);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get client value
     * @return string|null
     */
    public function getClient(): ?string
    {
        return $this->client;
    }
    /**
     * Set client value
     * @param string $client
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setClient(?string $client = null): self
    {
        // validation for constraint: string
        if (!is_null($client) && !is_string($client)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($client, true), gettype($client)), __LINE__);
        }
        $this->client = $client;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
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
     * Get payDate value
     * @return string|null
     */
    public function getPayDate(): ?string
    {
        return $this->payDate;
    }
    /**
     * Set payDate value
     * @param string $payDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setPayDate(?string $payDate = null): self
    {
        // validation for constraint: string
        if (!is_null($payDate) && !is_string($payDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payDate, true), gettype($payDate)), __LINE__);
        }
        $this->payDate = $payDate;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get usedDate value
     * @return string|null
     */
    public function getUsedDate(): ?string
    {
        return $this->usedDate;
    }
    /**
     * Set usedDate value
     * @param string $usedDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
     */
    public function setUsedDate(?string $usedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($usedDate) && !is_string($usedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usedDate, true), gettype($usedDate)), __LINE__);
        }
        $this->usedDate = $usedDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderVoucherDTO
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
}
