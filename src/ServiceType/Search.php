<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchBillingDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest $paramSearchBillingDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentResponse|bool
     */
    public function searchBillingDocuments(\Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest $paramSearchBillingDocumentRequest)
    {
        try {
            $this->setResult($resultSearchBillingDocuments = $this->getSoapClient()->__soapCall('searchBillingDocuments', [
                $paramSearchBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBillingDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchTravelItemByFileKey
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchTravelItemByFileKeyRequest $paramSearchTravelItemByFileKeyRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelItemByFileKeyResponse|bool
     */
    public function searchTravelItemByFileKey(\Pggns\MidocoApi\Order\StructType\SearchTravelItemByFileKeyRequest $paramSearchTravelItemByFileKeyRequest)
    {
        try {
            $this->setResult($resultSearchTravelItemByFileKey = $this->getSoapClient()->__soapCall('searchTravelItemByFileKey', [
                $paramSearchTravelItemByFileKeyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchTravelItemByFileKey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchDocumentItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchDocumentItemRequest $paramSearchDocumentItemRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchDocumentItemResponse|bool
     */
    public function searchDocumentItem(\Pggns\MidocoApi\Order\StructType\SearchDocumentItemRequest $paramSearchDocumentItemRequest)
    {
        try {
            $this->setResult($resultSearchDocumentItem = $this->getSoapClient()->__soapCall('searchDocumentItem', [
                $paramSearchDocumentItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchDocumentItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchOrderRequest $paramSearchOrderRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderResponse|bool
     */
    public function searchOrder(\Pggns\MidocoApi\Order\StructType\SearchOrderRequest $paramSearchOrderRequest)
    {
        try {
            $this->setResult($resultSearchOrder = $this->getSoapClient()->__soapCall('searchOrder', [
                $paramSearchOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchOrderForAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyRequest $paramSearchOrderForAgencyRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyResponse|bool
     */
    public function searchOrderForAgency(\Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyRequest $paramSearchOrderForAgencyRequest)
    {
        try {
            $this->setResult($resultSearchOrderForAgency = $this->getSoapClient()->__soapCall('searchOrderForAgency', [
                $paramSearchOrderForAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchOrderForAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchSettlementInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoRequest $paramSearchMediatorSettlementInfoRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoResponse|bool
     */
    public function searchSettlementInfo(\Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoRequest $paramSearchMediatorSettlementInfoRequest)
    {
        try {
            $this->setResult($resultSearchSettlementInfo = $this->getSoapClient()->__soapCall('searchSettlementInfo', [
                $paramSearchMediatorSettlementInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSettlementInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchOrgUnitUserSpecifiedCashbook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookRequest $paramSearchOrgUnitUserSpecifiedCashbookRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookResponse|bool
     */
    public function searchOrgUnitUserSpecifiedCashbook(\Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookRequest $paramSearchOrgUnitUserSpecifiedCashbookRequest)
    {
        try {
            $this->setResult($resultSearchOrgUnitUserSpecifiedCashbook = $this->getSoapClient()->__soapCall('searchOrgUnitUserSpecifiedCashbook', [
                $paramSearchOrgUnitUserSpecifiedCashbookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchOrgUnitUserSpecifiedCashbook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchJournalExports
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchJournalExportsRequest $paramSearchJournalExportsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchJournalExportsResponse|bool
     */
    public function searchJournalExports(\Pggns\MidocoApi\Order\StructType\SearchJournalExportsRequest $paramSearchJournalExportsRequest)
    {
        try {
            $this->setResult($resultSearchJournalExports = $this->getSoapClient()->__soapCall('searchJournalExports', [
                $paramSearchJournalExportsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchJournalExports;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCashBookPrints
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintRequest $paramSearchCashBookPrintRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookPrintResponse|bool
     */
    public function searchCashBookPrints(\Pggns\MidocoApi\Order\StructType\SearchCashBookPrintRequest $paramSearchCashBookPrintRequest)
    {
        try {
            $this->setResult($resultSearchCashBookPrints = $this->getSoapClient()->__soapCall('searchCashBookPrints', [
                $paramSearchCashBookPrintRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCashBookPrints;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCashBookForCrtUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserRequest $paramSearchCashBookForCrtUserRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserResponse|bool
     */
    public function searchCashBookForCrtUser(\Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserRequest $paramSearchCashBookForCrtUserRequest)
    {
        try {
            $this->setResult($resultSearchCashBookForCrtUser = $this->getSoapClient()->__soapCall('searchCashBookForCrtUser', [
                $paramSearchCashBookForCrtUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCashBookForCrtUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchReceipt
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchReceiptRequest $paramSearchReceiptRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchReceiptResponse|bool
     */
    public function searchReceipt(\Pggns\MidocoApi\Order\StructType\SearchReceiptRequest $paramSearchReceiptRequest)
    {
        try {
            $this->setResult($resultSearchReceipt = $this->getSoapClient()->__soapCall('searchReceipt', [
                $paramSearchReceiptRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMediatorBillings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest $paramSearchMediatorBillingsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsResponse|bool
     */
    public function searchMediatorBillings(\Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsRequest $paramSearchMediatorBillingsRequest)
    {
        try {
            $this->setResult($resultSearchMediatorBillings = $this->getSoapClient()->__soapCall('searchMediatorBillings', [
                $paramSearchMediatorBillingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMediatorBillings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMediatorCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest $paramSearchMediatorChargesRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorChargesResponse|bool
     */
    public function searchMediatorCharges(\Pggns\MidocoApi\Order\StructType\SearchMediatorChargesRequest $paramSearchMediatorChargesRequest)
    {
        try {
            $this->setResult($resultSearchMediatorCharges = $this->getSoapClient()->__soapCall('searchMediatorCharges', [
                $paramSearchMediatorChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMediatorCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBookingId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest $paramSearchBookingIdRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchBookingIdResponse|bool
     */
    public function searchBookingId(\Pggns\MidocoApi\Order\StructType\SearchBookingIdRequest $paramSearchBookingIdRequest)
    {
        try {
            $this->setResult($resultSearchBookingId = $this->getSoapClient()->__soapCall('searchBookingId', [
                $paramSearchBookingIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBookingId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchSupplierAgencySettlements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest $paramSearchSupplierAgencySettlementsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsResponse|bool
     */
    public function searchSupplierAgencySettlements(\Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest $paramSearchSupplierAgencySettlementsRequest)
    {
        try {
            $this->setResult($resultSearchSupplierAgencySettlements = $this->getSoapClient()->__soapCall('searchSupplierAgencySettlements', [
                $paramSearchSupplierAgencySettlementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierAgencySettlements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustomerBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest $paramSearchCustomerBookingsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsResponse|bool
     */
    public function searchCustomerBookings(\Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsRequest $paramSearchCustomerBookingsRequest)
    {
        try {
            $this->setResult($resultSearchCustomerBookings = $this->getSoapClient()->__soapCall('searchCustomerBookings', [
                $paramSearchCustomerBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomerBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchDunning
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchDunningRequest $paramSearchDunningRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchDunningResponse|bool
     */
    public function searchDunning(\Pggns\MidocoApi\Order\StructType\SearchDunningRequest $paramSearchDunningRequest)
    {
        try {
            $this->setResult($resultSearchDunning = $this->getSoapClient()->__soapCall('searchDunning', [
                $paramSearchDunningRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchDunning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * searchMediatorProductSettlementInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMediatorProductSettlementInfoRequest $paramSearchMediatorProductSettlementInfoRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorProductSettlementInfoResponse|bool
     */
    public function searchMediatorProductSettlementInfo(\Pggns\MidocoApi\Order\StructType\SearchMediatorProductSettlementInfoRequest $paramSearchMediatorProductSettlementInfoRequest)
    {
        try {
            $this->setResult($resultSearchMediatorProductSettlementInfo = $this->getSoapClient()->__soapCall('searchMediatorProductSettlementInfo', [
                $paramSearchMediatorProductSettlementInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMediatorProductSettlementInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAgencySettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest $paramSearchAgencySettlementLevelRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelResponse|bool
     */
    public function searchAgencySettlementLevel(\Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelRequest $paramSearchAgencySettlementLevelRequest)
    {
        try {
            $this->setResult($resultSearchAgencySettlementLevel = $this->getSoapClient()->__soapCall('searchAgencySettlementLevel', [
                $paramSearchAgencySettlementLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAgencySettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * searchFileterdBillingDocumentForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerRequest $paramSearchFilteredBillingDocumentForCustomerRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerResponse|bool
     */
    public function searchFileterdBillingDocumentForCustomer(\Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerRequest $paramSearchFilteredBillingDocumentForCustomerRequest)
    {
        try {
            $this->setResult($resultSearchFileterdBillingDocumentForCustomer = $this->getSoapClient()->__soapCall('searchFileterdBillingDocumentForCustomer', [
                $paramSearchFilteredBillingDocumentForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchFileterdBillingDocumentForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAdviceSettlements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest $paramSearchAdviceSettlementsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsResponse|bool
     */
    public function searchAdviceSettlements(\Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsRequest $paramSearchAdviceSettlementsRequest)
    {
        try {
            $this->setResult($resultSearchAdviceSettlements = $this->getSoapClient()->__soapCall('searchAdviceSettlements', [
                $paramSearchAdviceSettlementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAdviceSettlements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBillingDunning
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest $paramSearchBillingDunningRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningResponse|bool
     */
    public function searchBillingDunning(\Pggns\MidocoApi\Order\StructType\SearchBillingDunningRequest $paramSearchBillingDunningRequest)
    {
        try {
            $this->setResult($resultSearchBillingDunning = $this->getSoapClient()->__soapCall('searchBillingDunning', [
                $paramSearchBillingDunningRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBillingDunning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchNameSpecifiedCashbook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchNameSpecifiedCashbookRequest $paramSearchNameSpecifiedCashbookRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchNameSpecifiedCashbookResponse|bool
     */
    public function searchNameSpecifiedCashbook(\Pggns\MidocoApi\Order\StructType\SearchNameSpecifiedCashbookRequest $paramSearchNameSpecifiedCashbookRequest)
    {
        try {
            $this->setResult($resultSearchNameSpecifiedCashbook = $this->getSoapClient()->__soapCall('searchNameSpecifiedCashbook', [
                $paramSearchNameSpecifiedCashbookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchNameSpecifiedCashbook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailRequest $paramSearchFlightTimeChangeEmailRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailResponse|bool
     */
    public function searchFlightTimeChangeEmail(\Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailRequest $paramSearchFlightTimeChangeEmailRequest)
    {
        try {
            $this->setResult($resultSearchFlightTimeChangeEmail = $this->getSoapClient()->__soapCall('searchFlightTimeChangeEmail', [
                $paramSearchFlightTimeChangeEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchFlightTimeChangeEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * searchDuplicatedAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailRequest $paramSearchDuplicatedAdviceSettlementDetailRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailResponse|bool
     */
    public function searchDuplicatedAdviceSettlementDetail(\Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailRequest $paramSearchDuplicatedAdviceSettlementDetailRequest)
    {
        try {
            $this->setResult($resultSearchDuplicatedAdviceSettlementDetail = $this->getSoapClient()->__soapCall('searchDuplicatedAdviceSettlementDetail', [
                $paramSearchDuplicatedAdviceSettlementDetailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchDuplicatedAdviceSettlementDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMdcSettlementCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementChargesRequest $paramSearchMdcSettlementChargesRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementChargesResponse|bool
     */
    public function searchMdcSettlementCharges(\Pggns\MidocoApi\Order\StructType\SearchMdcSettlementChargesRequest $paramSearchMdcSettlementChargesRequest)
    {
        try {
            $this->setResult($resultSearchMdcSettlementCharges = $this->getSoapClient()->__soapCall('searchMdcSettlementCharges', [
                $paramSearchMdcSettlementChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMdcSettlementCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMdcSettlementBillings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest $paramSearchMdcSettlementBillingsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsResponse|bool
     */
    public function searchMdcSettlementBillings(\Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsRequest $paramSearchMdcSettlementBillingsRequest)
    {
        try {
            $this->setResult($resultSearchMdcSettlementBillings = $this->getSoapClient()->__soapCall('searchMdcSettlementBillings', [
                $paramSearchMdcSettlementBillingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMdcSettlementBillings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPackageMargins
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchPackageMarginsRequest $paramSearchPackageMarginsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchPackageMarginsResponse|bool
     */
    public function searchPackageMargins(\Pggns\MidocoApi\Order\StructType\SearchPackageMarginsRequest $paramSearchPackageMarginsRequest)
    {
        try {
            $this->setResult($resultSearchPackageMargins = $this->getSoapClient()->__soapCall('searchPackageMargins', [
                $paramSearchPackageMarginsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPackageMargins;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPaymentProviderSettlements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest $paramSearchPaymentProviderSettlementsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsResponse|bool
     */
    public function searchPaymentProviderSettlements(\Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsRequest $paramSearchPaymentProviderSettlementsRequest)
    {
        try {
            $this->setResult($resultSearchPaymentProviderSettlements = $this->getSoapClient()->__soapCall('searchPaymentProviderSettlements', [
                $paramSearchPaymentProviderSettlementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPaymentProviderSettlements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchPaymentProviderEntries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest $paramSearchPaymentProviderEntriesRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesResponse|bool
     */
    public function searchPaymentProviderEntries(\Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesRequest $paramSearchPaymentProviderEntriesRequest)
    {
        try {
            $this->setResult($resultSearchPaymentProviderEntries = $this->getSoapClient()->__soapCall('searchPaymentProviderEntries', [
                $paramSearchPaymentProviderEntriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchPaymentProviderEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchTravelNoMargins
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest $paramSearchTravelNoMarginsRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsResponse|bool
     */
    public function searchTravelNoMargins(\Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsRequest $paramSearchTravelNoMarginsRequest)
    {
        try {
            $this->setResult($resultSearchTravelNoMargins = $this->getSoapClient()->__soapCall('searchTravelNoMargins', [
                $paramSearchTravelNoMarginsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchTravelNoMargins;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchTssProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest $paramSearchTssProtocolRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse|bool
     */
    public function searchTssProtocol(\Pggns\MidocoApi\Order\StructType\SearchTssProtocolRequest $paramSearchTssProtocolRequest)
    {
        try {
            $this->setResult($resultSearchTssProtocol = $this->getSoapClient()->__soapCall('searchTssProtocol', [
                $paramSearchTssProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchTssProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchDSFinVKExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest $paramSearchDSFinVKExportRequest
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportResponse|bool
     */
    public function searchDSFinVKExport(\Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportRequest $paramSearchDSFinVKExportRequest)
    {
        try {
            $this->setResult($resultSearchDSFinVKExport = $this->getSoapClient()->__soapCall('searchDSFinVKExport', [
                $paramSearchDSFinVKExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchDSFinVKExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\SearchAdviceSettlementsResponse|\Pggns\MidocoApi\Order\StructType\SearchAgencySettlementLevelResponse|\Pggns\MidocoApi\Order\StructType\SearchBillingDocumentResponse|\Pggns\MidocoApi\Order\StructType\SearchBillingDunningResponse|\Pggns\MidocoApi\Order\StructType\SearchBookingIdResponse|\Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserResponse|\Pggns\MidocoApi\Order\StructType\SearchCashBookPrintResponse|\Pggns\MidocoApi\Order\StructType\SearchCustomerBookingsResponse|\Pggns\MidocoApi\Order\StructType\SearchDocumentItemResponse|\Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportResponse|\Pggns\MidocoApi\Order\StructType\SearchDunningResponse|\Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailResponse|\Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerResponse|\Pggns\MidocoApi\Order\StructType\SearchFlightTimeChangeEmailResponse|\Pggns\MidocoApi\Order\StructType\SearchJournalExportsResponse|\Pggns\MidocoApi\Order\StructType\SearchMdcSettlementBillingsResponse|\Pggns\MidocoApi\Order\StructType\SearchMdcSettlementChargesResponse|\Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsResponse|\Pggns\MidocoApi\Order\StructType\SearchMediatorChargesResponse|\Pggns\MidocoApi\Order\StructType\SearchMediatorProductSettlementInfoResponse|\Pggns\MidocoApi\Order\StructType\SearchMediatorSettlementInfoResponse|\Pggns\MidocoApi\Order\StructType\SearchNameSpecifiedCashbookResponse|\Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyResponse|\Pggns\MidocoApi\Order\StructType\SearchOrderResponse|\Pggns\MidocoApi\Order\StructType\SearchOrgUnitUserSpecifiedCashbookResponse|\Pggns\MidocoApi\Order\StructType\SearchPackageMarginsResponse|\Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesResponse|\Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsResponse|\Pggns\MidocoApi\Order\StructType\SearchReceiptResponse|\Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsResponse|\Pggns\MidocoApi\Order\StructType\SearchTravelItemByFileKeyResponse|\Pggns\MidocoApi\Order\StructType\SearchTravelNoMarginsResponse|\Pggns\MidocoApi\Order\StructType\SearchTssProtocolResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
