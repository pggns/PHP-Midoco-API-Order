<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchTravelNoMarginsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchTravelNoMarginsRequest extends AbstractStructBase
{
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $travelNo = null;
    /**
     * The travelStartDateFrom
     * @var string|null
     */
    protected ?string $travelStartDateFrom = null;
    /**
     * The travelStartDateTo
     * @var string|null
     */
    protected ?string $travelStartDateTo = null;
    /**
     * The settlementStartDate
     * @var string|null
     */
    protected ?string $settlementStartDate = null;
    /**
     * The settlementEndDate
     * @var string|null
     */
    protected ?string $settlementEndDate = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The notBookedMargins
     * @var bool|null
     */
    protected ?bool $notBookedMargins = null;
    /**
     * The preventMarginBooking
     * @var bool|null
     */
    protected ?bool $preventMarginBooking = null;
    /**
     * The notBookedIncomingInvoices
     * @var bool|null
     */
    protected ?bool $notBookedIncomingInvoices = null;
    /**
     * The orgunitName
     * @var string|null
     */
    protected ?string $orgunitName = null;
    /**
     * Constructor method for SearchTravelNoMarginsRequest
     * @uses SearchTravelNoMarginsRequest::setTravelNo()
     * @uses SearchTravelNoMarginsRequest::setTravelStartDateFrom()
     * @uses SearchTravelNoMarginsRequest::setTravelStartDateTo()
     * @uses SearchTravelNoMarginsRequest::setSettlementStartDate()
     * @uses SearchTravelNoMarginsRequest::setSettlementEndDate()
     * @uses SearchTravelNoMarginsRequest::setIsStorno()
     * @uses SearchTravelNoMarginsRequest::setDestination()
     * @uses SearchTravelNoMarginsRequest::setOrderNo()
     * @uses SearchTravelNoMarginsRequest::setNotBookedMargins()
     * @uses SearchTravelNoMarginsRequest::setPreventMarginBooking()
     * @uses SearchTravelNoMarginsRequest::setNotBookedIncomingInvoices()
     * @uses SearchTravelNoMarginsRequest::setOrgunitName()
     * @param string[] $travelNo
     * @param string $travelStartDateFrom
     * @param string $travelStartDateTo
     * @param string $settlementStartDate
     * @param string $settlementEndDate
     * @param bool $isStorno
     * @param string $destination
     * @param int $orderNo
     * @param bool $notBookedMargins
     * @param bool $preventMarginBooking
     * @param bool $notBookedIncomingInvoices
     * @param string $orgunitName
     */
    public function __construct(?array $travelNo = null, ?string $travelStartDateFrom = null, ?string $travelStartDateTo = null, ?string $settlementStartDate = null, ?string $settlementEndDate = null, ?bool $isStorno = null, ?string $destination = null, ?int $orderNo = null, ?bool $notBookedMargins = null, ?bool $preventMarginBooking = null, ?bool $notBookedIncomingInvoices = null, ?string $orgunitName = null)
    {
        $this
            ->setTravelNo($travelNo)
            ->setTravelStartDateFrom($travelStartDateFrom)
            ->setTravelStartDateTo($travelStartDateTo)
            ->setSettlementStartDate($settlementStartDate)
            ->setSettlementEndDate($settlementEndDate)
            ->setIsStorno($isStorno)
            ->setDestination($destination)
            ->setOrderNo($orderNo)
            ->setNotBookedMargins($notBookedMargins)
            ->setPreventMarginBooking($preventMarginBooking)
            ->setNotBookedIncomingInvoices($notBookedIncomingInvoices)
            ->setOrgunitName($orgunitName);
    }
    /**
     * Get travelNo value
     * @return string[]
     */
    public function getTravelNo(): ?array
    {
        return $this->travelNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelNoForArrayConstraintFromSetTravelNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchTravelNoMarginsRequestTravelNoItem) {
            // validation for constraint: itemType
            if (!is_string($searchTravelNoMarginsRequestTravelNoItem)) {
                $invalidValues[] = is_object($searchTravelNoMarginsRequestTravelNoItem) ? get_class($searchTravelNoMarginsRequestTravelNoItem) : sprintf('%s(%s)', gettype($searchTravelNoMarginsRequestTravelNoItem), var_export($searchTravelNoMarginsRequestTravelNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The travelNo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set travelNo value
     * @throws InvalidArgumentException
     * @param string[] $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setTravelNo(?array $travelNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelNoArrayErrorMessage = self::validateTravelNoForArrayConstraintFromSetTravelNo($travelNo))) {
            throw new InvalidArgumentException($travelNoArrayErrorMessage, __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Add item to travelNo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function addToTravelNo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The travelNo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->travelNo[] = $item;
        
        return $this;
    }
    /**
     * Get travelStartDateFrom value
     * @return string|null
     */
    public function getTravelStartDateFrom(): ?string
    {
        return $this->travelStartDateFrom;
    }
    /**
     * Set travelStartDateFrom value
     * @param string $travelStartDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setTravelStartDateFrom(?string $travelStartDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDateFrom) && !is_string($travelStartDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDateFrom, true), gettype($travelStartDateFrom)), __LINE__);
        }
        $this->travelStartDateFrom = $travelStartDateFrom;
        
        return $this;
    }
    /**
     * Get travelStartDateTo value
     * @return string|null
     */
    public function getTravelStartDateTo(): ?string
    {
        return $this->travelStartDateTo;
    }
    /**
     * Set travelStartDateTo value
     * @param string $travelStartDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setTravelStartDateTo(?string $travelStartDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDateTo) && !is_string($travelStartDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDateTo, true), gettype($travelStartDateTo)), __LINE__);
        }
        $this->travelStartDateTo = $travelStartDateTo;
        
        return $this;
    }
    /**
     * Get settlementStartDate value
     * @return string|null
     */
    public function getSettlementStartDate(): ?string
    {
        return $this->settlementStartDate;
    }
    /**
     * Set settlementStartDate value
     * @param string $settlementStartDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setSettlementStartDate(?string $settlementStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementStartDate) && !is_string($settlementStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementStartDate, true), gettype($settlementStartDate)), __LINE__);
        }
        $this->settlementStartDate = $settlementStartDate;
        
        return $this;
    }
    /**
     * Get settlementEndDate value
     * @return string|null
     */
    public function getSettlementEndDate(): ?string
    {
        return $this->settlementEndDate;
    }
    /**
     * Set settlementEndDate value
     * @param string $settlementEndDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setSettlementEndDate(?string $settlementEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementEndDate) && !is_string($settlementEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementEndDate, true), gettype($settlementEndDate)), __LINE__);
        }
        $this->settlementEndDate = $settlementEndDate;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
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
     * Get notBookedMargins value
     * @return bool|null
     */
    public function getNotBookedMargins(): ?bool
    {
        return $this->notBookedMargins;
    }
    /**
     * Set notBookedMargins value
     * @param bool $notBookedMargins
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setNotBookedMargins(?bool $notBookedMargins = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notBookedMargins) && !is_bool($notBookedMargins)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notBookedMargins, true), gettype($notBookedMargins)), __LINE__);
        }
        $this->notBookedMargins = $notBookedMargins;
        
        return $this;
    }
    /**
     * Get preventMarginBooking value
     * @return bool|null
     */
    public function getPreventMarginBooking(): ?bool
    {
        return $this->preventMarginBooking;
    }
    /**
     * Set preventMarginBooking value
     * @param bool $preventMarginBooking
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setPreventMarginBooking(?bool $preventMarginBooking = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventMarginBooking) && !is_bool($preventMarginBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventMarginBooking, true), gettype($preventMarginBooking)), __LINE__);
        }
        $this->preventMarginBooking = $preventMarginBooking;
        
        return $this;
    }
    /**
     * Get notBookedIncomingInvoices value
     * @return bool|null
     */
    public function getNotBookedIncomingInvoices(): ?bool
    {
        return $this->notBookedIncomingInvoices;
    }
    /**
     * Set notBookedIncomingInvoices value
     * @param bool $notBookedIncomingInvoices
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setNotBookedIncomingInvoices(?bool $notBookedIncomingInvoices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notBookedIncomingInvoices) && !is_bool($notBookedIncomingInvoices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notBookedIncomingInvoices, true), gettype($notBookedIncomingInvoices)), __LINE__);
        }
        $this->notBookedIncomingInvoices = $notBookedIncomingInvoices;
        
        return $this;
    }
    /**
     * Get orgunitName value
     * @return string|null
     */
    public function getOrgunitName(): ?string
    {
        return $this->orgunitName;
    }
    /**
     * Set orgunitName value
     * @param string $orgunitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest
     */
    public function setOrgunitName(?string $orgunitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunitName) && !is_string($orgunitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunitName, true), gettype($orgunitName)), __LINE__);
        }
        $this->orgunitName = $orgunitName;
        
        return $this;
    }
}
