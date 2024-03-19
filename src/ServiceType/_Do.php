<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Do ServiceType
 * @subpackage Services
 */
class _Do extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\_Do
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named doMultiPrint
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MultiPrintRequest $paramMultiPrintRequest
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse|bool
     */
    public function doMultiPrint(\Pggns\MidocoApi\Order\StructType\MultiPrintRequest $paramMultiPrintRequest)
    {
        try {
            $this->setResult($resultDoMultiPrint = $this->getSoapClient()->__soapCall('doMultiPrint', [
                $paramMultiPrintRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDoMultiPrint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named doFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest $paramDoFlightTimeChangeEmailRequest
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailResponse|bool
     */
    public function doFlightTimeChangeEmail(\Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest $paramDoFlightTimeChangeEmailRequest)
    {
        try {
            $this->setResult($resultDoFlightTimeChangeEmail = $this->getSoapClient()->__soapCall('doFlightTimeChangeEmail', [
                $paramDoFlightTimeChangeEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDoFlightTimeChangeEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailResponse|\Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
