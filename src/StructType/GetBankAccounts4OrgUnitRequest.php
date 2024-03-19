<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccounts4OrgUnitRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: return all bank accounts to a given orgUnit
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBankAccounts4OrgUnitRequest extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The forQR
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $forQR = null;
    /**
     * Constructor method for GetBankAccounts4OrgUnitRequest
     * @uses GetBankAccounts4OrgUnitRequest::setOrgUnit()
     * @uses GetBankAccounts4OrgUnitRequest::setForQR()
     * @param string $orgUnit
     * @param bool $forQR
     */
    public function __construct(?string $orgUnit = null, ?bool $forQR = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setForQR($forQR);
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\GetBankAccounts4OrgUnitRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get forQR value
     * @return bool|null
     */
    public function getForQR(): ?bool
    {
        return $this->forQR;
    }
    /**
     * Set forQR value
     * @param bool $forQR
     * @return \Pggns\MidocoApi\Order\StructType\GetBankAccounts4OrgUnitRequest
     */
    public function setForQR(?bool $forQR = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forQR) && !is_bool($forQR)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forQR, true), gettype($forQR)), __LINE__);
        }
        $this->forQR = $forQR;
        
        return $this;
    }
}
