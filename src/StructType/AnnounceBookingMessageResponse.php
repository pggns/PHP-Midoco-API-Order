<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceBookingMessageResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: announceBookingMessage --- a method for all external reservation systems to inform midoco about a booking created or changed for a specific agency. MidocoBookingMessage has the ability to store various types of bookings and combine
 * them, building packages aso. The data is stored into the order database in appropriate tables and for each booking (or order, in case there is one) a workflow is invoked to process the tasks around a booking (such as generation of billing-positions
 * or tasks for the user to print other documents)
 * @subpackage Structs
 */
class AnnounceBookingMessageResponse extends AbstractStructBase
{
    /**
     * The OrderId
     * Meta information extracted from the WSDL
     * - documentation: Order id of changed/created order (for internal reference)
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderId = null;
    /**
     * The OrderNo
     * Meta information extracted from the WSDL
     * - documentation: Order no created/changed (for external reference)
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderNo = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - documentation: unitName of created/changed order
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - documentation: An error message or the reason the import was ignored - only filled in test systems.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for AnnounceBookingMessageResponse
     * @uses AnnounceBookingMessageResponse::setOrderId()
     * @uses AnnounceBookingMessageResponse::setOrderNo()
     * @uses AnnounceBookingMessageResponse::setUnitName()
     * @uses AnnounceBookingMessageResponse::setMessage()
     * @param int $orderId
     * @param int $orderNo
     * @param string $unitName
     * @param string $message
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $unitName = null, ?string $message = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setUnitName($unitName)
            ->setMessage($message);
    }
    /**
     * Get OrderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->OrderId;
    }
    /**
     * Set OrderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageResponse
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->OrderId = $orderId;
        
        return $this;
    }
    /**
     * Get OrderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->OrderNo;
    }
    /**
     * Set OrderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageResponse
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->OrderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageResponse
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
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
