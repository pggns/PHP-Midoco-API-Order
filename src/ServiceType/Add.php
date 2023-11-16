<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Add
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named addSkippedBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AddSkippedBookingRequest $paramAddSkippedBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\AddSkippedBookingResponse|bool
     */
    public function addSkippedBooking(\Pggns\MidocoApi\Order\StructType\AddSkippedBookingRequest $paramAddSkippedBookingRequest)
    {
        try {
            $this->setResult($resultAddSkippedBooking = $this->getSoapClient()->__soapCall('addSkippedBooking', [
                $paramAddSkippedBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSkippedBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addBillingPosForOfflineCC
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest $paramAddBillingPosForOfflineCCRequest
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCResponse|bool
     */
    public function addBillingPosForOfflineCC(\Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest $paramAddBillingPosForOfflineCCRequest)
    {
        try {
            $this->setResult($resultAddBillingPosForOfflineCC = $this->getSoapClient()->__soapCall('addBillingPosForOfflineCC', [
                $paramAddBillingPosForOfflineCCRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddBillingPosForOfflineCC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addProcessedBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AddProcessedBookingRequest $paramAddProcessedBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\AddProcessedBookingResponse|bool
     */
    public function addProcessedBooking(\Pggns\MidocoApi\Order\StructType\AddProcessedBookingRequest $paramAddProcessedBookingRequest)
    {
        try {
            $this->setResult($resultAddProcessedBooking = $this->getSoapClient()->__soapCall('addProcessedBooking', [
                $paramAddProcessedBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddProcessedBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOrderContactHistoryEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AddOrderContactHistoryEntryRequest $paramAddOrderContactHistoryEntryRequest
     * @return \Pggns\MidocoApi\Order\StructType\AddOrderContactHistoryEntryResponse|bool
     */
    public function addOrderContactHistoryEntry(\Pggns\MidocoApi\Order\StructType\AddOrderContactHistoryEntryRequest $paramAddOrderContactHistoryEntryRequest)
    {
        try {
            $this->setResult($resultAddOrderContactHistoryEntry = $this->getSoapClient()->__soapCall('addOrderContactHistoryEntry', [
                $paramAddOrderContactHistoryEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOrderContactHistoryEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addAdditionalServices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest $paramAddAdditionalServicesRequest
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesResponse|bool
     */
    public function addAdditionalServices(\Pggns\MidocoApi\Order\StructType\AddAdditionalServicesRequest $paramAddAdditionalServicesRequest)
    {
        try {
            $this->setResult($resultAddAdditionalServices = $this->getSoapClient()->__soapCall('addAdditionalServices', [
                $paramAddAdditionalServicesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAdditionalServices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\AddAdditionalServicesResponse|\Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCResponse|\Pggns\MidocoApi\Order\StructType\AddOrderContactHistoryEntryResponse|\Pggns\MidocoApi\Order\StructType\AddProcessedBookingResponse|\Pggns\MidocoApi\Order\StructType\AddSkippedBookingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
