<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDirectDebitTransaction4Report StructType
 * @subpackage Structs
 */
class MidocoDirectDebitTransaction4Report extends DtausTransactionDTO
{
    /**
     * The transactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The purpose
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $purpose = null;
    /**
     * Constructor method for MidocoDirectDebitTransaction4Report
     * @uses MidocoDirectDebitTransaction4Report::setTransactionType()
     * @uses MidocoDirectDebitTransaction4Report::setPurpose()
     * @param string $transactionType
     * @param string $purpose
     */
    public function __construct(?string $transactionType = null, ?string $purpose = null)
    {
        $this
            ->setTransactionType($transactionType)
            ->setPurpose($purpose);
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction4Report
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get purpose value
     * @return string|null
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }
    /**
     * Set purpose value
     * @param string $purpose
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction4Report
     */
    public function setPurpose(?string $purpose = null): self
    {
        // validation for constraint: string
        if (!is_null($purpose) && !is_string($purpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purpose, true), gettype($purpose)), __LINE__);
        }
        $this->purpose = $purpose;
        
        return $this;
    }
}
