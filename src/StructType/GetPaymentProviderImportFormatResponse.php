<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderImportFormatResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPaymentProviderImportFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderImportFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPaymentProviderImportFormat
     * @var \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO $MidocoPaymentProviderImportFormat = null;
    /**
     * Constructor method for GetPaymentProviderImportFormatResponse
     * @uses GetPaymentProviderImportFormatResponse::setMidocoPaymentProviderImportFormat()
     * @param \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null)
    {
        $this
            ->setMidocoPaymentProviderImportFormat($midocoPaymentProviderImportFormat);
    }
    /**
     * Get MidocoPaymentProviderImportFormat value
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO|null
     */
    public function getMidocoPaymentProviderImportFormat(): ?\Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO
    {
        return $this->MidocoPaymentProviderImportFormat;
    }
    /**
     * Set MidocoPaymentProviderImportFormat value
     * @param \Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderImportFormatResponse
     */
    public function setMidocoPaymentProviderImportFormat(?\Pggns\MidocoApi\Order\StructType\PaymentProviderImportFormatDTO $midocoPaymentProviderImportFormat = null): self
    {
        $this->MidocoPaymentProviderImportFormat = $midocoPaymentProviderImportFormat;
        
        return $this;
    }
}
