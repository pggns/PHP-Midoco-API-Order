<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Announce ServiceType
 * @subpackage Services
 */
class Announce extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Announce
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named announceBookingMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageRequest $paramAnnounceBookingMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageResponse|bool
     */
    public function announceBookingMessage(\Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageRequest $paramAnnounceBookingMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceBookingMessage = $this->getSoapClient()->__soapCall('announceBookingMessage', [
                $paramAnnounceBookingMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceBookingMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceBookingMessageNorm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormRequest $paramAnnounceBookingMessageNormRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormResponse|bool
     */
    public function announceBookingMessageNorm(\Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormRequest $paramAnnounceBookingMessageNormRequest)
    {
        try {
            $this->setResult($resultAnnounceBookingMessageNorm = $this->getSoapClient()->__soapCall('announceBookingMessageNorm', [
                $paramAnnounceBookingMessageNormRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceBookingMessageNorm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceAmaTirMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceAmaTirMessageRequest $paramAnnounceAmaTirMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType|bool
     */
    public function announceAmaTirMessage(\Pggns\MidocoApi\Order\StructType\AnnounceAmaTirMessageRequest $paramAnnounceAmaTirMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceAmaTirMessage = $this->getSoapClient()->__soapCall('announceAmaTirMessage', [
                $paramAnnounceAmaTirMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceAmaTirMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceAmaAirMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceAmaAirMessageRequest $paramAnnounceAmaAirMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType|bool
     */
    public function announceAmaAirMessage(\Pggns\MidocoApi\Order\StructType\AnnounceAmaAirMessageRequest $paramAnnounceAmaAirMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceAmaAirMessage = $this->getSoapClient()->__soapCall('announceAmaAirMessage', [
                $paramAnnounceAmaAirMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceAmaAirMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceExternalPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentRequest $paramAnnounceExternalPaymentRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentResponse|bool
     */
    public function announceExternalPayment(\Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentRequest $paramAnnounceExternalPaymentRequest)
    {
        try {
            $this->setResult($resultAnnounceExternalPayment = $this->getSoapClient()->__soapCall('announceExternalPayment', [
                $paramAnnounceExternalPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceExternalPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceAmwayFilekey
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest $paramAnnounceAmwayFilekeyRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyResponse|bool
     */
    public function announceAmwayFilekey(\Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyRequest $paramAnnounceAmwayFilekeyRequest)
    {
        try {
            $this->setResult($resultAnnounceAmwayFilekey = $this->getSoapClient()->__soapCall('announceAmwayFilekey', [
                $paramAnnounceAmwayFilekeyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceAmwayFilekey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceAmwayTicket
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest $paramAnnounceAmwayTicketRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketResponse|bool
     */
    public function announceAmwayTicket(\Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketRequest $paramAnnounceAmwayTicketRequest)
    {
        try {
            $this->setResult($resultAnnounceAmwayTicket = $this->getSoapClient()->__soapCall('announceAmwayTicket', [
                $paramAnnounceAmwayTicketRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceAmwayTicket;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announcePayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest $paramAnnouncePaymentRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentResponse|bool
     */
    public function announcePayment(\Pggns\MidocoApi\Order\StructType\AnnouncePaymentRequest $paramAnnouncePaymentRequest)
    {
        try {
            $this->setResult($resultAnnouncePayment = $this->getSoapClient()->__soapCall('announcePayment', [
                $paramAnnouncePaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnouncePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceSabreAirMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceSabreAirMessageRequest $paramAnnounceSabreAirMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType|bool
     */
    public function announceSabreAirMessage(\Pggns\MidocoApi\Order\StructType\AnnounceSabreAirMessageRequest $paramAnnounceSabreAirMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceSabreAirMessage = $this->getSoapClient()->__soapCall('announceSabreAirMessage', [
                $paramAnnounceSabreAirMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceSabreAirMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceGalileoAirMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceGalileoAirMessageRequest $paramAnnounceGalileoAirMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType|bool
     */
    public function announceGalileoAirMessage(\Pggns\MidocoApi\Order\StructType\AnnounceGalileoAirMessageRequest $paramAnnounceGalileoAirMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceGalileoAirMessage = $this->getSoapClient()->__soapCall('announceGalileoAirMessage', [
                $paramAnnounceGalileoAirMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceGalileoAirMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceFlightTimeChanges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest $paramAnnounceFlightTimeChangesRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesResponse|bool
     */
    public function announceFlightTimeChanges(\Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest $paramAnnounceFlightTimeChangesRequest)
    {
        try {
            $this->setResult($resultAnnounceFlightTimeChanges = $this->getSoapClient()->__soapCall('announceFlightTimeChanges', [
                $paramAnnounceFlightTimeChangesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceFlightTimeChanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceSunnyCarsMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceSunnyCarsMessageRequest $paramAnnounceSunnyCarsMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceSunnyCarsMessageResponse|bool
     */
    public function announceSunnyCarsMessage(\Pggns\MidocoApi\Order\StructType\AnnounceSunnyCarsMessageRequest $paramAnnounceSunnyCarsMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceSunnyCarsMessage = $this->getSoapClient()->__soapCall('announceSunnyCarsMessage', [
                $paramAnnounceSunnyCarsMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceSunnyCarsMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceA3MMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageRequest $paramAnnounceA3MMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageResponse|bool
     */
    public function announceA3MMessage(\Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageRequest $paramAnnounceA3MMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceA3MMessage = $this->getSoapClient()->__soapCall('announceA3MMessage', [
                $paramAnnounceA3MMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceA3MMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceGdsMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageRequest $paramAnnounceGdsMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageResponse|bool
     */
    public function announceGdsMessage(\Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageRequest $paramAnnounceGdsMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceGdsMessage = $this->getSoapClient()->__soapCall('announceGdsMessage', [
                $paramAnnounceGdsMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceGdsMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceAgencySaleMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageRequest $paramAnnounceAgencySaleMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageResponse|bool
     */
    public function announceAgencySaleMessage(\Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageRequest $paramAnnounceAgencySaleMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceAgencySaleMessage = $this->getSoapClient()->__soapCall('announceAgencySaleMessage', [
                $paramAnnounceAgencySaleMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceAgencySaleMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageResponse|\Pggns\MidocoApi\Order\StructType\AnnounceAgencySaleMessageResponse|\Pggns\MidocoApi\Order\StructType\AnnounceAmwayFilekeyResponse|\Pggns\MidocoApi\Order\StructType\AnnounceAmwayTicketResponse|\Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageNormResponse|\Pggns\MidocoApi\Order\StructType\AnnounceBookingMessageResponse|\Pggns\MidocoApi\Order\StructType\AnnounceExternalPaymentResponse|\Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesResponse|\Pggns\MidocoApi\Order\StructType\AnnounceGdsMessageResponse|\Pggns\MidocoApi\Order\StructType\AnnouncePaymentResponse|\Pggns\MidocoApi\Order\StructType\AnnounceSunnyCarsMessageResponse|\Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
