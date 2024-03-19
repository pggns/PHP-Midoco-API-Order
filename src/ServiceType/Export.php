<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Export ServiceType
 * @subpackage Services
 */
class Export extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Export
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named exportAgencySettlementData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest $paramExportAgencySettlementDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataResponse|bool
     */
    public function exportAgencySettlementData(\Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataRequest $paramExportAgencySettlementDataRequest)
    {
        try {
            $this->setResult($resultExportAgencySettlementData = $this->getSoapClient()->__soapCall('exportAgencySettlementData', [
                $paramExportAgencySettlementDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportAgencySettlementData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria $paramExportBookingJournalRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalResponse|bool
     */
    public function exportBookingJournal(\Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria $paramExportBookingJournalRequest)
    {
        try {
            $this->setResult($resultExportBookingJournal = $this->getSoapClient()->__soapCall('exportBookingJournal', [
                $paramExportBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportBookingJournalFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria $paramExportBookingJournalFileRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalFileResponse|bool
     */
    public function exportBookingJournalFile(\Pggns\MidocoApi\Order\StructType\ExportBookingJournalCriteria $paramExportBookingJournalFileRequest)
    {
        try {
            $this->setResult($resultExportBookingJournalFile = $this->getSoapClient()->__soapCall('exportBookingJournalFile', [
                $paramExportBookingJournalFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportBookingJournalFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportTravelRegistration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest $paramExportTravelRegistrationRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationResponse|bool
     */
    public function exportTravelRegistration(\Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationRequest $paramExportTravelRegistrationRequest)
    {
        try {
            $this->setResult($resultExportTravelRegistration = $this->getSoapClient()->__soapCall('exportTravelRegistration', [
                $paramExportTravelRegistrationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportTravelRegistration;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportTravelPlan
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest $paramExportTravelPlanRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanResponse|bool
     */
    public function exportTravelPlan(\Pggns\MidocoApi\Order\StructType\ExportTravelPlanRequest $paramExportTravelPlanRequest)
    {
        try {
            $this->setResult($resultExportTravelPlan = $this->getSoapClient()->__soapCall('exportTravelPlan', [
                $paramExportTravelPlanRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportTravelPlan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentRequest $paramExportBillingDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentResponse|bool
     */
    public function exportBillingDocument(\Pggns\MidocoApi\Order\StructType\ExportBillingDocumentRequest $paramExportBillingDocumentRequest)
    {
        try {
            $this->setResult($resultExportBillingDocument = $this->getSoapClient()->__soapCall('exportBillingDocument', [
                $paramExportBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportOrderInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest $paramExportOrderInvoiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceResponse|bool
     */
    public function exportOrderInvoice(\Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceRequest $paramExportOrderInvoiceRequest)
    {
        try {
            $this->setResult($resultExportOrderInvoice = $this->getSoapClient()->__soapCall('exportOrderInvoice', [
                $paramExportOrderInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportOrderInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportPrintedAgencySettlements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest $paramExportPrintedAgencySettlementsRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsResponse|bool
     */
    public function exportPrintedAgencySettlements(\Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsRequest $paramExportPrintedAgencySettlementsRequest)
    {
        try {
            $this->setResult($resultExportPrintedAgencySettlements = $this->getSoapClient()->__soapCall('exportPrintedAgencySettlements', [
                $paramExportPrintedAgencySettlementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportPrintedAgencySettlements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportIbizaData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest $paramExportIbizaDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportIbizaDataResponse|bool
     */
    public function exportIbizaData(\Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest $paramExportIbizaDataRequest)
    {
        try {
            $this->setResult($resultExportIbizaData = $this->getSoapClient()->__soapCall('exportIbizaData', [
                $paramExportIbizaDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportIbizaData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportReweData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportReweDataRequest $paramExportReweDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportReweDataResponse|bool
     */
    public function exportReweData(\Pggns\MidocoApi\Order\StructType\ExportReweDataRequest $paramExportReweDataRequest)
    {
        try {
            $this->setResult($resultExportReweData = $this->getSoapClient()->__soapCall('exportReweData', [
                $paramExportReweDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportReweData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportAutomaticSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementRequest $paramExportAutomaticSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementResponse|bool
     */
    public function exportAutomaticSettlement(\Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementRequest $paramExportAutomaticSettlementRequest)
    {
        try {
            $this->setResult($resultExportAutomaticSettlement = $this->getSoapClient()->__soapCall('exportAutomaticSettlement', [
                $paramExportAutomaticSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportAutomaticSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportJournalData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest $paramExportJournalDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse|bool
     */
    public function exportJournalData(\Pggns\MidocoApi\Order\StructType\ExportJournalDataRequest $paramExportJournalDataRequest)
    {
        try {
            $this->setResult($resultExportJournalData = $this->getSoapClient()->__soapCall('exportJournalData', [
                $paramExportJournalDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportJournalData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportSilverSurferData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataRequest $paramExportSilverSurferDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataResponse|bool
     */
    public function exportSilverSurferData(\Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataRequest $paramExportSilverSurferDataRequest)
    {
        try {
            $this->setResult($resultExportSilverSurferData = $this->getSoapClient()->__soapCall('exportSilverSurferData', [
                $paramExportSilverSurferDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportSilverSurferData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportSettlementsOverview
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewRequest $paramExportSettlementOverviewRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewResponse|bool
     */
    public function exportSettlementsOverview(\Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewRequest $paramExportSettlementOverviewRequest)
    {
        try {
            $this->setResult($resultExportSettlementsOverview = $this->getSoapClient()->__soapCall('exportSettlementsOverview', [
                $paramExportSettlementOverviewRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportSettlementsOverview;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named exportCashTurnover
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExportCashTurnoverRequest $paramExportCashTurnoverRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExportCashTurnoverResponse|bool
     */
    public function exportCashTurnover(\Pggns\MidocoApi\Order\StructType\ExportCashTurnoverRequest $paramExportCashTurnoverRequest)
    {
        try {
            $this->setResult($resultExportCashTurnover = $this->getSoapClient()->__soapCall('exportCashTurnover', [
                $paramExportCashTurnoverRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExportCashTurnover;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\ExportAgencySettlementDataResponse|\Pggns\MidocoApi\Order\StructType\ExportAutomaticSettlementResponse|\Pggns\MidocoApi\Order\StructType\ExportBillingDocumentResponse|\Pggns\MidocoApi\Order\StructType\ExportBookingJournalFileResponse|\Pggns\MidocoApi\Order\StructType\ExportBookingJournalResponse|\Pggns\MidocoApi\Order\StructType\ExportCashTurnoverResponse|\Pggns\MidocoApi\Order\StructType\ExportIbizaDataResponse|\Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse|\Pggns\MidocoApi\Order\StructType\ExportOrderInvoiceResponse|\Pggns\MidocoApi\Order\StructType\ExportPrintedAgencySettlementsResponse|\Pggns\MidocoApi\Order\StructType\ExportReweDataResponse|\Pggns\MidocoApi\Order\StructType\ExportSettlementOverviewResponse|\Pggns\MidocoApi\Order\StructType\ExportSilverSurferDataResponse|\Pggns\MidocoApi\Order\StructType\ExportTravelPlanResponse|\Pggns\MidocoApi\Order\StructType\ExportTravelRegistrationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
