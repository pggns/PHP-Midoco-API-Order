<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVoucher4Kickback StructType
 * @subpackage Structs
 */
class MidocoVoucher4Kickback extends AbstractStructBase
{
    /**
     * The voucherCode
     * @var string|null
     */
    protected ?string $voucherCode = null;
    /**
     * The redeemedDate
     * @var string|null
     */
    protected ?string $redeemedDate = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The opNumber
     * @var string|null
     */
    protected ?string $opNumber = null;
    /**
     * The voucherAmount
     * @var float|null
     */
    protected ?float $voucherAmount = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for MidocoVoucher4Kickback
     * @uses MidocoVoucher4Kickback::setVoucherCode()
     * @uses MidocoVoucher4Kickback::setRedeemedDate()
     * @uses MidocoVoucher4Kickback::setStartTravel()
     * @uses MidocoVoucher4Kickback::setOpNumber()
     * @uses MidocoVoucher4Kickback::setVoucherAmount()
     * @uses MidocoVoucher4Kickback::setStatus()
     * @param string $voucherCode
     * @param string $redeemedDate
     * @param string $startTravel
     * @param string $opNumber
     * @param float $voucherAmount
     * @param string $status
     */
    public function __construct(?string $voucherCode = null, ?string $redeemedDate = null, ?string $startTravel = null, ?string $opNumber = null, ?float $voucherAmount = null, ?string $status = null)
    {
        $this
            ->setVoucherCode($voucherCode)
            ->setRedeemedDate($redeemedDate)
            ->setStartTravel($startTravel)
            ->setOpNumber($opNumber)
            ->setVoucherAmount($voucherAmount)
            ->setStatus($status);
    }
    /**
     * Get voucherCode value
     * @return string|null
     */
    public function getVoucherCode(): ?string
    {
        return $this->voucherCode;
    }
    /**
     * Set voucherCode value
     * @param string $voucherCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback
     */
    public function setVoucherCode(?string $voucherCode = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherCode) && !is_string($voucherCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherCode, true), gettype($voucherCode)), __LINE__);
        }
        $this->voucherCode = $voucherCode;
        
        return $this;
    }
    /**
     * Get redeemedDate value
     * @return string|null
     */
    public function getRedeemedDate(): ?string
    {
        return $this->redeemedDate;
    }
    /**
     * Set redeemedDate value
     * @param string $redeemedDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback
     */
    public function setRedeemedDate(?string $redeemedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($redeemedDate) && !is_string($redeemedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($redeemedDate, true), gettype($redeemedDate)), __LINE__);
        }
        $this->redeemedDate = $redeemedDate;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get opNumber value
     * @return string|null
     */
    public function getOpNumber(): ?string
    {
        return $this->opNumber;
    }
    /**
     * Set opNumber value
     * @param string $opNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback
     */
    public function setOpNumber(?string $opNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($opNumber) && !is_string($opNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opNumber, true), gettype($opNumber)), __LINE__);
        }
        $this->opNumber = $opNumber;
        
        return $this;
    }
    /**
     * Get voucherAmount value
     * @return float|null
     */
    public function getVoucherAmount(): ?float
    {
        return $this->voucherAmount;
    }
    /**
     * Set voucherAmount value
     * @param float $voucherAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback
     */
    public function setVoucherAmount(?float $voucherAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherAmount) && !(is_float($voucherAmount) || is_numeric($voucherAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherAmount, true), gettype($voucherAmount)), __LINE__);
        }
        $this->voucherAmount = $voucherAmount;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher4Kickback
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
