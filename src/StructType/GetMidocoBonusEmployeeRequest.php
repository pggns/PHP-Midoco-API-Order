<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusEmployeeRequest StructType
 * @subpackage Structs
 */
class GetMidocoBonusEmployeeRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusEmployeeSearchCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusEmployeeSearchCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria $MidocoBonusEmployeeSearchCriteria = null;
    /**
     * Constructor method for GetMidocoBonusEmployeeRequest
     * @uses GetMidocoBonusEmployeeRequest::setMidocoBonusEmployeeSearchCriteria()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria = null)
    {
        $this
            ->setMidocoBonusEmployeeSearchCriteria($midocoBonusEmployeeSearchCriteria);
    }
    /**
     * Get MidocoBonusEmployeeSearchCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria|null
     */
    public function getMidocoBonusEmployeeSearchCriteria(): ?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria
    {
        return $this->MidocoBonusEmployeeSearchCriteria;
    }
    /**
     * Set MidocoBonusEmployeeSearchCriteria value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusEmployeeRequest
     */
    public function setMidocoBonusEmployeeSearchCriteria(?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployeeSearchCriteria $midocoBonusEmployeeSearchCriteria = null): self
    {
        $this->MidocoBonusEmployeeSearchCriteria = $midocoBonusEmployeeSearchCriteria;
        
        return $this;
    }
}
