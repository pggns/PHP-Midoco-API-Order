<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorChargesRequest StructType
 * @subpackage Structs
 */
class SearchMediatorChargesRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The chargeId
     * @var int|null
     */
    protected ?int $chargeId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The noOfRecords
     * @var int|null
     */
    protected ?int $noOfRecords = null;
    /**
     * Constructor method for SearchMediatorChargesRequest
     * @uses SearchMediatorChargesRequest::setMediatorId()
     * @uses SearchMediatorChargesRequest::setChargeId()
     * @uses SearchMediatorChargesRequest::setAmount()
     * @uses SearchMediatorChargesRequest::setFromDate()
     * @uses SearchMediatorChargesRequest::setEndDate()
     * @uses SearchMediatorChargesRequest::setNoOfRecords()
     * @param string $mediatorId
     * @param int $chargeId
     * @param float $amount
     * @param string $fromDate
     * @param string $endDate
     * @param int $noOfRecords
     */
    public function __construct(?string $mediatorId = null, ?int $chargeId = null, ?float $amount = null, ?string $fromDate = null, ?string $endDate = null, ?int $noOfRecords = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setChargeId($chargeId)
            ->setAmount($amount)
            ->setFromDate($fromDate)
            ->setEndDate($endDate)
            ->setNoOfRecords($noOfRecords);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest
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
     * Get chargeId value
     * @return int|null
     */
    public function getChargeId(): ?int
    {
        return $this->chargeId;
    }
    /**
     * Set chargeId value
     * @param int $chargeId
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest
     */
    public function setChargeId(?int $chargeId = null): self
    {
        // validation for constraint: int
        if (!is_null($chargeId) && !(is_int($chargeId) || ctype_digit($chargeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chargeId, true), gettype($chargeId)), __LINE__);
        }
        $this->chargeId = $chargeId;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest
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
    /**
     * Get noOfRecords value
     * @return int|null
     */
    public function getNoOfRecords(): ?int
    {
        return $this->noOfRecords;
    }
    /**
     * Set noOfRecords value
     * @param int $noOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest
     */
    public function setNoOfRecords(?int $noOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfRecords) && !(is_int($noOfRecords) || ctype_digit($noOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfRecords, true), gettype($noOfRecords)), __LINE__);
        }
        $this->noOfRecords = $noOfRecords;
        
        return $this;
    }
}
