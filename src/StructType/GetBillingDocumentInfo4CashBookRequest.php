<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentInfo4CashBookRequest StructType
 * @subpackage Structs
 */
class GetBillingDocumentInfo4CashBookRequest extends AbstractStructBase
{
    /**
     * The cashBookId
     * @var string|null
     */
    protected ?string $cashBookId = null;
    /**
     * The toDate
     * @var string|null
     */
    protected ?string $toDate = null;
    /**
     * Constructor method for GetBillingDocumentInfo4CashBookRequest
     * @uses GetBillingDocumentInfo4CashBookRequest::setCashBookId()
     * @uses GetBillingDocumentInfo4CashBookRequest::setToDate()
     * @param string $cashBookId
     * @param string $toDate
     */
    public function __construct(?string $cashBookId = null, ?string $toDate = null)
    {
        $this
            ->setCashBookId($cashBookId)
            ->setToDate($toDate);
    }
    /**
     * Get cashBookId value
     * @return string|null
     */
    public function getCashBookId(): ?string
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param string $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentInfo4CashBookRequest
     */
    public function setCashBookId(?string $cashBookId = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBookId) && !is_string($cashBookId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get toDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentInfo4CashBookRequest
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        
        return $this;
    }
}
