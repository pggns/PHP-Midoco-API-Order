<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Send
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named sendBatchInvoiceEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest $paramSendBatchInvoiceEmailRequest
     * @return \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailResponse|bool
     */
    public function sendBatchInvoiceEmail(\Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest $paramSendBatchInvoiceEmailRequest)
    {
        try {
            $this->setResult($resultSendBatchInvoiceEmail = $this->getSoapClient()->__soapCall('sendBatchInvoiceEmail', [
                $paramSendBatchInvoiceEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSendBatchInvoiceEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendInvoiceByEMail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailRequest $paramSendInvoiceByEMailRequest
     * @return \Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailResponse|bool
     */
    public function sendInvoiceByEMail(\Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailRequest $paramSendInvoiceByEMailRequest)
    {
        try {
            $this->setResult($resultSendInvoiceByEMail = $this->getSoapClient()->__soapCall('sendInvoiceByEMail', [
                $paramSendInvoiceByEMailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSendInvoiceByEMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailResponse|\Pggns\MidocoApi\Order\StructType\SendInvoiceByEMailResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
