<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMorePromotionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMorePromotionDTO extends AbstractStructBase
{
    /**
     * The bookingDateEnd
     * @var string|null
     */
    protected ?string $bookingDateEnd = null;
    /**
     * The bookingDateStart
     * @var string|null
     */
    protected ?string $bookingDateStart = null;
    /**
     * The milesFlat
     * @var int|null
     */
    protected ?int $milesFlat = null;
    /**
     * The milesPerEur
     * @var float|null
     */
    protected ?float $milesPerEur = null;
    /**
     * The promotionCode
     * @var string|null
     */
    protected ?string $promotionCode = null;
    /**
     * The promotionId
     * @var int|null
     */
    protected ?int $promotionId = null;
    /**
     * The serviceName
     * @var string|null
     */
    protected ?string $serviceName = null;
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The travelDateEnd
     * @var string|null
     */
    protected ?string $travelDateEnd = null;
    /**
     * The travelDateStart
     * @var string|null
     */
    protected ?string $travelDateStart = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MilesAndMorePromotionDTO
     * @uses MilesAndMorePromotionDTO::setBookingDateEnd()
     * @uses MilesAndMorePromotionDTO::setBookingDateStart()
     * @uses MilesAndMorePromotionDTO::setMilesFlat()
     * @uses MilesAndMorePromotionDTO::setMilesPerEur()
     * @uses MilesAndMorePromotionDTO::setPromotionCode()
     * @uses MilesAndMorePromotionDTO::setPromotionId()
     * @uses MilesAndMorePromotionDTO::setServiceName()
     * @uses MilesAndMorePromotionDTO::setSupplier()
     * @uses MilesAndMorePromotionDTO::setTravelDateEnd()
     * @uses MilesAndMorePromotionDTO::setTravelDateStart()
     * @uses MilesAndMorePromotionDTO::setTravelType()
     * @uses MilesAndMorePromotionDTO::setUnitName()
     * @param string $bookingDateEnd
     * @param string $bookingDateStart
     * @param int $milesFlat
     * @param float $milesPerEur
     * @param string $promotionCode
     * @param int $promotionId
     * @param string $serviceName
     * @param string $supplier
     * @param string $travelDateEnd
     * @param string $travelDateStart
     * @param string $travelType
     * @param string $unitName
     */
    public function __construct(?string $bookingDateEnd = null, ?string $bookingDateStart = null, ?int $milesFlat = null, ?float $milesPerEur = null, ?string $promotionCode = null, ?int $promotionId = null, ?string $serviceName = null, ?string $supplier = null, ?string $travelDateEnd = null, ?string $travelDateStart = null, ?string $travelType = null, ?string $unitName = null)
    {
        $this
            ->setBookingDateEnd($bookingDateEnd)
            ->setBookingDateStart($bookingDateStart)
            ->setMilesFlat($milesFlat)
            ->setMilesPerEur($milesPerEur)
            ->setPromotionCode($promotionCode)
            ->setPromotionId($promotionId)
            ->setServiceName($serviceName)
            ->setSupplier($supplier)
            ->setTravelDateEnd($travelDateEnd)
            ->setTravelDateStart($travelDateStart)
            ->setTravelType($travelType)
            ->setUnitName($unitName);
    }
    /**
     * Get bookingDateEnd value
     * @return string|null
     */
    public function getBookingDateEnd(): ?string
    {
        return $this->bookingDateEnd;
    }
    /**
     * Set bookingDateEnd value
     * @param string $bookingDateEnd
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setBookingDateEnd(?string $bookingDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateEnd) && !is_string($bookingDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateEnd, true), gettype($bookingDateEnd)), __LINE__);
        }
        $this->bookingDateEnd = $bookingDateEnd;
        
        return $this;
    }
    /**
     * Get bookingDateStart value
     * @return string|null
     */
    public function getBookingDateStart(): ?string
    {
        return $this->bookingDateStart;
    }
    /**
     * Set bookingDateStart value
     * @param string $bookingDateStart
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setBookingDateStart(?string $bookingDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateStart) && !is_string($bookingDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateStart, true), gettype($bookingDateStart)), __LINE__);
        }
        $this->bookingDateStart = $bookingDateStart;
        
        return $this;
    }
    /**
     * Get milesFlat value
     * @return int|null
     */
    public function getMilesFlat(): ?int
    {
        return $this->milesFlat;
    }
    /**
     * Set milesFlat value
     * @param int $milesFlat
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setMilesFlat(?int $milesFlat = null): self
    {
        // validation for constraint: int
        if (!is_null($milesFlat) && !(is_int($milesFlat) || ctype_digit($milesFlat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($milesFlat, true), gettype($milesFlat)), __LINE__);
        }
        $this->milesFlat = $milesFlat;
        
        return $this;
    }
    /**
     * Get milesPerEur value
     * @return float|null
     */
    public function getMilesPerEur(): ?float
    {
        return $this->milesPerEur;
    }
    /**
     * Set milesPerEur value
     * @param float $milesPerEur
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setMilesPerEur(?float $milesPerEur = null): self
    {
        // validation for constraint: float
        if (!is_null($milesPerEur) && !(is_float($milesPerEur) || is_numeric($milesPerEur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($milesPerEur, true), gettype($milesPerEur)), __LINE__);
        }
        $this->milesPerEur = $milesPerEur;
        
        return $this;
    }
    /**
     * Get promotionCode value
     * @return string|null
     */
    public function getPromotionCode(): ?string
    {
        return $this->promotionCode;
    }
    /**
     * Set promotionCode value
     * @param string $promotionCode
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setPromotionCode(?string $promotionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionCode, true), gettype($promotionCode)), __LINE__);
        }
        $this->promotionCode = $promotionCode;
        
        return $this;
    }
    /**
     * Get promotionId value
     * @return int|null
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }
    /**
     * Set promotionId value
     * @param int $promotionId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setPromotionId(?int $promotionId = null): self
    {
        // validation for constraint: int
        if (!is_null($promotionId) && !(is_int($promotionId) || ctype_digit($promotionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($promotionId, true), gettype($promotionId)), __LINE__);
        }
        $this->promotionId = $promotionId;
        
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setServiceName(?string $serviceName = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        
        return $this;
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
    }
    /**
     * Get travelDateEnd value
     * @return string|null
     */
    public function getTravelDateEnd(): ?string
    {
        return $this->travelDateEnd;
    }
    /**
     * Set travelDateEnd value
     * @param string $travelDateEnd
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setTravelDateEnd(?string $travelDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateEnd) && !is_string($travelDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateEnd, true), gettype($travelDateEnd)), __LINE__);
        }
        $this->travelDateEnd = $travelDateEnd;
        
        return $this;
    }
    /**
     * Get travelDateStart value
     * @return string|null
     */
    public function getTravelDateStart(): ?string
    {
        return $this->travelDateStart;
    }
    /**
     * Set travelDateStart value
     * @param string $travelDateStart
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
     */
    public function setTravelDateStart(?string $travelDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateStart) && !is_string($travelDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateStart, true), gettype($travelDateStart)), __LINE__);
        }
        $this->travelDateStart = $travelDateStart;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO
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
}
