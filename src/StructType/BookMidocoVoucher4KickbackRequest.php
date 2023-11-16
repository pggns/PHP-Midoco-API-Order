<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookMidocoVoucher4KickbackRequest StructType
 * @subpackage Structs
 */
class BookMidocoVoucher4KickbackRequest extends AbstractStructBase
{
    /**
     * The voucherCode
     * @var string|null
     */
    protected ?string $voucherCode = null;
    /**
     * The operationNumber
     * @var string|null
     */
    protected ?string $operationNumber = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for BookMidocoVoucher4KickbackRequest
     * @uses BookMidocoVoucher4KickbackRequest::setVoucherCode()
     * @uses BookMidocoVoucher4KickbackRequest::setOperationNumber()
     * @uses BookMidocoVoucher4KickbackRequest::setSupplierId()
     * @uses BookMidocoVoucher4KickbackRequest::setAmount()
     * @param string $voucherCode
     * @param string $operationNumber
     * @param string $supplierId
     * @param float $amount
     */
    public function __construct(?string $voucherCode = null, ?string $operationNumber = null, ?string $supplierId = null, ?float $amount = null)
    {
        $this
            ->setVoucherCode($voucherCode)
            ->setOperationNumber($operationNumber)
            ->setSupplierId($supplierId)
            ->setAmount($amount);
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
     * @return \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest
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
     * Get operationNumber value
     * @return string|null
     */
    public function getOperationNumber(): ?string
    {
        return $this->operationNumber;
    }
    /**
     * Set operationNumber value
     * @param string $operationNumber
     * @return \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest
     */
    public function setOperationNumber(?string $operationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($operationNumber) && !is_string($operationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operationNumber, true), gettype($operationNumber)), __LINE__);
        }
        $this->operationNumber = $operationNumber;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest
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
}
