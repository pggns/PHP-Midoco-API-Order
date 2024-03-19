<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Remove
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named removeUnprintedBillingPositions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsRequest $paramRemoveUnprintedBillingPositionsRequest
     * @return \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsResponse|bool
     */
    public function removeUnprintedBillingPositions(\Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsRequest $paramRemoveUnprintedBillingPositionsRequest)
    {
        try {
            $this->setResult($resultRemoveUnprintedBillingPositions = $this->getSoapClient()->__soapCall('removeUnprintedBillingPositions', [
                $paramRemoveUnprintedBillingPositionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveUnprintedBillingPositions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\RemoveUnprintedBillingPositionsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
