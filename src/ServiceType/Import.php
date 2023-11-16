<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Import
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named importMediatorCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest $paramImportMediatorChargesRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportMediatorChargesResponse|bool
     */
    public function importMediatorCharges(\Pggns\MidocoApi\Order\StructType\ImportMediatorChargesRequest $paramImportMediatorChargesRequest)
    {
        try {
            $this->setResult($resultImportMediatorCharges = $this->getSoapClient()->__soapCall('importMediatorCharges', [
                $paramImportMediatorChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportMediatorCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named importSupplierSettlementData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest $paramImportSupplierSettlementDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataResponse|bool
     */
    public function importSupplierSettlementData(\Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataRequest $paramImportSupplierSettlementDataRequest)
    {
        try {
            $this->setResult($resultImportSupplierSettlementData = $this->getSoapClient()->__soapCall('importSupplierSettlementData', [
                $paramImportSupplierSettlementDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportSupplierSettlementData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named importMdcSettlementCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ImportMdcSettlementChargesRequest $paramImportMdcSettlementChargesRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportMdcSettlementChargesResponse|bool
     */
    public function importMdcSettlementCharges(\Pggns\MidocoApi\Order\StructType\ImportMdcSettlementChargesRequest $paramImportMdcSettlementChargesRequest)
    {
        try {
            $this->setResult($resultImportMdcSettlementCharges = $this->getSoapClient()->__soapCall('importMdcSettlementCharges', [
                $paramImportMdcSettlementChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportMdcSettlementCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named importVouchers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ImportVouchersRequest $paramImportVouchersRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersResponse|bool
     */
    public function importVouchers(\Pggns\MidocoApi\Order\StructType\ImportVouchersRequest $paramImportVouchersRequest)
    {
        try {
            $this->setResult($resultImportVouchers = $this->getSoapClient()->__soapCall('importVouchers', [
                $paramImportVouchersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportVouchers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * importPaymentProviderSettlementData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest $paramImportPaymentProviderSettlementDataRequest
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse|bool
     */
    public function importPaymentProviderSettlementData(\Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataRequest $paramImportPaymentProviderSettlementDataRequest)
    {
        try {
            $this->setResult($resultImportPaymentProviderSettlementData = $this->getSoapClient()->__soapCall('importPaymentProviderSettlementData', [
                $paramImportPaymentProviderSettlementDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportPaymentProviderSettlementData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\ImportMdcSettlementChargesResponse|\Pggns\MidocoApi\Order\StructType\ImportMediatorChargesResponse|\Pggns\MidocoApi\Order\StructType\ImportPaymentProviderSettlementDataResponse|\Pggns\MidocoApi\Order\StructType\ImportSupplierSettlementDataResponse|\Pggns\MidocoApi\Order\StructType\ImportVouchersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
