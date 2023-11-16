<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceRequest StructType
 * @subpackage Structs
 */
class SpecialServiceRequest_1 extends AbstractStructBase
{
    /**
     * The BookingDetailRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BookingDetailRefId
     * @var int[]
     */
    protected array $BookingDetailRefId = [];
    /**
     * The TravelerRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: TravelerRefId
     * @var int[]
     */
    protected array $TravelerRefId = [];
    /**
     * The ssrId
     * @var int|null
     */
    protected ?int $ssrId = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The seat
     * @var string|null
     */
    protected ?string $seat = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for SpecialServiceRequest
     * @uses SpecialServiceRequest_1::setBookingDetailRefId()
     * @uses SpecialServiceRequest_1::setTravelerRefId()
     * @uses SpecialServiceRequest_1::setSsrId()
     * @uses SpecialServiceRequest_1::setCode()
     * @uses SpecialServiceRequest_1::setDescription()
     * @uses SpecialServiceRequest_1::setSeat()
     * @uses SpecialServiceRequest_1::setStatus()
     * @param int[] $bookingDetailRefId
     * @param int[] $travelerRefId
     * @param int $ssrId
     * @param string $code
     * @param string $description
     * @param string $seat
     * @param string $status
     */
    public function __construct(array $bookingDetailRefId = [], array $travelerRefId = [], ?int $ssrId = null, ?string $code = null, ?string $description = null, ?string $seat = null, ?string $status = null)
    {
        $this
            ->setBookingDetailRefId($bookingDetailRefId)
            ->setTravelerRefId($travelerRefId)
            ->setSsrId($ssrId)
            ->setCode($code)
            ->setDescription($description)
            ->setSeat($seat)
            ->setStatus($status);
    }
    /**
     * Get BookingDetailRefId value
     * @return int[]
     */
    public function getBookingDetailRefId(): array
    {
        return $this->BookingDetailRefId;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingDetailRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingDetailRefId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingDetailRefIdForArrayConstraintsFromSetBookingDetailRefId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $specialServiceRequestBookingDetailRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($specialServiceRequestBookingDetailRefIdItem) || ctype_digit($specialServiceRequestBookingDetailRefIdItem))) {
                $invalidValues[] = is_object($specialServiceRequestBookingDetailRefIdItem) ? get_class($specialServiceRequestBookingDetailRefIdItem) : sprintf('%s(%s)', gettype($specialServiceRequestBookingDetailRefIdItem), var_export($specialServiceRequestBookingDetailRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingDetailRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingDetailRefId value
     * @throws InvalidArgumentException
     * @param int[] $bookingDetailRefId
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setBookingDetailRefId(array $bookingDetailRefId = []): self
    {
        // validation for constraint: array
        if ('' !== ($bookingDetailRefIdArrayErrorMessage = self::validateBookingDetailRefIdForArrayConstraintsFromSetBookingDetailRefId($bookingDetailRefId))) {
            throw new InvalidArgumentException($bookingDetailRefIdArrayErrorMessage, __LINE__);
        }
        $this->BookingDetailRefId = $bookingDetailRefId;
        
        return $this;
    }
    /**
     * Add item to BookingDetailRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function addToBookingDetailRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BookingDetailRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BookingDetailRefId[] = $item;
        
        return $this;
    }
    /**
     * Get TravelerRefId value
     * @return int[]
     */
    public function getTravelerRefId(): array
    {
        return $this->TravelerRefId;
    }
    /**
     * This method is responsible for validating the values passed to the setTravelerRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerRefId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerRefIdForArrayConstraintsFromSetTravelerRefId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $specialServiceRequestTravelerRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($specialServiceRequestTravelerRefIdItem) || ctype_digit($specialServiceRequestTravelerRefIdItem))) {
                $invalidValues[] = is_object($specialServiceRequestTravelerRefIdItem) ? get_class($specialServiceRequestTravelerRefIdItem) : sprintf('%s(%s)', gettype($specialServiceRequestTravelerRefIdItem), var_export($specialServiceRequestTravelerRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelerRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelerRefId value
     * @throws InvalidArgumentException
     * @param int[] $travelerRefId
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setTravelerRefId(array $travelerRefId = []): self
    {
        // validation for constraint: array
        if ('' !== ($travelerRefIdArrayErrorMessage = self::validateTravelerRefIdForArrayConstraintsFromSetTravelerRefId($travelerRefId))) {
            throw new InvalidArgumentException($travelerRefIdArrayErrorMessage, __LINE__);
        }
        $this->TravelerRefId = $travelerRefId;
        
        return $this;
    }
    /**
     * Add item to TravelerRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function addToTravelerRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The TravelerRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TravelerRefId[] = $item;
        
        return $this;
    }
    /**
     * Get ssrId value
     * @return int|null
     */
    public function getSsrId(): ?int
    {
        return $this->ssrId;
    }
    /**
     * Set ssrId value
     * @param int $ssrId
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setSsrId(?int $ssrId = null): self
    {
        // validation for constraint: int
        if (!is_null($ssrId) && !(is_int($ssrId) || ctype_digit($ssrId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ssrId, true), gettype($ssrId)), __LINE__);
        }
        $this->ssrId = $ssrId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get seat value
     * @return string|null
     */
    public function getSeat(): ?string
    {
        return $this->seat;
    }
    /**
     * Set seat value
     * @param string $seat
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
     */
    public function setSeat(?string $seat = null): self
    {
        // validation for constraint: string
        if (!is_null($seat) && !is_string($seat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seat, true), gettype($seat)), __LINE__);
        }
        $this->seat = $seat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SpecialServiceRequest_1
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
