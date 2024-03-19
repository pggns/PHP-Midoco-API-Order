<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcOnlinePaymentReferenceData StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcOnlinePaymentReferenceData extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The extBookingId
     * @var string|null
     */
    protected ?string $extBookingId = null;
    /**
     * The bookingType
     * @var string|null
     */
    protected ?string $bookingType = null;
    /**
     * The portal
     * @var string|null
     */
    protected ?string $portal = null;
    /**
     * The bookingDescription
     * @var string|null
     */
    protected ?string $bookingDescription = null;
    /**
     * Constructor method for CcOnlinePaymentReferenceData
     * @uses CcOnlinePaymentReferenceData::setBookingId()
     * @uses CcOnlinePaymentReferenceData::setExtBookingId()
     * @uses CcOnlinePaymentReferenceData::setBookingType()
     * @uses CcOnlinePaymentReferenceData::setPortal()
     * @uses CcOnlinePaymentReferenceData::setBookingDescription()
     * @param string $bookingId
     * @param string $extBookingId
     * @param string $bookingType
     * @param string $portal
     * @param string $bookingDescription
     */
    public function __construct(?string $bookingId = null, ?string $extBookingId = null, ?string $bookingType = null, ?string $portal = null, ?string $bookingDescription = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setExtBookingId($extBookingId)
            ->setBookingType($bookingType)
            ->setPortal($portal)
            ->setBookingDescription($bookingDescription);
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
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentReferenceData
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
     * Get extBookingId value
     * @return string|null
     */
    public function getExtBookingId(): ?string
    {
        return $this->extBookingId;
    }
    /**
     * Set extBookingId value
     * @param string $extBookingId
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentReferenceData
     */
    public function setExtBookingId(?string $extBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($extBookingId) && !is_string($extBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extBookingId, true), gettype($extBookingId)), __LINE__);
        }
        $this->extBookingId = $extBookingId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentReferenceData
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
    /**
     * Get portal value
     * @return string|null
     */
    public function getPortal(): ?string
    {
        return $this->portal;
    }
    /**
     * Set portal value
     * @param string $portal
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentReferenceData
     */
    public function setPortal(?string $portal = null): self
    {
        // validation for constraint: string
        if (!is_null($portal) && !is_string($portal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portal, true), gettype($portal)), __LINE__);
        }
        $this->portal = $portal;
        
        return $this;
    }
    /**
     * Get bookingDescription value
     * @return string|null
     */
    public function getBookingDescription(): ?string
    {
        return $this->bookingDescription;
    }
    /**
     * Set bookingDescription value
     * @param string $bookingDescription
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentReferenceData
     */
    public function setBookingDescription(?string $bookingDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDescription) && !is_string($bookingDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDescription, true), gettype($bookingDescription)), __LINE__);
        }
        $this->bookingDescription = $bookingDescription;
        
        return $this;
    }
}
