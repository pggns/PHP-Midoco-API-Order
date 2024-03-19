<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBookingJournalResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportBookingJournalResponse extends AbstractStructBase
{
    /**
     * The repository_id
     * @var int|null
     */
    protected ?int $repository_id = null;
    /**
     * The checksum
     * @var int|null
     */
    protected ?int $checksum = null;
    /**
     * The errorCounter
     * @var int|null
     */
    protected ?int $errorCounter = null;
    /**
     * The successCounter
     * @var int|null
     */
    protected ?int $successCounter = null;
    /**
     * Constructor method for ExportBookingJournalResponse
     * @uses ExportBookingJournalResponse::setRepository_id()
     * @uses ExportBookingJournalResponse::setChecksum()
     * @uses ExportBookingJournalResponse::setErrorCounter()
     * @uses ExportBookingJournalResponse::setSuccessCounter()
     * @param int $repository_id
     * @param int $checksum
     * @param int $errorCounter
     * @param int $successCounter
     */
    public function __construct(?int $repository_id = null, ?int $checksum = null, ?int $errorCounter = null, ?int $successCounter = null)
    {
        $this
            ->setRepository_id($repository_id)
            ->setChecksum($checksum)
            ->setErrorCounter($errorCounter)
            ->setSuccessCounter($successCounter);
    }
    /**
     * Get repository_id value
     * @return int|null
     */
    public function getRepository_id(): ?int
    {
        return $this->repository_id;
    }
    /**
     * Set repository_id value
     * @param int $repository_id
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalResponse
     */
    public function setRepository_id(?int $repository_id = null): self
    {
        // validation for constraint: int
        if (!is_null($repository_id) && !(is_int($repository_id) || ctype_digit($repository_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repository_id, true), gettype($repository_id)), __LINE__);
        }
        $this->repository_id = $repository_id;
        
        return $this;
    }
    /**
     * Get checksum value
     * @return int|null
     */
    public function getChecksum(): ?int
    {
        return $this->checksum;
    }
    /**
     * Set checksum value
     * @param int $checksum
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalResponse
     */
    public function setChecksum(?int $checksum = null): self
    {
        // validation for constraint: int
        if (!is_null($checksum) && !(is_int($checksum) || ctype_digit($checksum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($checksum, true), gettype($checksum)), __LINE__);
        }
        $this->checksum = $checksum;
        
        return $this;
    }
    /**
     * Get errorCounter value
     * @return int|null
     */
    public function getErrorCounter(): ?int
    {
        return $this->errorCounter;
    }
    /**
     * Set errorCounter value
     * @param int $errorCounter
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalResponse
     */
    public function setErrorCounter(?int $errorCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCounter) && !(is_int($errorCounter) || ctype_digit($errorCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCounter, true), gettype($errorCounter)), __LINE__);
        }
        $this->errorCounter = $errorCounter;
        
        return $this;
    }
    /**
     * Get successCounter value
     * @return int|null
     */
    public function getSuccessCounter(): ?int
    {
        return $this->successCounter;
    }
    /**
     * Set successCounter value
     * @param int $successCounter
     * @return \Pggns\MidocoApi\Order\StructType\ExportBookingJournalResponse
     */
    public function setSuccessCounter(?int $successCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($successCounter) && !(is_int($successCounter) || ctype_digit($successCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($successCounter, true), gettype($successCounter)), __LINE__);
        }
        $this->successCounter = $successCounter;
        
        return $this;
    }
}
