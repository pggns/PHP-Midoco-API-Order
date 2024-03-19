<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderPaymentPaycodeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderPaymentPaycodeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderPaymentPaycode
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderPaymentPaycode
     * @var \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $MidocoOrderPaymentPaycode = null;
    /**
     * Constructor method for SaveOrderPaymentPaycodeRequest
     * @uses SaveOrderPaymentPaycodeRequest::setMidocoOrderPaymentPaycode()
     * @param \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode = null)
    {
        $this
            ->setMidocoOrderPaymentPaycode($midocoOrderPaymentPaycode);
    }
    /**
     * Get MidocoOrderPaymentPaycode value
     * @return \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO|null
     */
    public function getMidocoOrderPaymentPaycode(): ?\Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO
    {
        return $this->MidocoOrderPaymentPaycode;
    }
    /**
     * Set MidocoOrderPaymentPaycode value
     * @param \Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderPaymentPaycodeRequest
     */
    public function setMidocoOrderPaymentPaycode(?\Pggns\MidocoApi\Order\StructType\OrderPaymentPaycodeDTO $midocoOrderPaymentPaycode = null): self
    {
        $this->MidocoOrderPaymentPaycode = $midocoOrderPaymentPaycode;
        
        return $this;
    }
}
