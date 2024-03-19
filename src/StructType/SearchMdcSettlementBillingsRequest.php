<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMdcSettlementBillingsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMdcSettlementBillingsRequest extends AbstractStructBase
{
    /**
     * The companyId
     * @var int|null
     */
    protected ?int $companyId = null;
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
     * The totalValue
     * @var float|null
     */
    protected ?float $totalValue = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - documentation: 0 - printed and not printed 1 - printed 2 - not printed
     * - default: 0
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * Constructor method for SearchMdcSettlementBillingsRequest
     * @uses SearchMdcSettlementBillingsRequest::setCompanyId()
     * @uses SearchMdcSettlementBillingsRequest::setStartDate()
     * @uses SearchMdcSettlementBillingsRequest::setEndDate()
     * @uses SearchMdcSettlementBillingsRequest::setTotalValue()
     * @uses SearchMdcSettlementBillingsRequest::setStatus()
     * @param int $companyId
     * @param string $startDate
     * @param string $endDate
     * @param float $totalValue
     * @param int $status
     */
    public function __construct(?int $companyId = null, ?string $startDate = null, ?string $endDate = null, ?float $totalValue = null, ?int $status = 0)
    {
        $this
            ->setCompanyId($companyId)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setTotalValue($totalValue)
            ->setStatus($status);
    }
    /**
     * Get companyId value
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }
    /**
     * Set companyId value
     * @param int $companyId
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest
     */
    public function setCompanyId(?int $companyId = null): self
    {
        // validation for constraint: int
        if (!is_null($companyId) && !(is_int($companyId) || ctype_digit($companyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($companyId, true), gettype($companyId)), __LINE__);
        }
        $this->companyId = $companyId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest
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
     * Get totalValue value
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }
    /**
     * Set totalValue value
     * @param float $totalValue
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest
     */
    public function setTotalValue(?float $totalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($totalValue) && !(is_float($totalValue) || is_numeric($totalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalValue, true), gettype($totalValue)), __LINE__);
        }
        $this->totalValue = $totalValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest
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
