<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReceiptRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReceiptRequest extends AbstractStructBase
{
    /**
     * The receiptId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $receiptId;
    /**
     * Constructor method for GetReceiptRequest
     * @uses GetReceiptRequest::setReceiptId()
     * @param int $receiptId
     */
    public function __construct(int $receiptId)
    {
        $this
            ->setReceiptId($receiptId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetReceiptRequest
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
}
