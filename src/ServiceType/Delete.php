<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteBillingDocRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkRequest $paramDeleteBillingDocRemarkRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkResponse|bool
     */
    public function deleteBillingDocRemark(\Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkRequest $paramDeleteBillingDocRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteBillingDocRemark = $this->getSoapClient()->__soapCall('deleteBillingDocRemark', [
                $paramDeleteBillingDocRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingDocRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingPosRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest $paramDeleteBillingPosRemarkRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkResponse|bool
     */
    public function deleteBillingPosRemark(\Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkRequest $paramDeleteBillingPosRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteBillingPosRemark = $this->getSoapClient()->__soapCall('deleteBillingPosRemark', [
                $paramDeleteBillingPosRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingPosRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingPosition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionRequest $paramDeleteBillingPositionRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPositionResponse|bool
     */
    public function deleteBillingPosition(\Pggns\MidocoApi\Order\StructType\DeleteBillingPositionRequest $paramDeleteBillingPositionRequest)
    {
        try {
            $this->setResult($resultDeleteBillingPosition = $this->getSoapClient()->__soapCall('deleteBillingPosition', [
                $paramDeleteBillingPositionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingPosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentRequest $paramDeleteBillingDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentResponse|bool
     */
    public function deleteBillingDocument(\Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentRequest $paramDeleteBillingDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteBillingDocument = $this->getSoapClient()->__soapCall('deleteBillingDocument', [
                $paramDeleteBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrderDebitPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderDebitPaymentRequest $paramDeleteOrderDebitPaymentRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderDebitPaymentResponse|bool
     */
    public function deleteOrderDebitPayment(\Pggns\MidocoApi\Order\StructType\DeleteOrderDebitPaymentRequest $paramDeleteOrderDebitPaymentRequest)
    {
        try {
            $this->setResult($resultDeleteOrderDebitPayment = $this->getSoapClient()->__soapCall('deleteOrderDebitPayment', [
                $paramDeleteOrderDebitPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrderDebitPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrderOnlinePayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderOnlinePaymentRequest $paramDeleteOrderOnlinePaymentRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderOnlinePaymentResponse|bool
     */
    public function deleteOrderOnlinePayment(\Pggns\MidocoApi\Order\StructType\DeleteOrderOnlinePaymentRequest $paramDeleteOrderOnlinePaymentRequest)
    {
        try {
            $this->setResult($resultDeleteOrderOnlinePayment = $this->getSoapClient()->__soapCall('deleteOrderOnlinePayment', [
                $paramDeleteOrderOnlinePaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrderOnlinePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCashbook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteCashbookRequest $paramDeleteCashbookRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCashbookResponse|bool
     */
    public function deleteCashbook(\Pggns\MidocoApi\Order\StructType\DeleteCashbookRequest $paramDeleteCashbookRequest)
    {
        try {
            $this->setResult($resultDeleteCashbook = $this->getSoapClient()->__soapCall('deleteCashbook', [
                $paramDeleteCashbookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCashbook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteSupplierSettlementErrorsForItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSupplierSettlementErrorsForItemRequest $paramDeleteSupplierSettlementErrorsForItemRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierSettlementErrorsForItemResponse|bool
     */
    public function deleteSupplierSettlementErrorsForItem(\Pggns\MidocoApi\Order\StructType\DeleteSupplierSettlementErrorsForItemRequest $paramDeleteSupplierSettlementErrorsForItemRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlementErrorsForItem = $this->getSoapClient()->__soapCall('deleteSupplierSettlementErrorsForItem', [
                $paramDeleteSupplierSettlementErrorsForItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlementErrorsForItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrderRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderRemarkRequest $paramDeleteOrderRemarkRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderRemarkResponse|bool
     */
    public function deleteOrderRemark(\Pggns\MidocoApi\Order\StructType\DeleteOrderRemarkRequest $paramDeleteOrderRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteOrderRemark = $this->getSoapClient()->__soapCall('deleteOrderRemark', [
                $paramDeleteOrderRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrderRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCashBookPrint
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteCashBookPrintRequest $paramDeleteCashBookPrintRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteCashBookPrintResponse|bool
     */
    public function deleteCashBookPrint(\Pggns\MidocoApi\Order\StructType\DeleteCashBookPrintRequest $paramDeleteCashBookPrintRequest)
    {
        try {
            $this->setResult($resultDeleteCashBookPrint = $this->getSoapClient()->__soapCall('deleteCashBookPrint', [
                $paramDeleteCashBookPrintRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCashBookPrint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusCalculationRequest $paramDeleteMidocoBonusCalculationRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusCalculationResponse|bool
     */
    public function deleteMidocoBonusCalculation(\Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusCalculationRequest $paramDeleteMidocoBonusCalculationRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoBonusCalculation = $this->getSoapClient()->__soapCall('deleteMidocoBonusCalculation', [
                $paramDeleteMidocoBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSellItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSellItemRequest $paramDeleteSellItemRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSellItemResponse|bool
     */
    public function deleteSellItem(\Pggns\MidocoApi\Order\StructType\DeleteSellItemRequest $paramDeleteSellItemRequest)
    {
        try {
            $this->setResult($resultDeleteSellItem = $this->getSoapClient()->__soapCall('deleteSellItem', [
                $paramDeleteSellItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSellItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderRequest $paramDeleteOrderRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderResponse|bool
     */
    public function deleteOrder(\Pggns\MidocoApi\Order\StructType\DeleteOrderRequest $paramDeleteOrderRequest)
    {
        try {
            $this->setResult($resultDeleteOrder = $this->getSoapClient()->__soapCall('deleteOrder', [
                $paramDeleteOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSkippedBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingRequest $paramDeleteSkippedBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingResponse|bool
     */
    public function deleteSkippedBooking(\Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingRequest $paramDeleteSkippedBookingRequest)
    {
        try {
            $this->setResult($resultDeleteSkippedBooking = $this->getSoapClient()->__soapCall('deleteSkippedBooking', [
                $paramDeleteSkippedBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSkippedBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOldSkippedBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsRequest $paramDeleteOldSkippedBookingsRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsResponse|bool
     */
    public function deleteOldSkippedBookings(\Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsRequest $paramDeleteOldSkippedBookingsRequest)
    {
        try {
            $this->setResult($resultDeleteOldSkippedBookings = $this->getSoapClient()->__soapCall('deleteOldSkippedBookings', [
                $paramDeleteOldSkippedBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOldSkippedBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoBonusAddition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusAdditionRequest $paramDeleteMidocoBonusAdditionRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusAdditionResponse|bool
     */
    public function deleteMidocoBonusAddition(\Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusAdditionRequest $paramDeleteMidocoBonusAdditionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoBonusAddition = $this->getSoapClient()->__soapCall('deleteMidocoBonusAddition', [
                $paramDeleteMidocoBonusAdditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoBonusAddition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrderAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderAttributesRequest $paramDeleteOrderAttributesRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderAttributesResponse|bool
     */
    public function deleteOrderAttributes(\Pggns\MidocoApi\Order\StructType\DeleteOrderAttributesRequest $paramDeleteOrderAttributesRequest)
    {
        try {
            $this->setResult($resultDeleteOrderAttributes = $this->getSoapClient()->__soapCall('deleteOrderAttributes', [
                $paramDeleteOrderAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrderAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSellItemAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSellItemAttributesRequest $paramDeleteSellItemAttributesRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSellItemAttributesResponse|bool
     */
    public function deleteSellItemAttributes(\Pggns\MidocoApi\Order\StructType\DeleteSellItemAttributesRequest $paramDeleteSellItemAttributesRequest)
    {
        try {
            $this->setResult($resultDeleteSellItemAttributes = $this->getSoapClient()->__soapCall('deleteSellItemAttributes', [
                $paramDeleteSellItemAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSellItemAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMediatorBillingRequest $paramDeleteMediatorBillingRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMediatorBillingResponse|bool
     */
    public function deleteMediatorBilling(\Pggns\MidocoApi\Order\StructType\DeleteMediatorBillingRequest $paramDeleteMediatorBillingRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorBilling = $this->getSoapClient()->__soapCall('deleteMediatorBilling', [
                $paramDeleteMediatorBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMediatorChargeRequest $paramDeleteMediatorChargeRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMediatorChargeResponse|bool
     */
    public function deleteMediatorCharge(\Pggns\MidocoApi\Order\StructType\DeleteMediatorChargeRequest $paramDeleteMediatorChargeRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorCharge = $this->getSoapClient()->__soapCall('deleteMediatorCharge', [
                $paramDeleteMediatorChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrderNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderNoticeRequest $paramDeleteOrderNoticeRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderNoticeResponse|bool
     */
    public function deleteOrderNotice(\Pggns\MidocoApi\Order\StructType\DeleteOrderNoticeRequest $paramDeleteOrderNoticeRequest)
    {
        try {
            $this->setResult($resultDeleteOrderNotice = $this->getSoapClient()->__soapCall('deleteOrderNotice', [
                $paramDeleteOrderNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrderNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementRequest $paramDeleteSupplierAgencySettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementResponse|bool
     */
    public function deleteSupplierAgencySettlement(\Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementRequest $paramDeleteSupplierAgencySettlementRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAgencySettlement = $this->getSoapClient()->__soapCall('deleteSupplierAgencySettlement', [
                $paramDeleteSupplierAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplAgencySettlemJournals
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsRequest $paramDeleteSupplAgencySettlemJournalsRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsResponse|bool
     */
    public function deleteSupplAgencySettlemJournals(\Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsRequest $paramDeleteSupplAgencySettlemJournalsRequest)
    {
        try {
            $this->setResult($resultDeleteSupplAgencySettlemJournals = $this->getSoapClient()->__soapCall('deleteSupplAgencySettlemJournals', [
                $paramDeleteSupplAgencySettlemJournalsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplAgencySettlemJournals;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteMediatorProductSettlementInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMediatorProductSettlementInfoRequest $paramDeleteMediatorProductSettlementInfoRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMediatorProductSettlementInfoResponse|bool
     */
    public function deleteMediatorProductSettlementInfo(\Pggns\MidocoApi\Order\StructType\DeleteMediatorProductSettlementInfoRequest $paramDeleteMediatorProductSettlementInfoRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorProductSettlementInfo = $this->getSoapClient()->__soapCall('deleteMediatorProductSettlementInfo', [
                $paramDeleteMediatorProductSettlementInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorProductSettlementInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteEmptyOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteEmptyOrderRequest $paramDeleteEmptyOrderRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteEmptyOrderResponse|bool
     */
    public function deleteEmptyOrder(\Pggns\MidocoApi\Order\StructType\DeleteEmptyOrderRequest $paramDeleteEmptyOrderRequest)
    {
        try {
            $this->setResult($resultDeleteEmptyOrder = $this->getSoapClient()->__soapCall('deleteEmptyOrder', [
                $paramDeleteEmptyOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteEmptyOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteProcessedBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteProcessedBookingRequest $paramDeleteProcessedBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteProcessedBookingResponse|bool
     */
    public function deleteProcessedBooking(\Pggns\MidocoApi\Order\StructType\DeleteProcessedBookingRequest $paramDeleteProcessedBookingRequest)
    {
        try {
            $this->setResult($resultDeleteProcessedBooking = $this->getSoapClient()->__soapCall('deleteProcessedBooking', [
                $paramDeleteProcessedBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProcessedBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOldProcessedBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOldProcessedBookingsRequest $paramDeleteOldProcessedBookingsRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOldProcessedBookingsResponse|bool
     */
    public function deleteOldProcessedBookings(\Pggns\MidocoApi\Order\StructType\DeleteOldProcessedBookingsRequest $paramDeleteOldProcessedBookingsRequest)
    {
        try {
            $this->setResult($resultDeleteOldProcessedBookings = $this->getSoapClient()->__soapCall('deleteOldProcessedBookings', [
                $paramDeleteOldProcessedBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOldProcessedBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrderDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrderDocumentRequest $paramDeleteOrderDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderDocumentResponse|bool
     */
    public function deleteOrderDocument(\Pggns\MidocoApi\Order\StructType\DeleteOrderDocumentRequest $paramDeleteOrderDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteOrderDocument = $this->getSoapClient()->__soapCall('deleteOrderDocument', [
                $paramDeleteOrderDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrderDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingDocumentDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentDocumentRequest $paramDeleteBillingDocumentDocumentRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentDocumentResponse|bool
     */
    public function deleteBillingDocumentDocument(\Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentDocumentRequest $paramDeleteBillingDocumentDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteBillingDocumentDocument = $this->getSoapClient()->__soapCall('deleteBillingDocumentDocument', [
                $paramDeleteBillingDocumentDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingDocumentDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrdersDbiInfos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest $paramDeleteOrdersDbiInfosRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosResponse|bool
     */
    public function deleteOrdersDbiInfos(\Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest $paramDeleteOrdersDbiInfosRequest)
    {
        try {
            $this->setResult($resultDeleteOrdersDbiInfos = $this->getSoapClient()->__soapCall('deleteOrdersDbiInfos', [
                $paramDeleteOrdersDbiInfosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrdersDbiInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAdviceSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementRequest $paramDeleteAdviceSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementResponse|bool
     */
    public function deleteAdviceSettlement(\Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementRequest $paramDeleteAdviceSettlementRequest)
    {
        try {
            $this->setResult($resultDeleteAdviceSettlement = $this->getSoapClient()->__soapCall('deleteAdviceSettlement', [
                $paramDeleteAdviceSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAdviceSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementDetailRequest $paramDeleteAdviceSettlementDetailRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementDetailResponse|bool
     */
    public function deleteAdviceSettlementDetail(\Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementDetailRequest $paramDeleteAdviceSettlementDetailRequest)
    {
        try {
            $this->setResult($resultDeleteAdviceSettlementDetail = $this->getSoapClient()->__soapCall('deleteAdviceSettlementDetail', [
                $paramDeleteAdviceSettlementDetailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAdviceSettlementDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteFlightTimeChangeEmailRequest $paramDeleteFlightTimeChangeEmailRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteFlightTimeChangeEmailResponse|bool
     */
    public function deleteFlightTimeChangeEmail(\Pggns\MidocoApi\Order\StructType\DeleteFlightTimeChangeEmailRequest $paramDeleteFlightTimeChangeEmailRequest)
    {
        try {
            $this->setResult($resultDeleteFlightTimeChangeEmail = $this->getSoapClient()->__soapCall('deleteFlightTimeChangeEmail', [
                $paramDeleteFlightTimeChangeEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFlightTimeChangeEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingDocDbiInfos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingDocDbiInfosRequest $paramDeleteBillingDocDbiInfosRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingDocDbiInfosResponse|bool
     */
    public function deleteBillingDocDbiInfos(\Pggns\MidocoApi\Order\StructType\DeleteBillingDocDbiInfosRequest $paramDeleteBillingDocDbiInfosRequest)
    {
        try {
            $this->setResult($resultDeleteBillingDocDbiInfos = $this->getSoapClient()->__soapCall('deleteBillingDocDbiInfos', [
                $paramDeleteBillingDocDbiInfosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingDocDbiInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoOrderQm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmRequest $paramDeleteMidocoOrderQmRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmResponse|bool
     */
    public function deleteMidocoOrderQm(\Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmRequest $paramDeleteMidocoOrderQmRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoOrderQm = $this->getSoapClient()->__soapCall('deleteMidocoOrderQm', [
                $paramDeleteMidocoOrderQmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoOrderQm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMdcSettlementCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementChargeRequest $paramDeleteMdcSettlementChargeRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementChargeResponse|bool
     */
    public function deleteMdcSettlementCharge(\Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementChargeRequest $paramDeleteMdcSettlementChargeRequest)
    {
        try {
            $this->setResult($resultDeleteMdcSettlementCharge = $this->getSoapClient()->__soapCall('deleteMdcSettlementCharge', [
                $paramDeleteMdcSettlementChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMdcSettlementCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMdcSettlementBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementBillingRequest $paramDeleteMdcSettlementBillingRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementBillingResponse|bool
     */
    public function deleteMdcSettlementBilling(\Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementBillingRequest $paramDeleteMdcSettlementBillingRequest)
    {
        try {
            $this->setResult($resultDeleteMdcSettlementBilling = $this->getSoapClient()->__soapCall('deleteMdcSettlementBilling', [
                $paramDeleteMdcSettlementBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMdcSettlementBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSellRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteSellRemarkRequest $paramDeleteSellRemarkRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSellRemarkResponse|bool
     */
    public function deleteSellRemark(\Pggns\MidocoApi\Order\StructType\DeleteSellRemarkRequest $paramDeleteSellRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteSellRemark = $this->getSoapClient()->__soapCall('deleteSellRemark', [
                $paramDeleteSellRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSellRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingNoticesRequest $paramDeleteBillingNoticesRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingNoticesResponse|bool
     */
    public function deleteBillingNotices(\Pggns\MidocoApi\Order\StructType\DeleteBillingNoticesRequest $paramDeleteBillingNoticesRequest)
    {
        try {
            $this->setResult($resultDeleteBillingNotices = $this->getSoapClient()->__soapCall('deleteBillingNotices', [
                $paramDeleteBillingNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePaymentProviderSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeletePaymentProviderSettlementRequest $paramDeletePaymentProviderSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeletePaymentProviderSettlementResponse|bool
     */
    public function deletePaymentProviderSettlement(\Pggns\MidocoApi\Order\StructType\DeletePaymentProviderSettlementRequest $paramDeletePaymentProviderSettlementRequest)
    {
        try {
            $this->setResult($resultDeletePaymentProviderSettlement = $this->getSoapClient()->__soapCall('deletePaymentProviderSettlement', [
                $paramDeletePaymentProviderSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePaymentProviderSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBillingPrint
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteBillingPrintRequest $paramDeleteBillingPrintRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPrintResponse|bool
     */
    public function deleteBillingPrint(\Pggns\MidocoApi\Order\StructType\DeleteBillingPrintRequest $paramDeleteBillingPrintRequest)
    {
        try {
            $this->setResult($resultDeleteBillingPrint = $this->getSoapClient()->__soapCall('deleteBillingPrint', [
                $paramDeleteBillingPrintRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBillingPrint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelnoPurchaseAssignment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\DeleteTravelnoPurchaseAssignmentRequest $paramDeleteTravelnoPurchaseAssignmentRequest
     * @return \Pggns\MidocoApi\Order\StructType\DeleteTravelnoPurchaseAssignmentResponse|bool
     */
    public function deleteTravelnoPurchaseAssignment(\Pggns\MidocoApi\Order\StructType\DeleteTravelnoPurchaseAssignmentRequest $paramDeleteTravelnoPurchaseAssignmentRequest)
    {
        try {
            $this->setResult($resultDeleteTravelnoPurchaseAssignment = $this->getSoapClient()->__soapCall('deleteTravelnoPurchaseAssignment', [
                $paramDeleteTravelnoPurchaseAssignmentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelnoPurchaseAssignment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementDetailResponse|\Pggns\MidocoApi\Order\StructType\DeleteAdviceSettlementResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingDocDbiInfosResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingDocRemarkResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentDocumentResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingDocumentResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingNoticesResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingPositionResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingPosRemarkResponse|\Pggns\MidocoApi\Order\StructType\DeleteBillingPrintResponse|\Pggns\MidocoApi\Order\StructType\DeleteCashBookPrintResponse|\Pggns\MidocoApi\Order\StructType\DeleteCashbookResponse|\Pggns\MidocoApi\Order\StructType\DeleteEmptyOrderResponse|\Pggns\MidocoApi\Order\StructType\DeleteFlightTimeChangeEmailResponse|\Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementBillingResponse|\Pggns\MidocoApi\Order\StructType\DeleteMdcSettlementChargeResponse|\Pggns\MidocoApi\Order\StructType\DeleteMediatorBillingResponse|\Pggns\MidocoApi\Order\StructType\DeleteMediatorChargeResponse|\Pggns\MidocoApi\Order\StructType\DeleteMediatorProductSettlementInfoResponse|\Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusAdditionResponse|\Pggns\MidocoApi\Order\StructType\DeleteMidocoBonusCalculationResponse|\Pggns\MidocoApi\Order\StructType\DeleteMidocoOrderQmResponse|\Pggns\MidocoApi\Order\StructType\DeleteOldProcessedBookingsResponse|\Pggns\MidocoApi\Order\StructType\DeleteOldSkippedBookingsResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderAttributesResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderDebitPaymentResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderDocumentResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderNoticeResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderOnlinePaymentResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderRemarkResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrderResponse|\Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosResponse|\Pggns\MidocoApi\Order\StructType\DeletePaymentProviderSettlementResponse|\Pggns\MidocoApi\Order\StructType\DeleteProcessedBookingResponse|\Pggns\MidocoApi\Order\StructType\DeleteSellItemAttributesResponse|\Pggns\MidocoApi\Order\StructType\DeleteSellItemResponse|\Pggns\MidocoApi\Order\StructType\DeleteSellRemarkResponse|\Pggns\MidocoApi\Order\StructType\DeleteSkippedBookingResponse|\Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsResponse|\Pggns\MidocoApi\Order\StructType\DeleteSupplierAgencySettlementResponse|\Pggns\MidocoApi\Order\StructType\DeleteSupplierSettlementErrorsForItemResponse|\Pggns\MidocoApi\Order\StructType\DeleteTravelnoPurchaseAssignmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
