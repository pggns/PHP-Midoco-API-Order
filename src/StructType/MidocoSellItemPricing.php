<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemPricing StructType
 * @subpackage Structs
 */
class MidocoSellItemPricing extends SellItemPricingDTO
{
    /**
     * The brokerCalculatedCommissionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $brokerCalculatedCommissionAmount = null;
    /**
     * The brokerPaidCommissionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $brokerPaidCommissionAmount = null;
    /**
     * The agencyCalculatedCommissionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agencyCalculatedCommissionAmount = null;
    /**
     * The agencyCommissionBaseAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agencyCommissionBaseAmount = null;
    /**
     * The agencyCurrencyCalculatedCommissionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agencyCurrencyCalculatedCommissionAmount = null;
    /**
     * The agencyPercentAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agencyPercentAmount = null;
    /**
     * The agencyPaidCommissionAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $agencyPaidCommissionAmount = null;
    /**
     * The hasCalculatorPriority
     * Meta information extracted from the WSDL
     * - documentation: Let the backend know that the values from the sellitempricing have priority. It triggers when the user saved the fx calculator dialog.
     * - default: false
     * @var bool|null
     */
    protected ?bool $hasCalculatorPriority = null;
    /**
     * The isManualBrokerCommission
     * Meta information extracted from the WSDL
     * - documentation: A flag from gui that the backend knows that the broker/mediator calculated commission was manually changed by user. It triggers a creation of a sellitem attribute that the calc mediator amount is fixed and not changable by mediator
     * automation.
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isManualBrokerCommission = null;
    /**
     * Constructor method for MidocoSellItemPricing
     * @uses MidocoSellItemPricing::setBrokerCalculatedCommissionAmount()
     * @uses MidocoSellItemPricing::setBrokerPaidCommissionAmount()
     * @uses MidocoSellItemPricing::setAgencyCalculatedCommissionAmount()
     * @uses MidocoSellItemPricing::setAgencyCommissionBaseAmount()
     * @uses MidocoSellItemPricing::setAgencyCurrencyCalculatedCommissionAmount()
     * @uses MidocoSellItemPricing::setAgencyPercentAmount()
     * @uses MidocoSellItemPricing::setAgencyPaidCommissionAmount()
     * @uses MidocoSellItemPricing::setHasCalculatorPriority()
     * @uses MidocoSellItemPricing::setIsManualBrokerCommission()
     * @param float $brokerCalculatedCommissionAmount
     * @param float $brokerPaidCommissionAmount
     * @param float $agencyCalculatedCommissionAmount
     * @param float $agencyCommissionBaseAmount
     * @param float $agencyCurrencyCalculatedCommissionAmount
     * @param float $agencyPercentAmount
     * @param float $agencyPaidCommissionAmount
     * @param bool $hasCalculatorPriority
     * @param bool $isManualBrokerCommission
     */
    public function __construct(?float $brokerCalculatedCommissionAmount = null, ?float $brokerPaidCommissionAmount = null, ?float $agencyCalculatedCommissionAmount = null, ?float $agencyCommissionBaseAmount = null, ?float $agencyCurrencyCalculatedCommissionAmount = null, ?float $agencyPercentAmount = null, ?float $agencyPaidCommissionAmount = null, ?bool $hasCalculatorPriority = false, ?bool $isManualBrokerCommission = false)
    {
        $this
            ->setBrokerCalculatedCommissionAmount($brokerCalculatedCommissionAmount)
            ->setBrokerPaidCommissionAmount($brokerPaidCommissionAmount)
            ->setAgencyCalculatedCommissionAmount($agencyCalculatedCommissionAmount)
            ->setAgencyCommissionBaseAmount($agencyCommissionBaseAmount)
            ->setAgencyCurrencyCalculatedCommissionAmount($agencyCurrencyCalculatedCommissionAmount)
            ->setAgencyPercentAmount($agencyPercentAmount)
            ->setAgencyPaidCommissionAmount($agencyPaidCommissionAmount)
            ->setHasCalculatorPriority($hasCalculatorPriority)
            ->setIsManualBrokerCommission($isManualBrokerCommission);
    }
    /**
     * Get brokerCalculatedCommissionAmount value
     * @return float|null
     */
    public function getBrokerCalculatedCommissionAmount(): ?float
    {
        return $this->brokerCalculatedCommissionAmount;
    }
    /**
     * Set brokerCalculatedCommissionAmount value
     * @param float $brokerCalculatedCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setBrokerCalculatedCommissionAmount(?float $brokerCalculatedCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($brokerCalculatedCommissionAmount) && !(is_float($brokerCalculatedCommissionAmount) || is_numeric($brokerCalculatedCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($brokerCalculatedCommissionAmount, true), gettype($brokerCalculatedCommissionAmount)), __LINE__);
        }
        $this->brokerCalculatedCommissionAmount = $brokerCalculatedCommissionAmount;
        
        return $this;
    }
    /**
     * Get brokerPaidCommissionAmount value
     * @return float|null
     */
    public function getBrokerPaidCommissionAmount(): ?float
    {
        return $this->brokerPaidCommissionAmount;
    }
    /**
     * Set brokerPaidCommissionAmount value
     * @param float $brokerPaidCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setBrokerPaidCommissionAmount(?float $brokerPaidCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($brokerPaidCommissionAmount) && !(is_float($brokerPaidCommissionAmount) || is_numeric($brokerPaidCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($brokerPaidCommissionAmount, true), gettype($brokerPaidCommissionAmount)), __LINE__);
        }
        $this->brokerPaidCommissionAmount = $brokerPaidCommissionAmount;
        
        return $this;
    }
    /**
     * Get agencyCalculatedCommissionAmount value
     * @return float|null
     */
    public function getAgencyCalculatedCommissionAmount(): ?float
    {
        return $this->agencyCalculatedCommissionAmount;
    }
    /**
     * Set agencyCalculatedCommissionAmount value
     * @param float $agencyCalculatedCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setAgencyCalculatedCommissionAmount(?float $agencyCalculatedCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCalculatedCommissionAmount) && !(is_float($agencyCalculatedCommissionAmount) || is_numeric($agencyCalculatedCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCalculatedCommissionAmount, true), gettype($agencyCalculatedCommissionAmount)), __LINE__);
        }
        $this->agencyCalculatedCommissionAmount = $agencyCalculatedCommissionAmount;
        
        return $this;
    }
    /**
     * Get agencyCommissionBaseAmount value
     * @return float|null
     */
    public function getAgencyCommissionBaseAmount(): ?float
    {
        return $this->agencyCommissionBaseAmount;
    }
    /**
     * Set agencyCommissionBaseAmount value
     * @param float $agencyCommissionBaseAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setAgencyCommissionBaseAmount(?float $agencyCommissionBaseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCommissionBaseAmount) && !(is_float($agencyCommissionBaseAmount) || is_numeric($agencyCommissionBaseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCommissionBaseAmount, true), gettype($agencyCommissionBaseAmount)), __LINE__);
        }
        $this->agencyCommissionBaseAmount = $agencyCommissionBaseAmount;
        
        return $this;
    }
    /**
     * Get agencyCurrencyCalculatedCommissionAmount value
     * @return float|null
     */
    public function getAgencyCurrencyCalculatedCommissionAmount(): ?float
    {
        return $this->agencyCurrencyCalculatedCommissionAmount;
    }
    /**
     * Set agencyCurrencyCalculatedCommissionAmount value
     * @param float $agencyCurrencyCalculatedCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setAgencyCurrencyCalculatedCommissionAmount(?float $agencyCurrencyCalculatedCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyCurrencyCalculatedCommissionAmount) && !(is_float($agencyCurrencyCalculatedCommissionAmount) || is_numeric($agencyCurrencyCalculatedCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyCurrencyCalculatedCommissionAmount, true), gettype($agencyCurrencyCalculatedCommissionAmount)), __LINE__);
        }
        $this->agencyCurrencyCalculatedCommissionAmount = $agencyCurrencyCalculatedCommissionAmount;
        
        return $this;
    }
    /**
     * Get agencyPercentAmount value
     * @return float|null
     */
    public function getAgencyPercentAmount(): ?float
    {
        return $this->agencyPercentAmount;
    }
    /**
     * Set agencyPercentAmount value
     * @param float $agencyPercentAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setAgencyPercentAmount(?float $agencyPercentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyPercentAmount) && !(is_float($agencyPercentAmount) || is_numeric($agencyPercentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyPercentAmount, true), gettype($agencyPercentAmount)), __LINE__);
        }
        $this->agencyPercentAmount = $agencyPercentAmount;
        
        return $this;
    }
    /**
     * Get agencyPaidCommissionAmount value
     * @return float|null
     */
    public function getAgencyPaidCommissionAmount(): ?float
    {
        return $this->agencyPaidCommissionAmount;
    }
    /**
     * Set agencyPaidCommissionAmount value
     * @param float $agencyPaidCommissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setAgencyPaidCommissionAmount(?float $agencyPaidCommissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($agencyPaidCommissionAmount) && !(is_float($agencyPaidCommissionAmount) || is_numeric($agencyPaidCommissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($agencyPaidCommissionAmount, true), gettype($agencyPaidCommissionAmount)), __LINE__);
        }
        $this->agencyPaidCommissionAmount = $agencyPaidCommissionAmount;
        
        return $this;
    }
    /**
     * Get hasCalculatorPriority value
     * @return bool|null
     */
    public function getHasCalculatorPriority(): ?bool
    {
        return $this->hasCalculatorPriority;
    }
    /**
     * Set hasCalculatorPriority value
     * @param bool $hasCalculatorPriority
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setHasCalculatorPriority(?bool $hasCalculatorPriority = false): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCalculatorPriority) && !is_bool($hasCalculatorPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCalculatorPriority, true), gettype($hasCalculatorPriority)), __LINE__);
        }
        $this->hasCalculatorPriority = $hasCalculatorPriority;
        
        return $this;
    }
    /**
     * Get isManualBrokerCommission value
     * @return bool|null
     */
    public function getIsManualBrokerCommission(): ?bool
    {
        return $this->isManualBrokerCommission;
    }
    /**
     * Set isManualBrokerCommission value
     * @param bool $isManualBrokerCommission
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemPricing
     */
    public function setIsManualBrokerCommission(?bool $isManualBrokerCommission = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isManualBrokerCommission) && !is_bool($isManualBrokerCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManualBrokerCommission, true), gettype($isManualBrokerCommission)), __LINE__);
        }
        $this->isManualBrokerCommission = $isManualBrokerCommission;
        
        return $this;
    }
}
