<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareGroupAdvisorCommissionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareGroupAdvisorCommissionRequest extends AbstractStructBase
{
    /**
     * The GroupAdvisorSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: GroupAdvisorSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $GroupAdvisorSearchCriteria = null;
    /**
     * Constructor method for PrepareGroupAdvisorCommissionRequest
     * @uses PrepareGroupAdvisorCommissionRequest::setGroupAdvisorSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria = null)
    {
        $this
            ->setGroupAdvisorSearchCriteria($groupAdvisorSearchCriteria);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareGroupAdvisorCommissionRequest
     */
    public function setGroupAdvisorSearchCriteria(?\Pggns\MidocoApi\Order\StructType\GroupAdvisorSearchCriteria $groupAdvisorSearchCriteria = null): self
    {
        $this->GroupAdvisorSearchCriteria = $groupAdvisorSearchCriteria;
        
        return $this;
    }
}
