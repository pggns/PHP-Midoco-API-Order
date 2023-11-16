<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDirectDebitTransaction StructType
 * @subpackage Structs
 */
class MidocoDirectDebitTransaction extends DtausTransactionDTO
{
    /**
     * The errorDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * The transactionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The MidocoDirectDebitTransactionPurpose
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDirectDebitTransactionPurpose
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose[]
     */
    protected array $MidocoDirectDebitTransactionPurpose = [];
    /**
     * The MidocoDtazvTransactionInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDtazvTransactionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $MidocoDtazvTransactionInfo = null;
    /**
     * Constructor method for MidocoDirectDebitTransaction
     * @uses MidocoDirectDebitTransaction::setErrorDescription()
     * @uses MidocoDirectDebitTransaction::setTransactionType()
     * @uses MidocoDirectDebitTransaction::setMidocoDirectDebitTransactionPurpose()
     * @uses MidocoDirectDebitTransaction::setMidocoDtazvTransactionInfo()
     * @param string $errorDescription
     * @param string $transactionType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose[] $midocoDirectDebitTransactionPurpose
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo
     */
    public function __construct(?string $errorDescription = null, ?string $transactionType = null, array $midocoDirectDebitTransactionPurpose = [], ?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo = null)
    {
        $this
            ->setErrorDescription($errorDescription)
            ->setTransactionType($transactionType)
            ->setMidocoDirectDebitTransactionPurpose($midocoDirectDebitTransactionPurpose)
            ->setMidocoDtazvTransactionInfo($midocoDtazvTransactionInfo);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction
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
     * Get MidocoDirectDebitTransactionPurpose value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose[]
     */
    public function getMidocoDirectDebitTransactionPurpose(): array
    {
        return $this->MidocoDirectDebitTransactionPurpose;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDirectDebitTransactionPurpose method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDirectDebitTransactionPurpose method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDirectDebitTransactionPurposeForArrayConstraintsFromSetMidocoDirectDebitTransactionPurpose(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDirectDebitTransactionMidocoDirectDebitTransactionPurposeItem) {
            // validation for constraint: itemType
            if (!$midocoDirectDebitTransactionMidocoDirectDebitTransactionPurposeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose) {
                $invalidValues[] = is_object($midocoDirectDebitTransactionMidocoDirectDebitTransactionPurposeItem) ? get_class($midocoDirectDebitTransactionMidocoDirectDebitTransactionPurposeItem) : sprintf('%s(%s)', gettype($midocoDirectDebitTransactionMidocoDirectDebitTransactionPurposeItem), var_export($midocoDirectDebitTransactionMidocoDirectDebitTransactionPurposeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDirectDebitTransactionPurpose property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDirectDebitTransactionPurpose value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose[] $midocoDirectDebitTransactionPurpose
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction
     */
    public function setMidocoDirectDebitTransactionPurpose(array $midocoDirectDebitTransactionPurpose = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDirectDebitTransactionPurposeArrayErrorMessage = self::validateMidocoDirectDebitTransactionPurposeForArrayConstraintsFromSetMidocoDirectDebitTransactionPurpose($midocoDirectDebitTransactionPurpose))) {
            throw new InvalidArgumentException($midocoDirectDebitTransactionPurposeArrayErrorMessage, __LINE__);
        }
        $this->MidocoDirectDebitTransactionPurpose = $midocoDirectDebitTransactionPurpose;
        
        return $this;
    }
    /**
     * Add item to MidocoDirectDebitTransactionPurpose value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction
     */
    public function addToMidocoDirectDebitTransactionPurpose(\Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose) {
            throw new InvalidArgumentException(sprintf('The MidocoDirectDebitTransactionPurpose property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransactionPurpose, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDirectDebitTransactionPurpose[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDtazvTransactionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo|null
     */
    public function getMidocoDtazvTransactionInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
    {
        return $this->MidocoDtazvTransactionInfo;
    }
    /**
     * Set MidocoDtazvTransactionInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitTransaction
     */
    public function setMidocoDtazvTransactionInfo(?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo = null): self
    {
        $this->MidocoDtazvTransactionInfo = $midocoDtazvTransactionInfo;
        
        return $this;
    }
}
