<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDirectDebitProtocol StructType
 * @subpackage Structs
 */
class MidocoDirectDebitProtocol extends AbstractStructBase
{
    /**
     * The MidocoDirectDebitTransaction
     * Meta information extracted from the WSDL
     * - ref: MidocoDirectDebitTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction $MidocoDirectDebitTransaction = null;
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
     * The errorDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * Constructor method for MidocoDirectDebitProtocol
     * @uses MidocoDirectDebitProtocol::setMidocoDirectDebitTransaction()
     * @uses MidocoDirectDebitProtocol::setErrorCode()
     * @uses MidocoDirectDebitProtocol::setErrorBundle()
     * @uses MidocoDirectDebitProtocol::setErrorArgs()
     * @uses MidocoDirectDebitProtocol::setErrorDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorArgs
     * @param string $errorDescription
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction = null, ?string $errorCode = null, ?string $errorBundle = null, ?string $errorArgs = null, ?string $errorDescription = null)
    {
        $this
            ->setMidocoDirectDebitTransaction($midocoDirectDebitTransaction)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorArgs($errorArgs)
            ->setErrorDescription($errorDescription);
    }
    /**
     * Get MidocoDirectDebitTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction|null
     */
    public function getMidocoDirectDebitTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction
    {
        return $this->MidocoDirectDebitTransaction;
    }
    /**
     * Set MidocoDirectDebitTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocol
     */
    public function setMidocoDirectDebitTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction $midocoDirectDebitTransaction = null): self
    {
        $this->MidocoDirectDebitTransaction = $midocoDirectDebitTransaction;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocol
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocol
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocol
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocol
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
}
