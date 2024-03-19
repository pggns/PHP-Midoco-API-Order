<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoInvoiceConditionsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Request all available auto invoice conditions of the current org unit.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAutoInvoiceConditionsRequest extends AbstractStructBase
{
    /**
     * The orgUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The MidocoAutoInvoiceCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: MidocoAutoInvoiceCondition
     * @var \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $MidocoAutoInvoiceCondition = null;
    /**
     * Constructor method for GetAutoInvoiceConditionsRequest
     * @uses GetAutoInvoiceConditionsRequest::setOrgUnit()
     * @uses GetAutoInvoiceConditionsRequest::setMidocoAutoInvoiceCondition()
     * @param string $orgUnit
     * @param \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     */
    public function __construct(?string $orgUnit = null, ?\Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setMidocoAutoInvoiceCondition($midocoAutoInvoiceCondition);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAutoInvoiceConditionsRequest
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
     * Get MidocoAutoInvoiceCondition value
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO|null
     */
    public function getMidocoAutoInvoiceCondition(): ?\Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
    {
        return $this->MidocoAutoInvoiceCondition;
    }
    /**
     * Set MidocoAutoInvoiceCondition value
     * @param \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition
     * @return \Pggns\MidocoApi\Order\StructType\GetAutoInvoiceConditionsRequest
     */
    public function setMidocoAutoInvoiceCondition(?\Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO $midocoAutoInvoiceCondition = null): self
    {
        $this->MidocoAutoInvoiceCondition = $midocoAutoInvoiceCondition;
        
        return $this;
    }
}
