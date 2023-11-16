<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JournalAttributeDTO StructType
 * @subpackage Structs
 */
class JournalAttributeDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The attribValue
     * @var string|null
     */
    protected ?string $attribValue = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * Constructor method for JournalAttributeDTO
     * @uses JournalAttributeDTO::setAttribName()
     * @uses JournalAttributeDTO::setAttribValue()
     * @uses JournalAttributeDTO::setJournalId()
     * @param string $attribName
     * @param string $attribValue
     * @param int $journalId
     */
    public function __construct(?string $attribName = null, ?string $attribValue = null, ?int $journalId = null)
    {
        $this
            ->setAttribName($attribName)
            ->setAttribValue($attribValue)
            ->setJournalId($journalId);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
        return $this;
    }
    /**
     * Get attribValue value
     * @return string|null
     */
    public function getAttribValue(): ?string
    {
        return $this->attribValue;
    }
    /**
     * Set attribValue value
     * @param string $attribValue
     * @return \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO
     */
    public function setAttribValue(?string $attribValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attribValue) && !is_string($attribValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribValue, true), gettype($attribValue)), __LINE__);
        }
        $this->attribValue = $attribValue;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\JournalAttributeDTO
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
        return $this;
    }
}
