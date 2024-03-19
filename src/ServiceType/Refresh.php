<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Refresh ServiceType
 * @subpackage Services
 */
class Refresh extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Refresh
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named refreshYpsilonPnr
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrRequest $paramRefreshYpsilonPnrRequest
     * @return \Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrResponse|bool
     */
    public function refreshYpsilonPnr(\Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrRequest $paramRefreshYpsilonPnrRequest)
    {
        try {
            $this->setResult($resultRefreshYpsilonPnr = $this->getSoapClient()->__soapCall('refreshYpsilonPnr', [
                $paramRefreshYpsilonPnrRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRefreshYpsilonPnr;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named refreshDefaultFees
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\RefreshDefaultFeesRequest $paramRefreshDefaultFeesRequest
     * @return \Pggns\MidocoApi\Order\StructType\RefreshDefaultFeesResponse|bool
     */
    public function refreshDefaultFees(\Pggns\MidocoApi\Order\StructType\RefreshDefaultFeesRequest $paramRefreshDefaultFeesRequest)
    {
        try {
            $this->setResult($resultRefreshDefaultFees = $this->getSoapClient()->__soapCall('refreshDefaultFees', [
                $paramRefreshDefaultFeesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRefreshDefaultFees;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\RefreshDefaultFeesResponse|\Pggns\MidocoApi\Order\StructType\RefreshYpsilonPnrResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
