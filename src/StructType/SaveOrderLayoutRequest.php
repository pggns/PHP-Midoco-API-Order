<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderLayoutRequest StructType
 * @subpackage Structs
 */
class SaveOrderLayoutRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLayout
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLayout
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $MidocoOrderLayout = null;
    /**
     * Constructor method for SaveOrderLayoutRequest
     * @uses SaveOrderLayoutRequest::setMidocoOrderLayout()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout = null)
    {
        $this
            ->setMidocoOrderLayout($midocoOrderLayout);
    }
    /**
     * Get MidocoOrderLayout value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout|null
     */
    public function getMidocoOrderLayout(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout
    {
        return $this->MidocoOrderLayout;
    }
    /**
     * Set MidocoOrderLayout value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderLayoutRequest
     */
    public function setMidocoOrderLayout(?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout = null): self
    {
        $this->MidocoOrderLayout = $midocoOrderLayout;
        
        return $this;
    }
}
