<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMilesAndMoreEarnTransactionReference StructType
 * Meta information extracted from the WSDL
 * - documentation: When the reference is returned, this element is usually not present. The transaction can be retrieved via Order.getMilesAndMoreEarnTransaction and stored here. | The id and status of all Miles and More transactions related to the
 * sell item.
 * @subpackage Structs
 */
class MidocoMilesAndMoreEarnTransactionReference extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMoreEarnTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreEarnTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $MidocoMilesAndMoreEarnTransaction = null;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The database id. - Mandatory
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - documentation: The transaction id. - Optional
     * - base: xs:string
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - documentation: The transaction status. - Optional
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The hasError
     * Meta information extracted from the WSDL
     * - documentation: Whether the transaction has an error. - Optional
     * @var bool|null
     */
    protected ?bool $hasError = null;
    /**
     * The timeout
     * Meta information extracted from the WSDL
     * - documentation: True, if the error is a timeout. - Optional
     * @var bool|null
     */
    protected ?bool $timeout = null;
    /**
     * Constructor method for MidocoMilesAndMoreEarnTransactionReference
     * @uses MidocoMilesAndMoreEarnTransactionReference::setMidocoMilesAndMoreEarnTransaction()
     * @uses MidocoMilesAndMoreEarnTransactionReference::setId()
     * @uses MidocoMilesAndMoreEarnTransactionReference::setTransactionId()
     * @uses MidocoMilesAndMoreEarnTransactionReference::setStatus()
     * @uses MidocoMilesAndMoreEarnTransactionReference::setHasError()
     * @uses MidocoMilesAndMoreEarnTransactionReference::setTimeout()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction
     * @param int $id
     * @param string $transactionId
     * @param string $status
     * @param bool $hasError
     * @param bool $timeout
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction = null, ?int $id = null, ?string $transactionId = null, ?string $status = null, ?bool $hasError = null, ?bool $timeout = null)
    {
        $this
            ->setMidocoMilesAndMoreEarnTransaction($midocoMilesAndMoreEarnTransaction)
            ->setId($id)
            ->setTransactionId($transactionId)
            ->setStatus($status)
            ->setHasError($hasError)
            ->setTimeout($timeout);
    }
    /**
     * Get MidocoMilesAndMoreEarnTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction|null
     */
    public function getMidocoMilesAndMoreEarnTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction
    {
        return $this->MidocoMilesAndMoreEarnTransaction;
    }
    /**
     * Set MidocoMilesAndMoreEarnTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference
     */
    public function setMidocoMilesAndMoreEarnTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $midocoMilesAndMoreEarnTransaction = null): self
    {
        $this->MidocoMilesAndMoreEarnTransaction = $midocoMilesAndMoreEarnTransaction;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($transactionId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', var_export($transactionId, true)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get hasError value
     * @return bool|null
     */
    public function getHasError(): ?bool
    {
        return $this->hasError;
    }
    /**
     * Set hasError value
     * @param bool $hasError
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference
     */
    public function setHasError(?bool $hasError = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasError) && !is_bool($hasError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasError, true), gettype($hasError)), __LINE__);
        }
        $this->hasError = $hasError;
        
        return $this;
    }
    /**
     * Get timeout value
     * @return bool|null
     */
    public function getTimeout(): ?bool
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param bool $timeout
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransactionReference
     */
    public function setTimeout(?bool $timeout = null): self
    {
        // validation for constraint: boolean
        if (!is_null($timeout) && !is_bool($timeout)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($timeout, true), gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        
        return $this;
    }
}
