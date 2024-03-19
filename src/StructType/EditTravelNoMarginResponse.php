<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditTravelNoMarginResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EditTravelNoMarginResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNoMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelNoMargin
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $MidocoTravelNoMargin = null;
    /**
     * Constructor method for EditTravelNoMarginResponse
     * @uses EditTravelNoMarginResponse::setMidocoTravelNoMargin()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null)
    {
        $this
            ->setMidocoTravelNoMargin($midocoTravelNoMargin);
    }
    /**
     * Get MidocoTravelNoMargin value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin|null
     */
    public function getMidocoTravelNoMargin(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin
    {
        return $this->MidocoTravelNoMargin;
    }
    /**
     * Set MidocoTravelNoMargin value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin
     * @return \Pggns\MidocoApi\Order\StructType\EditTravelNoMarginResponse
     */
    public function setMidocoTravelNoMargin(?\Pggns\MidocoApi\Order\StructType\MidocoTravelNoMargin $midocoTravelNoMargin = null): self
    {
        $this->MidocoTravelNoMargin = $midocoTravelNoMargin;
        
        return $this;
    }
}
