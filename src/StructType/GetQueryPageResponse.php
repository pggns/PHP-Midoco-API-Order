<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQueryPageResponse StructType
 * @subpackage Structs
 */
class GetQueryPageResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryPage
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryPage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryPage|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage $MidocoQueryPage = null;
    /**
     * Constructor method for GetQueryPageResponse
     * @uses GetQueryPageResponse::setMidocoQueryPage()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage = null)
    {
        $this
            ->setMidocoQueryPage($midocoQueryPage);
    }
    /**
     * Get MidocoQueryPage value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPage|null
     */
    public function getMidocoQueryPage(): ?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage
    {
        return $this->MidocoQueryPage;
    }
    /**
     * Set MidocoQueryPage value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryPageResponse
     */
    public function setMidocoQueryPage(?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage = null): self
    {
        $this->MidocoQueryPage = $midocoQueryPage;
        
        return $this;
    }
}
