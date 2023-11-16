<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteAgencySettlementRequest StructType
 * @subpackage Structs
 */
class ExecuteAgencySettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyProvisionSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $MidocoAgencyProvisionSearchCriteria = null;
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
     * The agencyDebitorNo
     * @var string|null
     */
    protected ?string $agencyDebitorNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The preventPrint
     * @var bool|null
     */
    protected ?bool $preventPrint = null;
    /**
     * The dryRun
     * @var bool|null
     */
    protected ?bool $dryRun = null;
    /**
     * Constructor method for ExecuteAgencySettlementRequest
     * @uses ExecuteAgencySettlementRequest::setMidocoAgencyProvisionSearchCriteria()
     * @uses ExecuteAgencySettlementRequest::setSettlementId()
     * @uses ExecuteAgencySettlementRequest::setAgencyId()
     * @uses ExecuteAgencySettlementRequest::setAgencyDebitorNo()
     * @uses ExecuteAgencySettlementRequest::setReceiptDate()
     * @uses ExecuteAgencySettlementRequest::setPreventPrint()
     * @uses ExecuteAgencySettlementRequest::setDryRun()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria
     * @param int $settlementId
     * @param string $agencyId
     * @param string $agencyDebitorNo
     * @param string $receiptDate
     * @param bool $preventPrint
     * @param bool $dryRun
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null, ?int $settlementId = null, ?string $agencyId = null, ?string $agencyDebitorNo = null, ?string $receiptDate = null, ?bool $preventPrint = null, ?bool $dryRun = null)
    {
        $this
            ->setMidocoAgencyProvisionSearchCriteria($midocoAgencyProvisionSearchCriteria)
            ->setSettlementId($settlementId)
            ->setAgencyId($agencyId)
            ->setAgencyDebitorNo($agencyDebitorNo)
            ->setReceiptDate($receiptDate)
            ->setPreventPrint($preventPrint)
            ->setDryRun($dryRun);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
     */
    public function setMidocoAgencyProvisionSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria $midocoAgencyProvisionSearchCriteria = null): self
    {
        $this->MidocoAgencyProvisionSearchCriteria = $midocoAgencyProvisionSearchCriteria;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
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
     * Get agencyDebitorNo value
     * @return string|null
     */
    public function getAgencyDebitorNo(): ?string
    {
        return $this->agencyDebitorNo;
    }
    /**
     * Set agencyDebitorNo value
     * @param string $agencyDebitorNo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
     */
    public function setAgencyDebitorNo(?string $agencyDebitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyDebitorNo) && !is_string($agencyDebitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyDebitorNo, true), gettype($agencyDebitorNo)), __LINE__);
        }
        $this->agencyDebitorNo = $agencyDebitorNo;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get preventPrint value
     * @return bool|null
     */
    public function getPreventPrint(): ?bool
    {
        return $this->preventPrint;
    }
    /**
     * Set preventPrint value
     * @param bool $preventPrint
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
     */
    public function setPreventPrint(?bool $preventPrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrint) && !is_bool($preventPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrint, true), gettype($preventPrint)), __LINE__);
        }
        $this->preventPrint = $preventPrint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest
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
