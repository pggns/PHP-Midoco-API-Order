<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Create
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named createBillingPrintjob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $paramCreateBillingPrintjobRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse|bool
     */
    public function createBillingPrintjob(\Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $paramCreateBillingPrintjobRequest)
    {
        try {
            $this->setResult($resultCreateBillingPrintjob = $this->getSoapClient()->__soapCall('createBillingPrintjob', [
                $paramCreateBillingPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateBillingPrintjob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createTravelPlanPrintjob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $paramCreateTravelPlanPrintjobRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobResponse|bool
     */
    public function createTravelPlanPrintjob(\Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobRequest $paramCreateTravelPlanPrintjobRequest)
    {
        try {
            $this->setResult($resultCreateTravelPlanPrintjob = $this->getSoapClient()->__soapCall('createTravelPlanPrintjob', [
                $paramCreateTravelPlanPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateTravelPlanPrintjob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createSupplierMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest $paramCreateSupplierMessageRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateSupplierMessageResponse|bool
     */
    public function createSupplierMessage(\Pggns\MidocoApi\Order\StructType\CreateSupplierMessageRequest $paramCreateSupplierMessageRequest)
    {
        try {
            $this->setResult($resultCreateSupplierMessage = $this->getSoapClient()->__soapCall('createSupplierMessage', [
                $paramCreateSupplierMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateSupplierMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createVermiLink
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateVermiLinkRequest $paramCreateVermiLinkRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateVermiLinkResponse|bool
     */
    public function createVermiLink(\Pggns\MidocoApi\Order\StructType\CreateVermiLinkRequest $paramCreateVermiLinkRequest)
    {
        try {
            $this->setResult($resultCreateVermiLink = $this->getSoapClient()->__soapCall('createVermiLink', [
                $paramCreateVermiLinkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateVermiLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAcconLink
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateAcconLinkRequest $paramCreateAcconLinkRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateAcconLinkResponse|bool
     */
    public function createAcconLink(\Pggns\MidocoApi\Order\StructType\CreateAcconLinkRequest $paramCreateAcconLinkRequest)
    {
        try {
            $this->setResult($resultCreateAcconLink = $this->getSoapClient()->__soapCall('createAcconLink', [
                $paramCreateAcconLinkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAcconLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * createExternDocument4BillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentRequest $paramCreateExternDocument4BillingDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentResponse|bool
     */
    public function createExternDocument4BillingDocument(\Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentRequest $paramCreateExternDocument4BillingDocumentRequest)
    {
        try {
            $this->setResult($resultCreateExternDocument4BillingDocument = $this->getSoapClient()->__soapCall('createExternDocument4BillingDocument', [
                $paramCreateExternDocument4BillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateExternDocument4BillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAutomaticOrderNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeRequest $paramCreateAutomaticOrderNoticeRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeResponse|bool
     */
    public function createAutomaticOrderNotice(\Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeRequest $paramCreateAutomaticOrderNoticeRequest)
    {
        try {
            $this->setResult($resultCreateAutomaticOrderNotice = $this->getSoapClient()->__soapCall('createAutomaticOrderNotice', [
                $paramCreateAutomaticOrderNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAutomaticOrderNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createVatCorrectionBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateVatCorrectionBillingDocumentRequest $paramCreateVatCorrectionBillingDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateVatCorrectionBillingDocumentResponse|bool
     */
    public function createVatCorrectionBillingDocument(\Pggns\MidocoApi\Order\StructType\CreateVatCorrectionBillingDocumentRequest $paramCreateVatCorrectionBillingDocumentRequest)
    {
        try {
            $this->setResult($resultCreateVatCorrectionBillingDocument = $this->getSoapClient()->__soapCall('createVatCorrectionBillingDocument', [
                $paramCreateVatCorrectionBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateVatCorrectionBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createDSFinVKExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest $paramCreateDSFinVKExportRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportResponse|bool
     */
    public function createDSFinVKExport(\Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportRequest $paramCreateDSFinVKExportRequest)
    {
        try {
            $this->setResult($resultCreateDSFinVKExport = $this->getSoapClient()->__soapCall('createDSFinVKExport', [
                $paramCreateDSFinVKExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateDSFinVKExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createTamaraEnrichment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest $paramGetBillingDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentResponse|bool
     */
    public function createTamaraEnrichment(\Pggns\MidocoApi\Order\StructType\GetBillingDocumentRequest $paramGetBillingDocumentRequest)
    {
        try {
            $this->setResult($resultCreateTamaraEnrichment = $this->getSoapClient()->__soapCall('createTamaraEnrichment', [
                $paramGetBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateTamaraEnrichment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createEmptyOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateEmptyOrderRequest $paramCreateEmptyOrderRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateEmptyOrderResponse|bool
     */
    public function createEmptyOrder(\Pggns\MidocoApi\Order\StructType\CreateEmptyOrderRequest $paramCreateEmptyOrderRequest)
    {
        try {
            $this->setResult($resultCreateEmptyOrder = $this->getSoapClient()->__soapCall('createEmptyOrder', [
                $paramCreateEmptyOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateEmptyOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createCollectiveCustomerInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest $paramCreateCollectiveCustomerInvoiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceResponse|bool
     */
    public function createCollectiveCustomerInvoice(\Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest $paramCreateCollectiveCustomerInvoiceRequest)
    {
        try {
            $this->setResult($resultCreateCollectiveCustomerInvoice = $this->getSoapClient()->__soapCall('createCollectiveCustomerInvoice', [
                $paramCreateCollectiveCustomerInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateCollectiveCustomerInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\CreateAcconLinkResponse|\Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeResponse|\Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse|\Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceResponse|\Pggns\MidocoApi\Order\StructType\CreateDSFinVKExportResponse|\Pggns\MidocoApi\Order\StructType\CreateEmptyOrderResponse|\Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentResponse|\Pggns\MidocoApi\Order\StructType\CreateSupplierMessageResponse|\Pggns\MidocoApi\Order\StructType\CreateTravelPlanPrintjobResponse|\Pggns\MidocoApi\Order\StructType\CreateVatCorrectionBillingDocumentResponse|\Pggns\MidocoApi\Order\StructType\CreateVermiLinkResponse|\Pggns\MidocoApi\Order\StructType\GetBillingDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
