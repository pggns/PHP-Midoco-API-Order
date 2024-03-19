<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustomerBookingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCustomerBookingsRequest extends AbstractStructBase
{
    /**
     * The PrintTypeId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $PrintTypeId = null;
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
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The travelDocumentsPrinted
     * @var bool|null
     */
    protected ?bool $travelDocumentsPrinted = null;
    /**
     * The airportPayment
     * @var bool|null
     */
    protected ?bool $airportPayment = null;
    /**
     * Constructor method for SearchCustomerBookingsRequest
     * @uses SearchCustomerBookingsRequest::setPrintTypeId()
     * @uses SearchCustomerBookingsRequest::setName()
     * @uses SearchCustomerBookingsRequest::setForename()
     * @uses SearchCustomerBookingsRequest::setTravelDate()
     * @uses SearchCustomerBookingsRequest::setOrderNo()
     * @uses SearchCustomerBookingsRequest::setDepartureCode()
     * @uses SearchCustomerBookingsRequest::setTravelDocumentsPrinted()
     * @uses SearchCustomerBookingsRequest::setAirportPayment()
     * @param string[] $printTypeId
     * @param string $name
     * @param string $forename
     * @param string $travelDate
     * @param int $orderNo
     * @param string $departureCode
     * @param bool $travelDocumentsPrinted
     * @param bool $airportPayment
     */
    public function __construct(?array $printTypeId = null, ?string $name = null, ?string $forename = null, ?string $travelDate = null, ?int $orderNo = null, ?string $departureCode = null, ?bool $travelDocumentsPrinted = null, ?bool $airportPayment = null)
    {
        $this
            ->setPrintTypeId($printTypeId)
            ->setName($name)
            ->setForename($forename)
            ->setTravelDate($travelDate)
            ->setOrderNo($orderNo)
            ->setDepartureCode($departureCode)
            ->setTravelDocumentsPrinted($travelDocumentsPrinted)
            ->setAirportPayment($airportPayment);
    }
    /**
     * Get PrintTypeId value
     * @return string[]
     */
    public function getPrintTypeId(): ?array
    {
        return $this->PrintTypeId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintTypeId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintTypeId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintTypeIdForArrayConstraintFromSetPrintTypeId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustomerBookingsRequestPrintTypeIdItem) {
            // validation for constraint: itemType
            if (!is_string($searchCustomerBookingsRequestPrintTypeIdItem)) {
                $invalidValues[] = is_object($searchCustomerBookingsRequestPrintTypeIdItem) ? get_class($searchCustomerBookingsRequestPrintTypeIdItem) : sprintf('%s(%s)', gettype($searchCustomerBookingsRequestPrintTypeIdItem), var_export($searchCustomerBookingsRequestPrintTypeIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
     */
    public function setPrintTypeId(?array $printTypeId = null): self
    {
        // validation for constraint: array
        if ('' !== ($printTypeIdArrayErrorMessage = self::validatePrintTypeIdForArrayConstraintFromSetPrintTypeId($printTypeId))) {
            throw new InvalidArgumentException($printTypeIdArrayErrorMessage, __LINE__);
        }
        $this->PrintTypeId = $printTypeId;
        
        return $this;
    }
    /**
     * Add item to PrintTypeId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
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
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get travelDocumentsPrinted value
     * @return bool|null
     */
    public function getTravelDocumentsPrinted(): ?bool
    {
        return $this->travelDocumentsPrinted;
    }
    /**
     * Set travelDocumentsPrinted value
     * @param bool $travelDocumentsPrinted
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
     */
    public function setTravelDocumentsPrinted(?bool $travelDocumentsPrinted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($travelDocumentsPrinted) && !is_bool($travelDocumentsPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travelDocumentsPrinted, true), gettype($travelDocumentsPrinted)), __LINE__);
        }
        $this->travelDocumentsPrinted = $travelDocumentsPrinted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest
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
