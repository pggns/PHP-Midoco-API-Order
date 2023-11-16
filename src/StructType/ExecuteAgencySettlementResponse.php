<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteAgencySettlementResponse StructType
 * @subpackage Structs
 */
class ExecuteAgencySettlementResponse extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:Error
     * @var \Pggns\MidocoApi\Order\StructType\Error[]
     */
    protected array $Error = [];
    /**
     * The tempRepositoryIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $tempRepositoryIds = [];
    /**
     * The printJobIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $printJobIds = [];
    /**
     * The isInvoiceAsEmail
     * @var bool|null
     */
    protected ?bool $isInvoiceAsEmail = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The voidInvoiceId
     * @var int|null
     */
    protected ?int $voidInvoiceId = null;
    /**
     * Constructor method for ExecuteAgencySettlementResponse
     * @uses ExecuteAgencySettlementResponse::setError()
     * @uses ExecuteAgencySettlementResponse::setTempRepositoryIds()
     * @uses ExecuteAgencySettlementResponse::setPrintJobIds()
     * @uses ExecuteAgencySettlementResponse::setIsInvoiceAsEmail()
     * @uses ExecuteAgencySettlementResponse::setInvoiceId()
     * @uses ExecuteAgencySettlementResponse::setVoidInvoiceId()
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     * @param int[] $tempRepositoryIds
     * @param int[] $printJobIds
     * @param bool $isInvoiceAsEmail
     * @param int $invoiceId
     * @param int $voidInvoiceId
     */
    public function __construct(array $error = [], array $tempRepositoryIds = [], array $printJobIds = [], ?bool $isInvoiceAsEmail = null, ?int $invoiceId = null, ?int $voidInvoiceId = null)
    {
        $this
            ->setError($error)
            ->setTempRepositoryIds($tempRepositoryIds)
            ->setPrintJobIds($printJobIds)
            ->setIsInvoiceAsEmail($isInvoiceAsEmail)
            ->setInvoiceId($invoiceId)
            ->setVoidInvoiceId($voidInvoiceId);
    }
    /**
     * Get Error value
     * @return \Pggns\MidocoApi\Order\StructType\Error[]
     */
    public function getError(): array
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeAgencySettlementResponseErrorItem) {
            // validation for constraint: itemType
            if (!$executeAgencySettlementResponseErrorItem instanceof \Pggns\MidocoApi\Order\StructType\Error) {
                $invalidValues[] = is_object($executeAgencySettlementResponseErrorItem) ? get_class($executeAgencySettlementResponseErrorItem) : sprintf('%s(%s)', gettype($executeAgencySettlementResponseErrorItem), var_export($executeAgencySettlementResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Order\StructType\Error, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function setError(array $error = []): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Add item to Error value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Error $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function addToError(\Pggns\MidocoApi\Order\StructType\Error $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Error) {
            throw new InvalidArgumentException(sprintf('The Error property can only contain items of type \Pggns\MidocoApi\Order\StructType\Error, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Error[] = $item;
        
        return $this;
    }
    /**
     * Get tempRepositoryIds value
     * @return int[]
     */
    public function getTempRepositoryIds(): array
    {
        return $this->tempRepositoryIds;
    }
    /**
     * This method is responsible for validating the values passed to the setTempRepositoryIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTempRepositoryIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTempRepositoryIdsForArrayConstraintsFromSetTempRepositoryIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeAgencySettlementResponseTempRepositoryIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($executeAgencySettlementResponseTempRepositoryIdsItem) || ctype_digit($executeAgencySettlementResponseTempRepositoryIdsItem))) {
                $invalidValues[] = is_object($executeAgencySettlementResponseTempRepositoryIdsItem) ? get_class($executeAgencySettlementResponseTempRepositoryIdsItem) : sprintf('%s(%s)', gettype($executeAgencySettlementResponseTempRepositoryIdsItem), var_export($executeAgencySettlementResponseTempRepositoryIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The tempRepositoryIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set tempRepositoryIds value
     * @throws InvalidArgumentException
     * @param int[] $tempRepositoryIds
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function setTempRepositoryIds(array $tempRepositoryIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($tempRepositoryIdsArrayErrorMessage = self::validateTempRepositoryIdsForArrayConstraintsFromSetTempRepositoryIds($tempRepositoryIds))) {
            throw new InvalidArgumentException($tempRepositoryIdsArrayErrorMessage, __LINE__);
        }
        $this->tempRepositoryIds = $tempRepositoryIds;
        
        return $this;
    }
    /**
     * Add item to tempRepositoryIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function addToTempRepositoryIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The tempRepositoryIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->tempRepositoryIds[] = $item;
        
        return $this;
    }
    /**
     * Get printJobIds value
     * @return int[]
     */
    public function getPrintJobIds(): array
    {
        return $this->printJobIds;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintJobIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintJobIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintJobIdsForArrayConstraintsFromSetPrintJobIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeAgencySettlementResponsePrintJobIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($executeAgencySettlementResponsePrintJobIdsItem) || ctype_digit($executeAgencySettlementResponsePrintJobIdsItem))) {
                $invalidValues[] = is_object($executeAgencySettlementResponsePrintJobIdsItem) ? get_class($executeAgencySettlementResponsePrintJobIdsItem) : sprintf('%s(%s)', gettype($executeAgencySettlementResponsePrintJobIdsItem), var_export($executeAgencySettlementResponsePrintJobIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printJobIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printJobIds value
     * @throws InvalidArgumentException
     * @param int[] $printJobIds
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function setPrintJobIds(array $printJobIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($printJobIdsArrayErrorMessage = self::validatePrintJobIdsForArrayConstraintsFromSetPrintJobIds($printJobIds))) {
            throw new InvalidArgumentException($printJobIdsArrayErrorMessage, __LINE__);
        }
        $this->printJobIds = $printJobIds;
        
        return $this;
    }
    /**
     * Add item to printJobIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function addToPrintJobIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The printJobIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printJobIds[] = $item;
        
        return $this;
    }
    /**
     * Get isInvoiceAsEmail value
     * @return bool|null
     */
    public function getIsInvoiceAsEmail(): ?bool
    {
        return $this->isInvoiceAsEmail;
    }
    /**
     * Set isInvoiceAsEmail value
     * @param bool $isInvoiceAsEmail
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function setIsInvoiceAsEmail(?bool $isInvoiceAsEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInvoiceAsEmail) && !is_bool($isInvoiceAsEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInvoiceAsEmail, true), gettype($isInvoiceAsEmail)), __LINE__);
        }
        $this->isInvoiceAsEmail = $isInvoiceAsEmail;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get voidInvoiceId value
     * @return int|null
     */
    public function getVoidInvoiceId(): ?int
    {
        return $this->voidInvoiceId;
    }
    /**
     * Set voidInvoiceId value
     * @param int $voidInvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteAgencySettlementResponse
     */
    public function setVoidInvoiceId(?int $voidInvoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidInvoiceId) && !(is_int($voidInvoiceId) || ctype_digit($voidInvoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidInvoiceId, true), gettype($voidInvoiceId)), __LINE__);
        }
        $this->voidInvoiceId = $voidInvoiceId;
        
        return $this;
    }
}
