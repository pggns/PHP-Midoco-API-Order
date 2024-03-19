<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderPayment extends OrderPaymentDTO
{
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * Constructor method for MidocoOrderPayment
     * @uses MidocoOrderPayment::setReceiptNo()
     * @param string $receiptNo
     */
    public function __construct(?string $receiptNo = null)
    {
        $this
            ->setReceiptNo($receiptNo);
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
}
