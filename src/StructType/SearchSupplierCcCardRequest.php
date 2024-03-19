<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierCcCardRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCcCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $MidocoSupplierCcCard = null;
    /**
     * Constructor method for SearchSupplierCcCardRequest
     * @uses SearchSupplierCcCardRequest::setMidocoSupplierCcCard()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null)
    {
        $this
            ->setMidocoSupplierCcCard($midocoSupplierCcCard);
    }
    /**
     * Get MidocoSupplierCcCard value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard|null
     */
    public function getMidocoSupplierCcCard(): ?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard
    {
        return $this->MidocoSupplierCcCard;
    }
    /**
     * Set MidocoSupplierCcCard value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierCcCardRequest
     */
    public function setMidocoSupplierCcCard(?\Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null): self
    {
        $this->MidocoSupplierCcCard = $midocoSupplierCcCard;
        
        return $this;
    }
}
