<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 */
class Upload extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Upload
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named uploadPaymentData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest $paramUploadPaymentDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\UploadPaymentDataResponse|bool
     */
    public function uploadPaymentData(\Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest $paramUploadPaymentDataRequest)
    {
        try {
            $this->setResult($resultUploadPaymentData = $this->getSoapClient()->__soapCall('uploadPaymentData', [
                $paramUploadPaymentDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadPaymentData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named uploadBSPZip
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UploadBSPZipRequest $paramUploadBSPZipRequest
     * @return \Pggns\MidocoApi\Order\StructType\UploadBSPZipResponse|bool
     */
    public function uploadBSPZip(\Pggns\MidocoApi\Order\StructType\UploadBSPZipRequest $paramUploadBSPZipRequest)
    {
        try {
            $this->setResult($resultUploadBSPZip = $this->getSoapClient()->__soapCall('uploadBSPZip', [
                $paramUploadBSPZipRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadBSPZip;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\UploadBSPZipResponse|\Pggns\MidocoApi\Order\StructType\UploadPaymentDataResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
