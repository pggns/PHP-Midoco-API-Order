<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Actualize ServiceType
 * @subpackage Services
 */
class Actualize extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Actualize
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named actualizePhoneticData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ActualizePhoneticDataRequest $paramActualizePhoneticDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ActualizePhoneticDataResponse|bool
     */
    public function actualizePhoneticData(\Pggns\MidocoApi\Order\StructType\ActualizePhoneticDataRequest $paramActualizePhoneticDataRequest)
    {
        try {
            $this->setResult($resultActualizePhoneticData = $this->getSoapClient()->__soapCall('actualizePhoneticData', [
                $paramActualizePhoneticDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultActualizePhoneticData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named actualizeOrderErmMail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ActualizeOrderErmMailRequest $paramActualizeOrderErmMailRequest
     * @return \Pggns\MidocoApi\Order\StructType\ActualizeOrderErmMailResponse|bool
     */
    public function actualizeOrderErmMail(\Pggns\MidocoApi\Order\StructType\ActualizeOrderErmMailRequest $paramActualizeOrderErmMailRequest)
    {
        try {
            $this->setResult($resultActualizeOrderErmMail = $this->getSoapClient()->__soapCall('actualizeOrderErmMail', [
                $paramActualizeOrderErmMailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultActualizeOrderErmMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\ActualizeOrderErmMailResponse|\Pggns\MidocoApi\Order\StructType\ActualizePhoneticDataResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
