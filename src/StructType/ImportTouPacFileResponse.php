<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportTouPacFileResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportTouPacFileResponse extends ImportHandlerResponseType
{
    /**
     * The ClientId
     * Meta information extracted from the WSDL
     * - documentation: Aka. Mandatkennung
     * @var string|null
     */
    protected ?string $ClientId = null;
    /**
     * The FileNr
     * Meta information extracted from the WSDL
     * - documentation: Aka. Vorgangsnummer
     * @var string|null
     */
    protected ?string $FileNr = null;
    /**
     * Constructor method for ImportTouPacFileResponse
     * @uses ImportTouPacFileResponse::setClientId()
     * @uses ImportTouPacFileResponse::setFileNr()
     * @param string $clientId
     * @param string $fileNr
     */
    public function __construct(?string $clientId = null, ?string $fileNr = null)
    {
        $this
            ->setClientId($clientId)
            ->setFileNr($fileNr);
    }
    /**
     * Get ClientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->ClientId;
    }
    /**
     * Set ClientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->ClientId = $clientId;
        
        return $this;
    }
    /**
     * Get FileNr value
     * @return string|null
     */
    public function getFileNr(): ?string
    {
        return $this->FileNr;
    }
    /**
     * Set FileNr value
     * @param string $fileNr
     * @return \Pggns\MidocoApi\Order\StructType\ImportTouPacFileResponse
     */
    public function setFileNr(?string $fileNr = null): self
    {
        // validation for constraint: string
        if (!is_null($fileNr) && !is_string($fileNr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileNr, true), gettype($fileNr)), __LINE__);
        }
        $this->FileNr = $fileNr;
        
        return $this;
    }
}
