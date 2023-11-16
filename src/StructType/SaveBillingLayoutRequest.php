<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingLayoutRequest StructType
 * @subpackage Structs
 */
class SaveBillingLayoutRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingLayout
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingLayout
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $MidocoBillingLayout = null;
    /**
     * Constructor method for SaveBillingLayoutRequest
     * @uses SaveBillingLayoutRequest::setMidocoBillingLayout()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $midocoBillingLayout
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $midocoBillingLayout = null)
    {
        $this
            ->setMidocoBillingLayout($midocoBillingLayout);
    }
    /**
     * Get MidocoBillingLayout value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout|null
     */
    public function getMidocoBillingLayout(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingLayout
    {
        return $this->MidocoBillingLayout;
    }
    /**
     * Set MidocoBillingLayout value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $midocoBillingLayout
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingLayoutRequest
     */
    public function setMidocoBillingLayout(?\Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $midocoBillingLayout = null): self
    {
        $this->MidocoBillingLayout = $midocoBillingLayout;
        
        return $this;
    }
}
