<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Read ServiceType
 * @subpackage Services
 */
class Read extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Read
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named
     * readNumberOfBookingsForBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ReadNumberOfBookingsForBonusCalculationRequest $paramReadNumberOfBookingsForBonusCalculationRequest
     * @return \Pggns\MidocoApi\Order\StructType\ReadNumberOfBookingsForBonusCalculationResponse|bool
     */
    public function readNumberOfBookingsForBonusCalculation(\Pggns\MidocoApi\Order\StructType\ReadNumberOfBookingsForBonusCalculationRequest $paramReadNumberOfBookingsForBonusCalculationRequest)
    {
        try {
            $this->setResult($resultReadNumberOfBookingsForBonusCalculation = $this->getSoapClient()->__soapCall('readNumberOfBookingsForBonusCalculation', [
                $paramReadNumberOfBookingsForBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultReadNumberOfBookingsForBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\ReadNumberOfBookingsForBonusCalculationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
