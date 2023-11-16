<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVoucher StructType
 * @subpackage Structs
 */
class MidocoVoucher extends VoucherDTO
{
    /**
     * The MidocoVoucherPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVoucherPayment
     * @var \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[]
     */
    protected array $MidocoVoucherPayment = [];
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The allowPartialUse
     * Meta information extracted from the WSDL
     * - documentation: if this voucher is partially redeemable. Usually determine by voucherType (in case of Midocodefaultvoucher), but some external apis have different voucher settings within the voucherType.
     * @var bool|null
     */
    protected ?bool $allowPartialUse = null;
    /**
     * The forCustomer
     * Meta information extracted from the WSDL
     * - documentation: deprecated - use attribute receiver
     * @var string|null
     */
    protected ?string $forCustomer = null;
    /**
     * The fromCustomer
     * Meta information extracted from the WSDL
     * - documentation: deprecated - use attribute sender
     * @var string|null
     */
    protected ?string $fromCustomer = null;
    /**
     * Constructor method for MidocoVoucher
     * @uses MidocoVoucher::setMidocoVoucherPayment()
     * @uses MidocoVoucher::setOrderNo()
     * @uses MidocoVoucher::setAllowPartialUse()
     * @uses MidocoVoucher::setForCustomer()
     * @uses MidocoVoucher::setFromCustomer()
     * @param \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[] $midocoVoucherPayment
     * @param int $orderNo
     * @param bool $allowPartialUse
     * @param string $forCustomer
     * @param string $fromCustomer
     */
    public function __construct(array $midocoVoucherPayment = [], ?int $orderNo = null, ?bool $allowPartialUse = null, ?string $forCustomer = null, ?string $fromCustomer = null)
    {
        $this
            ->setMidocoVoucherPayment($midocoVoucherPayment)
            ->setOrderNo($orderNo)
            ->setAllowPartialUse($allowPartialUse)
            ->setForCustomer($forCustomer)
            ->setFromCustomer($fromCustomer);
    }
    /**
     * Get MidocoVoucherPayment value
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[]
     */
    public function getMidocoVoucherPayment(): array
    {
        return $this->MidocoVoucherPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVoucherPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucherPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucherPaymentForArrayConstraintsFromSetMidocoVoucherPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoVoucherMidocoVoucherPaymentItem) {
            // validation for constraint: itemType
            if (!$midocoVoucherMidocoVoucherPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO) {
                $invalidValues[] = is_object($midocoVoucherMidocoVoucherPaymentItem) ? get_class($midocoVoucherMidocoVoucherPaymentItem) : sprintf('%s(%s)', gettype($midocoVoucherMidocoVoucherPaymentItem), var_export($midocoVoucherMidocoVoucherPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVoucherPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVoucherPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[] $midocoVoucherPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher
     */
    public function setMidocoVoucherPayment(array $midocoVoucherPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucherPaymentArrayErrorMessage = self::validateMidocoVoucherPaymentForArrayConstraintsFromSetMidocoVoucherPayment($midocoVoucherPayment))) {
            throw new InvalidArgumentException($midocoVoucherPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoVoucherPayment = $midocoVoucherPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucherPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher
     */
    public function addToMidocoVoucherPayment(\Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucherPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVoucherPayment[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher
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
     * Get allowPartialUse value
     * @return bool|null
     */
    public function getAllowPartialUse(): ?bool
    {
        return $this->allowPartialUse;
    }
    /**
     * Set allowPartialUse value
     * @param bool $allowPartialUse
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher
     */
    public function setAllowPartialUse(?bool $allowPartialUse = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPartialUse) && !is_bool($allowPartialUse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPartialUse, true), gettype($allowPartialUse)), __LINE__);
        }
        $this->allowPartialUse = $allowPartialUse;
        
        return $this;
    }
    /**
     * Get forCustomer value
     * @return string|null
     */
    public function getForCustomer(): ?string
    {
        return $this->forCustomer;
    }
    /**
     * Set forCustomer value
     * @param string $forCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher
     */
    public function setForCustomer(?string $forCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($forCustomer) && !is_string($forCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forCustomer, true), gettype($forCustomer)), __LINE__);
        }
        $this->forCustomer = $forCustomer;
        
        return $this;
    }
    /**
     * Get fromCustomer value
     * @return string|null
     */
    public function getFromCustomer(): ?string
    {
        return $this->fromCustomer;
    }
    /**
     * Set fromCustomer value
     * @param string $fromCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher
     */
    public function setFromCustomer(?string $fromCustomer = null): self
    {
        // validation for constraint: string
        if (!is_null($fromCustomer) && !is_string($fromCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCustomer, true), gettype($fromCustomer)), __LINE__);
        }
        $this->fromCustomer = $fromCustomer;
        
        return $this;
    }
}
