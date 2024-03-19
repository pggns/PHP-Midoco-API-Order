<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderBilling4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderBilling4Printing extends OrderBillingDTO
{
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * Constructor method for MidocoOrderBilling4Printing
     * @uses MidocoOrderBilling4Printing::setOrderNo()
     * @uses MidocoOrderBilling4Printing::setDocumentNo()
     * @param int $orderNo
     * @param int $documentNo
     */
    public function __construct(?int $orderNo = null, ?int $documentNo = null)
    {
        $this
            ->setOrderNo($orderNo)
            ->setDocumentNo($documentNo);
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling4Printing
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderBilling4Printing
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
}
