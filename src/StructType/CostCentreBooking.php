<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CostCentreBooking StructType
 * @subpackage Structs
 */
class CostCentreBooking extends AbstractStructBase
{
    /**
     * The accountId
     * Meta information extracted from the WSDL
     * - documentation: cost centre account
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The costCentre
     * Meta information extracted from the WSDL
     * - documentation: referred cost centre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The costAmount
     * Meta information extracted from the WSDL
     * - documentation: booked cost amount (brutto, including VAT)
     * @var float|null
     */
    protected ?float $costAmount = null;
    /**
     * Constructor method for CostCentreBooking
     * @uses CostCentreBooking::setAccountId()
     * @uses CostCentreBooking::setCostCentre()
     * @uses CostCentreBooking::setCostAmount()
     * @param string $accountId
     * @param string $costCentre
     * @param float $costAmount
     */
    public function __construct(?string $accountId = null, ?string $costCentre = null, ?float $costAmount = null)
    {
        $this
            ->setAccountId($accountId)
            ->setCostCentre($costCentre)
            ->setCostAmount($costAmount);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreBooking
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreBooking
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Get costAmount value
     * @return float|null
     */
    public function getCostAmount(): ?float
    {
        return $this->costAmount;
    }
    /**
     * Set costAmount value
     * @param float $costAmount
     * @return \Pggns\MidocoApi\Order\StructType\CostCentreBooking
     */
    public function setCostAmount(?float $costAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($costAmount) && !(is_float($costAmount) || is_numeric($costAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($costAmount, true), gettype($costAmount)), __LINE__);
        }
        $this->costAmount = $costAmount;
        
        return $this;
    }
}
