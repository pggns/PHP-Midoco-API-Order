<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Agency ServiceType
 * @subpackage Services
 */
class Agency extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Agency
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named
     * agencySettlementBookingSetItemPrice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceRequest $paramAgencySettlementBookingSetItemPriceRequest
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceResponse|bool
     */
    public function agencySettlementBookingSetItemPrice(\Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceRequest $paramAgencySettlementBookingSetItemPriceRequest)
    {
        try {
            $this->setResult($resultAgencySettlementBookingSetItemPrice = $this->getSoapClient()->__soapCall('agencySettlementBookingSetItemPrice', [
                $paramAgencySettlementBookingSetItemPriceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAgencySettlementBookingSetItemPrice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementBookingSetItemPriceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
