<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAreaCodesRequest StructType
 * @subpackage Structs
 */
class GetAreaCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAreaCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAreaCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAreaCode|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAreaCode $MidocoAreaCode = null;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for GetAreaCodesRequest
     * @uses GetAreaCodesRequest::setMidocoAreaCode()
     * @uses GetAreaCodesRequest::setCultureId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAreaCode $midocoAreaCode
     * @param string $cultureId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAreaCode $midocoAreaCode = null, ?string $cultureId = null)
    {
        $this
            ->setMidocoAreaCode($midocoAreaCode)
            ->setCultureId($cultureId);
    }
    /**
     * Get MidocoAreaCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAreaCode|null
     */
    public function getMidocoAreaCode(): ?\Pggns\MidocoApi\Order\StructType\MidocoAreaCode
    {
        return $this->MidocoAreaCode;
    }
    /**
     * Set MidocoAreaCode value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAreaCode $midocoAreaCode
     * @return \Pggns\MidocoApi\Order\StructType\GetAreaCodesRequest
     */
    public function setMidocoAreaCode(?\Pggns\MidocoApi\Order\StructType\MidocoAreaCode $midocoAreaCode = null): self
    {
        $this->MidocoAreaCode = $midocoAreaCode;
        
        return $this;
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\GetAreaCodesRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
}
