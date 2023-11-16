<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoCrsSystemRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoCrsSystemRequest extends AbstractStructBase
{
    /**
     * The MidocoCrsSystem
     * Meta information extracted from the WSDL
     * - ref: MidocoCrsSystem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $MidocoCrsSystem = null;
    /**
     * Constructor method for DeleteMidocoCrsSystemRequest
     * @uses DeleteMidocoCrsSystemRequest::setMidocoCrsSystem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $midocoCrsSystem
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $midocoCrsSystem = null)
    {
        $this
            ->setMidocoCrsSystem($midocoCrsSystem);
    }
    /**
     * Get MidocoCrsSystem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem|null
     */
    public function getMidocoCrsSystem(): ?\Pggns\MidocoApi\Order\StructType\MidocoCrsSystem
    {
        return $this->MidocoCrsSystem;
    }
    /**
     * Set MidocoCrsSystem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $midocoCrsSystem
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoCrsSystemRequest
     */
    public function setMidocoCrsSystem(?\Pggns\MidocoApi\Order\StructType\MidocoCrsSystem $midocoCrsSystem = null): self
    {
        $this->MidocoCrsSystem = $midocoCrsSystem;
        
        return $this;
    }
}
