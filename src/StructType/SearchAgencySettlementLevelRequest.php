<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAgencySettlementLevelRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchAgencySettlementLevelRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * Constructor method for SearchAgencySettlementLevelRequest
     * @uses SearchAgencySettlementLevelRequest::setAgencyId()
     * @uses SearchAgencySettlementLevelRequest::setCooperationId()
     * @uses SearchAgencySettlementLevelRequest::setCreationDateFrom()
     * @uses SearchAgencySettlementLevelRequest::setCreationDateTo()
     * @param string $agencyId
     * @param string $cooperationId
     * @param string $creationDateFrom
     * @param string $creationDateTo
     */
    public function __construct(?string $agencyId = null, ?string $cooperationId = null, ?string $creationDateFrom = null, ?string $creationDateTo = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setCooperationId($cooperationId)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest
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
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
}
