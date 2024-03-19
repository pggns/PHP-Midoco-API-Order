<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Online ServiceType
 * @subpackage Services
 */
class Online extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Online
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named onlineSearchTssProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest $paramSearchTssProtocolRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse|bool
     */
    public function onlineSearchTssProtocol(\Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest $paramSearchTssProtocolRequest)
    {
        try {
            $this->setResult($resultOnlineSearchTssProtocol = $this->getSoapClient()->__soapCall('onlineSearchTssProtocol', [
                $paramSearchTssProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultOnlineSearchTssProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named onlineGetTssProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\GetTssProtocolRequest $paramGetTssProtocolRequest
     * @return \Pggns\MidocoApi\Order\StructType\GetTssProtocolResponse|bool
     */
    public function onlineGetTssProtocol(\Pggns\MidocoApi\Order\StructType\GetTssProtocolRequest $paramGetTssProtocolRequest)
    {
        try {
            $this->setResult($resultOnlineGetTssProtocol = $this->getSoapClient()->__soapCall('onlineGetTssProtocol', [
                $paramGetTssProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultOnlineGetTssProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\GetTssProtocolResponse|\Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
