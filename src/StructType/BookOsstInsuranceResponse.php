<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookOsstInsuranceResponse StructType
 * @subpackage Structs
 */
class BookOsstInsuranceResponse extends AbstractStructBase
{
    /**
     * The docData
     * @var string|null
     */
    protected ?string $docData = null;
    /**
     * The docName
     * @var string|null
     */
    protected ?string $docName = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorDescription
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * The osstInsuranceId
     * @var int|null
     */
    protected ?int $osstInsuranceId = null;
    /**
     * Constructor method for BookOsstInsuranceResponse
     * @uses BookOsstInsuranceResponse::setDocData()
     * @uses BookOsstInsuranceResponse::setDocName()
     * @uses BookOsstInsuranceResponse::setErrorCode()
     * @uses BookOsstInsuranceResponse::setErrorDescription()
     * @uses BookOsstInsuranceResponse::setOsstInsuranceId()
     * @param string $docData
     * @param string $docName
     * @param string $errorCode
     * @param string $errorDescription
     * @param int $osstInsuranceId
     */
    public function __construct(?string $docData = null, ?string $docName = null, ?string $errorCode = null, ?string $errorDescription = null, ?int $osstInsuranceId = null)
    {
        $this
            ->setDocData($docData)
            ->setDocName($docName)
            ->setErrorCode($errorCode)
            ->setErrorDescription($errorDescription)
            ->setOsstInsuranceId($osstInsuranceId);
    }
    /**
     * Get docData value
     * @return string|null
     */
    public function getDocData(): ?string
    {
        return $this->docData;
    }
    /**
     * Set docData value
     * @param string $docData
     * @return \Pggns\MidocoApi\Order\StructType\BookOsstInsuranceResponse
     */
    public function setDocData(?string $docData = null): self
    {
        // validation for constraint: string
        if (!is_null($docData) && !is_string($docData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docData, true), gettype($docData)), __LINE__);
        }
        $this->docData = $docData;
        
        return $this;
    }
    /**
     * Get docName value
     * @return string|null
     */
    public function getDocName(): ?string
    {
        return $this->docName;
    }
    /**
     * Set docName value
     * @param string $docName
     * @return \Pggns\MidocoApi\Order\StructType\BookOsstInsuranceResponse
     */
    public function setDocName(?string $docName = null): self
    {
        // validation for constraint: string
        if (!is_null($docName) && !is_string($docName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docName, true), gettype($docName)), __LINE__);
        }
        $this->docName = $docName;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\BookOsstInsuranceResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Pggns\MidocoApi\Order\StructType\BookOsstInsuranceResponse
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
    /**
     * Get osstInsuranceId value
     * @return int|null
     */
    public function getOsstInsuranceId(): ?int
    {
        return $this->osstInsuranceId;
    }
    /**
     * Set osstInsuranceId value
     * @param int $osstInsuranceId
     * @return \Pggns\MidocoApi\Order\StructType\BookOsstInsuranceResponse
     */
    public function setOsstInsuranceId(?int $osstInsuranceId = null): self
    {
        // validation for constraint: int
        if (!is_null($osstInsuranceId) && !(is_int($osstInsuranceId) || ctype_digit($osstInsuranceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($osstInsuranceId, true), gettype($osstInsuranceId)), __LINE__);
        }
        $this->osstInsuranceId = $osstInsuranceId;
        
        return $this;
    }
}
