<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookKaeraInsuranceResponse StructType
 * @subpackage Structs
 */
class BookKaeraInsuranceResponse extends AbstractStructBase
{
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * Constructor method for BookKaeraInsuranceResponse
     * @uses BookKaeraInsuranceResponse::setMidocoPackageInfo()
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null)
    {
        $this
            ->setMidocoPackageInfo($midocoPackageInfo);
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Order\StructType\BookKaeraInsuranceResponse
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
}
