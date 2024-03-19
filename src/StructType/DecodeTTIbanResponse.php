<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DecodeTTIbanResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DecodeTTIbanResponse extends AbstractStructBase
{
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The decodedIban
     * @var string|null
     */
    protected ?string $decodedIban = null;
    /**
     * Constructor method for DecodeTTIbanResponse
     * @uses DecodeTTIbanResponse::setErrorCode()
     * @uses DecodeTTIbanResponse::setErrorBundle()
     * @uses DecodeTTIbanResponse::setDecodedIban()
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $decodedIban
     */
    public function __construct(?string $errorCode = null, ?string $errorBundle = null, ?string $decodedIban = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setDecodedIban($decodedIban);
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
     * @return \Pggns\MidocoApi\Order\StructType\DecodeTTIbanResponse
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
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\DecodeTTIbanResponse
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get decodedIban value
     * @return string|null
     */
    public function getDecodedIban(): ?string
    {
        return $this->decodedIban;
    }
    /**
     * Set decodedIban value
     * @param string $decodedIban
     * @return \Pggns\MidocoApi\Order\StructType\DecodeTTIbanResponse
     */
    public function setDecodedIban(?string $decodedIban = null): self
    {
        // validation for constraint: string
        if (!is_null($decodedIban) && !is_string($decodedIban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decodedIban, true), gettype($decodedIban)), __LINE__);
        }
        $this->decodedIban = $decodedIban;
        
        return $this;
    }
}
