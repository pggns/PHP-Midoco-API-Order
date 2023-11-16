<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateBonusCalculationRequest StructType
 * @subpackage Structs
 */
class ValidateBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusCalculation
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $MidocoBonusCalculation = null;
    /**
     * Constructor method for ValidateBonusCalculationRequest
     * @uses ValidateBonusCalculationRequest::setMidocoBonusCalculation()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null)
    {
        $this
            ->setMidocoBonusCalculation($midocoBonusCalculation);
    }
    /**
     * Get MidocoBonusCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation|null
     */
    public function getMidocoBonusCalculation(): ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation
    {
        return $this->MidocoBonusCalculation;
    }
    /**
     * Set MidocoBonusCalculation value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation
     * @return \Pggns\MidocoApi\Order\StructType\ValidateBonusCalculationRequest
     */
    public function setMidocoBonusCalculation(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation $midocoBonusCalculation = null): self
    {
        $this->MidocoBonusCalculation = $midocoBonusCalculation;
        
        return $this;
    }
}
