<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManualBookingBatchDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ManualBookingBatchDTO extends AbstractStructBase
{
    /**
     * The batchId
     * @var int|null
     */
    protected ?int $batchId = null;
    /**
     * The fileContent
     * @var string|null
     */
    protected ?string $fileContent = null;
    /**
     * The readDate
     * @var string|null
     */
    protected ?string $readDate = null;
    /**
     * The readUser
     * @var int|null
     */
    protected ?int $readUser = null;
    /**
     * Constructor method for ManualBookingBatchDTO
     * @uses ManualBookingBatchDTO::setBatchId()
     * @uses ManualBookingBatchDTO::setFileContent()
     * @uses ManualBookingBatchDTO::setReadDate()
     * @uses ManualBookingBatchDTO::setReadUser()
     * @param int $batchId
     * @param string $fileContent
     * @param string $readDate
     * @param int $readUser
     */
    public function __construct(?int $batchId = null, ?string $fileContent = null, ?string $readDate = null, ?int $readUser = null)
    {
        $this
            ->setBatchId($batchId)
            ->setFileContent($fileContent)
            ->setReadDate($readDate)
            ->setReadUser($readUser);
    }
    /**
     * Get batchId value
     * @return int|null
     */
    public function getBatchId(): ?int
    {
        return $this->batchId;
    }
    /**
     * Set batchId value
     * @param int $batchId
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingBatchDTO
     */
    public function setBatchId(?int $batchId = null): self
    {
        // validation for constraint: int
        if (!is_null($batchId) && !(is_int($batchId) || ctype_digit($batchId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchId, true), gettype($batchId)), __LINE__);
        }
        $this->batchId = $batchId;
        
        return $this;
    }
    /**
     * Get fileContent value
     * @return string|null
     */
    public function getFileContent(): ?string
    {
        return $this->fileContent;
    }
    /**
     * Set fileContent value
     * @param string $fileContent
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingBatchDTO
     */
    public function setFileContent(?string $fileContent = null): self
    {
        // validation for constraint: string
        if (!is_null($fileContent) && !is_string($fileContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContent, true), gettype($fileContent)), __LINE__);
        }
        $this->fileContent = $fileContent;
        
        return $this;
    }
    /**
     * Get readDate value
     * @return string|null
     */
    public function getReadDate(): ?string
    {
        return $this->readDate;
    }
    /**
     * Set readDate value
     * @param string $readDate
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingBatchDTO
     */
    public function setReadDate(?string $readDate = null): self
    {
        // validation for constraint: string
        if (!is_null($readDate) && !is_string($readDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readDate, true), gettype($readDate)), __LINE__);
        }
        $this->readDate = $readDate;
        
        return $this;
    }
    /**
     * Get readUser value
     * @return int|null
     */
    public function getReadUser(): ?int
    {
        return $this->readUser;
    }
    /**
     * Set readUser value
     * @param int $readUser
     * @return \Pggns\MidocoApi\Order\StructType\ManualBookingBatchDTO
     */
    public function setReadUser(?int $readUser = null): self
    {
        // validation for constraint: int
        if (!is_null($readUser) && !(is_int($readUser) || ctype_digit($readUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($readUser, true), gettype($readUser)), __LINE__);
        }
        $this->readUser = $readUser;
        
        return $this;
    }
}
