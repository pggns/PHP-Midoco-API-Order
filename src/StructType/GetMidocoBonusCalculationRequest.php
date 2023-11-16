<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusCalculationRequest StructType
 * @subpackage Structs
 */
class GetMidocoBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusCalculationSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusCalculationSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria $MidocoBonusCalculationSearchCriteria = null;
    /**
     * Constructor method for GetMidocoBonusCalculationRequest
     * @uses GetMidocoBonusCalculationRequest::setMidocoBonusCalculationSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria $midocoBonusCalculationSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria $midocoBonusCalculationSearchCriteria = null)
    {
        $this
            ->setMidocoBonusCalculationSearchCriteria($midocoBonusCalculationSearchCriteria);
    }
    /**
     * Get MidocoBonusCalculationSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria|null
     */
    public function getMidocoBonusCalculationSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria
    {
        return $this->MidocoBonusCalculationSearchCriteria;
    }
    /**
     * Set MidocoBonusCalculationSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria $midocoBonusCalculationSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusCalculationRequest
     */
    public function setMidocoBonusCalculationSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoBonusCalculationSearchCriteria $midocoBonusCalculationSearchCriteria = null): self
    {
        $this->MidocoBonusCalculationSearchCriteria = $midocoBonusCalculationSearchCriteria;
        
        return $this;
    }
}
