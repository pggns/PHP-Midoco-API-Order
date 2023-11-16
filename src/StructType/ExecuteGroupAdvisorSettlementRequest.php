<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteGroupAdvisorSettlementRequest StructType
 * @subpackage Structs
 */
class ExecuteGroupAdvisorSettlementRequest extends AbstractStructBase
{
    /**
     * The GroupAdvisorSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: GroupAdvisorSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $GroupAdvisorSearchCriteria = null;
    /**
     * The accountIdVat
     * @var string|null
     */
    protected ?string $accountIdVat = null;
    /**
     * The accountIdNoVat
     * @var string|null
     */
    protected ?string $accountIdNoVat = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The action
     * Meta information extracted from the WSDL
     * - default: PREVIEW
     * @var string|null
     */
    protected ?string $action = null;
    /**
     * Constructor method for ExecuteGroupAdvisorSettlementRequest
     * @uses ExecuteGroupAdvisorSettlementRequest::setGroupAdvisorSearchCriteria()
     * @uses ExecuteGroupAdvisorSettlementRequest::setAccountIdVat()
     * @uses ExecuteGroupAdvisorSettlementRequest::setAccountIdNoVat()
     * @uses ExecuteGroupAdvisorSettlementRequest::setStartDate()
     * @uses ExecuteGroupAdvisorSettlementRequest::setEndDate()
     * @uses ExecuteGroupAdvisorSettlementRequest::setAction()
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria
     * @param string $accountIdVat
     * @param string $accountIdNoVat
     * @param string $startDate
     * @param string $endDate
     * @param string $action
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria = null, ?string $accountIdVat = null, ?string $accountIdNoVat = null, ?string $startDate = null, ?string $endDate = null, ?string $action = 'PREVIEW')
    {
        $this
            ->setGroupAdvisorSearchCriteria($groupAdvisorSearchCriteria)
            ->setAccountIdVat($accountIdVat)
            ->setAccountIdNoVat($accountIdNoVat)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setAction($action);
    }
    /**
     * Get GroupAdvisorSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria|null
     */
    public function getGroupAdvisorSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria
    {
        return $this->GroupAdvisorSearchCriteria;
    }
    /**
     * Set GroupAdvisorSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest
     */
    public function setGroupAdvisorSearchCriteria(?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria = null): self
    {
        $this->GroupAdvisorSearchCriteria = $groupAdvisorSearchCriteria;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest
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
    /**
     * Get accountIdNoVat value
     * @return string|null
     */
    public function getAccountIdNoVat(): ?string
    {
        return $this->accountIdNoVat;
    }
    /**
     * Set accountIdNoVat value
     * @param string $accountIdNoVat
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest
     */
    public function setAccountIdNoVat(?string $accountIdNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdNoVat) && !is_string($accountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdNoVat, true), gettype($accountIdNoVat)), __LINE__);
        }
        $this->accountIdNoVat = $accountIdNoVat;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction(): ?string
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest
     */
    public function setAction(?string $action = 'PREVIEW'): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->action = $action;
        
        return $this;
    }
}
