<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreBurnTransactionResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMoreBurnTransactionResponseType extends AbstractStructBase
{
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - documentation: The error code - e.g. 1 = OK, 9 = NOT OK. Note that the error code is independent of the message chosen with errorBundle, errorDescriptionCode and errorArgs.
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - documentation: The message bundle for i18n
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorDescriptionCode
     * Meta information extracted from the WSDL
     * - documentation: The message code in the error bundle
     * @var string|null
     */
    protected ?string $errorDescriptionCode = null;
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - documentation: The arguments for the message
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errorArgs = null;
    /**
     * The MidocoMilesAndMoreBurnTransaction
     * Meta information extracted from the WSDL
     * - ref: MidocoMilesAndMoreBurnTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $MidocoMilesAndMoreBurnTransaction = null;
    /**
     * Constructor method for MilesAndMoreBurnTransactionResponseType
     * @uses MilesAndMoreBurnTransactionResponseType::setErrorCode()
     * @uses MilesAndMoreBurnTransactionResponseType::setErrorBundle()
     * @uses MilesAndMoreBurnTransactionResponseType::setErrorDescriptionCode()
     * @uses MilesAndMoreBurnTransactionResponseType::setErrorArgs()
     * @uses MilesAndMoreBurnTransactionResponseType::setMidocoMilesAndMoreBurnTransaction()
     * @param string $errorCode
     * @param string $errorBundle
     * @param string $errorDescriptionCode
     * @param string[] $errorArgs
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction
     */
    public function __construct(?string $errorCode = null, ?string $errorBundle = null, ?string $errorDescriptionCode = null, ?array $errorArgs = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle)
            ->setErrorDescriptionCode($errorDescriptionCode)
            ->setErrorArgs($errorArgs)
            ->setMidocoMilesAndMoreBurnTransaction($midocoMilesAndMoreBurnTransaction);
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionResponseType
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionResponseType
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
     * Get errorDescriptionCode value
     * @return string|null
     */
    public function getErrorDescriptionCode(): ?string
    {
        return $this->errorDescriptionCode;
    }
    /**
     * Set errorDescriptionCode value
     * @param string $errorDescriptionCode
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionResponseType
     */
    public function setErrorDescriptionCode(?string $errorDescriptionCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescriptionCode) && !is_string($errorDescriptionCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescriptionCode, true), gettype($errorDescriptionCode)), __LINE__);
        }
        $this->errorDescriptionCode = $errorDescriptionCode;
        
        return $this;
    }
    /**
     * Get errorArgs value
     * @return string[]
     */
    public function getErrorArgs(): ?array
    {
        return $this->errorArgs;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorArgs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorArgs method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorArgsForArrayConstraintFromSetErrorArgs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $milesAndMoreBurnTransactionResponseTypeErrorArgsItem) {
            // validation for constraint: itemType
            if (!is_string($milesAndMoreBurnTransactionResponseTypeErrorArgsItem)) {
                $invalidValues[] = is_object($milesAndMoreBurnTransactionResponseTypeErrorArgsItem) ? get_class($milesAndMoreBurnTransactionResponseTypeErrorArgsItem) : sprintf('%s(%s)', gettype($milesAndMoreBurnTransactionResponseTypeErrorArgsItem), var_export($milesAndMoreBurnTransactionResponseTypeErrorArgsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorArgs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorArgs value
     * @throws InvalidArgumentException
     * @param string[] $errorArgs
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionResponseType
     */
    public function setErrorArgs(?array $errorArgs = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArgsArrayErrorMessage = self::validateErrorArgsForArrayConstraintFromSetErrorArgs($errorArgs))) {
            throw new InvalidArgumentException($errorArgsArrayErrorMessage, __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Add item to errorArgs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionResponseType
     */
    public function addToErrorArgs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errorArgs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorArgs[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMoreBurnTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType|null
     */
    public function getMidocoMilesAndMoreBurnTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
    {
        return $this->MidocoMilesAndMoreBurnTransaction;
    }
    /**
     * Set MidocoMilesAndMoreBurnTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionResponseType
     */
    public function setMidocoMilesAndMoreBurnTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction = null): self
    {
        $this->MidocoMilesAndMoreBurnTransaction = $midocoMilesAndMoreBurnTransaction;
        
        return $this;
    }
}
