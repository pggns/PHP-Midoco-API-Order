<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManualDtausTransactionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ManualDtausTransactionDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The isExported
     * @var int|null
     */
    protected ?int $isExported = null;
    /**
     * The isPayed
     * @var int|null
     */
    protected ?int $isPayed = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * Constructor method for ManualDtausTransactionDTO
     * @uses ManualDtausTransactionDTO::setAgencyId()
     * @uses ManualDtausTransactionDTO::setDueDate()
     * @uses ManualDtausTransactionDTO::setIsExported()
     * @uses ManualDtausTransactionDTO::setIsPayed()
     * @uses ManualDtausTransactionDTO::setSettlementId()
     * @param string $agencyId
     * @param string $dueDate
     * @param int $isExported
     * @param int $isPayed
     * @param int $settlementId
     */
    public function __construct(?string $agencyId = null, ?string $dueDate = null, ?int $isExported = null, ?int $isPayed = null, ?int $settlementId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setDueDate($dueDate)
            ->setIsExported($isExported)
            ->setIsPayed($isPayed)
            ->setSettlementId($settlementId);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\ManualDtausTransactionDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\ManualDtausTransactionDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return int|null
     */
    public function getIsExported(): ?int
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param int $isExported
     * @return \Pggns\MidocoApi\Order\StructType\ManualDtausTransactionDTO
     */
    public function setIsExported(?int $isExported = null): self
    {
        // validation for constraint: int
        if (!is_null($isExported) && !(is_int($isExported) || ctype_digit($isExported))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isPayed value
     * @return int|null
     */
    public function getIsPayed(): ?int
    {
        return $this->isPayed;
    }
    /**
     * Set isPayed value
     * @param int $isPayed
     * @return \Pggns\MidocoApi\Order\StructType\ManualDtausTransactionDTO
     */
    public function setIsPayed(?int $isPayed = null): self
    {
        // validation for constraint: int
        if (!is_null($isPayed) && !(is_int($isPayed) || ctype_digit($isPayed))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isPayed, true), gettype($isPayed)), __LINE__);
        }
        $this->isPayed = $isPayed;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\ManualDtausTransactionDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
}
