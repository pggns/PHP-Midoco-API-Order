<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackageInfoForBookingResponse StructType
 * @subpackage Structs
 */
class GetPackageInfoForBookingResponse extends AbstractStructBase
{
    /**
     * The packageId
     * @var string|null
     */
    protected ?string $packageId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * Constructor method for GetPackageInfoForBookingResponse
     * @uses GetPackageInfoForBookingResponse::setPackageId()
     * @uses GetPackageInfoForBookingResponse::setSupplierId()
     * @uses GetPackageInfoForBookingResponse::setTravelType()
     * @param string $packageId
     * @param string $supplierId
     * @param string $travelType
     */
    public function __construct(?string $packageId = null, ?string $supplierId = null, ?string $travelType = null)
    {
        $this
            ->setPackageId($packageId)
            ->setSupplierId($supplierId)
            ->setTravelType($travelType);
    }
    /**
     * Get packageId value
     * @return string|null
     */
    public function getPackageId(): ?string
    {
        return $this->packageId;
    }
    /**
     * Set packageId value
     * @param string $packageId
     * @return \Pggns\MidocoApi\Order\StructType\GetPackageInfoForBookingResponse
     */
    public function setPackageId(?string $packageId = null): self
    {
        // validation for constraint: string
        if (!is_null($packageId) && !is_string($packageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageId, true), gettype($packageId)), __LINE__);
        }
        $this->packageId = $packageId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPackageInfoForBookingResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPackageInfoForBookingResponse
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
}
