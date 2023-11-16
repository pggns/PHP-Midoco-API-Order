<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashTurnoverExportDTO StructType
 * @subpackage Structs
 */
class CashTurnoverExportDTO extends AbstractStructBase
{
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The exportData
     * @var string|null
     */
    protected ?string $exportData = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * Constructor method for CashTurnoverExportDTO
     * @uses CashTurnoverExportDTO::setCashBookId()
     * @uses CashTurnoverExportDTO::setCreationUser()
     * @uses CashTurnoverExportDTO::setExportData()
     * @uses CashTurnoverExportDTO::setExportDate()
     * @uses CashTurnoverExportDTO::setExportId()
     * @param int $cashBookId
     * @param int $creationUser
     * @param string $exportData
     * @param string $exportDate
     * @param int $exportId
     */
    public function __construct(?int $cashBookId = null, ?int $creationUser = null, ?string $exportData = null, ?string $exportDate = null, ?int $exportId = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setCreationUser($creationUser)
            ->setExportData($exportData)
            ->setExportDate($exportDate)
            ->setExportId($exportId);
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
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverExportDTO
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
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverExportDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get exportData value
     * @return string|null
     */
    public function getExportData(): ?string
    {
        return $this->exportData;
    }
    /**
     * Set exportData value
     * @param string $exportData
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverExportDTO
     */
    public function setExportData(?string $exportData = null): self
    {
        // validation for constraint: string
        if (!is_null($exportData) && !is_string($exportData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportData, true), gettype($exportData)), __LINE__);
        }
        $this->exportData = $exportData;
        
        return $this;
    }
    /**
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverExportDTO
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\CashTurnoverExportDTO
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
}
