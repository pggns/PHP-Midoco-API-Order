<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Split ServiceType
 * @subpackage Services
 */
class Split extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Split
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named splitSupplAgencySettlemBook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookRequest $paramSplitSupplAgencySettlemBookRequest
     * @return \Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookResponse|bool
     */
    public function splitSupplAgencySettlemBook(\Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookRequest $paramSplitSupplAgencySettlemBookRequest)
    {
        try {
            $this->setResult($resultSplitSupplAgencySettlemBook = $this->getSoapClient()->__soapCall('splitSupplAgencySettlemBook', [
                $paramSplitSupplAgencySettlemBookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSplitSupplAgencySettlemBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\SplitSupplAgencySettlemBookResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
