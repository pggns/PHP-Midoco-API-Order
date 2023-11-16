<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelKaeraInsuranceResponse StructType
 * @subpackage Structs
 */
class CancelKaeraInsuranceResponse extends AbstractStructBase
{
    /**
     * The MidocoKaeraPackageExt
     * Meta information extracted from the WSDL
     * - ref: MidocoKaeraPackageExt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt $MidocoKaeraPackageExt = null;
    /**
     * Constructor method for CancelKaeraInsuranceResponse
     * @uses CancelKaeraInsuranceResponse::setMidocoKaeraPackageExt()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt = null)
    {
        $this
            ->setMidocoKaeraPackageExt($midocoKaeraPackageExt);
    }
    /**
     * Get MidocoKaeraPackageExt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt|null
     */
    public function getMidocoKaeraPackageExt(): ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt
    {
        return $this->MidocoKaeraPackageExt;
    }
    /**
     * Set MidocoKaeraPackageExt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt
     * @return \Pggns\MidocoApi\Order\StructType\CancelKaeraInsuranceResponse
     */
    public function setMidocoKaeraPackageExt(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraPackageExt $midocoKaeraPackageExt = null): self
    {
        $this->MidocoKaeraPackageExt = $midocoKaeraPackageExt;
        
        return $this;
    }
}
