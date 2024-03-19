<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorBillingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorBillingsRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - documentation: 0 - printed and not printed 1 - printed 2 - not printed
     * - default: 0
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * Constructor method for SearchMediatorBillingsRequest
     * @uses SearchMediatorBillingsRequest::setMediatorId()
     * @uses SearchMediatorBillingsRequest::setStartDate()
     * @uses SearchMediatorBillingsRequest::setEndDate()
     * @uses SearchMediatorBillingsRequest::setNettoAmount()
     * @uses SearchMediatorBillingsRequest::setStatus()
     * @param string $mediatorId
     * @param string $startDate
     * @param string $endDate
     * @param float $nettoAmount
     * @param int $status
     */
    public function __construct(?string $mediatorId = null, ?string $startDate = null, ?string $endDate = null, ?float $nettoAmount = null, ?int $status = 0)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setNettoAmount($nettoAmount)
            ->setStatus($status);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest
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
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest
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
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest
     */
    public function setStatus(?int $status = 0): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
