<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportPaymentStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportPaymentStatus extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The importedPaymentId
     * @var int|null
     */
    protected ?int $importedPaymentId = null;
    /**
     * The errorParameter
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errorParameter = null;
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
     * Constructor method for ImportPaymentStatus
     * @uses ImportPaymentStatus::setOrderId()
     * @uses ImportPaymentStatus::setImportedPaymentId()
     * @uses ImportPaymentStatus::setErrorParameter()
     * @uses ImportPaymentStatus::setErrorCode()
     * @uses ImportPaymentStatus::setErrorBundle()
     * @param int $orderId
     * @param int $importedPaymentId
     * @param string[] $errorParameter
     * @param string $errorCode
     * @param string $errorBundle
     */
    public function __construct(?int $orderId = null, ?int $importedPaymentId = null, ?array $errorParameter = null, ?string $errorCode = null, ?string $errorBundle = null)
    {
        $this
            ->setOrderId($orderId)
            ->setImportedPaymentId($importedPaymentId)
            ->setErrorParameter($errorParameter)
            ->setErrorCode($errorCode)
            ->setErrorBundle($errorBundle);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentStatus
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get importedPaymentId value
     * @return int|null
     */
    public function getImportedPaymentId(): ?int
    {
        return $this->importedPaymentId;
    }
    /**
     * Set importedPaymentId value
     * @param int $importedPaymentId
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentStatus
     */
    public function setImportedPaymentId(?int $importedPaymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($importedPaymentId) && !(is_int($importedPaymentId) || ctype_digit($importedPaymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importedPaymentId, true), gettype($importedPaymentId)), __LINE__);
        }
        $this->importedPaymentId = $importedPaymentId;
        
        return $this;
    }
    /**
     * Get errorParameter value
     * @return string[]
     */
    public function getErrorParameter(): ?array
    {
        return $this->errorParameter;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorParameter method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorParameter method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorParameterForArrayConstraintFromSetErrorParameter(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importPaymentStatusErrorParameterItem) {
            // validation for constraint: itemType
            if (!is_string($importPaymentStatusErrorParameterItem)) {
                $invalidValues[] = is_object($importPaymentStatusErrorParameterItem) ? get_class($importPaymentStatusErrorParameterItem) : sprintf('%s(%s)', gettype($importPaymentStatusErrorParameterItem), var_export($importPaymentStatusErrorParameterItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorParameter property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorParameter value
     * @throws InvalidArgumentException
     * @param string[] $errorParameter
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentStatus
     */
    public function setErrorParameter(?array $errorParameter = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorParameterArrayErrorMessage = self::validateErrorParameterForArrayConstraintFromSetErrorParameter($errorParameter))) {
            throw new InvalidArgumentException($errorParameterArrayErrorMessage, __LINE__);
        }
        $this->errorParameter = $errorParameter;
        
        return $this;
    }
    /**
     * Add item to errorParameter value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentStatus
     */
    public function addToErrorParameter(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errorParameter property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorParameter[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentStatus
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportPaymentStatus
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
}
