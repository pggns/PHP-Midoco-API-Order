<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Auto ServiceType
 * @subpackage Services
 */
class Auto extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Auto
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named
     * autoSplitTravelnoPurchaseAssignments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsRequest $paramAutoSplitTravelnoPurchaseAssignmentsRequest
     * @return \Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsResponse|bool
     */
    public function autoSplitTravelnoPurchaseAssignments(\Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsRequest $paramAutoSplitTravelnoPurchaseAssignmentsRequest)
    {
        try {
            $this->setResult($resultAutoSplitTravelnoPurchaseAssignments = $this->getSoapClient()->__soapCall('autoSplitTravelnoPurchaseAssignments', [
                $paramAutoSplitTravelnoPurchaseAssignmentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAutoSplitTravelnoPurchaseAssignments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
