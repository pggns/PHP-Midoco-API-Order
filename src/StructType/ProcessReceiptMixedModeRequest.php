<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessReceiptMixedModeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessReceiptMixedModeRequest extends AbstractStructBase
{
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * Constructor method for ProcessReceiptMixedModeRequest
     * @uses ProcessReceiptMixedModeRequest::setReceiptId()
     * @param int $receiptId
     */
    public function __construct(?int $receiptId = null)
    {
        $this
            ->setReceiptId($receiptId);
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\ProcessReceiptMixedModeRequest
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
}
