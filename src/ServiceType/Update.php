<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Update
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named updateMediatorAmounts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest $paramUpdateMediatorAmountsRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsResponse|bool
     */
    public function updateMediatorAmounts(\Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsRequest $paramUpdateMediatorAmountsRequest)
    {
        try {
            $this->setResult($resultUpdateMediatorAmounts = $this->getSoapClient()->__soapCall('updateMediatorAmounts', [
                $paramUpdateMediatorAmountsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateMediatorAmounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateOrderCooperationId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateOrderCooperationIdRequest $paramUpdateOrderCooperationIdRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateOrderCooperationIdResponse|bool
     */
    public function updateOrderCooperationId(\Pggns\MidocoApi\Order\StructType\UpdateOrderCooperationIdRequest $paramUpdateOrderCooperationIdRequest)
    {
        try {
            $this->setResult($resultUpdateOrderCooperationId = $this->getSoapClient()->__soapCall('updateOrderCooperationId', [
                $paramUpdateOrderCooperationIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateOrderCooperationId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateChangeableReceiptPosition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionRequest $paramUpdateChangeableReceiptPositionRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionResponse|bool
     */
    public function updateChangeableReceiptPosition(\Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionRequest $paramUpdateChangeableReceiptPositionRequest)
    {
        try {
            $this->setResult($resultUpdateChangeableReceiptPosition = $this->getSoapClient()->__soapCall('updateChangeableReceiptPosition', [
                $paramUpdateChangeableReceiptPositionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateChangeableReceiptPosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailRequest $paramUpdateFlightTimeChangeEmailRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailResponse|bool
     */
    public function updateFlightTimeChangeEmail(\Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailRequest $paramUpdateFlightTimeChangeEmailRequest)
    {
        try {
            $this->setResult($resultUpdateFlightTimeChangeEmail = $this->getSoapClient()->__soapCall('updateFlightTimeChangeEmail', [
                $paramUpdateFlightTimeChangeEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateFlightTimeChangeEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateFlightTimeChangeEmailDet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailDetRequest $paramUpdateFlightTimeChangeEmailDetRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailDetResponse|bool
     */
    public function updateFlightTimeChangeEmailDet(\Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailDetRequest $paramUpdateFlightTimeChangeEmailDetRequest)
    {
        try {
            $this->setResult($resultUpdateFlightTimeChangeEmailDet = $this->getSoapClient()->__soapCall('updateFlightTimeChangeEmailDet', [
                $paramUpdateFlightTimeChangeEmailDetRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateFlightTimeChangeEmailDet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * updateSupplierAgencySettlementDetail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailRequest $paramUpdateSupplierAgencySettlementDetailRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailResponse|bool
     */
    public function updateSupplierAgencySettlementDetail(\Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailRequest $paramUpdateSupplierAgencySettlementDetailRequest)
    {
        try {
            $this->setResult($resultUpdateSupplierAgencySettlementDetail = $this->getSoapClient()->__soapCall('updateSupplierAgencySettlementDetail', [
                $paramUpdateSupplierAgencySettlementDetailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateSupplierAgencySettlementDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updatePackageMargin
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdatePackageMarginRequest $paramUpdatePackageMarginRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdatePackageMarginResponse|bool
     */
    public function updatePackageMargin(\Pggns\MidocoApi\Order\StructType\UpdatePackageMarginRequest $paramUpdatePackageMarginRequest)
    {
        try {
            $this->setResult($resultUpdatePackageMargin = $this->getSoapClient()->__soapCall('updatePackageMargin', [
                $paramUpdatePackageMarginRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdatePackageMargin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateBookingStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest $paramUpdateBookingStatusRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusResponse|bool
     */
    public function updateBookingStatus(\Pggns\MidocoApi\Order\StructType\UpdateBookingStatusRequest $paramUpdateBookingStatusRequest)
    {
        try {
            $this->setResult($resultUpdateBookingStatus = $this->getSoapClient()->__soapCall('updateBookingStatus', [
                $paramUpdateBookingStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateBookingStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateOrderPaymentInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\UpdateOrderPaymentInfoRequest $paramUpdateOrderPaymentInfoRequest
     * @return \Pggns\MidocoApi\Order\StructType\UpdateOrderPaymentInfoResponse|bool
     */
    public function updateOrderPaymentInfo(\Pggns\MidocoApi\Order\StructType\UpdateOrderPaymentInfoRequest $paramUpdateOrderPaymentInfoRequest)
    {
        try {
            $this->setResult($resultUpdateOrderPaymentInfo = $this->getSoapClient()->__soapCall('updateOrderPaymentInfo', [
                $paramUpdateOrderPaymentInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateOrderPaymentInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\UpdateBookingStatusResponse|\Pggns\MidocoApi\Order\StructType\UpdateChangeableReceiptPositionResponse|\Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailDetResponse|\Pggns\MidocoApi\Order\StructType\UpdateFlightTimeChangeEmailResponse|\Pggns\MidocoApi\Order\StructType\UpdateMediatorAmountsResponse|\Pggns\MidocoApi\Order\StructType\UpdateOrderCooperationIdResponse|\Pggns\MidocoApi\Order\StructType\UpdateOrderPaymentInfoResponse|\Pggns\MidocoApi\Order\StructType\UpdatePackageMarginResponse|\Pggns\MidocoApi\Order\StructType\UpdateSupplierAgencySettlementDetailResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
