<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCommissionConditionRequest StructType
 * @subpackage Structs
 */
class GetSupplierCommissionConditionRequest extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
    /**
     * The bookingCreationDate
     * @var string|null
     */
    protected ?string $bookingCreationDate = null;
    /**
     * The bookingTravelDate
     * @var string|null
     */
    protected ?string $bookingTravelDate = null;
    /**
     * The handlingType
     * Meta information extracted from the WSDL
     * - documentation: A - all bookings, F only flight
     * @var string|null
     */
    protected ?string $handlingType = null;
    /**
     * Constructor method for GetSupplierCommissionConditionRequest
     * @uses GetSupplierCommissionConditionRequest::setSupplierId()
     * @uses GetSupplierCommissionConditionRequest::setTraveltype()
     * @uses GetSupplierCommissionConditionRequest::setProductType()
     * @uses GetSupplierCommissionConditionRequest::setForStorno()
     * @uses GetSupplierCommissionConditionRequest::setBookingCreationDate()
     * @uses GetSupplierCommissionConditionRequest::setBookingTravelDate()
     * @uses GetSupplierCommissionConditionRequest::setHandlingType()
     * @param string $supplierId
     * @param string $traveltype
     * @param string $productType
     * @param bool $forStorno
     * @param string $bookingCreationDate
     * @param string $bookingTravelDate
     * @param string $handlingType
     */
    public function __construct(?string $supplierId = null, ?string $traveltype = null, ?string $productType = null, ?bool $forStorno = null, ?string $bookingCreationDate = null, ?string $bookingTravelDate = null, ?string $handlingType = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setTraveltype($traveltype)
            ->setProductType($productType)
            ->setForStorno($forStorno)
            ->setBookingCreationDate($bookingCreationDate)
            ->setBookingTravelDate($bookingTravelDate)
            ->setHandlingType($handlingType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
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
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
        return $this;
    }
    /**
     * Get bookingCreationDate value
     * @return string|null
     */
    public function getBookingCreationDate(): ?string
    {
        return $this->bookingCreationDate;
    }
    /**
     * Set bookingCreationDate value
     * @param string $bookingCreationDate
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
     */
    public function setBookingCreationDate(?string $bookingCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCreationDate) && !is_string($bookingCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCreationDate, true), gettype($bookingCreationDate)), __LINE__);
        }
        $this->bookingCreationDate = $bookingCreationDate;
        
        return $this;
    }
    /**
     * Get bookingTravelDate value
     * @return string|null
     */
    public function getBookingTravelDate(): ?string
    {
        return $this->bookingTravelDate;
    }
    /**
     * Set bookingTravelDate value
     * @param string $bookingTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
     */
    public function setBookingTravelDate(?string $bookingTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelDate) && !is_string($bookingTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelDate, true), gettype($bookingTravelDate)), __LINE__);
        }
        $this->bookingTravelDate = $bookingTravelDate;
        
        return $this;
    }
    /**
     * Get handlingType value
     * @return string|null
     */
    public function getHandlingType(): ?string
    {
        return $this->handlingType;
    }
    /**
     * Set handlingType value
     * @param string $handlingType
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCommissionConditionRequest
     */
    public function setHandlingType(?string $handlingType = null): self
    {
        // validation for constraint: string
        if (!is_null($handlingType) && !is_string($handlingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlingType, true), gettype($handlingType)), __LINE__);
        }
        $this->handlingType = $handlingType;
        
        return $this;
    }
}
