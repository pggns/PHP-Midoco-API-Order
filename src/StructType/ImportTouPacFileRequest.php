<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportTouPacFileRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Import a single TouPac file from Ratio via ClientId and FileNr
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportTouPacFileRequest extends AbstractStructBase
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
     * The FileNr_Type
     * Meta information extracted from the WSDL
     * - default: FileNr
     * @var string|null
     */
    protected ?string $FileNr_Type = null;
    /**
     * Constructor method for ImportTouPacFileRequest
     * @uses ImportTouPacFileRequest::setClientId()
     * @uses ImportTouPacFileRequest::setFileNr()
     * @uses ImportTouPacFileRequest::setFileNr_Type()
     * @param string $clientId
     * @param string $fileNr
     * @param string $fileNr_Type
     */
    public function __construct(?string $clientId = null, ?string $fileNr = null, ?string $fileNr_Type = 'FileNr')
    {
        $this
            ->setClientId($clientId)
            ->setFileNr($fileNr)
            ->setFileNr_Type($fileNr_Type);
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportTouPacFileRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportTouPacFileRequest
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
    /**
     * Get FileNr_Type value
     * @return string|null
     */
    public function getFileNr_Type(): ?string
    {
        return $this->{'FileNr-Type'};
    }
    /**
     * Set FileNr_Type value
     * @param string $fileNr_Type
     * @return \Pggns\MidocoApi\Order\StructType\ImportTouPacFileRequest
     */
    public function setFileNr_Type(?string $fileNr_Type = 'FileNr'): self
    {
        // validation for constraint: string
        if (!is_null($fileNr_Type) && !is_string($fileNr_Type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileNr_Type, true), gettype($fileNr_Type)), __LINE__);
        }
        $this->FileNr_Type = $this->{'FileNr-Type'} = $fileNr_Type;
        
        return $this;
    }
}
