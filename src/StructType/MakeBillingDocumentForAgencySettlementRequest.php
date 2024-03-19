<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForAgencySettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocumentForAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The MidocoAgencyProvisionSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyProvisionSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $MidocoAgencyProvisionSearchCriteria = null;
    /**
     * The dryRun
     * @var bool|null
     */
    protected ?bool $dryRun = null;
    /**
     * Constructor method for MakeBillingDocumentForAgencySettlementRequest
     * @uses MakeBillingDocumentForAgencySettlementRequest::setSettlementId()
     * @uses MakeBillingDocumentForAgencySettlementRequest::setAgencyId()
     * @uses MakeBillingDocumentForAgencySettlementRequest::setMidocoAgencyProvisionSearchCriteria()
     * @uses MakeBillingDocumentForAgencySettlementRequest::setDryRun()
     * @param int $settlementId
     * @param string $agencyId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria
     * @param bool $dryRun
     */
    public function __construct(?int $settlementId = null, ?string $agencyId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null, ?bool $dryRun = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setAgencyId($agencyId)
            ->setMidocoAgencyProvisionSearchCriteria($midocoAgencyProvisionSearchCriteria)
            ->setDryRun($dryRun);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest
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
     * Get MidocoAgencyProvisionSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria|null
     */
    public function getMidocoAgencyProvisionSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
    {
        return $this->MidocoAgencyProvisionSearchCriteria;
    }
    /**
     * Set MidocoAgencyProvisionSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest
     */
    public function setMidocoAgencyProvisionSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null): self
    {
        $this->MidocoAgencyProvisionSearchCriteria = $midocoAgencyProvisionSearchCriteria;
        
        return $this;
    }
    /**
     * Get dryRun value
     * @return bool|null
     */
    public function getDryRun(): ?bool
    {
        return $this->dryRun;
    }
    /**
     * Set dryRun value
     * @param bool $dryRun
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest
     */
    public function setDryRun(?bool $dryRun = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dryRun) && !is_bool($dryRun)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dryRun, true), gettype($dryRun)), __LINE__);
        }
        $this->dryRun = $dryRun;
        
        return $this;
    }
}
