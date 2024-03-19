<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemProvisionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemProvisionRequest extends AbstractStructBase
{
    /**
     * The SellItemProvisionSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: SellItemProvisionSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType $SellItemProvisionSearchCriteria = null;
    /**
     * The adviceSettlementId
     * @var int|null
     */
    protected ?int $adviceSettlementId = null;
    /**
     * Constructor method for GetSellItemProvisionRequest
     * @uses GetSellItemProvisionRequest::setSellItemProvisionSearchCriteria()
     * @uses GetSellItemProvisionRequest::setAdviceSettlementId()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType $sellItemProvisionSearchCriteria
     * @param int $adviceSettlementId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType $sellItemProvisionSearchCriteria = null, ?int $adviceSettlementId = null)
    {
        $this
            ->setSellItemProvisionSearchCriteria($sellItemProvisionSearchCriteria)
            ->setAdviceSettlementId($adviceSettlementId);
    }
    /**
     * Get SellItemProvisionSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType|null
     */
    public function getSellItemProvisionSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType
    {
        return $this->SellItemProvisionSearchCriteria;
    }
    /**
     * Set SellItemProvisionSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType $sellItemProvisionSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionRequest
     */
    public function setSellItemProvisionSearchCriteria(?\Pggns\MidocoApi\Order\StructType\SellItemProvisionSearchCriteriaType $sellItemProvisionSearchCriteria = null): self
    {
        $this->SellItemProvisionSearchCriteria = $sellItemProvisionSearchCriteria;
        
        return $this;
    }
    /**
     * Get adviceSettlementId value
     * @return int|null
     */
    public function getAdviceSettlementId(): ?int
    {
        return $this->adviceSettlementId;
    }
    /**
     * Set adviceSettlementId value
     * @param int $adviceSettlementId
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemProvisionRequest
     */
    public function setAdviceSettlementId(?int $adviceSettlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($adviceSettlementId) && !(is_int($adviceSettlementId) || ctype_digit($adviceSettlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adviceSettlementId, true), gettype($adviceSettlementId)), __LINE__);
        }
        $this->adviceSettlementId = $adviceSettlementId;
        
        return $this;
    }
}
