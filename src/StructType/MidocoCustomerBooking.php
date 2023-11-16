<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerBooking StructType
 * @subpackage Structs
 */
class MidocoCustomerBooking extends AbstractStructBase
{
    /**
     * The PrintTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $PrintTypeId = [];
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
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
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
     * The departureDescription
     * @var string|null
     */
    protected ?string $departureDescription = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The toBePaid
     * Meta information extracted from the WSDL
     * - default: 0
     * @var float|null
     */
    protected ?float $toBePaid = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The airportPayment
     * @var bool|null
     */
    protected ?bool $airportPayment = null;
    /**
     * Constructor method for MidocoCustomerBooking
     * @uses MidocoCustomerBooking::setPrintTypeId()
     * @uses MidocoCustomerBooking::setOrderId()
     * @uses MidocoCustomerBooking::setOrderNo()
     * @uses MidocoCustomerBooking::setItemId()
     * @uses MidocoCustomerBooking::setName()
     * @uses MidocoCustomerBooking::setForename()
     * @uses MidocoCustomerBooking::setSupplierId()
     * @uses MidocoCustomerBooking::setBookingId()
     * @uses MidocoCustomerBooking::setDepartureDescription()
     * @uses MidocoCustomerBooking::setTravelDate()
     * @uses MidocoCustomerBooking::setToBePaid()
     * @uses MidocoCustomerBooking::setDepartureTime()
     * @uses MidocoCustomerBooking::setDocumentType()
     * @uses MidocoCustomerBooking::setPaymentType()
     * @uses MidocoCustomerBooking::setAirportPayment()
     * @param string[] $printTypeId
     * @param int $orderId
     * @param int $orderNo
     * @param int $itemId
     * @param string $name
     * @param string $forename
     * @param string $supplierId
     * @param string $bookingId
     * @param string $departureDescription
     * @param string $travelDate
     * @param float $toBePaid
     * @param string $departureTime
     * @param string $documentType
     * @param string $paymentType
     * @param bool $airportPayment
     */
    public function __construct(array $printTypeId = [], ?int $orderId = null, ?int $orderNo = null, ?int $itemId = null, ?string $name = null, ?string $forename = null, ?string $supplierId = null, ?string $bookingId = null, ?string $departureDescription = null, ?string $travelDate = null, ?float $toBePaid = 0, ?string $departureTime = null, ?string $documentType = null, ?string $paymentType = null, ?bool $airportPayment = null)
    {
        $this
            ->setPrintTypeId($printTypeId)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setItemId($itemId)
            ->setName($name)
            ->setForename($forename)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setDepartureDescription($departureDescription)
            ->setTravelDate($travelDate)
            ->setToBePaid($toBePaid)
            ->setDepartureTime($departureTime)
            ->setDocumentType($documentType)
            ->setPaymentType($paymentType)
            ->setAirportPayment($airportPayment);
    }
    /**
     * Get PrintTypeId value
     * @return string[]
     */
    public function getPrintTypeId(): array
    {
        return $this->PrintTypeId;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintTypeId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintTypeIdForArrayConstraintsFromSetPrintTypeId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCustomerBookingPrintTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($midocoCustomerBookingPrintTypeIdItem)) {
                $invalidValues[] = is_object($midocoCustomerBookingPrintTypeIdItem) ? get_class($midocoCustomerBookingPrintTypeIdItem) : sprintf('%s(%s)', gettype($midocoCustomerBookingPrintTypeIdItem), var_export($midocoCustomerBookingPrintTypeIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PrintTypeId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PrintTypeId value
     * @throws InvalidArgumentException
     * @param string[] $printTypeId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setPrintTypeId(array $printTypeId = []): self
    {
        // validation for constraint: array
        if ('' !== ($printTypeIdArrayErrorMessage = self::validatePrintTypeIdForArrayConstraintsFromSetPrintTypeId($printTypeId))) {
            throw new InvalidArgumentException($printTypeIdArrayErrorMessage, __LINE__);
        }
        $this->PrintTypeId = $printTypeId;
        
        return $this;
    }
    /**
     * Add item to PrintTypeId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function addToPrintTypeId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The PrintTypeId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PrintTypeId[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
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
     * Get departureDescription value
     * @return string|null
     */
    public function getDepartureDescription(): ?string
    {
        return $this->departureDescription;
    }
    /**
     * Set departureDescription value
     * @param string $departureDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setDepartureDescription(?string $departureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDescription) && !is_string($departureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDescription, true), gettype($departureDescription)), __LINE__);
        }
        $this->departureDescription = $departureDescription;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get toBePaid value
     * @return float|null
     */
    public function getToBePaid(): ?float
    {
        return $this->toBePaid;
    }
    /**
     * Set toBePaid value
     * @param float $toBePaid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setToBePaid(?float $toBePaid = 0): self
    {
        // validation for constraint: float
        if (!is_null($toBePaid) && !(is_float($toBePaid) || is_numeric($toBePaid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($toBePaid, true), gettype($toBePaid)), __LINE__);
        }
        $this->toBePaid = $toBePaid;
        
        return $this;
    }
    /**
     * Get departureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }
    /**
     * Set departureTime value
     * @param string $departureTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get airportPayment value
     * @return bool|null
     */
    public function getAirportPayment(): ?bool
    {
        return $this->airportPayment;
    }
    /**
     * Set airportPayment value
     * @param bool $airportPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerBooking
     */
    public function setAirportPayment(?bool $airportPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($airportPayment) && !is_bool($airportPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($airportPayment, true), gettype($airportPayment)), __LINE__);
        }
        $this->airportPayment = $airportPayment;
        
        return $this;
    }
}
