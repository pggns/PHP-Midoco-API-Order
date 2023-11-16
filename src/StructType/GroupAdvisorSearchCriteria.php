<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAdvisorSearchCriteria StructType
 * @subpackage Structs
 */
class GroupAdvisorSearchCriteria extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The freeingDateFrom
     * @var string|null
     */
    protected ?string $freeingDateFrom = null;
    /**
     * The freeingDateTo
     * @var string|null
     */
    protected ?string $freeingDateTo = null;
    /**
     * Constructor method for GroupAdvisorSearchCriteria
     * @uses GroupAdvisorSearchCriteria::setMediatorId()
     * @uses GroupAdvisorSearchCriteria::setFreeingDateFrom()
     * @uses GroupAdvisorSearchCriteria::setFreeingDateTo()
     * @param string $mediatorId
     * @param string $freeingDateFrom
     * @param string $freeingDateTo
     */
    public function __construct(?string $mediatorId = null, ?string $freeingDateFrom = null, ?string $freeingDateTo = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setFreeingDateFrom($freeingDateFrom)
            ->setFreeingDateTo($freeingDateTo);
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get freeingDateFrom value
     * @return string|null
     */
    public function getFreeingDateFrom(): ?string
    {
        return $this->freeingDateFrom;
    }
    /**
     * Set freeingDateFrom value
     * @param string $freeingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria
     */
    public function setFreeingDateFrom(?string $freeingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($freeingDateFrom) && !is_string($freeingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeingDateFrom, true), gettype($freeingDateFrom)), __LINE__);
        }
        $this->freeingDateFrom = $freeingDateFrom;
        
        return $this;
    }
    /**
     * Get freeingDateTo value
     * @return string|null
     */
    public function getFreeingDateTo(): ?string
    {
        return $this->freeingDateTo;
    }
    /**
     * Set freeingDateTo value
     * @param string $freeingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria
     */
    public function setFreeingDateTo(?string $freeingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($freeingDateTo) && !is_string($freeingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeingDateTo, true), gettype($freeingDateTo)), __LINE__);
        }
        $this->freeingDateTo = $freeingDateTo;
        
        return $this;
    }
}
