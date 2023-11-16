<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnouncePaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: search order by orderId or orderNo or by supplierId, bookingId combination dontImportExistingPayments='true' : dont imports existing payments, if paymentText equals an existing payment for the order
 * @subpackage Structs
 */
class AnnouncePaymentRequest extends AbstractStructBase
{
    /**
     * The AnnounceOrderPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: AnnounceOrderPayment
     * @var \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment[]
     */
    protected array $AnnounceOrderPayment = [];
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The dontImportExistingPayments
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $dontImportExistingPayments = null;
    /**
     * Constructor method for AnnouncePaymentRequest
     * @uses AnnouncePaymentRequest::setAnnounceOrderPayment()
     * @uses AnnouncePaymentRequest::setOrderId()
     * @uses AnnouncePaymentRequest::setOrderNo()
     * @uses AnnouncePaymentRequest::setSupplierId()
     * @uses AnnouncePaymentRequest::setBookingId()
     * @uses AnnouncePaymentRequest::setDontImportExistingPayments()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment[] $announceOrderPayment
     * @param int $orderId
     * @param int $orderNo
     * @param string $supplierId
     * @param string $bookingId
     * @param bool $dontImportExistingPayments
     */
    public function __construct(array $announceOrderPayment = [], ?int $orderId = null, ?int $orderNo = null, ?string $supplierId = null, ?string $bookingId = null, ?bool $dontImportExistingPayments = false)
    {
        $this
            ->setAnnounceOrderPayment($announceOrderPayment)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setDontImportExistingPayments($dontImportExistingPayments);
    }
    /**
     * Get AnnounceOrderPayment value
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment[]
     */
    public function getAnnounceOrderPayment(): array
    {
        return $this->AnnounceOrderPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setAnnounceOrderPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnnounceOrderPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnnounceOrderPaymentForArrayConstraintsFromSetAnnounceOrderPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $announcePaymentRequestAnnounceOrderPaymentItem) {
            // validation for constraint: itemType
            if (!$announcePaymentRequestAnnounceOrderPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment) {
                $invalidValues[] = is_object($announcePaymentRequestAnnounceOrderPaymentItem) ? get_class($announcePaymentRequestAnnounceOrderPaymentItem) : sprintf('%s(%s)', gettype($announcePaymentRequestAnnounceOrderPaymentItem), var_export($announcePaymentRequestAnnounceOrderPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AnnounceOrderPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AnnounceOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment[] $announceOrderPayment
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
     */
    public function setAnnounceOrderPayment(array $announceOrderPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($announceOrderPaymentArrayErrorMessage = self::validateAnnounceOrderPaymentForArrayConstraintsFromSetAnnounceOrderPayment($announceOrderPayment))) {
            throw new InvalidArgumentException($announceOrderPaymentArrayErrorMessage, __LINE__);
        }
        $this->AnnounceOrderPayment = $announceOrderPayment;
        
        return $this;
    }
    /**
     * Add item to AnnounceOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
     */
    public function addToAnnounceOrderPayment(\Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment) {
            throw new InvalidArgumentException(sprintf('The AnnounceOrderPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\AnnounceOrderPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AnnounceOrderPayment[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
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
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get dontImportExistingPayments value
     * @return bool|null
     */
    public function getDontImportExistingPayments(): ?bool
    {
        return $this->dontImportExistingPayments;
    }
    /**
     * Set dontImportExistingPayments value
     * @param bool $dontImportExistingPayments
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest
     */
    public function setDontImportExistingPayments(?bool $dontImportExistingPayments = false): self
    {
        // validation for constraint: boolean
        if (!is_null($dontImportExistingPayments) && !is_bool($dontImportExistingPayments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dontImportExistingPayments, true), gettype($dontImportExistingPayments)), __LINE__);
        }
        $this->dontImportExistingPayments = $dontImportExistingPayments;
        
        return $this;
    }
}
