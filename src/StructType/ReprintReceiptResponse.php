<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReprintReceiptResponse extends AbstractStructBase
{
    /**
     * The printId
     * @var int|null
     */
    protected ?int $printId = null;
    /**
     * The bytes
     * @var string|null
     */
    protected ?string $bytes = null;
    /**
     * Constructor method for ReprintReceiptResponse
     * @uses ReprintReceiptResponse::setPrintId()
     * @uses ReprintReceiptResponse::setBytes()
     * @param int $printId
     * @param string $bytes
     */
    public function __construct(?int $printId = null, ?string $bytes = null)
    {
        $this
            ->setPrintId($printId)
            ->setBytes($bytes);
    }
    /**
     * Get printId value
     * @return int|null
     */
    public function getPrintId(): ?int
    {
        return $this->printId;
    }
    /**
     * Set printId value
     * @param int $printId
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptResponse
     */
    public function setPrintId(?int $printId = null): self
    {
        // validation for constraint: int
        if (!is_null($printId) && !(is_int($printId) || ctype_digit($printId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printId, true), gettype($printId)), __LINE__);
        }
        $this->printId = $printId;
        
        return $this;
    }
    /**
     * Get bytes value
     * @return string|null
     */
    public function getBytes(): ?string
    {
        return $this->bytes;
    }
    /**
     * Set bytes value
     * @param string $bytes
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptResponse
     */
    public function setBytes(?string $bytes = null): self
    {
        // validation for constraint: string
        if (!is_null($bytes) && !is_string($bytes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bytes, true), gettype($bytes)), __LINE__);
        }
        $this->bytes = $bytes;
        
        return $this;
    }
}
