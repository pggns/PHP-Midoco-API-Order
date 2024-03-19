<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintReceiptResponse extends AbstractStructBase
{
    /**
     * The PrintjobId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $PrintjobId = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorArgs = null;
    /**
     * Constructor method for PrintReceiptResponse
     * @uses PrintReceiptResponse::setPrintjobId()
     * @uses PrintReceiptResponse::setErrorCode()
     * @uses PrintReceiptResponse::setErrorBundle()
     * @uses PrintReceiptResponse::setErrorArgs()
     * @param int $printjobId
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorArgs
     */
    public function __construct(?int $printjobId = null, ?string $errorCode = null, ?string $errorBundle = null, ?string $errorArgs = null)
    {
        $this
            ->setPrintjobId($printjobId)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorArgs($errorArgs);
    }
    /**
     * Get PrintjobId value
     * @return int|null
     */
    public function getPrintjobId(): ?int
    {
        return $this->PrintjobId;
    }
    /**
     * Set PrintjobId value
     * @param int $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\PrintReceiptResponse
     */
    public function setPrintjobId(?int $printjobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printjobId) && !(is_int($printjobId) || ctype_digit($printjobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->PrintjobId = $printjobId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintReceiptResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintReceiptResponse
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
     * Get errorArgs value
     * @return string|null
     */
    public function getErrorArgs(): ?string
    {
        return $this->errorArgs;
    }
    /**
     * Set errorArgs value
     * @param string $errorArgs
     * @return \Pggns\MidocoApi\Order\StructType\PrintReceiptResponse
     */
    public function setErrorArgs(?string $errorArgs = null): self
    {
        // validation for constraint: string
        if (!is_null($errorArgs) && !is_string($errorArgs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorArgs, true), gettype($errorArgs)), __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
}
