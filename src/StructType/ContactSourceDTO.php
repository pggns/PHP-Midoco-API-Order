<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactSourceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ContactSourceDTO extends AbstractStructBase
{
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The sourceId
     * @var string|null
     */
    protected ?string $sourceId = null;
    /**
     * Constructor method for ContactSourceDTO
     * @uses ContactSourceDTO::setContactId()
     * @uses ContactSourceDTO::setMailingProhibited()
     * @uses ContactSourceDTO::setSourceId()
     * @param int $contactId
     * @param bool $mailingProhibited
     * @param string $sourceId
     */
    public function __construct(?int $contactId = null, ?bool $mailingProhibited = null, ?string $sourceId = null)
    {
        $this
            ->setContactId($contactId)
            ->setMailingProhibited($mailingProhibited)
            ->setSourceId($sourceId);
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Order\StructType\ContactSourceDTO
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
    }
    /**
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Order\StructType\ContactSourceDTO
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get sourceId value
     * @return string|null
     */
    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }
    /**
     * Set sourceId value
     * @param string $sourceId
     * @return \Pggns\MidocoApi\Order\StructType\ContactSourceDTO
     */
    public function setSourceId(?string $sourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sourceId, true), gettype($sourceId)), __LINE__);
        }
        $this->sourceId = $sourceId;
        
        return $this;
    }
}
