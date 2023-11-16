<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Flight ServiceType
 * @subpackage Services
 */
class Flight extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Flight
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named flightTimeChangeEmailOrderSave
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailOrderSaveRequest $paramFlightTimeChangeEmailOrderSaveRequest
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailOrderSaveResponse|bool
     */
    public function flightTimeChangeEmailOrderSave(\Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailOrderSaveRequest $paramFlightTimeChangeEmailOrderSaveRequest)
    {
        try {
            $this->setResult($resultFlightTimeChangeEmailOrderSave = $this->getSoapClient()->__soapCall('flightTimeChangeEmailOrderSave', [
                $paramFlightTimeChangeEmailOrderSaveRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFlightTimeChangeEmailOrderSave;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailOrderSaveResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
