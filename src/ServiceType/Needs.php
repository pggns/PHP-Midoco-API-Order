<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Needs ServiceType
 * @subpackage Services
 */
class Needs extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Needs
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named needsToPrintCashReceipt
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptRequest $paramNeedsToPrintCashReceiptRequest
     * @return \Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptResponse|bool
     */
    public function needsToPrintCashReceipt(\Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptRequest $paramNeedsToPrintCashReceiptRequest)
    {
        try {
            $this->setResult($resultNeedsToPrintCashReceipt = $this->getSoapClient()->__soapCall('needsToPrintCashReceipt', [
                $paramNeedsToPrintCashReceiptRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultNeedsToPrintCashReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\NeedsToPrintCashReceiptResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
