<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorCommissionRequest StructType
 * @subpackage Structs
 */
class GetMediatorCommissionRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $mediatorId;
    /**
     * The startTravelDate
     * @var string|null
     */
    protected ?string $startTravelDate = null;
    /**
     * The endTravelDate
     * @var string|null
     */
    protected ?string $endTravelDate = null;
    /**
     * The startBookingDate
     * @var string|null
     */
    protected ?string $startBookingDate = null;
    /**
     * The endBookingDate
     * @var string|null
     */
    protected ?string $endBookingDate = null;
    /**
     * Constructor method for GetMediatorCommissionRequest
     * @uses GetMediatorCommissionRequest::setMediatorId()
     * @uses GetMediatorCommissionRequest::setStartTravelDate()
     * @uses GetMediatorCommissionRequest::setEndTravelDate()
     * @uses GetMediatorCommissionRequest::setStartBookingDate()
     * @uses GetMediatorCommissionRequest::setEndBookingDate()
     * @param string $mediatorId
     * @param string $startTravelDate
     * @param string $endTravelDate
     * @param string $startBookingDate
     * @param string $endBookingDate
     */
    public function __construct(string $mediatorId, ?string $startTravelDate = null, ?string $endTravelDate = null, ?string $startBookingDate = null, ?string $endBookingDate = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setStartTravelDate($startTravelDate)
            ->setEndTravelDate($endTravelDate)
            ->setStartBookingDate($startBookingDate)
            ->setEndBookingDate($endBookingDate);
    }
    /**
     * Get mediatorId value
     * @return string
     */
    public function getMediatorId(): string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionRequest
     */
    public function setMediatorId(string $mediatorId): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get startTravelDate value
     * @return string|null
     */
    public function getStartTravelDate(): ?string
    {
        return $this->startTravelDate;
    }
    /**
     * Set startTravelDate value
     * @param string $startTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionRequest
     */
    public function setStartTravelDate(?string $startTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelDate) && !is_string($startTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelDate, true), gettype($startTravelDate)), __LINE__);
        }
        $this->startTravelDate = $startTravelDate;
        
        return $this;
    }
    /**
     * Get endTravelDate value
     * @return string|null
     */
    public function getEndTravelDate(): ?string
    {
        return $this->endTravelDate;
    }
    /**
     * Set endTravelDate value
     * @param string $endTravelDate
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionRequest
     */
    public function setEndTravelDate(?string $endTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravelDate) && !is_string($endTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravelDate, true), gettype($endTravelDate)), __LINE__);
        }
        $this->endTravelDate = $endTravelDate;
        
        return $this;
    }
    /**
     * Get startBookingDate value
     * @return string|null
     */
    public function getStartBookingDate(): ?string
    {
        return $this->startBookingDate;
    }
    /**
     * Set startBookingDate value
     * @param string $startBookingDate
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionRequest
     */
    public function setStartBookingDate(?string $startBookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startBookingDate) && !is_string($startBookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startBookingDate, true), gettype($startBookingDate)), __LINE__);
        }
        $this->startBookingDate = $startBookingDate;
        
        return $this;
    }
    /**
     * Get endBookingDate value
     * @return string|null
     */
    public function getEndBookingDate(): ?string
    {
        return $this->endBookingDate;
    }
    /**
     * Set endBookingDate value
     * @param string $endBookingDate
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionRequest
     */
    public function setEndBookingDate(?string $endBookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endBookingDate) && !is_string($endBookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endBookingDate, true), gettype($endBookingDate)), __LINE__);
        }
        $this->endBookingDate = $endBookingDate;
        
        return $this;
    }
}
