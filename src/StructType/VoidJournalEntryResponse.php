<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidJournalEntryResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidJournalEntryResponse extends AbstractStructBase
{
    /**
     * The journal_id
     * @var int|null
     */
    protected ?int $journal_id = null;
    /**
     * Constructor method for VoidJournalEntryResponse
     * @uses VoidJournalEntryResponse::setJournal_id()
     * @param int $journal_id
     */
    public function __construct(?int $journal_id = null)
    {
        $this
            ->setJournal_id($journal_id);
    }
    /**
     * Get journal_id value
     * @return int|null
     */
    public function getJournal_id(): ?int
    {
        return $this->journal_id;
    }
    /**
     * Set journal_id value
     * @param int $journal_id
     * @return \Pggns\MidocoApi\Order\StructType\VoidJournalEntryResponse
     */
    public function setJournal_id(?int $journal_id = null): self
    {
        // validation for constraint: int
        if (!is_null($journal_id) && !(is_int($journal_id) || ctype_digit($journal_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journal_id, true), gettype($journal_id)), __LINE__);
        }
        $this->journal_id = $journal_id;
        
        return $this;
    }
}
