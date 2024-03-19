<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatemEntryPurposeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankStatemEntryPurposeDTO extends AbstractStructBase
{
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * The entryPosition
     * @var int|null
     */
    protected ?int $entryPosition = null;
    /**
     * The pos
     * @var int|null
     */
    protected ?int $pos = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for BankStatemEntryPurposeDTO
     * @uses BankStatemEntryPurposeDTO::setAccountPosition()
     * @uses BankStatemEntryPurposeDTO::setEntryPosition()
     * @uses BankStatemEntryPurposeDTO::setPos()
     * @uses BankStatemEntryPurposeDTO::setStatementId()
     * @uses BankStatemEntryPurposeDTO::setValue()
     * @param int $accountPosition
     * @param int $entryPosition
     * @param int $pos
     * @param int $statementId
     * @param string $value
     */
    public function __construct(?int $accountPosition = null, ?int $entryPosition = null, ?int $pos = null, ?int $statementId = null, ?string $value = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setEntryPosition($entryPosition)
            ->setPos($pos)
            ->setStatementId($statementId)
            ->setValue($value);
    }
    /**
     * Get accountPosition value
     * @return int|null
     */
    public function getAccountPosition(): ?int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryPurposeDTO
     */
    public function setAccountPosition(?int $accountPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
    /**
     * Get entryPosition value
     * @return int|null
     */
    public function getEntryPosition(): ?int
    {
        return $this->entryPosition;
    }
    /**
     * Set entryPosition value
     * @param int $entryPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryPurposeDTO
     */
    public function setEntryPosition(?int $entryPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($entryPosition) && !(is_int($entryPosition) || ctype_digit($entryPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entryPosition, true), gettype($entryPosition)), __LINE__);
        }
        $this->entryPosition = $entryPosition;
        
        return $this;
    }
    /**
     * Get pos value
     * @return int|null
     */
    public function getPos(): ?int
    {
        return $this->pos;
    }
    /**
     * Set pos value
     * @param int $pos
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryPurposeDTO
     */
    public function setPos(?int $pos = null): self
    {
        // validation for constraint: int
        if (!is_null($pos) && !(is_int($pos) || ctype_digit($pos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pos, true), gettype($pos)), __LINE__);
        }
        $this->pos = $pos;
        
        return $this;
    }
    /**
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryPurposeDTO
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryPurposeDTO
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
