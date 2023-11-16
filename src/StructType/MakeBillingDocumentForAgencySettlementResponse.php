<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForAgencySettlementResponse StructType
 * @subpackage Structs
 */
class MakeBillingDocumentForAgencySettlementResponse extends AbstractStructBase
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
     * The printJobId
     * @var int|null
     */
    protected ?int $printJobId = null;
    /**
     * The isInvoiceAsEmail
     * @var bool|null
     */
    protected ?bool $isInvoiceAsEmail = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The tempRepositoryId
     * @var int|null
     */
    protected ?int $tempRepositoryId = null;
    /**
     * Constructor method for MakeBillingDocumentForAgencySettlementResponse
     * @uses MakeBillingDocumentForAgencySettlementResponse::setError()
     * @uses MakeBillingDocumentForAgencySettlementResponse::setPrintJobId()
     * @uses MakeBillingDocumentForAgencySettlementResponse::setIsInvoiceAsEmail()
     * @uses MakeBillingDocumentForAgencySettlementResponse::setRepositoryId()
     * @uses MakeBillingDocumentForAgencySettlementResponse::setTempRepositoryId()
     * @param \Pggns\MidocoApi\Order\StructType\Error[] $error
     * @param int $printJobId
     * @param bool $isInvoiceAsEmail
     * @param int $repositoryId
     * @param int $tempRepositoryId
     */
    public function __construct(array $error = [], ?int $printJobId = null, ?bool $isInvoiceAsEmail = null, ?int $repositoryId = null, ?int $tempRepositoryId = null)
    {
        $this
            ->setError($error)
            ->setPrintJobId($printJobId)
            ->setIsInvoiceAsEmail($isInvoiceAsEmail)
            ->setRepositoryId($repositoryId)
            ->setTempRepositoryId($tempRepositoryId);
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
        foreach ($values as $makeBillingDocumentForAgencySettlementResponseErrorItem) {
            // validation for constraint: itemType
            if (!$makeBillingDocumentForAgencySettlementResponseErrorItem instanceof \Pggns\MidocoApi\Order\StructType\Error) {
                $invalidValues[] = is_object($makeBillingDocumentForAgencySettlementResponseErrorItem) ? get_class($makeBillingDocumentForAgencySettlementResponseErrorItem) : sprintf('%s(%s)', gettype($makeBillingDocumentForAgencySettlementResponseErrorItem), var_export($makeBillingDocumentForAgencySettlementResponseErrorItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
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
     * Get printJobId value
     * @return int|null
     */
    public function getPrintJobId(): ?int
    {
        return $this->printJobId;
    }
    /**
     * Set printJobId value
     * @param int $printJobId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
     */
    public function setPrintJobId(?int $printJobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printJobId) && !(is_int($printJobId) || ctype_digit($printJobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printJobId, true), gettype($printJobId)), __LINE__);
        }
        $this->printJobId = $printJobId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
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
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get tempRepositoryId value
     * @return int|null
     */
    public function getTempRepositoryId(): ?int
    {
        return $this->tempRepositoryId;
    }
    /**
     * Set tempRepositoryId value
     * @param int $tempRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForAgencySettlementResponse
     */
    public function setTempRepositoryId(?int $tempRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($tempRepositoryId) && !(is_int($tempRepositoryId) || ctype_digit($tempRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tempRepositoryId, true), gettype($tempRepositoryId)), __LINE__);
        }
        $this->tempRepositoryId = $tempRepositoryId;
        
        return $this;
    }
}
