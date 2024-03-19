<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintedBillingDocRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintedBillingDocRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $documentId;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - default: 1
     * @var int|null
     */
    protected ?int $version = null;
    /**
     * The media
     * Meta information extracted from the WSDL
     * - default: PRINT
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * Constructor method for GetPrintedBillingDocRequest
     * @uses GetPrintedBillingDocRequest::setDocumentId()
     * @uses GetPrintedBillingDocRequest::setVersion()
     * @uses GetPrintedBillingDocRequest::setMedia()
     * @param int $documentId
     * @param int $version
     * @param string $media
     */
    public function __construct(int $documentId, ?int $version = 1, ?string $media = 'PRINT')
    {
        $this
            ->setDocumentId($documentId)
            ->setVersion($version)
            ->setMedia($media);
    }
    /**
     * Get documentId value
     * @return int
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocRequest
     */
    public function setDocumentId(int $documentId): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get version value
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param int $version
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocRequest
     */
    public function setVersion(?int $version = 1): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintedBillingDocRequest
     */
    public function setMedia(?string $media = 'PRINT'): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
}
