<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Book ServiceType
 * @subpackage Services
 */
class Book extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Book
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named
     * bookSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementBookingRequest $paramBookSupplierAgencySettlementBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementBookingResponse|bool
     */
    public function bookSupplierAgencySettlementBooking(\Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementBookingRequest $paramBookSupplierAgencySettlementBookingRequest)
    {
        try {
            $this->setResult($resultBookSupplierAgencySettlementBooking = $this->getSoapClient()->__soapCall('bookSupplierAgencySettlementBooking', [
                $paramBookSupplierAgencySettlementBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBookSupplierAgencySettlementBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named bookAdviceSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\BookAdviceSettlementRequest $paramBookAdviceSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\BookAdviceSettlementResponse|bool
     */
    public function bookAdviceSettlement(\Pggns\MidocoApi\Order\StructType\BookAdviceSettlementRequest $paramBookAdviceSettlementRequest)
    {
        try {
            $this->setResult($resultBookAdviceSettlement = $this->getSoapClient()->__soapCall('bookAdviceSettlement', [
                $paramBookAdviceSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBookAdviceSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named bookPseudoRevenueBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsRequest $paramBookPseudoRevenueBookingsRequest
     * @return \Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse|bool
     */
    public function bookPseudoRevenueBookings(\Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsRequest $paramBookPseudoRevenueBookingsRequest)
    {
        try {
            $this->setResult($resultBookPseudoRevenueBookings = $this->getSoapClient()->__soapCall('bookPseudoRevenueBookings', [
                $paramBookPseudoRevenueBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBookPseudoRevenueBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * bookPaymentProviderSettlementBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingRequest $paramBookPaymentProviderSettlementBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingResponse|bool
     */
    public function bookPaymentProviderSettlementBooking(\Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingRequest $paramBookPaymentProviderSettlementBookingRequest)
    {
        try {
            $this->setResult($resultBookPaymentProviderSettlementBooking = $this->getSoapClient()->__soapCall('bookPaymentProviderSettlementBooking', [
                $paramBookPaymentProviderSettlementBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBookPaymentProviderSettlementBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named bookMidocoVoucher4Kickback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest $paramBookMidocoVoucher4KickbackRequest
     * @return \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackResponse|bool
     */
    public function bookMidocoVoucher4Kickback(\Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackRequest $paramBookMidocoVoucher4KickbackRequest)
    {
        try {
            $this->setResult($resultBookMidocoVoucher4Kickback = $this->getSoapClient()->__soapCall('bookMidocoVoucher4Kickback', [
                $paramBookMidocoVoucher4KickbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBookMidocoVoucher4Kickback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\BookAdviceSettlementResponse|\Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackResponse|\Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingResponse|\Pggns\MidocoApi\Order\StructType\BookPseudoRevenueBookingsResponse|\Pggns\MidocoApi\Order\StructType\BookSupplierAgencySettlementBookingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
