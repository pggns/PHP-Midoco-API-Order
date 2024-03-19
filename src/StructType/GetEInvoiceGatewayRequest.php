<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEInvoiceGatewayRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request all available e-invoice gateway configurations of the current or given org unit.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEInvoiceGatewayRequest extends AbstractStructBase
{
    /**
     * The orgUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for GetEInvoiceGatewayRequest
     * @uses GetEInvoiceGatewayRequest::setOrgUnit()
     * @param string $orgUnit
     */
    public function __construct(?string $orgUnit = null)
    {
        $this
            ->setOrgUnit($orgUnit);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetEInvoiceGatewayRequest
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
}
