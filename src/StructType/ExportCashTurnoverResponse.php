<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportCashTurnoverResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportCashTurnoverResponse extends AbstractStructBase
{
    /**
     * The MidocoCashTurnoverExport
     * Meta information extracted from the WSDL
     * - ref: MidocoCashTurnoverExport
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport $MidocoCashTurnoverExport = null;
    /**
     * Constructor method for ExportCashTurnoverResponse
     * @uses ExportCashTurnoverResponse::setMidocoCashTurnoverExport()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport = null)
    {
        $this
            ->setMidocoCashTurnoverExport($midocoCashTurnoverExport);
    }
    /**
     * Get MidocoCashTurnoverExport value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport|null
     */
    public function getMidocoCashTurnoverExport(): ?\Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport
    {
        return $this->MidocoCashTurnoverExport;
    }
    /**
     * Set MidocoCashTurnoverExport value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport
     * @return \Pggns\MidocoApi\Order\StructType\ExportCashTurnoverResponse
     */
    public function setMidocoCashTurnoverExport(?\Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverExport $midocoCashTurnoverExport = null): self
    {
        $this->MidocoCashTurnoverExport = $midocoCashTurnoverExport;
        
        return $this;
    }
}
