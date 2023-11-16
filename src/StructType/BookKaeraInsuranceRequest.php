<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookKaeraInsuranceRequest StructType
 * @subpackage Structs
 */
class BookKaeraInsuranceRequest extends AbstractStructBase
{
    /**
     * The MidocoKaeraDataExt
     * Meta information extracted from the WSDL
     * - ref: MidocoKaeraDataExt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt $MidocoKaeraDataExt = null;
    /**
     * Constructor method for BookKaeraInsuranceRequest
     * @uses BookKaeraInsuranceRequest::setMidocoKaeraDataExt()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt $midocoKaeraDataExt
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt $midocoKaeraDataExt = null)
    {
        $this
            ->setMidocoKaeraDataExt($midocoKaeraDataExt);
    }
    /**
     * Get MidocoKaeraDataExt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt|null
     */
    public function getMidocoKaeraDataExt(): ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt
    {
        return $this->MidocoKaeraDataExt;
    }
    /**
     * Set MidocoKaeraDataExt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt $midocoKaeraDataExt
     * @return \Pggns\MidocoApi\Order\StructType\BookKaeraInsuranceRequest
     */
    public function setMidocoKaeraDataExt(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraDataExt $midocoKaeraDataExt = null): self
    {
        $this->MidocoKaeraDataExt = $midocoKaeraDataExt;
        
        return $this;
    }
}
