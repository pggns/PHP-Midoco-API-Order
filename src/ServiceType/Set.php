<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Set
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named setFinishedFlag
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SetFinishedFlagRequest $paramSetFinishedFlagRequest
     * @return \Pggns\MidocoApi\Order\StructType\SetFinishedFlagResponse|bool
     */
    public function setFinishedFlag(\Pggns\MidocoApi\Order\StructType\SetFinishedFlagRequest $paramSetFinishedFlagRequest)
    {
        try {
            $this->setResult($resultSetFinishedFlag = $this->getSoapClient()->__soapCall('setFinishedFlag', [
                $paramSetFinishedFlagRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetFinishedFlag;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setConfirmationRequiredOfSellitem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SetConfirmationRequiredOfSellitemRequest $paramSetConfirmationRequiredOfSellitemRequest
     * @return \Pggns\MidocoApi\Order\StructType\SetConfirmationRequiredOfSellitemResponse|bool
     */
    public function setConfirmationRequiredOfSellitem(\Pggns\MidocoApi\Order\StructType\SetConfirmationRequiredOfSellitemRequest $paramSetConfirmationRequiredOfSellitemRequest)
    {
        try {
            $this->setResult($resultSetConfirmationRequiredOfSellitem = $this->getSoapClient()->__soapCall('setConfirmationRequiredOfSellitem', [
                $paramSetConfirmationRequiredOfSellitemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetConfirmationRequiredOfSellitem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setOrderMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SetOrderMandateRequest $paramSetOrderMandateRequest
     * @return \Pggns\MidocoApi\Order\StructType\SetOrderMandateResponse|bool
     */
    public function setOrderMandate(\Pggns\MidocoApi\Order\StructType\SetOrderMandateRequest $paramSetOrderMandateRequest)
    {
        try {
            $this->setResult($resultSetOrderMandate = $this->getSoapClient()->__soapCall('setOrderMandate', [
                $paramSetOrderMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetOrderMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named setRevenueBookingPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SetRevenueBookingPaymentRequest $paramSetRevenueBookingPaymentRequest
     * @return \Pggns\MidocoApi\Order\StructType\SetRevenueBookingPaymentResponse|bool
     */
    public function setRevenueBookingPayment(\Pggns\MidocoApi\Order\StructType\SetRevenueBookingPaymentRequest $paramSetRevenueBookingPaymentRequest)
    {
        try {
            $this->setResult($resultSetRevenueBookingPayment = $this->getSoapClient()->__soapCall('setRevenueBookingPayment', [
                $paramSetRevenueBookingPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSetRevenueBookingPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\SetConfirmationRequiredOfSellitemResponse|\Pggns\MidocoApi\Order\StructType\SetFinishedFlagResponse|\Pggns\MidocoApi\Order\StructType\SetOrderMandateResponse|\Pggns\MidocoApi\Order\StructType\SetRevenueBookingPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
