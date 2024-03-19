<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAgencySettlementInvoiceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAgencySettlementInvoiceRequest extends AbstractStructBase
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
     * The preview
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preview = null;
    /**
     * Constructor method for PrintAgencySettlementInvoiceRequest
     * @uses PrintAgencySettlementInvoiceRequest::setSettlementId()
     * @uses PrintAgencySettlementInvoiceRequest::setAgencyId()
     * @uses PrintAgencySettlementInvoiceRequest::setPreview()
     * @param int $settlementId
     * @param string $agencyId
     * @param bool $preview
     */
    public function __construct(?int $settlementId = null, ?string $agencyId = null, ?bool $preview = false)
    {
        $this
            ->setSettlementId($settlementId)
            ->setAgencyId($agencyId)
            ->setPreview($preview);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceRequest
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
     * Get preview value
     * @return bool|null
     */
    public function getPreview(): ?bool
    {
        return $this->preview;
    }
    /**
     * Set preview value
     * @param bool $preview
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceRequest
     */
    public function setPreview(?bool $preview = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preview) && !is_bool($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->preview = $preview;
        
        return $this;
    }
}
