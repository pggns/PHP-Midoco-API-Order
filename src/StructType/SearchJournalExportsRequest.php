<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchJournalExportsRequest StructType
 * @subpackage Structs
 */
class SearchJournalExportsRequest extends AbstractStructBase
{
    /**
     * The exportDateFrom
     * @var string|null
     */
    protected ?string $exportDateFrom = null;
    /**
     * The exportDateTo
     * @var string|null
     */
    protected ?string $exportDateTo = null;
    /**
     * The exportUser
     * @var string|null
     */
    protected ?string $exportUser = null;
    /**
     * Constructor method for SearchJournalExportsRequest
     * @uses SearchJournalExportsRequest::setExportDateFrom()
     * @uses SearchJournalExportsRequest::setExportDateTo()
     * @uses SearchJournalExportsRequest::setExportUser()
     * @param string $exportDateFrom
     * @param string $exportDateTo
     * @param string $exportUser
     */
    public function __construct(?string $exportDateFrom = null, ?string $exportDateTo = null, ?string $exportUser = null)
    {
        $this
            ->setExportDateFrom($exportDateFrom)
            ->setExportDateTo($exportDateTo)
            ->setExportUser($exportUser);
    }
    /**
     * Get exportDateFrom value
     * @return string|null
     */
    public function getExportDateFrom(): ?string
    {
        return $this->exportDateFrom;
    }
    /**
     * Set exportDateFrom value
     * @param string $exportDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchJournalExportsRequest
     */
    public function setExportDateFrom(?string $exportDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDateFrom) && !is_string($exportDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDateFrom, true), gettype($exportDateFrom)), __LINE__);
        }
        $this->exportDateFrom = $exportDateFrom;
        
        return $this;
    }
    /**
     * Get exportDateTo value
     * @return string|null
     */
    public function getExportDateTo(): ?string
    {
        return $this->exportDateTo;
    }
    /**
     * Set exportDateTo value
     * @param string $exportDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchJournalExportsRequest
     */
    public function setExportDateTo(?string $exportDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDateTo) && !is_string($exportDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDateTo, true), gettype($exportDateTo)), __LINE__);
        }
        $this->exportDateTo = $exportDateTo;
        
        return $this;
    }
    /**
     * Get exportUser value
     * @return string|null
     */
    public function getExportUser(): ?string
    {
        return $this->exportUser;
    }
    /**
     * Set exportUser value
     * @param string $exportUser
     * @return \Pggns\MidocoApi\Order\StructType\SearchJournalExportsRequest
     */
    public function setExportUser(?string $exportUser = null): self
    {
        // validation for constraint: string
        if (!is_null($exportUser) && !is_string($exportUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportUser, true), gettype($exportUser)), __LINE__);
        }
        $this->exportUser = $exportUser;
        
        return $this;
    }
}
