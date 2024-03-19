<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBillingDocumentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The BillingDocumentData
     * @var string|null
     */
    protected ?string $BillingDocumentData = null;
    /**
     * Constructor method for ExportBillingDocumentResponse
     * @uses ExportBillingDocumentResponse::setBillingDocumentData()
     * @param string $billingDocumentData
     */
    public function __construct(?string $billingDocumentData = null)
    {
        $this
            ->setBillingDocumentData($billingDocumentData);
    }
    /**
     * Get BillingDocumentData value
     * @return string|null
     */
    public function getBillingDocumentData(): ?string
    {
        return $this->BillingDocumentData;
    }
    /**
     * Set BillingDocumentData value
     * @param string $billingDocumentData
     * @return \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentResponse
     */
    public function setBillingDocumentData(?string $billingDocumentData = null): self
    {
        // validation for constraint: string
        if (!is_null($billingDocumentData) && !is_string($billingDocumentData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingDocumentData, true), gettype($billingDocumentData)), __LINE__);
        }
        $this->BillingDocumentData = $billingDocumentData;
        
        return $this;
    }
}
