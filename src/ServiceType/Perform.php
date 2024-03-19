<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Perform ServiceType
 * @subpackage Services
 */
class Perform extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Perform
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named performEntryClearing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest $paramPerformEntryClearingRequest
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingResponse|bool
     */
    public function performEntryClearing(\Pggns\MidocoApi\Order\StructType\PerformEntryClearingRequest $paramPerformEntryClearingRequest)
    {
        try {
            $this->setResult($resultPerformEntryClearing = $this->getSoapClient()->__soapCall('performEntryClearing', [
                $paramPerformEntryClearingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPerformEntryClearing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * performForeignCurrencyEntryClearing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PerformForeignCurrencyEntryClearingRequest $paramPerformForeignCurrencyEntryClearingRequest
     * @return \Pggns\MidocoApi\Order\StructType\PerformForeignCurrencyEntryClearingResponse|bool
     */
    public function performForeignCurrencyEntryClearing(\Pggns\MidocoApi\Order\StructType\PerformForeignCurrencyEntryClearingRequest $paramPerformForeignCurrencyEntryClearingRequest)
    {
        try {
            $this->setResult($resultPerformForeignCurrencyEntryClearing = $this->getSoapClient()->__soapCall('performForeignCurrencyEntryClearing', [
                $paramPerformForeignCurrencyEntryClearingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPerformForeignCurrencyEntryClearing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\PerformEntryClearingResponse|\Pggns\MidocoApi\Order\StructType\PerformForeignCurrencyEntryClearingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
