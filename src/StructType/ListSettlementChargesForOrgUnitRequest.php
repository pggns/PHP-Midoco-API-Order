<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSettlementChargesForOrgUnitRequest StructType
 * @subpackage Structs
 */
class ListSettlementChargesForOrgUnitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The settlementType
     * @var int|null
     */
    protected ?int $settlementType = null;
    /**
     * Constructor method for ListSettlementChargesForOrgUnitRequest
     * @uses ListSettlementChargesForOrgUnitRequest::setUnitName()
     * @uses ListSettlementChargesForOrgUnitRequest::setSettlementType()
     * @param string $unitName
     * @param int $settlementType
     */
    public function __construct(?string $unitName = null, ?int $settlementType = null)
    {
        $this
            ->setUnitName($unitName)
            ->setSettlementType($settlementType);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesForOrgUnitRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return int|null
     */
    public function getSettlementType(): ?int
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param int $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\ListSettlementChargesForOrgUnitRequest
     */
    public function setSettlementType(?int $settlementType = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementType) && !(is_int($settlementType) || ctype_digit($settlementType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
}
