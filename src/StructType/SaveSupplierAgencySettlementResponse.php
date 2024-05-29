<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierAgencySettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAgencySettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $MidocoSupplierAgencySettlement = null;
    /**
     * The needsCheck
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $needsCheck = null;
    /**
     * Constructor method for SaveSupplierAgencySettlementResponse
     * @uses SaveSupplierAgencySettlementResponse::setMidocoSupplierAgencySettlement()
     * @uses SaveSupplierAgencySettlementResponse::setNeedsCheck()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     * @param bool $needsCheck
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null, ?bool $needsCheck = false)
    {
        $this
            ->setMidocoSupplierAgencySettlement($midocoSupplierAgencySettlement)
            ->setNeedsCheck($needsCheck);
    }
    /**
     * Get MidocoSupplierAgencySettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement|null
     */
    public function getMidocoSupplierAgencySettlement(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement
    {
        return $this->MidocoSupplierAgencySettlement;
    }
    /**
     * Set MidocoSupplierAgencySettlement value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierAgencySettlementResponse
     */
    public function setMidocoSupplierAgencySettlement(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierAgencySettlement $midocoSupplierAgencySettlement = null): self
    {
        $this->MidocoSupplierAgencySettlement = $midocoSupplierAgencySettlement;
        
        return $this;
    }
    /**
     * Get needsCheck value
     * @return bool|null
     */
    public function getNeedsCheck(): ?bool
    {
        return $this->needsCheck;
    }
    /**
     * Set needsCheck value
     * @param bool $needsCheck
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplierAgencySettlementResponse
     */
    public function setNeedsCheck(?bool $needsCheck = false): self
    {
        // validation for constraint: boolean
        if (!is_null($needsCheck) && !is_bool($needsCheck)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsCheck, true), gettype($needsCheck)), __LINE__);
        }
        $this->needsCheck = $needsCheck;
        
        return $this;
    }
}
