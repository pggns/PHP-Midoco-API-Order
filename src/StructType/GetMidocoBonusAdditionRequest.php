<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBonusAdditionRequest StructType
 * @subpackage Structs
 */
class GetMidocoBonusAdditionRequest extends AbstractStructBase
{
    /**
     * The MidocoBonusEmployee
     * Meta information extracted from the WSDL
     * - ref: MidocoBonusEmployee
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $MidocoBonusEmployee = null;
    /**
     * Constructor method for GetMidocoBonusAdditionRequest
     * @uses GetMidocoBonusAdditionRequest::setMidocoBonusEmployee()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee = null)
    {
        $this
            ->setMidocoBonusEmployee($midocoBonusEmployee);
    }
    /**
     * Get MidocoBonusEmployee value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee|null
     */
    public function getMidocoBonusEmployee(): ?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee
    {
        return $this->MidocoBonusEmployee;
    }
    /**
     * Set MidocoBonusEmployee value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBonusAdditionRequest
     */
    public function setMidocoBonusEmployee(?\Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee $midocoBonusEmployee = null): self
    {
        $this->MidocoBonusEmployee = $midocoBonusEmployee;
        
        return $this;
    }
}
