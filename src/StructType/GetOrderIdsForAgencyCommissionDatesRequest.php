<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderIdsForAgencyCommissionDatesRequest StructType
 * @subpackage Structs
 */
class GetOrderIdsForAgencyCommissionDatesRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $agencyId;
    /**
     * The useTravelDates
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $useTravelDates = null;
    /**
     * The beginDate
     * @var string|null
     */
    protected ?string $beginDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for GetOrderIdsForAgencyCommissionDatesRequest
     * @uses GetOrderIdsForAgencyCommissionDatesRequest::setAgencyId()
     * @uses GetOrderIdsForAgencyCommissionDatesRequest::setUseTravelDates()
     * @uses GetOrderIdsForAgencyCommissionDatesRequest::setBeginDate()
     * @uses GetOrderIdsForAgencyCommissionDatesRequest::setEndDate()
     * @param string $agencyId
     * @param bool $useTravelDates
     * @param string $beginDate
     * @param string $endDate
     */
    public function __construct(string $agencyId, ?bool $useTravelDates = true, ?string $beginDate = null, ?string $endDate = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setUseTravelDates($useTravelDates)
            ->setBeginDate($beginDate)
            ->setEndDate($endDate);
    }
    /**
     * Get agencyId value
     * @return string
     */
    public function getAgencyId(): string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesRequest
     */
    public function setAgencyId(string $agencyId): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get useTravelDates value
     * @return bool|null
     */
    public function getUseTravelDates(): ?bool
    {
        return $this->useTravelDates;
    }
    /**
     * Set useTravelDates value
     * @param bool $useTravelDates
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesRequest
     */
    public function setUseTravelDates(?bool $useTravelDates = true): self
    {
        // validation for constraint: boolean
        if (!is_null($useTravelDates) && !is_bool($useTravelDates)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useTravelDates, true), gettype($useTravelDates)), __LINE__);
        }
        $this->useTravelDates = $useTravelDates;
        
        return $this;
    }
    /**
     * Get beginDate value
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return $this->beginDate;
    }
    /**
     * Set beginDate value
     * @param string $beginDate
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesRequest
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        $this->beginDate = $beginDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}
