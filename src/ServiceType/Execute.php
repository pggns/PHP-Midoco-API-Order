<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Execute ServiceType
 * @subpackage Services
 */
class Execute extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Execute
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named executeMediatorSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest $paramExecuteMediatorSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementResponse|bool
     */
    public function executeMediatorSettlement(\Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest $paramExecuteMediatorSettlementRequest)
    {
        try {
            $this->setResult($resultExecuteMediatorSettlement = $this->getSoapClient()->__soapCall('executeMediatorSettlement', [
                $paramExecuteMediatorSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteMediatorSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest $paramExecuteAgencySettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse|bool
     */
    public function executeAgencySettlement(\Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementRequest $paramExecuteAgencySettlementRequest)
    {
        try {
            $this->setResult($resultExecuteAgencySettlement = $this->getSoapClient()->__soapCall('executeAgencySettlement', [
                $paramExecuteAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeCompetitionRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest $paramExecuteCompetitionRuleRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleResponse|bool
     */
    public function executeCompetitionRule(\Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleRequest $paramExecuteCompetitionRuleRequest)
    {
        try {
            $this->setResult($resultExecuteCompetitionRule = $this->getSoapClient()->__soapCall('executeCompetitionRule', [
                $paramExecuteCompetitionRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteCompetitionRule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeBonusRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleRequest $paramExecuteBonusRuleRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleResponse|bool
     */
    public function executeBonusRule(\Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleRequest $paramExecuteBonusRuleRequest)
    {
        try {
            $this->setResult($resultExecuteBonusRule = $this->getSoapClient()->__soapCall('executeBonusRule', [
                $paramExecuteBonusRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteBonusRule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeSettlementChargeForCompany
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest $paramExecuteSettlementChargeForCompanyRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyResponse|bool
     */
    public function executeSettlementChargeForCompany(\Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyRequest $paramExecuteSettlementChargeForCompanyRequest)
    {
        try {
            $this->setResult($resultExecuteSettlementChargeForCompany = $this->getSoapClient()->__soapCall('executeSettlementChargeForCompany', [
                $paramExecuteSettlementChargeForCompanyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteSettlementChargeForCompany;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeSettlementCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeRequest $paramExecuteSettlementChargeRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeResponse|bool
     */
    public function executeSettlementCharge(\Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeRequest $paramExecuteSettlementChargeRequest)
    {
        try {
            $this->setResult($resultExecuteSettlementCharge = $this->getSoapClient()->__soapCall('executeSettlementCharge', [
                $paramExecuteSettlementChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteSettlementCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest $paramExecuteMediatorSettlementLevelRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse|bool
     */
    public function executeMediatorSettlementLevel(\Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest $paramExecuteMediatorSettlementLevelRequest)
    {
        try {
            $this->setResult($resultExecuteMediatorSettlementLevel = $this->getSoapClient()->__soapCall('executeMediatorSettlementLevel', [
                $paramExecuteMediatorSettlementLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteMediatorSettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeGroupAdvisorCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest $paramExecuteGroupAdvisorSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementResponse|bool
     */
    public function executeGroupAdvisorCommission(\Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementRequest $paramExecuteGroupAdvisorSettlementRequest)
    {
        try {
            $this->setResult($resultExecuteGroupAdvisorCommission = $this->getSoapClient()->__soapCall('executeGroupAdvisorCommission', [
                $paramExecuteGroupAdvisorSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteGroupAdvisorCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeMediatorProductSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest $paramExecuteMediatorProductSettlementRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse|bool
     */
    public function executeMediatorProductSettlement(\Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest $paramExecuteMediatorProductSettlementRequest)
    {
        try {
            $this->setResult($resultExecuteMediatorProductSettlement = $this->getSoapClient()->__soapCall('executeMediatorProductSettlement', [
                $paramExecuteMediatorProductSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteMediatorProductSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeAgencySettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest $paramExecuteAgencySettlementLevelRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelResponse|bool
     */
    public function executeAgencySettlementLevel(\Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelRequest $paramExecuteAgencySettlementLevelRequest)
    {
        try {
            $this->setResult($resultExecuteAgencySettlementLevel = $this->getSoapClient()->__soapCall('executeAgencySettlementLevel', [
                $paramExecuteAgencySettlementLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteAgencySettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeBillingDunning
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteBillingDunningRequest $paramExecuteBillingDunningRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBillingDunningResponse|bool
     */
    public function executeBillingDunning(\Pggns\MidocoApi\Order\StructType\ExecuteBillingDunningRequest $paramExecuteBillingDunningRequest)
    {
        try {
            $this->setResult($resultExecuteBillingDunning = $this->getSoapClient()->__soapCall('executeBillingDunning', [
                $paramExecuteBillingDunningRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteBillingDunning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeOrderRules
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest $paramExecuteOrderRulesRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesResponse|bool
     */
    public function executeOrderRules(\Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesRequest $paramExecuteOrderRulesRequest)
    {
        try {
            $this->setResult($resultExecuteOrderRules = $this->getSoapClient()->__soapCall('executeOrderRules', [
                $paramExecuteOrderRulesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteOrderRules;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeRevertAuth
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest $paramExecuteRevertAuthRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthResponse|bool
     */
    public function executeRevertAuth(\Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest $paramExecuteRevertAuthRequest)
    {
        try {
            $this->setResult($resultExecuteRevertAuth = $this->getSoapClient()->__soapCall('executeRevertAuth', [
                $paramExecuteRevertAuthRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteRevertAuth;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeSingleMarginBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteSingleMarginBookingRequest $paramExecuteSingleMarginBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteSingleMarginBookingResponse|bool
     */
    public function executeSingleMarginBooking(\Pggns\MidocoApi\Order\StructType\ExecuteSingleMarginBookingRequest $paramExecuteSingleMarginBookingRequest)
    {
        try {
            $this->setResult($resultExecuteSingleMarginBooking = $this->getSoapClient()->__soapCall('executeSingleMarginBooking', [
                $paramExecuteSingleMarginBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteSingleMarginBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeBackofficeExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest $paramExecuteBackofficeExportRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest|bool
     */
    public function executeBackofficeExport(\Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest $paramExecuteBackofficeExportRequest)
    {
        try {
            $this->setResult($resultExecuteBackofficeExport = $this->getSoapClient()->__soapCall('executeBackofficeExport', [
                $paramExecuteBackofficeExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteBackofficeExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeTravelNoMarginBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingRequest $paramExecuteTravelNoMarginBookingRequest
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingResponse|bool
     */
    public function executeTravelNoMarginBooking(\Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingRequest $paramExecuteTravelNoMarginBookingRequest)
    {
        try {
            $this->setResult($resultExecuteTravelNoMarginBooking = $this->getSoapClient()->__soapCall('executeTravelNoMarginBooking', [
                $paramExecuteTravelNoMarginBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteTravelNoMarginBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementLevelResponse|\Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse|\Pggns\MidocoApi\Order\StructType\ExecuteBackofficeExportRequest|\Pggns\MidocoApi\Order\StructType\ExecuteBillingDunningResponse|\Pggns\MidocoApi\Order\StructType\ExecuteBonusRuleResponse|\Pggns\MidocoApi\Order\StructType\ExecuteCompetitionRuleResponse|\Pggns\MidocoApi\Order\StructType\ExecuteGroupAdvisorSettlementResponse|\Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse|\Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse|\Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementResponse|\Pggns\MidocoApi\Order\StructType\ExecuteOrderRulesResponse|\Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthResponse|\Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeForCompanyResponse|\Pggns\MidocoApi\Order\StructType\ExecuteSettlementChargeResponse|\Pggns\MidocoApi\Order\StructType\ExecuteSingleMarginBookingResponse|\Pggns\MidocoApi\Order\StructType\ExecuteTravelNoMarginBookingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
