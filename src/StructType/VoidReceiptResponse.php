<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidReceiptResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VoidReceiptResponse extends AbstractStructBase
{
    /**
     * The receiptId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $receiptId;
    /**
     * The printjobId
     * @var int|null
     */
    protected ?int $printjobId = null;
    /**
     * Constructor method for VoidReceiptResponse
     * @uses VoidReceiptResponse::setReceiptId()
     * @uses VoidReceiptResponse::setPrintjobId()
     * @param int $receiptId
     * @param int $printjobId
     */
    public function __construct(int $receiptId, ?int $printjobId = null)
    {
        $this
            ->setReceiptId($receiptId)
            ->setPrintjobId($printjobId);
    }
    /**
     * Get receiptId value
     * @return int
     */
    public function getReceiptId(): int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptResponse
     */
    public function setReceiptId(int $receiptId): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get printjobId value
     * @return int|null
     */
    public function getPrintjobId(): ?int
    {
        return $this->printjobId;
    }
    /**
     * Set printjobId value
     * @param int $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\VoidReceiptResponse
     */
    public function setPrintjobId(?int $printjobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printjobId) && !(is_int($printjobId) || ctype_digit($printjobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printjobId, true), gettype($printjobId)), __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
}
