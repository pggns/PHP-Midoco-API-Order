<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckAgencySettlementLevelResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckAgencySettlementLevelResponse extends AbstractStructBase
{
    /**
     * The overlapsExistingSettlement
     * @var bool|null
     */
    protected ?bool $overlapsExistingSettlement = null;
    /**
     * Constructor method for CheckAgencySettlementLevelResponse
     * @uses CheckAgencySettlementLevelResponse::setOverlapsExistingSettlement()
     * @param bool $overlapsExistingSettlement
     */
    public function __construct(?bool $overlapsExistingSettlement = null)
    {
        $this
            ->setOverlapsExistingSettlement($overlapsExistingSettlement);
    }
    /**
     * Get overlapsExistingSettlement value
     * @return bool|null
     */
    public function getOverlapsExistingSettlement(): ?bool
    {
        return $this->overlapsExistingSettlement;
    }
    /**
     * Set overlapsExistingSettlement value
     * @param bool $overlapsExistingSettlement
     * @return \Pggns\MidocoApi\Order\StructType\CheckAgencySettlementLevelResponse
     */
    public function setOverlapsExistingSettlement(?bool $overlapsExistingSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($overlapsExistingSettlement) && !is_bool($overlapsExistingSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overlapsExistingSettlement, true), gettype($overlapsExistingSettlement)), __LINE__);
        }
        $this->overlapsExistingSettlement = $overlapsExistingSettlement;
        
        return $this;
    }
}
