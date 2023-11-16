<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Has ServiceType
 * @subpackage Services
 */
class Has extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Has
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named hasBillingPositionsForSellItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsRequest $paramHasBillingPositionsForSellItemsRequest
     * @return \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsResponse|bool
     */
    public function hasBillingPositionsForSellItems(\Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsRequest $paramHasBillingPositionsForSellItemsRequest)
    {
        try {
            $this->setResult($resultHasBillingPositionsForSellItems = $this->getSoapClient()->__soapCall('hasBillingPositionsForSellItems', [
                $paramHasBillingPositionsForSellItemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultHasBillingPositionsForSellItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named hasBookingJournalExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\HasBookingJournalExportRequest $paramHasBookingJournalExportRequest
     * @return \Pggns\MidocoApi\Order\StructType\HasBookingJournalExportResponse|bool
     */
    public function hasBookingJournalExport(\Pggns\MidocoApi\Order\StructType\HasBookingJournalExportRequest $paramHasBookingJournalExportRequest)
    {
        try {
            $this->setResult($resultHasBookingJournalExport = $this->getSoapClient()->__soapCall('hasBookingJournalExport', [
                $paramHasBookingJournalExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultHasBookingJournalExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\HasBillingPositionsForSellItemsResponse|\Pggns\MidocoApi\Order\StructType\HasBookingJournalExportResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
