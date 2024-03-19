<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAgencySettlementFibuConsoModeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAgencySettlementFibuConsoModeRequest extends AbstractStructBase
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
     * Constructor method for PrintAgencySettlementFibuConsoModeRequest
     * @uses PrintAgencySettlementFibuConsoModeRequest::setSettlementId()
     * @uses PrintAgencySettlementFibuConsoModeRequest::setAgencyId()
     * @param int $settlementId
     * @param string $agencyId
     */
    public function __construct(?int $settlementId = null, ?string $agencyId = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setAgencyId($agencyId);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeRequest
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
}
