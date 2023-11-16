<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceExternalPaymentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: midoco-36582 /AnnounceExternalPayment - If a payment could not be made during the onlinebooking and the client will get a new link for the payment, possibly with a higher price, not the whole ABM including the part "external payment"
 * should be sent. Its a new service, that allows to send the payment separately.
 * @subpackage Structs
 */
class AnnounceExternalPaymentRequest extends AbstractStructBase
{
    /**
     * The ExternalPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: mbm:ExternalPayment
     * @var \Pggns\MidocoApi\Order\StructType\ExternalPayment[]
     */
    protected array $ExternalPayment = [];
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for AnnounceExternalPaymentRequest
     * @uses AnnounceExternalPaymentRequest::setExternalPayment()
     * @uses AnnounceExternalPaymentRequest::setOrderId()
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment[] $externalPayment
     * @param int $orderId
     */
    public function __construct(array $externalPayment = [], ?int $orderId = null)
    {
        $this
            ->setExternalPayment($externalPayment)
            ->setOrderId($orderId);
    }
    /**
     * Get ExternalPayment value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment[]
     */
    public function getExternalPayment(): array
    {
        return $this->ExternalPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentForArrayConstraintsFromSetExternalPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceExternalPaymentRequestExternalPaymentItem) {
            // validation for constraint: itemType
            if (!$announceExternalPaymentRequestExternalPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalPayment) {
                $invalidValues[] = is_object($announceExternalPaymentRequestExternalPaymentItem) ? get_class($announceExternalPaymentRequestExternalPaymentItem) : sprintf('%s(%s)', gettype($announceExternalPaymentRequestExternalPaymentItem), var_export($announceExternalPaymentRequestExternalPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment[] $externalPayment
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentRequest
     */
    public function setExternalPayment(array $externalPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentArrayErrorMessage = self::validateExternalPaymentForArrayConstraintsFromSetExternalPayment($externalPayment))) {
            throw new InvalidArgumentException($externalPaymentArrayErrorMessage, __LINE__);
        }
        $this->ExternalPayment = $externalPayment;
        
        return $this;
    }
    /**
     * Add item to ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentRequest
     */
    public function addToExternalPayment(\Pggns\MidocoApi\Order\StructType\ExternalPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalPayment) {
            throw new InvalidArgumentException(sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPayment[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentRequest
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
}
