<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatCodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVatCodeRequest extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVatCode|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoVatCode $MidocoVatCode = null;
    /**
     * Constructor method for SaveVatCodeRequest
     * @uses SaveVatCodeRequest::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode $midocoVatCode
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoVatCode $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatCode|null
     */
    public function getMidocoVatCode(): ?\Pggns\MidocoApi\Order\StructType\MidocoVatCode
    {
        return $this->MidocoVatCode;
    }
    /**
     * Set MidocoVatCode value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode $midocoVatCode
     * @return \Pggns\MidocoApi\Order\StructType\SaveVatCodeRequest
     */
    public function setMidocoVatCode(?\Pggns\MidocoApi\Order\StructType\MidocoVatCode $midocoVatCode = null): self
    {
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
}
