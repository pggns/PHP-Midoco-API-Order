<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCashBookPrintCriteria StructType
 * @subpackage Structs
 */
class SearchCashBookPrintCriteria extends AbstractStructBase
{
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The startPrintDate
     * @var string|null
     */
    protected ?string $startPrintDate = null;
    /**
     * The endPrintDate
     * @var string|null
     */
    protected ?string $endPrintDate = null;
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for SearchCashBookPrintCriteria
     * @uses SearchCashBookPrintCriteria::setCashBookId()
     * @uses SearchCashBookPrintCriteria::setStartPrintDate()
     * @uses SearchCashBookPrintCriteria::setEndPrintDate()
     * @uses SearchCashBookPrintCriteria::setUserId()
     * @param int $cashBookId
     * @param string $startPrintDate
     * @param string $endPrintDate
     * @param int $userId
     */
    public function __construct(?int $cashBookId = null, ?string $startPrintDate = null, ?string $endPrintDate = null, ?int $userId = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setStartPrintDate($startPrintDate)
            ->setEndPrintDate($endPrintDate)
            ->setUserId($userId);
    }
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get startPrintDate value
     * @return string|null
     */
    public function getStartPrintDate(): ?string
    {
        return $this->startPrintDate;
    }
    /**
     * Set startPrintDate value
     * @param string $startPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria
     */
    public function setStartPrintDate(?string $startPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startPrintDate) && !is_string($startPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startPrintDate, true), gettype($startPrintDate)), __LINE__);
        }
        $this->startPrintDate = $startPrintDate;
        
        return $this;
    }
    /**
     * Get endPrintDate value
     * @return string|null
     */
    public function getEndPrintDate(): ?string
    {
        return $this->endPrintDate;
    }
    /**
     * Set endPrintDate value
     * @param string $endPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria
     */
    public function setEndPrintDate(?string $endPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endPrintDate) && !is_string($endPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endPrintDate, true), gettype($endPrintDate)), __LINE__);
        }
        $this->endPrintDate = $endPrintDate;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintCriteria
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
