<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Print ServiceType
 * @subpackage Services
 */
class _Print extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\_Print
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named printBillingPrintjob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest $paramPrintBillingPrintjobRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse|bool
     */
    public function printBillingPrintjob(\Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest $paramPrintBillingPrintjobRequest)
    {
        try {
            $this->setResult($resultPrintBillingPrintjob = $this->getSoapClient()->__soapCall('printBillingPrintjob', [
                $paramPrintBillingPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintBillingPrintjob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printTravelPlanPrintjob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobRequest $paramPrintTravelPlanPrintjobRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobResponse|bool
     */
    public function printTravelPlanPrintjob(\Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobRequest $paramPrintTravelPlanPrintjobRequest)
    {
        try {
            $this->setResult($resultPrintTravelPlanPrintjob = $this->getSoapClient()->__soapCall('printTravelPlanPrintjob', [
                $paramPrintTravelPlanPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintTravelPlanPrintjob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printCashBook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintCashBookRequest $paramPrintCashBookRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintCashBookResponse|bool
     */
    public function printCashBook(\Pggns\MidocoApi\Order\StructType\PrintCashBookRequest $paramPrintCashBookRequest)
    {
        try {
            $this->setResult($resultPrintCashBook = $this->getSoapClient()->__soapCall('printCashBook', [
                $paramPrintCashBookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintCashBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printUserBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest $paramPrintUserBonusCalculationRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationResponse|bool
     */
    public function printUserBonusCalculation(\Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationRequest $paramPrintUserBonusCalculationRequest)
    {
        try {
            $this->setResult($resultPrintUserBonusCalculation = $this->getSoapClient()->__soapCall('printUserBonusCalculation', [
                $paramPrintUserBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintUserBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printAllUsersBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationRequest $paramPrintAllUsersBonusCalculationRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationResponse|bool
     */
    public function printAllUsersBonusCalculation(\Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationRequest $paramPrintAllUsersBonusCalculationRequest)
    {
        try {
            $this->setResult($resultPrintAllUsersBonusCalculation = $this->getSoapClient()->__soapCall('printAllUsersBonusCalculation', [
                $paramPrintAllUsersBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintAllUsersBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printOrderInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest $paramPrintOrderInvoiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceResponse|bool
     */
    public function printOrderInvoice(\Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceRequest $paramPrintOrderInvoiceRequest)
    {
        try {
            $this->setResult($resultPrintOrderInvoice = $this->getSoapClient()->__soapCall('printOrderInvoice', [
                $paramPrintOrderInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintOrderInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printAgencySettlementInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceRequest $paramPrintAgencySettlementInvoiceRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceResponse|bool
     */
    public function printAgencySettlementInvoice(\Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceRequest $paramPrintAgencySettlementInvoiceRequest)
    {
        try {
            $this->setResult($resultPrintAgencySettlementInvoice = $this->getSoapClient()->__soapCall('printAgencySettlementInvoice', [
                $paramPrintAgencySettlementInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintAgencySettlementInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printAdvice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest $paramPrintAdviceRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse|bool
     */
    public function printAdvice(\Pggns\MidocoApi\Order\StructType\PrintAdviceRequest $paramPrintAdviceRequest)
    {
        try {
            $this->setResult($resultPrintAdvice = $this->getSoapClient()->__soapCall('printAdvice', [
                $paramPrintAdviceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintAdvice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printAgencySettlementFibuConsoMode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeRequest $paramPrintAgencySettlementFibuConsoModeRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeResponse|bool
     */
    public function printAgencySettlementFibuConsoMode(\Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeRequest $paramPrintAgencySettlementFibuConsoModeRequest)
    {
        try {
            $this->setResult($resultPrintAgencySettlementFibuConsoMode = $this->getSoapClient()->__soapCall('printAgencySettlementFibuConsoMode', [
                $paramPrintAgencySettlementFibuConsoModeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintAgencySettlementFibuConsoMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse|\Pggns\MidocoApi\Order\StructType\PrintAgencySettlementFibuConsoModeResponse|\Pggns\MidocoApi\Order\StructType\PrintAgencySettlementInvoiceResponse|\Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationResponse|\Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse|\Pggns\MidocoApi\Order\StructType\PrintCashBookResponse|\Pggns\MidocoApi\Order\StructType\PrintOrderInvoiceResponse|\Pggns\MidocoApi\Order\StructType\PrintTravelPlanPrintjobResponse|\Pggns\MidocoApi\Order\StructType\PrintUserBonusCalculationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
