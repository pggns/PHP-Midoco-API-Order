<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Change
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named changeSellItemCreationUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ChangeSellItemCreationUserRequest $paramChangeSellItemCreationUserRequest
     * @return \Pggns\MidocoApi\Order\StructType\ChangeSellItemCreationUserResponse|bool
     */
    public function changeSellItemCreationUser(\Pggns\MidocoApi\Order\StructType\ChangeSellItemCreationUserRequest $paramChangeSellItemCreationUserRequest)
    {
        try {
            $this->setResult($resultChangeSellItemCreationUser = $this->getSoapClient()->__soapCall('changeSellItemCreationUser', [
                $paramChangeSellItemCreationUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeSellItemCreationUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named changeOrderCreationUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\ChangeOrderCreationUserRequest $paramChangeOrderCreationUserRequest
     * @return \Pggns\MidocoApi\Order\StructType\ChangeOrderCreationUserResponse|bool
     */
    public function changeOrderCreationUser(\Pggns\MidocoApi\Order\StructType\ChangeOrderCreationUserRequest $paramChangeOrderCreationUserRequest)
    {
        try {
            $this->setResult($resultChangeOrderCreationUser = $this->getSoapClient()->__soapCall('changeOrderCreationUser', [
                $paramChangeOrderCreationUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeOrderCreationUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\ChangeOrderCreationUserResponse|\Pggns\MidocoApi\Order\StructType\ChangeSellItemCreationUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
