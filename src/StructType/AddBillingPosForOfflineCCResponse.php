<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddBillingPosForOfflineCCResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: addBillingPosForOfflineCC --- returns the new billing position that should be added to the givem billing document that corresponds to the amount given with the offline CC information
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddBillingPosForOfflineCCResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $MidocoBillingPosition = null;
    /**
     * Constructor method for AddBillingPosForOfflineCCResponse
     * @uses AddBillingPosForOfflineCCResponse::setMidocoBillingPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null)
    {
        $this
            ->setMidocoBillingPosition($midocoBillingPosition);
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingPosition(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * Set MidocoBillingPosition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCResponse
     */
    public function setMidocoBillingPosition(?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null): self
    {
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
}
