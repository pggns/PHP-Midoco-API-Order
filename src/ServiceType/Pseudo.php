<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pseudo ServiceType
 * @subpackage Services
 */
class Pseudo extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Order\ServiceType\Pseudo
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named pseudoRBCsvExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportRequest $paramPseudoRBCsvExportRequest
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportResponse|bool
     */
    public function pseudoRBCsvExport(\Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportRequest $paramPseudoRBCsvExportRequest)
    {
        try {
            $this->setResult($resultPseudoRBCsvExport = $this->getSoapClient()->__soapCall('pseudoRBCsvExport', [
                $paramPseudoRBCsvExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPseudoRBCsvExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
