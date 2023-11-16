<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPrintSettingsResponse StructType
 * @subpackage Structs
 */
class GetBillingPrintSettingsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPrintSettings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingPrintSettings
     * @var \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO $MidocoBillingPrintSettings = null;
    /**
     * Constructor method for GetBillingPrintSettingsResponse
     * @uses GetBillingPrintSettingsResponse::setMidocoBillingPrintSettings()
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings = null)
    {
        $this
            ->setMidocoBillingPrintSettings($midocoBillingPrintSettings);
    }
    /**
     * Get MidocoBillingPrintSettings value
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO|null
     */
    public function getMidocoBillingPrintSettings(): ?\Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO
    {
        return $this->MidocoBillingPrintSettings;
    }
    /**
     * Set MidocoBillingPrintSettings value
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintSettingsResponse
     */
    public function setMidocoBillingPrintSettings(?\Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO $midocoBillingPrintSettings = null): self
    {
        $this->MidocoBillingPrintSettings = $midocoBillingPrintSettings;
        
        return $this;
    }
}
