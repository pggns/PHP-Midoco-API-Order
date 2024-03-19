<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherPaymentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoucherPaymentDTO extends AbstractStructBase
{
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The redeemAmount
     * @var float|null
     */
    protected ?float $redeemAmount = null;
    /**
     * The redeemDate
     * @var string|null
     */
    protected ?string $redeemDate = null;
    /**
     * The redeemUser
     * @var int|null
     */
    protected ?int $redeemUser = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The voucherId
     * @var int|null
     */
    protected ?int $voucherId = null;
    /**
     * Constructor method for VoucherPaymentDTO
     * @uses VoucherPaymentDTO::setDocumentNo()
     * @uses VoucherPaymentDTO::setOrderNo()
     * @uses VoucherPaymentDTO::setPosition()
     * @uses VoucherPaymentDTO::setRedeemAmount()
     * @uses VoucherPaymentDTO::setRedeemDate()
     * @uses VoucherPaymentDTO::setRedeemUser()
     * @uses VoucherPaymentDTO::setUnitName()
     * @uses VoucherPaymentDTO::setVoucherId()
     * @param int $documentNo
     * @param int $orderNo
     * @param int $position
     * @param float $redeemAmount
     * @param string $redeemDate
     * @param int $redeemUser
     * @param string $unitName
     * @param int $voucherId
     */
    public function __construct(?int $documentNo = null, ?int $orderNo = null, ?int $position = null, ?float $redeemAmount = null, ?string $redeemDate = null, ?int $redeemUser = null, ?string $unitName = null, ?int $voucherId = null)
    {
        $this
            ->setDocumentNo($documentNo)
            ->setOrderNo($orderNo)
            ->setPosition($position)
            ->setRedeemAmount($redeemAmount)
            ->setRedeemDate($redeemDate)
            ->setRedeemUser($redeemUser)
            ->setUnitName($unitName)
            ->setVoucherId($voucherId);
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get redeemAmount value
     * @return float|null
     */
    public function getRedeemAmount(): ?float
    {
        return $this->redeemAmount;
    }
    /**
     * Set redeemAmount value
     * @param float $redeemAmount
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
     */
    public function setRedeemAmount(?float $redeemAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($redeemAmount) && !(is_float($redeemAmount) || is_numeric($redeemAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($redeemAmount, true), gettype($redeemAmount)), __LINE__);
        }
        $this->redeemAmount = $redeemAmount;
        
        return $this;
    }
    /**
     * Get redeemDate value
     * @return string|null
     */
    public function getRedeemDate(): ?string
    {
        return $this->redeemDate;
    }
    /**
     * Set redeemDate value
     * @param string $redeemDate
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
     */
    public function setRedeemDate(?string $redeemDate = null): self
    {
        // validation for constraint: string
        if (!is_null($redeemDate) && !is_string($redeemDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redeemDate, true), gettype($redeemDate)), __LINE__);
        }
        $this->redeemDate = $redeemDate;
        
        return $this;
    }
    /**
     * Get redeemUser value
     * @return int|null
     */
    public function getRedeemUser(): ?int
    {
        return $this->redeemUser;
    }
    /**
     * Set redeemUser value
     * @param int $redeemUser
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
     */
    public function setRedeemUser(?int $redeemUser = null): self
    {
        // validation for constraint: int
        if (!is_null($redeemUser) && !(is_int($redeemUser) || ctype_digit($redeemUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($redeemUser, true), gettype($redeemUser)), __LINE__);
        }
        $this->redeemUser = $redeemUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO
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
