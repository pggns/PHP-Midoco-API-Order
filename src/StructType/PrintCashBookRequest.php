<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCashBookRequest StructType
 * @subpackage Structs
 */
class PrintCashBookRequest extends AbstractStructBase
{
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The printUsers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $printUsers = null;
    /**
     * Constructor method for PrintCashBookRequest
     * @uses PrintCashBookRequest::setCashBookId()
     * @uses PrintCashBookRequest::setEndDate()
     * @uses PrintCashBookRequest::setUserId()
     * @uses PrintCashBookRequest::setPrintUsers()
     * @param int $cashBookId
     * @param string $endDate
     * @param int $userId
     * @param bool $printUsers
     */
    public function __construct(?int $cashBookId = null, ?string $endDate = null, ?int $userId = null, ?bool $printUsers = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setEndDate($endDate)
            ->setUserId($userId)
            ->setPrintUsers($printUsers);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintCashBookRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintCashBookRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintCashBookRequest
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
    /**
     * Get printUsers value
     * @return bool|null
     */
    public function getPrintUsers(): ?bool
    {
        return $this->printUsers;
    }
    /**
     * Set printUsers value
     * @param bool $printUsers
     * @return \Pggns\MidocoApi\Order\StructType\PrintCashBookRequest
     */
    public function setPrintUsers(?bool $printUsers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printUsers) && !is_bool($printUsers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printUsers, true), gettype($printUsers)), __LINE__);
        }
        $this->printUsers = $printUsers;
        
        return $this;
    }
}
