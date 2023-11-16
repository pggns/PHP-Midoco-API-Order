<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Cancel
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named cancelPackage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CancelPackageRequest $paramCancelPackageRequest
     * @return \Pggns\MidocoApi\Order\StructType\CancelPackageResponse|bool
     */
    public function cancelPackage(\Pggns\MidocoApi\Order\StructType\CancelPackageRequest $paramCancelPackageRequest)
    {
        try {
            $this->setResult($resultCancelPackage = $this->getSoapClient()->__soapCall('cancelPackage', [
                $paramCancelPackageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelPackage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelFlight
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CancelFlightRequest $paramCancelFlightRequest
     * @return \Pggns\MidocoApi\Order\StructType\CancelFlightResponse|bool
     */
    public function cancelFlight(\Pggns\MidocoApi\Order\StructType\CancelFlightRequest $paramCancelFlightRequest)
    {
        try {
            $this->setResult($resultCancelFlight = $this->getSoapClient()->__soapCall('cancelFlight', [
                $paramCancelFlightRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelFlight;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelSubscription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CancelSubscriptionRequest $paramCancelSubscriptionRequest
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionResponse|bool
     */
    public function cancelSubscription(\Pggns\MidocoApi\Order\StructType\CancelSubscriptionRequest $paramCancelSubscriptionRequest)
    {
        try {
            $this->setResult($resultCancelSubscription = $this->getSoapClient()->__soapCall('cancelSubscription', [
                $paramCancelSubscriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelSubscription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\CancelFlightResponse|\Pggns\MidocoApi\Order\StructType\CancelPackageResponse|\Pggns\MidocoApi\Order\StructType\CancelSubscriptionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
