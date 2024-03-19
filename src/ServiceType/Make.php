<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Make ServiceType
 * @subpackage Services
 */
class Make extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Make
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named makeBillingDocumentForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest $paramMakeBillingDocumentForCustomerRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerResponse|bool
     */
    public function makeBillingDocumentForCustomer(\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerRequest $paramMakeBillingDocumentForCustomerRequest)
    {
        try {
            $this->setResult($resultMakeBillingDocumentForCustomer = $this->getSoapClient()->__soapCall('makeBillingDocumentForCustomer', [
                $paramMakeBillingDocumentForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeBillingDocumentForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named makeBillingDocumentForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest $paramMakeBillingDocumentForOrderRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderResponse|bool
     */
    public function makeBillingDocumentForOrder(\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderRequest $paramMakeBillingDocumentForOrderRequest)
    {
        try {
            $this->setResult($resultMakeBillingDocumentForOrder = $this->getSoapClient()->__soapCall('makeBillingDocumentForOrder', [
                $paramMakeBillingDocumentForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeBillingDocumentForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named makeOrderInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest $paramMakeOrderInvoiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse|bool
     */
    public function makeOrderInvoice(\Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest $paramMakeOrderInvoiceRequest)
    {
        try {
            $this->setResult($resultMakeOrderInvoice = $this->getSoapClient()->__soapCall('makeOrderInvoice', [
                $paramMakeOrderInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeOrderInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * makeBillingDocumentForAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $paramMakeBillingDocumentForAgencySettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse|bool
     */
    public function makeBillingDocumentForAgencySettlement(\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementRequest $paramMakeBillingDocumentForAgencySettlementRequest)
    {
        try {
            $this->setResult($resultMakeBillingDocumentForAgencySettlement = $this->getSoapClient()->__soapCall('makeBillingDocumentForAgencySettlement', [
                $paramMakeBillingDocumentForAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeBillingDocumentForAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named makeBillingDocument4BonusClearing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingRequest $paramMakeBillingDocument4BonusClearingRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingResponse|bool
     */
    public function makeBillingDocument4BonusClearing(\Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingRequest $paramMakeBillingDocument4BonusClearingRequest)
    {
        try {
            $this->setResult($resultMakeBillingDocument4BonusClearing = $this->getSoapClient()->__soapCall('makeBillingDocument4BonusClearing', [
                $paramMakeBillingDocument4BonusClearingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeBillingDocument4BonusClearing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named makeBillingDocument4AgencyFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeRequest $paramMakeBillingDocument4AgencyFeeTypeRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeResponse|bool
     */
    public function makeBillingDocument4AgencyFeeType(\Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeRequest $paramMakeBillingDocument4AgencyFeeTypeRequest)
    {
        try {
            $this->setResult($resultMakeBillingDocument4AgencyFeeType = $this->getSoapClient()->__soapCall('makeBillingDocument4AgencyFeeType', [
                $paramMakeBillingDocument4AgencyFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeBillingDocument4AgencyFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named makePartialInvoice4Order
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest $paramMakePartialInvoice4OrderRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderResponse|bool
     */
    public function makePartialInvoice4Order(\Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderRequest $paramMakePartialInvoice4OrderRequest)
    {
        try {
            $this->setResult($resultMakePartialInvoice4Order = $this->getSoapClient()->__soapCall('makePartialInvoice4Order', [
                $paramMakePartialInvoice4OrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakePartialInvoice4Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named makeOrderDiffInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceRequest $paramMakeOrderDiffInvoiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceResponse|bool
     */
    public function makeOrderDiffInvoice(\Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceRequest $paramMakeOrderDiffInvoiceRequest)
    {
        try {
            $this->setResult($resultMakeOrderDiffInvoice = $this->getSoapClient()->__soapCall('makeOrderDiffInvoice', [
                $paramMakeOrderDiffInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMakeOrderDiffInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeResponse|\Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingResponse|\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse|\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerResponse|\Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderResponse|\Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceResponse|\Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceResponse|\Pggns\MidocoApi\Order\StructType\MakePartialInvoice4OrderResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
