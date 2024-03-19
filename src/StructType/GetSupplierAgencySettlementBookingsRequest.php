<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgencySettlementBookingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierAgencySettlementBookingsRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The forCheck
     * @var bool|null
     */
    protected ?bool $forCheck = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierAgencyNo
     * @var string|null
     */
    protected ?string $supplierAgencyNo = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The traveller
     * @var string|null
     */
    protected ?string $traveller = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
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
     * The settlementsInkassoMode
     * @var string|null
     */
    protected ?string $settlementsInkassoMode = null;
    /**
     * Constructor method for GetSupplierAgencySettlementBookingsRequest
     * @uses GetSupplierAgencySettlementBookingsRequest::setSettlementId()
     * @uses GetSupplierAgencySettlementBookingsRequest::setBookingPosition()
     * @uses GetSupplierAgencySettlementBookingsRequest::setForCheck()
     * @uses GetSupplierAgencySettlementBookingsRequest::setSupplierId()
     * @uses GetSupplierAgencySettlementBookingsRequest::setSupplierAgencyNo()
     * @uses GetSupplierAgencySettlementBookingsRequest::setTravelDate()
     * @uses GetSupplierAgencySettlementBookingsRequest::setUnitName()
     * @uses GetSupplierAgencySettlementBookingsRequest::setBookingId()
     * @uses GetSupplierAgencySettlementBookingsRequest::setTraveller()
     * @uses GetSupplierAgencySettlementBookingsRequest::setTraveltype()
     * @uses GetSupplierAgencySettlementBookingsRequest::setBooked()
     * @uses GetSupplierAgencySettlementBookingsRequest::setChecked()
     * @uses GetSupplierAgencySettlementBookingsRequest::setErrors()
     * @uses GetSupplierAgencySettlementBookingsRequest::setSettlementsInkassoMode()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param bool $forCheck
     * @param string $supplierId
     * @param string $supplierAgencyNo
     * @param string $travelDate
     * @param string $unitName
     * @param string $bookingId
     * @param string $traveller
     * @param string $traveltype
     * @param bool $booked
     * @param bool $checked
     * @param bool $errors
     * @param string $settlementsInkassoMode
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?bool $forCheck = null, ?string $supplierId = null, ?string $supplierAgencyNo = null, ?string $travelDate = null, ?string $unitName = null, ?string $bookingId = null, ?string $traveller = null, ?string $traveltype = null, ?bool $booked = null, ?bool $checked = null, ?bool $errors = null, ?string $settlementsInkassoMode = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setForCheck($forCheck)
            ->setSupplierId($supplierId)
            ->setSupplierAgencyNo($supplierAgencyNo)
            ->setTravelDate($travelDate)
            ->setUnitName($unitName)
            ->setBookingId($bookingId)
            ->setTraveller($traveller)
            ->setTraveltype($traveltype)
            ->setBooked($booked)
            ->setChecked($checked)
            ->setErrors($errors)
            ->setSettlementsInkassoMode($settlementsInkassoMode);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get forCheck value
     * @return bool|null
     */
    public function getForCheck(): ?bool
    {
        return $this->forCheck;
    }
    /**
     * Set forCheck value
     * @param bool $forCheck
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
     */
    public function setForCheck(?bool $forCheck = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCheck) && !is_bool($forCheck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCheck, true), gettype($forCheck)), __LINE__);
        }
        $this->forCheck = $forCheck;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * Get supplierAgencyNo value
     * @return string|null
     */
    public function getSupplierAgencyNo(): ?string
    {
        return $this->supplierAgencyNo;
    }
    /**
     * Set supplierAgencyNo value
     * @param string $supplierAgencyNo
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
     */
    public function setSupplierAgencyNo(?string $supplierAgencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierAgencyNo) && !is_string($supplierAgencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierAgencyNo, true), gettype($supplierAgencyNo)), __LINE__);
        }
        $this->supplierAgencyNo = $supplierAgencyNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * Get traveller value
     * @return string|null
     */
    public function getTraveller(): ?string
    {
        return $this->traveller;
    }
    /**
     * Set traveller value
     * @param string $traveller
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
     */
    public function setTraveller(?string $traveller = null): self
    {
        // validation for constraint: string
        if (!is_null($traveller) && !is_string($traveller)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveller, true), gettype($traveller)), __LINE__);
        }
        $this->traveller = $traveller;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
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
     * Get settlementsInkassoMode value
     * @return string|null
     */
    public function getSettlementsInkassoMode(): ?string
    {
        return $this->settlementsInkassoMode;
    }
    /**
     * Set settlementsInkassoMode value
     * @param string $settlementsInkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgencySettlementBookingsRequest
     */
    public function setSettlementsInkassoMode(?string $settlementsInkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementsInkassoMode) && !is_string($settlementsInkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementsInkassoMode, true), gettype($settlementsInkassoMode)), __LINE__);
        }
        $this->settlementsInkassoMode = $settlementsInkassoMode;
        
        return $this;
    }
}
