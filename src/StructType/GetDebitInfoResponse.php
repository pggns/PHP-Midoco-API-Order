<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitInfoResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDebitInfo --- return the debit info for a given document id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType $MidocoDebitInfo = null;
    /**
     * Constructor method for GetDebitInfoResponse
     * @uses GetDebitInfoResponse::setMidocoDebitInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType $midocoDebitInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType $midocoDebitInfo = null)
    {
        $this
            ->setMidocoDebitInfo($midocoDebitInfo);
    }
    /**
     * Get MidocoDebitInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType|null
     */
    public function getMidocoDebitInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType
    {
        return $this->MidocoDebitInfo;
    }
    /**
     * Set MidocoDebitInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType $midocoDebitInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetDebitInfoResponse
     */
    public function setMidocoDebitInfo(?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoType $midocoDebitInfo = null): self
    {
        $this->MidocoDebitInfo = $midocoDebitInfo;
        
        return $this;
    }
}
