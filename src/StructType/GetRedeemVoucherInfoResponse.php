<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRedeemVoucherInfoResponse StructType
 * @subpackage Structs
 */
class GetRedeemVoucherInfoResponse extends AbstractStructBase
{
    /**
     * The soldBy
     * @var int|null
     */
    protected ?int $soldBy = null;
    /**
     * The soldAt
     * @var string|null
     */
    protected ?string $soldAt = null;
    /**
     * The soldValue
     * @var float|null
     */
    protected ?float $soldValue = null;
    /**
     * The redeemBy
     * @var int|null
     */
    protected ?int $redeemBy = null;
    /**
     * The redeemAt
     * @var string|null
     */
    protected ?string $redeemAt = null;
    /**
     * The redeemValue
     * @var float|null
     */
    protected ?float $redeemValue = null;
    /**
     * The remainingValue
     * @var float|null
     */
    protected ?float $remainingValue = null;
    /**
     * The expiryDate
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * Constructor method for GetRedeemVoucherInfoResponse
     * @uses GetRedeemVoucherInfoResponse::setSoldBy()
     * @uses GetRedeemVoucherInfoResponse::setSoldAt()
     * @uses GetRedeemVoucherInfoResponse::setSoldValue()
     * @uses GetRedeemVoucherInfoResponse::setRedeemBy()
     * @uses GetRedeemVoucherInfoResponse::setRedeemAt()
     * @uses GetRedeemVoucherInfoResponse::setRedeemValue()
     * @uses GetRedeemVoucherInfoResponse::setRemainingValue()
     * @uses GetRedeemVoucherInfoResponse::setExpiryDate()
     * @param int $soldBy
     * @param string $soldAt
     * @param float $soldValue
     * @param int $redeemBy
     * @param string $redeemAt
     * @param float $redeemValue
     * @param float $remainingValue
     * @param string $expiryDate
     */
    public function __construct(?int $soldBy = null, ?string $soldAt = null, ?float $soldValue = null, ?int $redeemBy = null, ?string $redeemAt = null, ?float $redeemValue = null, ?float $remainingValue = null, ?string $expiryDate = null)
    {
        $this
            ->setSoldBy($soldBy)
            ->setSoldAt($soldAt)
            ->setSoldValue($soldValue)
            ->setRedeemBy($redeemBy)
            ->setRedeemAt($redeemAt)
            ->setRedeemValue($redeemValue)
            ->setRemainingValue($remainingValue)
            ->setExpiryDate($expiryDate);
    }
    /**
     * Get soldBy value
     * @return int|null
     */
    public function getSoldBy(): ?int
    {
        return $this->soldBy;
    }
    /**
     * Set soldBy value
     * @param int $soldBy
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setSoldBy(?int $soldBy = null): self
    {
        // validation for constraint: int
        if (!is_null($soldBy) && !(is_int($soldBy) || ctype_digit($soldBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($soldBy, true), gettype($soldBy)), __LINE__);
        }
        $this->soldBy = $soldBy;
        
        return $this;
    }
    /**
     * Get soldAt value
     * @return string|null
     */
    public function getSoldAt(): ?string
    {
        return $this->soldAt;
    }
    /**
     * Set soldAt value
     * @param string $soldAt
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setSoldAt(?string $soldAt = null): self
    {
        // validation for constraint: string
        if (!is_null($soldAt) && !is_string($soldAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soldAt, true), gettype($soldAt)), __LINE__);
        }
        $this->soldAt = $soldAt;
        
        return $this;
    }
    /**
     * Get soldValue value
     * @return float|null
     */
    public function getSoldValue(): ?float
    {
        return $this->soldValue;
    }
    /**
     * Set soldValue value
     * @param float $soldValue
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setSoldValue(?float $soldValue = null): self
    {
        // validation for constraint: float
        if (!is_null($soldValue) && !(is_float($soldValue) || is_numeric($soldValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($soldValue, true), gettype($soldValue)), __LINE__);
        }
        $this->soldValue = $soldValue;
        
        return $this;
    }
    /**
     * Get redeemBy value
     * @return int|null
     */
    public function getRedeemBy(): ?int
    {
        return $this->redeemBy;
    }
    /**
     * Set redeemBy value
     * @param int $redeemBy
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setRedeemBy(?int $redeemBy = null): self
    {
        // validation for constraint: int
        if (!is_null($redeemBy) && !(is_int($redeemBy) || ctype_digit($redeemBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($redeemBy, true), gettype($redeemBy)), __LINE__);
        }
        $this->redeemBy = $redeemBy;
        
        return $this;
    }
    /**
     * Get redeemAt value
     * @return string|null
     */
    public function getRedeemAt(): ?string
    {
        return $this->redeemAt;
    }
    /**
     * Set redeemAt value
     * @param string $redeemAt
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setRedeemAt(?string $redeemAt = null): self
    {
        // validation for constraint: string
        if (!is_null($redeemAt) && !is_string($redeemAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redeemAt, true), gettype($redeemAt)), __LINE__);
        }
        $this->redeemAt = $redeemAt;
        
        return $this;
    }
    /**
     * Get redeemValue value
     * @return float|null
     */
    public function getRedeemValue(): ?float
    {
        return $this->redeemValue;
    }
    /**
     * Set redeemValue value
     * @param float $redeemValue
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setRedeemValue(?float $redeemValue = null): self
    {
        // validation for constraint: float
        if (!is_null($redeemValue) && !(is_float($redeemValue) || is_numeric($redeemValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($redeemValue, true), gettype($redeemValue)), __LINE__);
        }
        $this->redeemValue = $redeemValue;
        
        return $this;
    }
    /**
     * Get remainingValue value
     * @return float|null
     */
    public function getRemainingValue(): ?float
    {
        return $this->remainingValue;
    }
    /**
     * Set remainingValue value
     * @param float $remainingValue
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
     */
    public function setRemainingValue(?float $remainingValue = null): self
    {
        // validation for constraint: float
        if (!is_null($remainingValue) && !(is_float($remainingValue) || is_numeric($remainingValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($remainingValue, true), gettype($remainingValue)), __LINE__);
        }
        $this->remainingValue = $remainingValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetRedeemVoucherInfoResponse
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
}
