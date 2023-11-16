<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccomodationCodesRequest StructType
 * @subpackage Structs
 */
class GetAccomodationCodesRequest extends AbstractStructBase
{
    /**
     * The MidocoAccomodationCode
     * Meta information extracted from the WSDL
     * - ref: MidocoAccomodationCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $MidocoAccomodationCode = null;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * Constructor method for GetAccomodationCodesRequest
     * @uses GetAccomodationCodesRequest::setMidocoAccomodationCode()
     * @uses GetAccomodationCodesRequest::setCultureId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $midocoAccomodationCode
     * @param string $cultureId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $midocoAccomodationCode = null, ?string $cultureId = null)
    {
        $this
            ->setMidocoAccomodationCode($midocoAccomodationCode)
            ->setCultureId($cultureId);
    }
    /**
     * Get MidocoAccomodationCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode|null
     */
    public function getMidocoAccomodationCode(): ?\Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode
    {
        return $this->MidocoAccomodationCode;
    }
    /**
     * Set MidocoAccomodationCode value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $midocoAccomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\GetAccomodationCodesRequest
     */
    public function setMidocoAccomodationCode(?\Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $midocoAccomodationCode = null): self
    {
        $this->MidocoAccomodationCode = $midocoAccomodationCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccomodationCodesRequest
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
