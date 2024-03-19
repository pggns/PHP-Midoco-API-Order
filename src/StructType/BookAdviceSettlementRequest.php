<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookAdviceSettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookAdviceSettlementRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The invoiceCustomerId
     * @var int|null
     */
    protected ?int $invoiceCustomerId = null;
    /**
     * Constructor method for BookAdviceSettlementRequest
     * @uses BookAdviceSettlementRequest::setSettlementId()
     * @uses BookAdviceSettlementRequest::setInvoiceCustomerId()
     * @param int $settlementId
     * @param int $invoiceCustomerId
     */
    public function __construct(?int $settlementId = null, ?int $invoiceCustomerId = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setInvoiceCustomerId($invoiceCustomerId);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\BookAdviceSettlementRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get invoiceCustomerId value
     * @return int|null
     */
    public function getInvoiceCustomerId(): ?int
    {
        return $this->invoiceCustomerId;
    }
    /**
     * Set invoiceCustomerId value
     * @param int $invoiceCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\BookAdviceSettlementRequest
     */
    public function setInvoiceCustomerId(?int $invoiceCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceCustomerId) && !(is_int($invoiceCustomerId) || ctype_digit($invoiceCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceCustomerId, true), gettype($invoiceCustomerId)), __LINE__);
        }
        $this->invoiceCustomerId = $invoiceCustomerId;
        
        return $this;
    }
}
