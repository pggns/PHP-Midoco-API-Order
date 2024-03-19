<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTempPrintjobInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateTempPrintjobInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjobInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTempPrintjobInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $MidocoTempPrintjobInfo = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for UpdateTempPrintjobInfoResponse
     * @uses UpdateTempPrintjobInfoResponse::setMidocoTempPrintjobInfo()
     * @uses UpdateTempPrintjobInfoResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoTempPrintjobInfo($midocoTempPrintjobInfo)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoTempPrintjobInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo|null
     */
    public function getMidocoTempPrintjobInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo
    {
        return $this->MidocoTempPrintjobInfo;
    }
    /**
     * Set MidocoTempPrintjobInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTempPrintjobInfoResponse
     */
    public function setMidocoTempPrintjobInfo(?\Pggns\MidocoApi\Order\StructType\MidocoTempPrintjobInfo $midocoTempPrintjobInfo = null): self
    {
        $this->MidocoTempPrintjobInfo = $midocoTempPrintjobInfo;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTempPrintjobInfoResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
