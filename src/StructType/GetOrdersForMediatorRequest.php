<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersForMediatorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrdersForMediatorRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The creationStartDate
     * @var string|null
     */
    protected ?string $creationStartDate = null;
    /**
     * The creationEndDate
     * @var string|null
     */
    protected ?string $creationEndDate = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - default: BOOKED
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * Constructor method for GetOrdersForMediatorRequest
     * @uses GetOrdersForMediatorRequest::setMediatorId()
     * @uses GetOrdersForMediatorRequest::setCreationStartDate()
     * @uses GetOrdersForMediatorRequest::setCreationEndDate()
     * @uses GetOrdersForMediatorRequest::setStatus()
     * @uses GetOrdersForMediatorRequest::setFilter()
     * @param string $mediatorId
     * @param string $creationStartDate
     * @param string $creationEndDate
     * @param string $status
     * @param string $filter
     */
    public function __construct(?string $mediatorId = null, ?string $creationStartDate = null, ?string $creationEndDate = null, ?string $status = null, ?string $filter = 'BOOKED')
    {
        $this
            ->setMediatorId($mediatorId)
            ->setCreationStartDate($creationStartDate)
            ->setCreationEndDate($creationEndDate)
            ->setStatus($status)
            ->setFilter($filter);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForMediatorRequest
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get creationStartDate value
     * @return string|null
     */
    public function getCreationStartDate(): ?string
    {
        return $this->creationStartDate;
    }
    /**
     * Set creationStartDate value
     * @param string $creationStartDate
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForMediatorRequest
     */
    public function setCreationStartDate(?string $creationStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationStartDate) && !is_string($creationStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationStartDate, true), gettype($creationStartDate)), __LINE__);
        }
        $this->creationStartDate = $creationStartDate;
        
        return $this;
    }
    /**
     * Get creationEndDate value
     * @return string|null
     */
    public function getCreationEndDate(): ?string
    {
        return $this->creationEndDate;
    }
    /**
     * Set creationEndDate value
     * @param string $creationEndDate
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForMediatorRequest
     */
    public function setCreationEndDate(?string $creationEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationEndDate) && !is_string($creationEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationEndDate, true), gettype($creationEndDate)), __LINE__);
        }
        $this->creationEndDate = $creationEndDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForMediatorRequest
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
    /**
     * Get filter value
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return $this->filter;
    }
    /**
     * Set filter value
     * @param string $filter
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForMediatorRequest
     */
    public function setFilter(?string $filter = 'BOOKED'): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->filter = $filter;
        
        return $this;
    }
}
