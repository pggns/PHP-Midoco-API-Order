<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupAdvisorSettlementCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GroupAdvisorSettlementCriteria extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountIdVat
     * @var string|null
     */
    protected ?string $accountIdVat = null;
    /**
     * Constructor method for GroupAdvisorSettlementCriteria
     * @uses GroupAdvisorSettlementCriteria::setAccountId()
     * @uses GroupAdvisorSettlementCriteria::setAccountIdVat()
     * @param string $accountId
     * @param string $accountIdVat
     */
    public function __construct(?string $accountId = null, ?string $accountIdVat = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAccountIdVat($accountIdVat);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementCriteria
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountIdVat value
     * @return string|null
     */
    public function getAccountIdVat(): ?string
    {
        return $this->accountIdVat;
    }
    /**
     * Set accountIdVat value
     * @param string $accountIdVat
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSettlementCriteria
     */
    public function setAccountIdVat(?string $accountIdVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdVat) && !is_string($accountIdVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdVat, true), gettype($accountIdVat)), __LINE__);
        }
        $this->accountIdVat = $accountIdVat;
        
        return $this;
    }
}
