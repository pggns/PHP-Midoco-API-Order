<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemsSettlementNeededRequest StructType
 * @subpackage Structs
 */
class GetSellItemsSettlementNeededRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierSettlementGroup
     * @var string|null
     */
    protected ?string $supplierSettlementGroup = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The travelDateFrom
     * @var string|null
     */
    protected ?string $travelDateFrom = null;
    /**
     * The travelDateTo
     * @var string|null
     */
    protected ?string $travelDateTo = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * The errors
     * @var bool|null
     */
    protected ?bool $errors = null;
    /**
     * The diff
     * @var bool|null
     */
    protected ?bool $diff = null;
    /**
     * The noSettlementsYet
     * @var bool|null
     */
    protected ?bool $noSettlementsYet = null;
    /**
     * The showSkippedBookings
     * @var bool|null
     */
    protected ?bool $showSkippedBookings = null;
    /**
     * The ticketNo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The settlementPosition
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $settlementPosition = null;
    /**
     * The bookingType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $bookingType = null;
    /**
     * Constructor method for GetSellItemsSettlementNeededRequest
     * @uses GetSellItemsSettlementNeededRequest::setSupplierId()
     * @uses GetSellItemsSettlementNeededRequest::setSupplierSettlementGroup()
     * @uses GetSellItemsSettlementNeededRequest::setTravelType()
     * @uses GetSellItemsSettlementNeededRequest::setOrgUnit()
     * @uses GetSellItemsSettlementNeededRequest::setSettlementId()
     * @uses GetSellItemsSettlementNeededRequest::setSellItemId()
     * @uses GetSellItemsSettlementNeededRequest::setCreationDateFrom()
     * @uses GetSellItemsSettlementNeededRequest::setCreationDateTo()
     * @uses GetSellItemsSettlementNeededRequest::setTravelDateFrom()
     * @uses GetSellItemsSettlementNeededRequest::setTravelDateTo()
     * @uses GetSellItemsSettlementNeededRequest::setBooked()
     * @uses GetSellItemsSettlementNeededRequest::setChecked()
     * @uses GetSellItemsSettlementNeededRequest::setErrors()
     * @uses GetSellItemsSettlementNeededRequest::setDiff()
     * @uses GetSellItemsSettlementNeededRequest::setNoSettlementsYet()
     * @uses GetSellItemsSettlementNeededRequest::setShowSkippedBookings()
     * @uses GetSellItemsSettlementNeededRequest::setTicketNo()
     * @uses GetSellItemsSettlementNeededRequest::setSettlementPosition()
     * @uses GetSellItemsSettlementNeededRequest::setBookingType()
     * @param string $supplierId
     * @param string $supplierSettlementGroup
     * @param string $travelType
     * @param string $orgUnit
     * @param int $settlementId
     * @param int $sellItemId
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param string $travelDateFrom
     * @param string $travelDateTo
     * @param bool $booked
     * @param bool $checked
     * @param bool $errors
     * @param bool $diff
     * @param bool $noSettlementsYet
     * @param bool $showSkippedBookings
     * @param string $ticketNo
     * @param int $settlementPosition
     * @param string $bookingType
     */
    public function __construct(?string $supplierId = null, ?string $supplierSettlementGroup = null, ?string $travelType = null, ?string $orgUnit = null, ?int $settlementId = null, ?int $sellItemId = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?string $travelDateFrom = null, ?string $travelDateTo = null, ?bool $booked = null, ?bool $checked = null, ?bool $errors = null, ?bool $diff = null, ?bool $noSettlementsYet = null, ?bool $showSkippedBookings = null, ?string $ticketNo = null, ?int $settlementPosition = null, ?string $bookingType = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setSupplierSettlementGroup($supplierSettlementGroup)
            ->setTravelType($travelType)
            ->setOrgUnit($orgUnit)
            ->setSettlementId($settlementId)
            ->setSellItemId($sellItemId)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setTravelDateFrom($travelDateFrom)
            ->setTravelDateTo($travelDateTo)
            ->setBooked($booked)
            ->setChecked($checked)
            ->setErrors($errors)
            ->setDiff($diff)
            ->setNoSettlementsYet($noSettlementsYet)
            ->setShowSkippedBookings($showSkippedBookings)
            ->setTicketNo($ticketNo)
            ->setSettlementPosition($settlementPosition)
            ->setBookingType($bookingType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
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
     * Get supplierSettlementGroup value
     * @return string|null
     */
    public function getSupplierSettlementGroup(): ?string
    {
        return $this->supplierSettlementGroup;
    }
    /**
     * Set supplierSettlementGroup value
     * @param string $supplierSettlementGroup
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setSupplierSettlementGroup(?string $supplierSettlementGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierSettlementGroup) && !is_string($supplierSettlementGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierSettlementGroup, true), gettype($supplierSettlementGroup)), __LINE__);
        }
        $this->supplierSettlementGroup = $supplierSettlementGroup;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get travelDateFrom value
     * @return string|null
     */
    public function getTravelDateFrom(): ?string
    {
        return $this->travelDateFrom;
    }
    /**
     * Set travelDateFrom value
     * @param string $travelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setTravelDateFrom(?string $travelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateFrom) && !is_string($travelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateFrom, true), gettype($travelDateFrom)), __LINE__);
        }
        $this->travelDateFrom = $travelDateFrom;
        
        return $this;
    }
    /**
     * Get travelDateTo value
     * @return string|null
     */
    public function getTravelDateTo(): ?string
    {
        return $this->travelDateTo;
    }
    /**
     * Set travelDateTo value
     * @param string $travelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setTravelDateTo(?string $travelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateTo) && !is_string($travelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateTo, true), gettype($travelDateTo)), __LINE__);
        }
        $this->travelDateTo = $travelDateTo;
        
        return $this;
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
    /**
     * Get errors value
     * @return bool|null
     */
    public function getErrors(): ?bool
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param bool $errors
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setErrors(?bool $errors = null): self
    {
        // validation for constraint: boolean
        if (!is_null($errors) && !is_bool($errors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($errors, true), gettype($errors)), __LINE__);
        }
        $this->errors = $errors;
        
        return $this;
    }
    /**
     * Get diff value
     * @return bool|null
     */
    public function getDiff(): ?bool
    {
        return $this->diff;
    }
    /**
     * Set diff value
     * @param bool $diff
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setDiff(?bool $diff = null): self
    {
        // validation for constraint: boolean
        if (!is_null($diff) && !is_bool($diff)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($diff, true), gettype($diff)), __LINE__);
        }
        $this->diff = $diff;
        
        return $this;
    }
    /**
     * Get noSettlementsYet value
     * @return bool|null
     */
    public function getNoSettlementsYet(): ?bool
    {
        return $this->noSettlementsYet;
    }
    /**
     * Set noSettlementsYet value
     * @param bool $noSettlementsYet
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setNoSettlementsYet(?bool $noSettlementsYet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($noSettlementsYet) && !is_bool($noSettlementsYet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($noSettlementsYet, true), gettype($noSettlementsYet)), __LINE__);
        }
        $this->noSettlementsYet = $noSettlementsYet;
        
        return $this;
    }
    /**
     * Get showSkippedBookings value
     * @return bool|null
     */
    public function getShowSkippedBookings(): ?bool
    {
        return $this->showSkippedBookings;
    }
    /**
     * Set showSkippedBookings value
     * @param bool $showSkippedBookings
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setShowSkippedBookings(?bool $showSkippedBookings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showSkippedBookings) && !is_bool($showSkippedBookings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSkippedBookings, true), gettype($showSkippedBookings)), __LINE__);
        }
        $this->showSkippedBookings = $showSkippedBookings;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
        return $this;
    }
    /**
     * Get settlementPosition value
     * @return int|null
     */
    public function getSettlementPosition(): ?int
    {
        return $this->settlementPosition;
    }
    /**
     * Set settlementPosition value
     * @param int $settlementPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setSettlementPosition(?int $settlementPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementPosition) && !(is_int($settlementPosition) || ctype_digit($settlementPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementPosition, true), gettype($settlementPosition)), __LINE__);
        }
        $this->settlementPosition = $settlementPosition;
        
        return $this;
    }
    /**
     * Get bookingType value
     * @return string|null
     */
    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }
    /**
     * Set bookingType value
     * @param string $bookingType
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemsSettlementNeededRequest
     */
    public function setBookingType(?string $bookingType = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingType) && !is_string($bookingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingType, true), gettype($bookingType)), __LINE__);
        }
        $this->bookingType = $bookingType;
        
        return $this;
    }
}
